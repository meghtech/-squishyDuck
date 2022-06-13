<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Mail\Report;
use App\Models\Customer;
use App\Models\Seller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::CUSTOMER;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    public function showLoginFormCustomer()
    {
    	return view('customer.auth.login');
    }
    public function forgotPassword(){
        return view('customer.auth.forgotPassword');
    }
    public function sendPassResetLink(Request $request){
        $this->validate($request, ["email"=>'required']);
        $user = User::where('email', $request->email)->first();
        if($user){
            
            $token = str_replace(' ', '', Str::random(40).$request->email.now());
            $user->update(['password_reset_token'=>$token]);
            $link = URL::to('')."/reset-password?token=".$token;
            $msg = "We have received a request to reset the password of your SquishyDuck account. If you submitted this request, please click the link below to proceed. <br/> <a href='".$link."'>".$link."</a>";
            Mail::send(new Report("Reset password", $msg, "squishyduck@mail.com", $request->email));
            // return $token;
        }
        return redirect()->back()->with('message', 'We have e-mailed your password reset link!');
    }
    public function resetPasswordShow(Request $request){
        
        // $user = User::where('password_reset_token',$request->query('token'))->first();
        // if($user){
            return view ('customer.auth.resetPassword', ["token"=>$request->query('token')]);
        // }
        // return redirect()->route('login');
    }
    public function resetPassword(Request $request){
        $this->validate($request, [
            "password"=> "required|min:8|confirmed",
            "token" => "required",
        ]);
        try {
            $user = User::where('password_reset_token', $request->token)->first();
            if($user){
                $hashed = Hash::make($request->password);
                $user->update([
                    "password"=> $hashed,
                    "password_reset_token" => "",
                ]);
                $seller = Seller::where('email', $user->email)->first();
                if($seller){
                    $seller->update(["password"=>$hashed]);
                    return redirect()->route('login.seller')->with('message', 'Password reset successfull!');
                }
                $customer = Customer::where('email', $user->email)->first();
                if($customer){
                    $customer->update(["password"=>$hashed]);
                    return redirect()->route('login.customer')->with('message', 'Password reset successfull!');
                }
                
                return redirect()->back()->with('error', 'Something went wrong! Please try again.');
            }else{
                return redirect()->back()->with('error', 'Token expired!');
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
        
        return "sss";
    }


     /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('customer');
    }

}
