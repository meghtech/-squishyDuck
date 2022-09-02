<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Mail\OrderEmail;
use App\Models\Gig;
use App\Models\User;
use App\Models\Seller;
use App\Models\Customer;
use App\Models\MessagePerson;
use App\Models\General;
use App\Models\Message;
use App\Models\FileUpload;
use App\Models\Review;
use App\Models\Contact;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\Listings;
use Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Exception;

class MainController extends Controller
{
    function index()
    {
        $setting = General::find(1);
        $getAllCategory = Category::where('status',1)->withCount('gigs')->get();
        $getMarketCount=Listings::where('type','market')->orWhere('type', 'listing')->count();
        $getServiceCount=Listings::where('type','service')->count();
       
        return view('front.index', compact('getAllCategory','setting','getMarketCount','getServiceCount'));
    }


    public function searchStore(Request $request)
    {
       $query = $request->searchQuery;
       $query1 = $request->searchQuery1;
       if($query1) {
            $finalQuery =  explode(",",$query1);
            $getGig = Gig::where('price', '<', $finalQuery[1])
                          ->orderBy('id', 'desc')
                          ->paginate(10);
       }else{
        $getGig = Gig::where('title', 'LIKE', '%'. $query . '%')
                       ->orderBy('id', 'desc')
                       ->paginate(10);
       }
        return view('front.serviceShow', compact('getGig'));

    }


     function serviceShow($slug)
    {
         $category = Category::where('slug',$slug)->with('gigs')->withCount('gigs')->first();
        
        return view('front.serviceShow', compact('category'));
    }

     function serviceDetails($slug)
    {

        $gigRandom = Gig::inRandomOrder()->limit(2)->get();
        $gig = Gig::where('slug',$slug)->first();
        return view('front.serviceDetails', compact('gig','gigRandom'));
    }


    public function userInfo($userName)
    {
        $sellerExists = Seller::where('user_name', $userName)->exists();
        $buyerExists = Customer::where('user_name', $userName)->exists();
        if ($sellerExists) {
          $data = [];
        $seller = Seller::where('user_name', $userName)->first();
        $buyerReview = Review::where('seller_id', $seller->id)->orderBy('id', 'desc')->get();
        $data['buyerRevieSum'] = Review::where('seller_id', $seller->id)->sum('rating');
        $data['buyerReviewCount'] = Review::where('seller_id', $seller->id)->count();

        if ($data['buyerReviewCount'] == 0) {
          $data['getAvarage'] = 0;
        }else{

        $data['getAvarage'] = $data['buyerRevieSum'] / $data['buyerReviewCount'];
        }


        return view('front.userInfo', compact('seller', 'buyerReview','data'));


        }elseif($buyerExists){

        $buyer = Customer::where('user_name', $userName)->first();
        //

        return view('front.userInfo', compact('buyer'));

        }else{
            return redirect()->route('main');
        }
    }

    public function sendMsg(Request $request)
    {
        $buyerId= $request->user_id;
        $sellerId= $request->receiver_id;


        $ifExistes = MessagePerson::where('seller_id', $sellerId)
                                    ->where('customer_id', $buyerId)
                                    ->exists();
        $getBuyer = User::where('customer_id', $buyerId)->first();

        if (!$ifExistes) {
              $newMsgData = MessagePerson::create([
                'seller_id' => $sellerId,
                'customer_id' => $buyerId,
              ]);
            }





        $sellerUserID = User::where('seller_id', $sellerId)->first();
        $customerUserID = User::where('customer_id', $buyerId)->first();

        $sendMsg = new Message();
        $sendMsg->user_id = $customerUserID->id;
        $sendMsg->receiver_id = $sellerUserID->id;
        $sendMsg->msg = $request->msg;
        $sendMsg->save();

        return back();
    }

    public function contactUs()
    {

      // return Contact::all();
      return view('front.contact');
    }

    public function contactSave(Request $request)
    {

      $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'sub' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'msg' => ['required', 'string'],
      ]);

      $getConatct = Contact::create($request->all());

      return back()->with('status', 'Your Message Will Be Send We Will Get in Touch Soon');
    }
     public function termCondition()
    {
      $gn = General::find(1);
      return view('front.trumCondition', compact('gn'));
    }

    public function downloadFile($id)
    {
        $getFile = FileUpload::find($id);

         $file= base_path('public/storage/upload/file/'.$getFile->file);
         // $file= public_path(). "/download/info.pdf";

            $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, $getFile->file, $headers);



        // return FileUpload::find($id);
    }

    public function saveSchedule(Request $request){
      $product = Listings::where('id', $request->product_id)->first();
      $order = Order::create([
        'seller_id' => $product->user_id,
        'customer_id' => $request->user_id,
        'gig_id' => $request->product_id,
        'des' => $request->msg,
        'amount' => $product->price,
        'schedule_date' => date('Y-m-d', strtotime($request->date)),
        'gig_type' => $product->type=="service"?0:1,
      ]);

      $c_id=(int)$order->customer_id;
      $user=null;
      try{
        $user =Seller::where('id', $c_id)->first();
        if(!$user){
          $user =Customer::where('id', $c_id)->first();
        }

      }catch(Exception $e){

      }
      
      
      $title = "New order from ".$user->name;
      // Mail::send(new OrderEmail($order, $user, $product,  $title, $type= "newOrder"));
      return redirect()->route('buyer.service');
    }

}
