<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        if(auth()->guard('seller')->check()){
            return view('seller.chat');
        }
        else{
            return view('customer.chat');
        }
    }
}
