<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General;
use Image;
class GeneralController extends Controller
{
     public function index()
    {

    	 $general = General::findOrFail(1);
    	return view('admin.general', compact('general'));
    }

    public function genaralSave(Request $request)
    {

      // return $request->all();

    	  $setting = General::findOrFail(1);
    	 	$setting->title = $request->title;
    	 	$setting->metaTag = $request->metaTag;
    	 	$setting->fa = $request->fa;
    	 	$setting->tw = $request->tw;
    	 	$setting->lin = $request->lin;
    	 	$setting->stripe_scret = $request->stripe_scret;
        $setting->stripe_pub = $request->stripe_pub;
        $setting->buyer_com = $request->buyer_com;
        $setting->seller_com = $request->seller_com;
        $setting->sub_header = $request->sub_header;
        $setting->sub_title = $request->sub_title;
        $setting->search_title = $request->search_title;
        $setting->inside_input = $request->inside_input;
    	 	$setting->address = $request->address;


    	  if ($request->has('logo')) {
            $image=$request->file('logo');
          $imageName = 'logo'.'-'.time().'.'.$image->getClientOriginalExtension();

          $post = Image::make($image)->resize(200,100)->save('storage/upload/logo/'.$imageName);

          $setting->logo = $imageName;


          }else {
              $setting->logo = $setting->logo;
          }

          if ($request->has('fav_icon')) {
            $image=$request->file('fav_icon');
          $imageName = 'fav_icon'.'-'.time().'.'.$image->getClientOriginalExtension();

          $post = Image::make($image)->resize(16,16)->save('storage/upload/logo/'.$imageName);

          $setting->fav_icon = $imageName;


          }else {
              $setting->fav_icon = $setting->fav_icon;
          }


	        if ($request->has('banner')) {
            $image=$request->file('banner');
          $imageName = 'banner'.'-'.time().'.'.$image->getClientOriginalExtension();

          $post = Image::make($image)->resize(1400,600)->save('storage/upload/logo/'.$imageName);

          $setting->banner = $imageName;

	        }else {
	            $setting->banner = $setting->banner;
	        }
    	 	$setting->save();
    	   return back();
    }


    public function genaralcontact()
    {
      $ourPage = OurPage::findOrFail(1);
      return view('admin.general.ourPage', compact('ourPage'));
    }
    public function genaralcontactSAve(Request $request)
    {
      // return $request->all();

      // return $request->des;

       $setting = OurPage::findOrFail(1);
        $setting->des = $request->des;
  

        if ($request->has('image')) {
            $image=$request->file('image');
          $imageName = 'contact'.'-'.time().'.'.$image->getClientOriginalExtension();

          $post = Image::make($image)->resize(800,550)->save('storage/upload/logo/'.$imageName);

          $setting->image = $imageName;

          }else {
              $setting->image = $setting->image;
          }


        $setting->save();
         return back();
    }
}
