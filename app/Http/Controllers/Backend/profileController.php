<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
class profileController extends Controller
{
    public function view(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.user.view-profile',compact('user'));
    }
    public function edit(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('backend.user.edit-profile',compact('editData'));
    }
    public function update(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
         $data->mobile = $request->mobile;
         $data->address = $request->address;
         $data->gender = $request->gender;
         if ($request->file('image')){
             $file = $request->file('image');
             @unlink(public_path('upload/user_images/'.$data->image));
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/user_images'), $filename);
             $data['image']= $filename;
         }
       
        $data->save();
        return redirect()->route('profile.view')->with('success','Profile Update successfull');
    }
}