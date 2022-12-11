<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use Illuminate\Support\Str;
class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
       return view('admin.category.index', compact('categories'));
    }


    public function promoteStatus(Request $request)
    {
        $reservationID = $request->reserID;
        $status = $request->setCat;
         $reservation = Category::where('id', $reservationID)->update([
            'setcat' => $status
         ]);
         return back()->with('status', 'Category Promoted Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function categorySave(Request $request)
    {
        // return $request->all();
         $this->validate($request,[
            'name' => 'required'
          
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();
         return redirect('/admin/category')->with('status', 'Your Category Add Successfully');
    }
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.category.create', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return $id;
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

       
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();
         return redirect('/admin/category')->with('status', 'Your Category Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return $id;

       $reservation = Category::where('id', $id)->update([
            'status' => 0
         ]);

    }
     public function statusChage($id)
    {
       $findStatus = Category::findOrfail($id);

       if ($findStatus->status == 1) {
        $reservation = Category::where('id', $id)->update([
            'status' => 0
         ]);
        return back()->with('status', 'Your Category Status Change Successfully');
       }else{
            $reservation = Category::where('id', $id)->update([
            'status' => 1
         ]);
            return back()->with('status', 'Your Category Status Change Successfully');
       }

        

    }
}
