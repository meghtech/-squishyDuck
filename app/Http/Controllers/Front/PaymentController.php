<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymnetIndex()
    {
    	return view('front.paymnetIndex');
    }
    public function paymentConform()
    {
    	return view('front.paymentConform');
    }
    public function paymentInvoice()
    {
    	return view('front.invoice');
    }

}
