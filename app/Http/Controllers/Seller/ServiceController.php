<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gig;
use Image;
use Illuminate\Support\Str;
class ServiceController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth:seller');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $gigs = Gig::where('seller_id', auth()->id())->get();
        return view('seller.gig.index', compact('gigs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('seller.gig.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'totalDay' => 'required',
            'image' => 'required',
            'price' => 'required'
        ]);

        $newGig = new Gig();

        $newGig->seller_id = auth()->id();
        $newGig->category_id = $request->category_id;
        $newGig->title = $request->title;
        $newGig->slug = Str::slug($request->title);
        $newGig->description = $request->description;
        $newGig->totalDay = $request->totalDay;
        $newGig->price = $request->price;

// $image,imageNameTitle, width,height, 

        if($request->has('image')){
            $image = $request->file('image');
            $imageName = 'Gig'.'-'.time().'.'.$image->getClientOriginalExtension();
            $post = Image::make($image)->resize(250,180)->save('storage/upload/Gig/'.$imageName)->encode('jpg', 75);
            $newGig->image = $imageName;
        }else {
              $newGig->image = 'gig-default.png';
        }

          $newGig->save();

           return redirect('/seller/services')->with('status', 'Your Service Add Successfully');

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gig = Gig::findOrfail($id);
        $categories = Category::where('status', 1)->get();
        return view('seller.gig.edit', compact('categories','gig'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newGig =  Gig::findOrfail($id);

        $newGig->seller_id = auth()->id();
        $newGig->category_id = $request->category_id;
        $newGig->title = $request->title;
        $newGig->slug = Str::slug($request->title);
        $newGig->description = $request->description;
        $newGig->totalDay = $request->totalDay;
        $newGig->price = $request->price;

// $image,imageNameTitle, width,height, 

        if($request->has('image')){
            $image = $request->file('image');
            $imageName = 'Gig'.'-'.time().'.'.$image->getClientOriginalExtension();
            $post = Image::make($image)->resize(250,180)->save('storage/upload/Gig/'.$imageName)->encode('jpg', 75);
            $newGig->image = $imageName;
         }else {
              $newGig->image = $newGig->image;
          }

          $newGig->save();

           return redirect('/seller/services')->with('status', 'Your Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function servicesStatus($id)
    {
        $checkSatus = Gig::findOrfail($id);

        if ($checkSatus->status == 1) {
            $reservation = Gig::where('id', $id)->update([
            'status' => 2
            ]);
            return redirect('/seller/services')->with('status', 'Your Service status Updated Successfully');
        }elseif($checkSatus->status == 2){
            $reservation =  Gig::where('id', $id)->update([
            'status' => 1
            ]);
             return redirect('/seller/services')->with('status', 'Your Service status Updated Successfully');
        }

        
    } 
    public function destroy($id)
    {
        return Gig::findOrfail($id);
    }
}
