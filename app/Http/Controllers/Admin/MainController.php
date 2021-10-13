<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\catren;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Admin;
use App\Models\Review;
use App\Models\Seller;
use App\Models\Customer;
use App\Models\Contact;
use App\Models\General;
use App\Models\PaymentCustomer;
use DB;
use Carbon\Carbon;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

          // return  DB::table('payment_customers')->selectRaw('created_at as date, sum(amount)  as total_sales')
          //       ->groupBy('created_at')
          //       ->get();
            $data = [];

            $data['monthlySells'] = PaymentCustomer::select('*')->whereMonth('created_at', Carbon::now()->month)
                  ->sum('amount'); 
            $data['dailySells'] = PaymentCustomer::select('*')->whereMonth('created_at', Carbon::today())
                  ->sum('amount');


            $data['sellerReview'] = Review::count();
            $data['sellerOrder'] = Order::where('is_accept_seller',1)->count();
            $data['sellerOn'] = Order::where('is_accept_seller',0)->count();

            return view('admin.dashboard', compact('data'));
    } 

    public function manageSeller()
    {

        $sellers = Seller::all();
        $sellersCount = Seller::count();
        return view('admin.manageSeller.index', compact('sellers','sellersCount'));
    } 
    public function manageDetails($id)
    {

        return view('admin.manageSeller.sellerDetails');
    } 
     public function manageBuyer()
    {
        $customers = Customer::latest()->get();
        $customersCount = Customer::count();
        return view('admin.manageBuyer.index', compact('customers','customersCount'));
    } 
 

    ///order

    public function adminOrder(){
        $order = Order::latest()->get();
        return view('admin.order.index', compact('order'));
    }
    public function orderView($id){

        $reservation = Order::where('id', $id)->update([
            'pageView' => 1
         ]);

        $getOrder = Order::find($id);
        $getOrderProduct = OrderProduct::where('order_id', $getOrder->id)->with('product')->with('setmenu')->get();

        return view('admin.order.create',compact('getOrder','getOrderProduct'));
    }


    //message

    public function msgList()
    {
      $getCon = Contact::orderBy('id', 'desc')->get();
      return view('admin.msg', compact('getCon'));
    }
    public function msgDetails($id)
    {
      $getCon = Contact::findOrfail($id);

      $getCon->update(['is_seen' => 1]);



      return view('admin.msgDetails', compact('getCon'));
    }

    public function termsConstion()
    {
      $general = General::find(1);

      return view('admin.termsConstion', compact('general'));
    }
    public function termsSave(Request $request)
    {

      $getValue = $request->description;
      $general = General::find(1)
                        ->update(['tNc' => $getValue]);

      return back();
    }


///reservation

     public function reservation()
    {   
        $reservation = Reservation::latest()->get();
        return view('admin.reservation', compact('reservation'));
    } 
    public function reservationshow($id)
    {   
        return $reservation = Reservation::find($id);
        // return view('admin.reservation', compact('reservation'));
    }
    public function reservationStatus(Request $request)
    {   
        $reservationID = $request->reserID;
        $status = $request->status;
         $reservation = Reservation::where('id', $reservationID)->update([
            'status' => $status
         ]);
         return back()->with('status', 'Reservation Status Change Successfully');
        // return view('admin.reservation', compact('reservation'));
    }


   /// cateren
   

     public function caterer()
    {
        $catren = catren::latest()->get();
        return view('admin.caterer', compact('catren'));
    }

    
    public function catererShow($id)
    {   
        return $reservation = catren::find($id);
        // return view('admin.reservation', compact('reservation'));
    }
    public function catererStatus(Request $request)
    {   
        $reservationID = $request->reserID;
        $status = $request->status;
         $reservation = catren::where('id', $reservationID)->update([
            'status' => $status
         ]);
         return back()->with('status', 'Catren Status Change Successfully');
        // return view('admin.reservation', compact('reservation'));
    }

    function profileIndex(){

        $id = AUTH::user()->id;
         $siteSetting = Admin::findOrfail($id);
        return view('admin.profile.setting', compact('siteSetting'));
    }
    function changePassword(Request $request){

          $this->validate($request,[
                    'old_password' => 'required',
                    'password' => 'required|confirmed'
                  
                ]);

            $hashPassword = Auth::user()->password;

           if(Hash::check($request->old_password,$hashPassword)){

                    if(!Hash::check($request->password,$hashPassword)){

                        $user = Admin::find(Auth::id());
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
    function changeInfo(Request $request){

       $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email'
          
        ]);
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $updateUser = Admin::findOrfail($id)->update([
        'name' => $name,
        'email' => $email
         ]);
        return redirect()->back()->with('status', 'You Information Update Successfully');
    }


}
