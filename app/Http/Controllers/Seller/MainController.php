<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\BidderPost;
use App\Models\Gig;
use App\Models\Seller;
use App\Models\Order;
use App\Models\Review;
use App\Models\MessagePerson;
use App\Models\CustomOffer;
use App\Models\User;
use App\Models\PaymentSeller;
use Image;
class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:seller');
    }

    function buyerJobPost()
    {
        $jobPost = JobPost::where('status', 1)->with('Bids')->get();
        $bidderCHeck = BidderPost::where('seller_id', auth()->id())->get();
        $getGig = Gig::where('seller_id', auth()->id())
            ->where('status', 1)
            ->get();
        return view('front.buyerJobPost', compact('jobPost','bidderCHeck','getGig'));
    }

    function bidRequest(Request $request)
    {
        $this->validate($request, [
            'des' => 'required',
            'totalDay' => 'required|integer',
            'amount' => 'required|integer',
            'gig_id' => 'required',
        ]);

        $bidderRequest = BidderPost::create($request->all());

        return back()->with('status', 'Your Bid Request Successfully Posted.');
    }


    public function sellerIndex()
    {
        $data = [];
        $getUser = Seller::where('id',auth()->id())->first();

        $data['sellerGig'] = Gig::where('seller_id', auth()->id())
            ->where('status', 1)
            ->count();
        $data['sellerReview'] = Review::where('seller_id', auth()->id())->count();
        $data['sellerOrder'] = Order::where('is_accept_seller',1)
            ->where('seller_id', auth()->id())
            ->count();
        $data['sellerOn'] = Order::where('is_accept_seller',0)
            ->where('seller_id', auth()->id())
            ->count();


        return view('seller.dashboard', compact('data','getUser'));
    }

    public function incomingRequests()
    {
        $requests = Order::where('seller_id', auth()->id())->with('customer', 'listing')
            ->orderBy('id', 'DESC')
            ->get();
        return view('seller.incomingRequests', compact('requests'));
    }

    public function sellerOrder()
    {
        $allorder = Order::where('seller_id', auth()->id())
            ->where('is_accept_seller', 0)
            ->orderBy('id', 'DESC')
            ->get();
        return view('seller.sellerOrder', compact('allorder'));
    }

    public function sellerCustomOffer()
    {
        $getCustomer = MessagePerson::where('seller_id', auth()->id())->get();
        $getGig = Gig::where('seller_id', auth()->id())
            ->get();
        return view('seller.sellerCustomOffer', compact('getGig', 'getCustomer'));
    }

    public function storeCustomOffer(Request $request)
    {
        $this->validate($request, [
            'totalDay' => 'required|integer|',
            'amount' => 'required|integer|',
            'des' => 'required|string|'
        ]);

        $customOffer = CustomOffer::create($request->all());

        return back()->with('status', 'Your Custom Offer Are Make Successfully');
    }

    public function sellerReviews()
    {
        return view('seller.review');
    }


    public function SellerPayment()
    {
        $paymentCustomer = PaymentSeller::where('seller_id', auth()->id())
            ->orderBy('id', 'DESC')
            ->get();
        return view('seller.SellerPayment', compact('paymentCustomer'));
    }


    public function sellerSetting()
    {

        $seller_id = auth()->id();

        $sellerInfo = Seller::findOrfail($seller_id);
        return view('seller.sellerSetting', compact('sellerInfo'));
    }
    public function sellerSettingSave(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:sellers,email,'.$request->seller_id,
            'tagline' => 'required|string|max:50',
            'about' => 'required|string|max:800',
            'country' => 'required|string|max:20'
        ]);

        $seller_id = $request->seller_id;
        $sellerInfo = Seller::findOrfail($seller_id);
        $userInfo = User::where('seller_id',$seller_id)->first();

        if($request->has('profile')){
            $image = $request->file('profile');

            $imageName = 'profile'.'-'.time().'.'.$image->getClientOriginalExtension();
            $post = Image::make($image)->resize(200,180)->save('storage/upload/profile/'.$imageName)->encode('jpg', 75);
            $sellerInfo->profile = $imageName;
        }else {
            $sellerInfo->profile = $sellerInfo->profile;
        }

        $userInfo->name = $request->name;
        $userInfo->email = $request->email;



        $sellerInfo->name = $request->name;
        $sellerInfo->email = $request->email;
        $sellerInfo->hour_rate = $request->hour_rate;
        $sellerInfo->tagline = $request->tagline;
        $sellerInfo->about = $request->about;
        $sellerInfo->country = $request->country;
        $sellerInfo->save();

        return back();
    }


    public function sellerSettingSavepass(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed'

        ]);

        $hashPassword = Auth::user()->password;

        if(Hash::check($request->old_password,$hashPassword)){
            if(!Hash::check($request->password,$hashPassword)){
                $user = Seller::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->back()->with('status', 'Your Password has been Change');
            }else{
                return redirect()->back()->with('status', 'NEw Password can not be same old password:)');
            }
        }else{
            return redirect()->back()->with('status', 'You pu wrong Password try aging');
        }

        return view('admin.profile');
    }

}
