<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Cartcontroller extends Controller
{
    function cartStore(Request $request)
    {
        $cartId = auth()->user()->cartToken();
        session()->put($cartId, collect($request->all()));
        return redirect()->to(route("checkout.index"));
    }

    function cartIndex()
    {
        return view('front.cart');
    }
}
