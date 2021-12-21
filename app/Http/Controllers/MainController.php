<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function getSchedules(Request $request){
        $userId = auth()->guard('seller')->user()->id;
        $schedules = Order::where('seller_id', $userId)->where('schedule_date', $request->date)->with('seller1', 'seller2', 'customer1', 'customer2')->get();
        return json_encode($schedules);
    }
}
