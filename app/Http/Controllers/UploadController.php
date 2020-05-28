<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Guide;
use App\Attraction;

class UploadController extends Controller
{
    public function index(Request $request){

        $guide=Auth::user()->guides;
        $user_id =$request->input("user_id");
        $user_name =$request->input("user_name");
        $data=['user_id'=>$user_id,'user_name'=>$user_name,'guide'=>$guide];

        return view('/upload',$data);
    }

    public function upload(Request $request)
    {
        $a=$request->input('a');
        mb_internal_encoding('UTF-8');
        $user_id=$request->input("upload_id");
        $user_name =$request->input("user_name");
        $a=Auth::user();
        $id_card =$request->input("id_card");
        $fontsize =$request->input("fontsize");
        $photo =$request->input("photo");
        $license =$request->input("license");
        $photo_name =$request->input("photo_name");
        $license_name =$request->input("license_name");
        $motive =$request->input("motive");
        $guide = Guide::where('user_id',$user_id)->first();
        $guide->id_card =$id_card;
        $guide->fontsize =$fontsize;
//        $guide->name =$user_name;
        $guide->photo ='../106-project2/public/storage/'.$request->file('photo')->store('image');//存檔&上傳檔名
        $guide->license ='../106-project2/public/storage/'.$request->file('license')->store('image');
        $guide->motive =$motive;
        $guide->save();
        return view('/fhome',[ 'a' => $a]);
    }






    public function index2(Request $request){
        $user_id =$request->input("user_id");
        $data=['user_id'=>$user_id];

        return view('/upload2',$data);
    }


    public function upload2(Request $request)
    {







    }

}
