<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MessagePerson;
use App\Models\FileUpload;
use App\Models\Message;
use App\Models\User;
class MassageController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:customer');
    }
   public function index()
   {
    $customer_id = auth()->id();
    $messagePerson = MessagePerson::where('customer_id', $customer_id)
                                          ->get();
   	return view('customer.msg.index', compact('messagePerson'));
   }

   public function msgDetails($id)
   {
        $sellerId = $id;
   	return view('customer.msg.msgDetails', compact('sellerId'));
   }


    public function fileShare()
    {
      $customer_id = auth()->id();
      $messagePerson = MessagePerson::where('customer_id', $customer_id)
                                          ->get();
      return view('customer.file.fileIndex', compact('messagePerson'));
    }
    public function fileShareUser($id)
    {
      $getFile = FileUpload::where('customer_id', auth()->id())
                        ->where('seller_id', $id)
                        ->orderBy('id', 'DESC')
                        ->get();
      return view('customer.fileShare', compact('id','getFile'));
    }
    public function fileShareStore(Request $request)
    {

        $this->validate($request, [
           'file' => 'max:51199'
        ]);

       $title = time().'.'.request()->file->getClientOriginalExtension();

       $request->file->move(base_path('public/storage/upload/file/'), $title);

       $storeFile = new FileUpload;
       $storeFile->customer_id = $request->customer_id;
       $storeFile->user_id = $request->customer_id;
       $storeFile->seller_id = $request->seller_id;
       $storeFile->file = $title;
       $storeFile->save();
        return back();
     //    return response()->json(['success'=>'File Uploaded Successfully']);

     // return $request->all();
    }










}
