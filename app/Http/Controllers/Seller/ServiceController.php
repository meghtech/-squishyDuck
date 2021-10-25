<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller');
    }

    public function index(){
        return view('seller.service.service');
    }

    public function viewDetail($slug){
        return view('seller.service.detail');
    }

    public function createService(){
       return view('seller.service.create');
    }
}
