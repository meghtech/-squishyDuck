<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe;
use Session;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\General;
use App\Models\PaymentCustomer;
class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet(Order $order)
    {
        return view('stripe', compact('order'));
    }
  
    /**
     * handling payment with POST
     */
    public function handlePost(Request $request, Order $order)
    {
         $general = General::find(1)->first();
        $sk = $general->stripe_scret;

// sk_test_51IlEJgEzRaQIQMyWSW0zFfoweZulU8d3wRGAGhy7HPaFPgulUKcViaFt55qjM74pkIYaAS8IO7vmYqHcjl9Miawx00flRJcELk

        Stripe\Stripe::setApiKey($sk);
            
        
       $charge =  Stripe\Charge::create ([
                "amount" => $order->amount * 100,
                "currency" => "USD",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);

        if ($charge) {
        // $order->customer_id = $charge["balance_transaction"];
        // $order->order_id = $charge["balance_transaction"];
        // $order->gig_id = $charge["balance_transaction"];
        // $order->status = $charge["status"] == "succeeded" ? 1 : 0;
        // $order->save();


        $paymentCustomer["customer_id"] = $order->customer_id;
        $paymentCustomer["order_id"] = $order->id;
        $paymentCustomer["gig_id"] = $order->gig_id;
        $paymentCustomer["txnid"] = $charge["balance_transaction"];
        $paymentCustomer["paymentType"] = $charge["status"] == "succeeded" ? 1 : 0;
        $paymentCustomer["amount"] = $charge["amount"];

        $order->status = $charge["status"] == "succeeded" ? 1 : 0;
        $order->payment_status = 1;
        $order->date_accept = Carbon::now();


       $paymentCustomerStore = PaymentCustomer::create($paymentCustomer);
       $order->save(); 
       
       // return redirect()->away('https://pay.stripe.com/receipts/acct_1IlEJgEzRaQIQMyW/ch_1IlH0yEzRaQIQMyWymiXSUD8/rcpt_JO37JH6k33hoP0FWdmygqJwqQ1mWt0A');
    
        Session::flash('success', 'Payment has been successfully processed.');
          
        return redirect()->route('payment.conform');
    }else{
        return "Having issue with your payment try again";
    }


    }
}