<?php

namespace App\Http\Controllers\Seller;

use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Listings;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller');
    }

    public function index(){
        return view('seller.service.service');
    }

    public function viewDetail($slug){
        return view('seller.service.detail');
    }

    public function createService(){
       return view('seller.service.create');
    }

    public function postService(Request $request){
        // $request->tags = json_decode($request->tags, true);
        // $request->dayAndTime = json_decode($request->dayAndTime, true);
        log::info($request);
        $imageList = [];
        for ($i=0; $i < $request->photoLength; $i++) {
            $fileNo = "image-".$i;
            $image = $request->$fileNo;
            $filenamewithextension = $request->$fileNo->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->$fileNo->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.webp' ;
            if (!File::exists(public_path() . "/content/images/service")) {
                File::makeDirectory(public_path() . "/content/images/service", 0777, true);
            }
            $originalPath = public_path() . '/content/images/service';
            $thumbnailImage = Image::make($image)->encode('webp', 100);
            $thumbnailImage->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save($originalPath.'/'. $filenametostore);
            $imageList[] = $filenametostore;
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
        $list->zip_code = $request->zip_code;
        $list->type = $request->type;
        $list->photos = json_encode($imageList);
        $list->save();

        return "Success!";
    }
}
