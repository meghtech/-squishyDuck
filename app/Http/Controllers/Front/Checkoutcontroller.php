<?php

namespace App\Http\Controllers\Front;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Order;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Srmklive\PayPal\Services\ExpressCheckout;

class Checkoutcontroller extends Controller
{
    private function getCheckoutData()
    {
        $cartId = auth()->user()->cartToken();
        $userCart = collect(session()->get($cartId, collect([])));

        return collect($userCart->get("items"))->map(function ($item) {
            return ["price" => $item["offer_price"], "qty" => $item["quantity"], "name" => $item["name"]];
        })->values()->toArray();
    }

    public function paymentWithPaypalStore(Request $request, Order $order)
    {
        $token = $request->get("token");
        $payerId = $request->get("PayerID");
        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($token);

        if (Arr::has(["SUCCESS", "SUCCESSWITHWARNING"], $response["ACK"])) {
            $payment_status = $provider->doExpressCheckoutPayment($this->getCheckoutData(), $token, $payerId);

        }

        dd("success");
    }

    public function paymentWithPaypalView(Order $order)
    {
        $cartId = auth()->user()->cartToken();
        $userCart = collect(session()->get($cartId, collect([])));

        $provider = new ExpressCheckout();
        $response = $provider->setExpressCheckout([
            "items" => $this->getCheckoutData(),
            "return_url" => route("payment.store.paypal", $order->id),
            "cancel_url" => route("payment.store.paypal", $order->id),
            "invoice_id" => Str::uuid()->toString(),
            "invoice_description" => "Order description",
            "total" => $userCart->get("pay_amount")
        ], false);

        dd($response);

        return redirect($response["paypal_link"]);
    }

    function checkout()
    {
        $cartId = auth()->user()->cartToken();
        $userCart = collect(session()->get($cartId, collect([])));
        return view('front.checkout', compact("userCart"));
    }

    public function paymentWithStripeView(Order $order)
    {
        return view("front.payment.stripe", compact("order"));
    }

    public function paymentWithStripeStore(Request $request, Order $order)
    {
        $data = $request->validate(
            [
                "stripeToken" => "required|string",
            ],
            [
            ]
        );

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Charge::create([
            "amount" => $order->pay_amount,
            "currency" => "USD",
            "source" => $request->stripeToken,
            "description" => "This payment ",
        ]);

        $order->txnid = $charge["balance_transaction"];
        $order->status = $charge["status"] == "succeeded" ? 1 : 0;
        $order->save();

        return redirect(route("payment.success"));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate(
            [
                "customer_city" => "nullable|string",
                "customer_zip" => "nullable|integer",
                "customer_phone" => "required|string",
                "customer_name" => "required|string",
                "customer_email" => "nullable|email",
                "customer_address" => "",
                "customer_lo" => "nullable",
                "customer_la" => "nullable",
                // "shipping_cost" => "required|integer",
                "payment_method" => "required|string",
                "time" => "required|date_format:H:i",
                "date" => "required|date",
                "totalQty" => "required|integer",
                "pay_amount" => "required|integer",
            ],
            [
                "time.required" => "The hours field is required",
                "date.required" => "The day field is required",
                "shipping_cost.required" => "The shipping method field is required",
            ]
        );

        // store the order in the db
        $userId = auth()->id();
        $cartId = auth()->user()->cartToken();
        $userCart = session()->get($cartId, collect([]));
        $data["user_id"] = $userId;
        $data["payment_status"] = 0;
        $data["payment_status"] = 0;
        $data["order_method"] = $request->order_method;

        $orderProducts = collect($userCart->get("items"))
            ->map(function ($item) {
                $itemCollection = collect($item);
                $dataToReturn = [];

                if ($itemCollection->has("products")) {
                    $dataToReturn["set_menu_id"] = $itemCollection->get("id");
                    $dataToReturn["details"] = collect($itemCollection->get("products"))->implode(", ");
                } else {
                    $dataToReturn["product_id"] = $itemCollection->get("id");
                }

                return $dataToReturn;
            });

        $order = Order::create($data);
        $order->products()->createMany($orderProducts);

        if ($data["payment_method"] == "stripe") {
            return redirect(route("payment.index.stripe", $order->id));
        }

        if ($data["payment_method"] == "paypal") {
            return redirect(route("payment.index.paypal", $order->id));
        }

        return redirect()->route('payment.success');
    }

    public function success()
    {
        return view('front.payment.success');
    }
}
