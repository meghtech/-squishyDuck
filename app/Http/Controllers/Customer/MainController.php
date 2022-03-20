<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentCustomer;
use App\Models\PaymentSeller;
use Illuminate\Http\Request;
use App\Models\CustomOffer;
use App\Models\BidderPost;
use App\Mail\OrderEmail;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Listings;
use App\Models\JobPost;
use App\Models\Message;
use App\Models\General;
use App\Models\Seller;
use App\Models\Review;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Image;


class MainController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:customer');
  }

  public function BuyerIndex()
  {
    $data = [];
    $getUser = Customer::where('id', auth()->id())->first();


    $data['sellerReview'] = Review::where('customer_id', auth()->id())->count();
    $data['sellerOrder'] = Order::where('is_accept_seller', 1)
      ->where('customer_id', auth()->id())
      ->count();
    $data['sellerOn'] = Order::where('is_accept_seller', 0)
      ->where('customer_id', auth()->id())
      ->count();

      $today = Carbon::today();
      $data['inventory'] = Listings::where('user_id', auth()->id())->where('type','market')->count();
      $data['listing'] = Listings::where('user_id', auth()->id())->where('type','listing')->count();
      $data['incommingRq'] = Order::where('customer_id', auth()->id())
      ->whereDate('schedule_date', '>=', $today->format('Y-m-d'))->count();
      $data['schedule'] = Order::where('customer_id', auth()->id())
      ->whereDate('schedule_date', '=', $today->format('Y-m-d'))->count();

      $data['recentOrder'] = Order::where('customer_id', auth()->id())
      ->count();


    return view('customer.dashboard', compact('data', 'getUser'));
  }

  public function incomingRequests()
  {
    $requests = Order::where('seller_id', auth()->id())
      ->with('seller1', 'seller2', 'customer1', 'customer2', 'listing')
      ->orderBy('id', 'DESC')
      ->get();
    return view('customer.incomingRequests', compact('requests'));
  }

  public function recentOrder()
  {
    $bought = Order::where('customer_id', auth()->id())
      ->with('seller1', 'seller2', 'customer1', 'customer2', 'listing')
      ->orderBy('id', 'DESC')
      ->get();
    return view('customer.recentOrder', compact('bought'));
  }

  public function updateOrder(Request $request)
  {
    $key = $request->field;
    $update = Order::where('id', $request->id)->with('seller1', 'seller2', 'customer1', 'customer2', 'listing')->first();
    $update->$key = $request->value;
    if ($request->field == 'is_accept_seller' && $request->orderConfirmed == 0) {
      $update->payment_status = 0;
    }
    $update->save();
    $update->customer1 ? $user = $update->customer1 : $user = $update->customer2;
    if ($request->field == 'is_accept_seller') {
      $title = 'Your order is confirmed';
      $type = "sellerConfirm";
    } else {
      $title = 'Payment confirmed';
      $type = "paymentConfirm";
    }
    if ($request->orderConfirmed || $request->paymentConfirmed) {
      Mail::send(new OrderEmail($order = $update, $user, $product = $update->listing,  $title, $type));
    }
    return $update;
  }

  public function getOrder(Request $request)
  {
    if ($request->type == 2) {
      $data =  Order::where('seller_id', auth()->id())
        ->with('seller1', 'seller2', 'customer1', 'customer2', 'listing')
        ->orderBy('id', 'DESC')
        ->get();
    } else {
      $data = Order::where('customer_id', auth()->id())
        ->with('seller1', 'seller2', 'customer1', 'customer2', 'listing')
        ->orderBy('id', 'DESC')
        ->get();
    }
    return $data;
  }

  public function manageItems()
  {
    $inventory = Listings::where('type', 'market')->where('user_id', auth()->id())
      ->with('order')
      ->orderBy('id', 'DESC')
      ->get();
    return view('customer.manageItem', compact('inventory'));
  }

  public function manageItemData(Request $request)
  {
    $data = Listings::where('type', $request->type)->where('user_id', $request->id)
      ->with('order')
      ->orderBy('id', 'DESC')
      ->get();
    return $data;
  }

  public function updateInventory(Request $request)
  {
    $data = Listings::where('id', $request->id)->first();
    $data->status = $request->status;
    $data->save();
    return $data;
  }

  public function viewSchedule()
  {
    $userId = auth()->guard('customer')->user()->id;
    $scheduleDates = Order::where('seller_id', $userId)->pluck('schedule_date')->toArray();
    return view('customer.schedules', compact('scheduleDates'));
  }


  public function jobPost()
  {
    $category = Category::where('status', 1)->get();
    $jobpost = JobPost::where('customer_id', auth()->id())->latest()->get();
    return view('customer.jobPost.jobpost', compact('category', 'jobpost'));
  }

  public function jobPostSave(Request $request)
  {
    $this->validate($request, [
      'des' => 'required',
      'category_id' => 'required',
      'totalDay' => 'required',
      'amount' => 'required'
    ]);

    $jobPost = JobPost::create($request->all());

    return back()->with('status', 'Job Post Create');
  }
  public function jobPostDelete($id)
  {

    $jobPost = JobPost::findOrfail($id)->update([
      'status' => 0
    ]);
    return back()->with('status', 'Job Post Deactivated');
  }



  public function bidderSendMsg(Request $request)
  {



    $customer = User::where('customer_id', $request->user_id)->first();
    $seller = User::where('seller_id', $request->receiver_id)->first();

    $meg = new Message();
    $meg->user_id = $customer->id;
    $meg->receiver_id = $seller->id;
    $meg->msg = $request->msg;
    $meg->save();

    return back();
  }





  public function manageBidder($id)
  {
    $bids = BidderPost::where('job_post_id', $id)->get();
    return view('customer.bidder.manageBidder', compact('bids'));
  }

  public function bidOrderAccept(Request $request)
  {


    $general = General::find(1);

    $bid_id = $request->bid_id;
    $bids = BidderPost::where('id', $bid_id)->first();
    $amount = $bids->amount;
    $vat = $general->buyer_com;
    $total = $amount * $vat / 100;

    $finalAmount = $amount + $total;

    $data["seller_id"] = $bids->seller_id;
    $data["customer_id"] = auth()->id();
    $data["gig_id"] = $bids->gig_id;
    $data["des"] = $bids->des;
    $data["amount"] = $finalAmount;
    $data["totalDay"] = $bids->totalDay;
    $data["is_accept_buyer"] = 1;

    $order = Order::create($data);

    if ($order["payment_status"] == 0) {
      return redirect(route("payment.index.stripe", $order->id));
    } else {
      return back();
    }

    // $newOrder = new Order();
    // $newOrder->seller_id = $bids->seller_id;
    // $newOrder->customer_id = auth()->id();
    // $newOrder->gig_id = $bids->gig_id;
    // $newOrder->des = $bids->des;
    // $newOrder->amount = $finalAmount;
    // $newOrder->totalDay = $bids->totalDay;
    // $newOrder->is_accept_buyer = 1;
    // $newOrder->save();





    return back();
  }


  public function buyerReviews()
  {
    $order = Order::where('customer_id', auth()->id())->where('is_review', 0)->where('status', 1)->get();
    $reviews = Review::where('customer_id', auth()->id())->get();
    return view('customer.review', compact('order', 'reviews'));
  }


  public function buyerReviewStore(Request $request)
  {
    $getOrder = Order::where('id', $request->order_id)->first();


    $newReview = new Review();
    $newReview->customer_id = $getOrder->customer_id;
    $newReview->seller_id = $getOrder->seller_id;
    $newReview->gig_id = $getOrder->gig_id;
    $newReview->order_id = $request->order_id;
    $newReview->rating = $request->rating;
    $newReview->msg = $request->msg;
    $newReview->save();

    $getOrder->update([
      'is_review' => 1
    ]);
    // return $request->all();
    return back();
  }


  public function buyerOrder()
  {

    // $date = Carbon::now();
    // $daysToAdd = ;
    // $date = $date->addDays($daysToAdd);
    // dd($date->diffForHumans());
    $allorder = Order::where('is_accept_seller', 0)->latest()->where('customer_id', auth()->id())->get();
    return view('customer.buyerOrder', compact('allorder'));
  }

  public function buyerOrderAccept(Request $request)
  {
    $orderId = Order::findOrfail($request->id);
    $orderId->update([
      'is_accept_seller' => 1
    ]);

    $seller = Seller::where('id', $orderId->seller_id)->first();

    $paymentSeller = new PaymentSeller();
    $paymentSeller->order_id = $request->id;
    $paymentSeller->seller_id = $orderId->seller_id;
    $paymentSeller->paid_amount = $orderId->amount;
    $paymentSeller->date = Carbon::now();
    $paymentSeller->email = $seller->email;
    $paymentSeller->save();

    return back();
  }

  public function buyerOrderCustomStore(Request $request)
  {
    $customId = $request->custom_id;

    $getCustomOffer = CustomOffer::where('id', $customId)->first();
    $amount = $getCustomOffer->amount;
    $vat = 15;
    $total = $amount * 15 / 100;
    $finalAmount = $amount + $total;


    $newOrder = new Order();
    $newOrder->seller_id = $getCustomOffer->seller_id;
    $newOrder->customer_id = $getCustomOffer->customer_id;
    $newOrder->gig_id = $getCustomOffer->gig_id;
    $newOrder->des = $getCustomOffer->des;
    $newOrder->amount = $finalAmount;
    $newOrder->totalDay = $getCustomOffer->totalDay;
    $newOrder->is_accept_buyer = 1;
    $newOrder->save();

    CustomOffer::where('id', $customId)->update([
      'status' => 0,
    ]);

    if ($newOrder["payment_status"] == 0) {
      return redirect(route("payment.index.stripe", $newOrder->id));
    } else {
      return back();
    }

    // return back();


  }

  public function BuyerCustomOffer()
  {
    $getCustomOffer = CustomOffer::where('customer_id', auth()->id())
      ->where('status', 1)
      ->get();
    return view('customer.customOffer', compact('getCustomOffer'));
  }


  // BuyerPayment

  public function BuyerPayment()
  {
    $paymentCustomer = PaymentCustomer::where('customer_id', auth()->id())
      ->orderBy('id', 'DESC')
      ->get();
    return view('customer.BuyerPayment', compact('paymentCustomer'));
  }


  ///fileShare














  public function buyersetting()
  {

    $seller_id = auth()->id();

    $sellerInfo = Customer::findOrfail($seller_id);
    return view('customer.customerSetting', compact('sellerInfo'));
  }
  public function buyerSettingSave(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|string|max:20',
      'email' => 'required|string|email|max:255|unique:sellers,email,' . $request->seller_id,
      'about' => 'required|string|max:700'
    ]);

    $seller_id = $request->seller_id;
    $sellerInfo = Customer::findOrfail($seller_id);

    if ($request->has('profile')) {
      $image = $request->file('profile');

      $imageName = 'profile' . '-' . time() . '.' . $image->getClientOriginalExtension();
      $post = Image::make($image)->resize(200, 180)->save('storage/upload/profile/' . $imageName)->encode('jpg', 75);
      $sellerInfo->profile = $imageName;
    } else {
      $sellerInfo->profile = 'gig-default.png';
    }



    $sellerInfo->name = $request->name;
    $sellerInfo->email = $request->email;
    $sellerInfo->about = $request->about;
    $sellerInfo->country = $request->country;
    $sellerInfo->save();

    return back();
  }


  public function buyerSettingSavepass(Request $request)
  {
    $this->validate($request, [
      'old_password' => 'required',
      'password' => 'required|confirmed'

    ]);

    $hashPassword = Auth::user()->password;

    if (Hash::check($request->old_password, $hashPassword)) {
      if (!Hash::check($request->password, $hashPassword)) {
        $user = Customer::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();
        return redirect()->back()->with('status', 'Your Password has been Change');
      } else {
        return redirect()->back()->with('status', 'NEw Password can not be same old password:)');
      }
    } else {
      return redirect()->back()->with('status', 'You pu wrong Password try aging');
    }

    return view('admin.profile');
  }

  public function createSchedule($id)
  {
    return view('customer.createSchedule', compact('id'));
  }
}
