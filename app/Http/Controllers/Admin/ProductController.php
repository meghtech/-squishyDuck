<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('status', 1)->get();
       return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status', 1)->get();
       return view('admin.product.create', compact('category'));
    }


    function PricePromoteStatus(Request $request){
   

        $id = $request->reserID;
        $priceStatus = $request->priceStatus;
        $product = Product::find($id);
        $displayPrice = $product->offer_price; // display
        $offerPRice = $product->regular_price; // offer

        if($priceStatus == 2){
            $product = Product::find($id)->update([
                'offer_price' =>$offerPRice,
                'regular_price' =>$displayPrice,
                'priceStatus' =>2
            ]);

            return back()->with('status', 'Price will Promoted');
        }elseif($priceStatus == 1){
              $product = Product::find($id)->update([
                'offer_price' =>$offerPRice,
                'regular_price' =>$displayPrice,
                'priceStatus' =>1
            ]);

            return back()->with('status', 'Price will Promoted');
        }

    }


    public function getSubCategory(Request $request)
    {

        // return $_POST['category_id'];
        $stringToSend = '<option value="">-Select-</option>';
        $upazillaLists = SubCategory::where('category_id', $_POST['category_id'])->where('status', 1)->get();
        foreach($upazillaLists as $upazillaList){
        $stringToSend = $stringToSend.'<option value="'.$upazillaList->id.'">'.$upazillaList->name.'</option>';
        }
        echo $stringToSend;
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
            'name' => 'required',
            'des' => 'required',
            'regular_price' => 'required',
            'category_id' => 'required',
            'offer_price' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048'
          
        ]);
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
            }
        $proName = $request->name;
        $product = new Product();
        $product->name = $proName;
        $product->slug = make_slug($proName);
        $product->des = $request->des;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->offer_price = $request->offer_price;
        $product->regular_price = $request->regular_price;
         if ($request->has('image')) {
            $image=$request->file('image');
          $imageName = 'product-'.'-'.time().'.'.$image->getClientOriginalExtension();

          $post = Image::make($image)->resize(400,400)->save('storage/upload/product/'.$imageName);

          $product->image = $imageName;

        }else {
            $product->image = "default.png";
        }
        $product->status = 1;
        $product->save();
         return redirect('/admin/product')->with('status', 'Your Product Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $category = Category::where('status',1)->get();
       $subcategory = SubCategory::where('status',1)->get();
       $product = Product::find($id);
       return view('admin.product.edit', compact('product', 'category','subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        // return  $request->all();

        $product = Product::find($id);

        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
            }
        $proName = $request->name;
        $product->name = $proName;
        $product->slug = make_slug($proName);
        $product->des = $request->des;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->offer_price = $request->offer_price;
        $product->regular_price = $request->regular_price;

         if ($request->has('image')) {
            $image=$request->file('image');
          $imageName = 'product-'.'-'.time().'.'.$image->getClientOriginalExtension();

          $post = Image::make($image)->resize(400,400)->save('storage/upload/product/'.$imageName);

          $product->image = $imageName;

        }else {
            $product->image = $product->image;
        }

        $product->status = 1;
        $product->save();
         return redirect('/admin/product')->with('status', 'Your Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $reservation = Product::where('id', $id)->update([
            'status' => 0
         ]);
    }
}
