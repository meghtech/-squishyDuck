<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function getSchedules(Request $request){
        $authUser = auth()->guard('customer')->user();
        $gigType=1;
        if(!$authUser){
            $authUser = auth()->guard('seller')->user();
            $gigType=0;
        }
        $userId = $authUser->id;
        $schedules = Order::where(function($query) use ($userId) {
            $query->where('seller_id', $userId)
                  ->orWhere('customer_id', $userId);
        })
        ->where('gig_type', $gigType)
        ->where('schedule_date', $request->date)
        ->with(['seller1', 'seller2', 'customer1', 'customer2', 'gig'])->get();
        return json_encode($schedules);
    }

    public function getCitySuggestion(Request $request){
        $data = Listings::where('type', $request->searchFor)
        ->where('city', 'LIKE', "%{$request->search}%")
        ->take(4)
        ->pluck("city");
        if($data->isEmpty()){
            $data = Listings::where('type', $request->searchFor)
            ->where('zip_code', 'LIKE', "%{$request->search}%")
            ->take(4)
            ->pluck("zip_code");
        }
        return json_encode($data);
    }
}
