<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Seller;
use App\Models\MessagePerson;
use App\Models\FileUpload;
use AUTH;
class MsgController extends Controller
{
	   public function __construct()
    {
        $this->middleware('auth:seller');
    }
   public function index()
   {
    $seller_id = auth()->id();
    $messagePerson = MessagePerson::where('seller_id', $seller_id)
                                          ->orderBy('id', 'desc')
                                          ->get();
   	return view('seller.msg.index', compact('messagePerson'));
   }

   public function msgDetails($id)
   {
    $customerId = $id;
   	return view('seller.msg.msgDetails', compact('customerId'));
   }

   public function fileShare()
   {
      $seller_id = auth()->id();
      $messagePerson = MessagePerson::where('seller_id', $seller_id)
                                          ->get();
      return view('seller.file.fileIndex', compact('messagePerson'));
   }

    public function fileShareUser($id)
    {
      $getFile = FileUpload::where('seller_id', auth()->id())
                        ->where('customer_id', $id)
                        ->orderBy('id', 'DESC')
                        ->get();
      return view('seller.fileShare', compact('id','getFile'));
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
       $storeFile->user_id = $request->seller_id;
       $storeFile->seller_id = $request->seller_id;
       $storeFile->file = $title;
       $storeFile->save();
        return back();
     //    return response()->json(['success'=>'File Uploaded Successfully']);
      
     // return $request->all();
    }

    public function zoomCall()
    {
      $seller = Seller::where('id', auth()->id())->first();
      return view('app', compact('seller'));
    }

}
