<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller');
    }

    public function index(){
        return view('seller.market.market');
    }

    public function viewDetail($slug){
        return view('seller.market.detail');
    }

    public function createSchedule(){
       return view('seller.market.createSchedule');
    }
}
