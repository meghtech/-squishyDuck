<?php

namespace App\Http\Controllers\Customer;

use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Listings;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer',['except' => [
            'index'
        ]]);
    }

    public function index(){
        $sortBy="asc";
        $seachCity="";
        $seachItem="";
        $data = Listings::where('type', 'service')
        ->orderBy('price', $sortBy)
        ->with('userSeller')
        ->paginate(6)
        ->appends(request()->query());
      
        return view('customer.service.viewServices', compact('data', 'sortBy', 'seachCity', 'seachItem'));
    }

    public function serviceHistory(){

        return view('customer.service.servicesHistory');
       }
       
       public function getserviceHistory(){

        // $requests = Order::where('seller_id', auth()->id())->with('customer1', 'customer2', 'listing')
        // ->orderBy('id', 'DESC')
        // ->get();

        // return $requests;
        $data = Order::where('customer_id', Auth::user()->id)
			->with('seller1', 'seller2', 'customer1', 'customer2', 'listing')
            ->orderBy('id', 'DESC')
            ->get();
		
		return $data;
     
    }
    public function updateOrderSeller(Request $request)
    {
		$key = $request->field;
		$update = Order::where('id',$request->id)->with('seller1', 'seller2', 'customer1', 'customer2', 'listing')->first();
		$update->$key = $request->value;
		if($request->field == 'is_accept_seller' && $request->orderConfirmed == 0){
			$update->payment_status = 0;
		}
		$update->save();
    
    
    return $update;
    }



    public function viewDetail($id){
        $data = Listings::where('id', $id)->first();
        return view('customer.service.detail', compact('data'));
    }

    public function searchService(Request $request){
        log::info($request->sortBy);
        $sortBy = $request->sortBy;
        $seachCity = $request->seachCity;
        $seachItem =  $request->seachItem;

        if($seachCity && !$seachItem){
            $data = Listings::where('type', 'service')
            ->where(function($query) use ($seachCity){
                $query->where('city', 'LIKE', "%{$seachCity}%")
                ->orWhere('zip_code', 'LIKE', "%{$seachCity}%");
            })
            ->orderBy('price', $sortBy)
            ->paginate(1)
            ->appends(request()->query());
        } elseif(!$seachCity && $seachItem){
            $data = Listings::where('type', 'service')
            ->where('title', 'LIKE', "%{$seachItem}%")
            ->orderBy('price', $sortBy)
            ->paginate(1)
            ->appends(request()->query());
        } elseif($seachCity && $seachItem) {
            $data = Listings::where('type', 'service')
            ->where('title', 'LIKE', "%{$seachItem}%")
            ->where(function($query) use ($seachCity) {
                $query->where('city', 'LIKE', "%{$seachCity}%")
                ->orWhere('zip_code', 'LIKE', "%{$seachCity}%");
            })
            ->orderBy('price', $sortBy)
            ->paginate(1)
            ->appends(request()->query());
        } else {
            $data = Listings::where('type', 'service')
            ->orderBy('price', $sortBy)
            ->paginate(1)
            ->appends(request()->query());
        }
        return view('customer.service.viewServices', compact('data', 'sortBy', 'seachCity', 'seachItem'));
    }
}
