<?php

namespace App\Http\Controllers\Seller;

use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Listings;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller');
    }

    public function index(){
        $sortBy="asc";
        $seachCity="";
        $seachItem="";
        $data = Listings::where('type', 'listing')
        ->orderBy('price', $sortBy)
        ->paginate(6)
        ->appends(request()->query());
        return view('seller.listing.viewListing', compact('data', 'sortBy', 'seachCity', 'seachItem'));
    }

    public function viewDetail($id){
        $data = Listings::where('id', $id)->first();
        return view('seller.listing.detail', compact('data'));
    }

    public function searchListing(Request $request){
        log::info($request->sortBy);
        $sortBy = $request->sortBy;
        $seachCity = $request->seachCity;
        $seachItem =  $request->seachItem;

        if($seachCity && !$seachItem){
            $data = Listings::where('type', 'listing')
            ->where(function($query) use ($seachCity){
                $query->where('city', 'LIKE', "%{$seachCity}%")
                ->orWhere('zip_code', 'LIKE', "%{$seachCity}%");
            })
            ->orderBy('price', $sortBy)
            ->paginate(6)
            ->appends(request()->query());
        } elseif(!$seachCity && $seachItem){
            $data = Listings::where('type', 'listing')
            ->where('title', 'LIKE', "%{$seachItem}%")
            ->orderBy('price', $sortBy)
            ->paginate(6)
            ->appends(request()->query());
        } elseif($seachCity && $seachItem) {
            $data = Listings::where('type', 'listing')
            ->where('title', 'LIKE', "%{$seachItem}%")
            ->where(function($query) use ($seachCity) {
                $query->where('city', 'LIKE', "%{$seachCity}%")
                ->orWhere('zip_code', 'LIKE', "%{$seachCity}%");
            })
            ->orderBy('price', $sortBy)
            ->paginate(6)
            ->appends(request()->query());
        } else {
            $data = Listings::where('type', 'listing')
            ->orderBy('price', $sortBy)
            ->paginate(6)
            ->appends(request()->query());
        }
        return view('seller.listing.viewListing', compact('data', 'sortBy', 'seachCity', 'seachItem'));
    }
}
