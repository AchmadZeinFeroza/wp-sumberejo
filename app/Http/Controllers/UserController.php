<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    public function index(){
        $data = User::get();
        return view('admin.user', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->username = $request['username'];
        if($request['password'] != null){
            $data->password = Hash::make($request['password']);
        }
        $data->save();
        return back()->with('success','produk Berhasil Ditambah');
    }
}
