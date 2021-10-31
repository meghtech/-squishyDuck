<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Listings;

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

    public function inventory(){
       return view('seller.inventory.inventory');
    }

    public function createInventory(){
       return view('seller.inventory.create');
    }

    public function postInventory(Request $request){
        log::info($request);
        $list = new Listings();
        $list->user_id = auth()->user()->id;
        $list->title = $request->title;
        $list->price = $request->price;
        $list->description = $request->description;
        $list->tags = $request->tags;
        $list->manufacturer = $request->manufacturer;
        $list->model_name = $request->model;
        $list->dimension = $request->dimension;
        $list->condition = $request->condition;
        $list->contact_email = $request->contactEmail;
        $list->contact_name = $request->contactName;
        $list->contact_phone = $request->phoneNumber;
        $list->viaCall = (boolean)$request->callMe;
        $list->viaText = (boolean)$request->textMe;
        $list->street = $request->streetAddress;
        $list->city = $request->city;
        $list->state = $request->state;
        $list->zip_code = $request->zip_code;
        $list->delivery_detail = $request->deliveryDetails;
        $list->type = $request->type;
        $list->save();

        return "Success!";
    }
}
