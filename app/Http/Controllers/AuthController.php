<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showLoginFormSeller()
    {
    	return view('seller.auth.login');
    }

    public function login(Request $r){
        $this->validate($r, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('seller')->attempt(['email' => $r->email, 'password' => $r->password], $r->get('remember'))) {

            return redirect()->route('seller.dashboard');
            // return "success";
        }else{
            return "failed";
        }
    }

    public function registration (Request $r){
        if ($r['role'] == 'buyer') {

            $r =  Customer::create([
                'name' => $r['name'],
                'user_name' => $r['user_name'],
                'email' => $r['email'],
                'password' => Hash::make($r['password']),
                // 'remember_token' => Str::random(10),
             ]); 
            User::insert([
                'name' => $r['name'],
                'email' => $r['email'],
                'phone_number' => '8564',
                'password' => Hash::make($r['password']),
                'customer_id' => $r['id'],
                'seller_id' => $r['id'],  //optional as it is a customer
                'remember_token' => Str::random(10),
            ]); 

           return $r;

        }
        else{

            $seller =  Seller::create([
                'name' => $r['name'],
                'user_name' => $r['user_name'],
                'email' => $r['email'],
                'password' => Hash::make($r['password']),
                'remember_token' => Str::random(10),
             ]);
            $user = User::create([
                'name' => $r['name'],
                'email' => $r['email'],
                'phone_number' => '8564',
                'password' => Hash::make($r['password']),
                'seller_id' => $seller['id'],
                'customer_id' => $r['id'], // optional as it is a seller
                'remember_token' => Str::random(10),
            ]); 

            if (Auth::guard('seller')->attempt(['email' => $r->email, 'password' => $r->password], $r->get('remember_token'))) {

                return redirect()->route('seller.dashboard');
                // return "success";
            }else{
                return "failed";
            }
            


        }
    }
}
