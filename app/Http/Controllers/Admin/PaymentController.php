<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\PaymentCustomer;
use App\Models\PaymentSeller;
use App\Models\Seller;
use App\Models\Customer;
class PaymentController extends Controller
{
    public function paymentBuyer()
    {
    	 $paymentCustomer = PaymentCustomer::orderBy('id', 'desc')->get();
    	return view('admin.paymentBuyer', compact('paymentCustomer'));
    }
    public function paymentSeller()
    {
    	 $paymentSeller = PaymentSeller::orderBy('id', 'desc')->get();
    	return view('admin.paymentSeller', compact('paymentSeller'));
    }


    function SellerpaymentGive($id)
    {
        $paymentSeller = PaymentSeller::find($id)->update(['paymentType' => 1]);
        return back();
    }

}
