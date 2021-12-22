<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function getSchedules(Request $request){
        $authUser = auth()->guard('customer')->user();
        if(!$authUser){
            $authUser = auth()->guard('seller')->user();
        }
        $userId = $authUser->id;
        $schedules = Order::where(function($query) use ($userId) {
            $query->where('seller_id', $userId)
                  ->orWhere('customer_id', $userId);
        })
        ->where('schedule_date', $request->date)
        ->with('seller1', 'seller2', 'customer1', 'customer2')->get();
        return json_encode($schedules);
    }
}
