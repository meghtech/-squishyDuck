<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function register (Request $request){
        $this->validate($request, [
            'email'   => 'required|email|unique:sellers,email|unique:customers,email',
            'user_name'   => 'required|unique:sellers,user_name|unique:customers,user_name',
            'password' => 'required|confirmed|min:6',
        ]);
        
        if ($request['role'] == 'buyer') {
            // return $request;
            $customer =  Customer::create([
                'name' => $request['name'],
                'user_name' => $request['user_name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'remember_token' => Str::random(10),
             ]);
             
            User::insert([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone_number' => '8564',
                'password' => Hash::make($request['password']),
                'customer_id' => $customer['id'],
                // 'seller_id' => $customer['id'],  //optional as it is a customer
                'remember_token' => Str::random(10),
            ]); 

           if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember_token'))) {

                return redirect()->route('customer.dashboard');
            }else{
                return "failed";
            }

        }
        else{

            $seller =  Seller::create([ 
                'name' => $request['name'],
                'user_name' => $request['user_name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'remember_token' => Str::random(10),
             ]);
            // dd($seller);
            User::insert([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone_number' => '8564',
                'password' => Hash::make($request['password']),
                'seller_id' => $seller->id,
                // 'customer_id' => $seller->id, // optional as it is a seller
                'remember_token' => Str::random(10),
            ]); 
            

            if (Auth::guard('seller')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember_token'))) {

                return redirect()->route('seller.dashboard');
            }else{
                return "failed";
            }
        }
    }
}
