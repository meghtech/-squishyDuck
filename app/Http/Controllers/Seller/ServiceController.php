<?php

namespace App\Http\Controllers\Seller;

use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Listings;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller');
    }

    public function index(){
        
        $data = Listings::where('user_id',Auth::user()->id)->where('type', 'service')->paginate(6);
        return view('seller.service.service', compact('data'));
    }

    public function getserviceHistory(){

        // $requests = Order::where('seller_id', auth()->id())->with('customer1', 'customer2', 'listing')
        // ->orderBy('id', 'DESC')
        // ->get();

        // return $requests;
        $data = Order::where('seller_id', auth()->id())
            ->where('gig_type', 0) //0=service, 1=market/listing
			->with('seller1', 'seller2', 'customer1', 'customer2', 'listing')
            ->orderBy('id', 'DESC')
            ->get();
		
		return $data;
       

    // return view('seller.servicesHistory', compact('requests'));
    }
    public function serviceHistory(){

     return view('seller.servicesHistory');
    }
    public function serviceHistoryUpdateSc(Request $request){
        // return $request->input();
        try {
            $order = Order::find($request->id);
            $order->update([
                'schedule_date' => $request->scDate
            ]);
            return "success";
        } catch (\Throwable $th) {
            return response()->json(['msg'=>'failed'], 500);
        }
    }
    public function addImg($id){


        return view('seller.uploadImage',['id'=> $id]);
    }

    public function storeImage(Request $request){

        $imageList = [];
        // for ($i=0; $i < $request->photoLength; $i++) {
        //     $fileNo = "image-".$i;
        //     $image = $request->$fileNo;
        //     $filenamewithextension = $request->$fileNo->getClientOriginalName();
        //     //get filename without extension
        //     $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //     //get file extension
        //     $extension = $request->$fileNo->getClientOriginalExtension();
        //     //filename to store
        //     $filenametostore = $filename . '_' . time() . '.webp' ;
        //     if (!File::exists(public_path() . "/content/images/service")) {
        //         File::makeDirectory(public_path() . "/content/images/service", 0777, true);
        //     }
        //     $originalPath = public_path() . '/content/images/service';
        //     $thumbnailImage = Image::make($image)->encode('webp', 100);
        //     $thumbnailImage->resize(500, 500, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save($originalPath.'/'. $filenametostore);
        //     $imageList[] = $filenametostore;
        // }
        for ($i=0; $i<$request->photoLength; $i++){
            $fileNo = "image_".$i;
            if($request->$fileNo){
                $image = $request->$fileNo;
                $imageList[] = uploadImage($image, 'service');
            }
        }

        $list = Listings::find($request->id);
        $photos = json_decode($list->photos);
        $list->photos = json_encode(array_merge($photos, $imageList));
        $list->save();
        return "success";

        // return redirect()->route('seller.serviceHistory');

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



    public function show($id){
        $data = Listings::where('id', $id)->with('userSeller')->first();
        return view('seller.service.detail', compact('data'));
    }


    public function viewDetail($id){
        $data = Listings::where('id', $id)->first();
        return view('seller.service.detail', compact('data'));
    }

    public function createService(){
       return view('seller.service.create');
    }


    public function postService(Request $request){
        // log::info($request);

       
            
            $this->validate(request(), [
            'photoLength' => 'required | min:1',
            'title' => 'required'
                
            ]);
        
       
    

        $imageList = [];
        // for ($i=0; $i < $request->photoLength; $i++) {
        //     $fileNo = "image-".$i;
        //     $image = $request->$fileNo;
        //     $filenamewithextension = $request->$fileNo->getClientOriginalName();
        //     //get filename without extension
        //     $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //     //get file extension
        //     $extension = $request->$fileNo->getClientOriginalExtension();
        //     //filename to store
        //     $filenametostore = $filename . '_' . time() . '.webp' ;
        //     if (!File::exists(public_path() . "/content/images/service")) {
        //         File::makeDirectory(public_path() . "/content/images/inventory", 0777, true);
        //     }
        //     $originalPath = public_path() . '/content/images/service';
        //     $thumbnailImage = Image::make($image)->encode('webp', 100);
        //     $thumbnailImage->resize(500, 500, function ($constraint) {
        //         $constraint->aspectRatio();
        //     })->save($originalPath.'/'. $filenametostore);
        //     $imageList[] = $filenametostore;
        // }
        // Log::info("Image :".$request->photoLength);
        
        // return 0;
        for ($i=0; $i<$request->photoLength; $i++){
            $fileNo = "image_".$i;
            if($request->$fileNo){
                $image = $request->$fileNo;
                $imageList[] = uploadImage($image, 'service');
            }
        }

        $list = new Listings();
        $list->user_id = auth()->user()->id;
        $list->title = $request->title;
        $list->price = $request->price;
        $list->service_type = $request->itemType;
        $list->availability_days_with_time = $request->dayAndTime;
        $list->description = $request->description;
        $list->tags = $request->tags;
        $list->company_name = $request->companyName;
        $list->contact_email = $request->contactEmail;
        $list->contact_name = $request->contactName;
        $list->contact_phone = $request->phoneNumber;
        $list->viaCall = (boolean)$request->callMe;
        $list->viaText = (boolean)$request->textMe;
        $list->street = $request->streetAddress;
        $list->city = $request->city;
        $list->state = $request->state;
        $list->zip_code = $request->zip;
        $list->type = $request->type;
        $list->photos = json_encode($imageList);
        $list->save();

        return "Success!";
    }

    public function viewServices(){
        $sortBy="asc";
        $seachCity="";
        $seachItem="";
        $data = Listings::where('type', 'service')
        ->orderBy('price', $sortBy)
        ->with('userSeller')
        ->paginate(6)
        ->appends(request()->query());
        // dd($data->userSe);
       
        return view('seller.service.viewServices', compact('data', 'sortBy', 'seachCity', 'seachItem'));
    }

    public function searchService(Request $request){
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
            ->paginate(6)
            ->appends(request()->query());
        } elseif(!$seachCity && $seachItem){
            $data = Listings::where('type', 'service')
            ->where('title', 'LIKE', "%{$seachItem}%")
            ->orderBy('price', $sortBy)
            ->paginate(6)
            ->appends(request()->query());
        } elseif($seachCity && $seachItem) {
            $data = Listings::where('type', 'service')
            ->where('title', 'LIKE', "%{$seachItem}%")
            ->where(function($query) use ($seachCity) {
                $query->where('city', 'LIKE', "%{$seachCity}%")
                ->orWhere('zip_code', 'LIKE', "%{$seachCity}%");
            })
            ->orderBy('price', $sortBy)
            ->paginate(6)
            ->appends(request()->query());
        } else {
            $data = Listings::where('type', 'service')
            ->orderBy('price', $sortBy)
            ->paginate(6)
            ->appends(request()->query());
        }
        return view('seller.service.viewServices', compact('data', 'sortBy', 'seachCity', 'seachItem'));
    }
}
