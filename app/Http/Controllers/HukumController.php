<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class HukumController extends Controller
{
    public function index()
    {
        $files = File::allFiles(public_path('Berkas/'));
        return view('produk-hukum.index' , compact('files'));
    }

    public function admin(){
        $files = File::allFiles(public_path('Berkas/'));
        return view('admin.produk-hukum',compact('files'));
    }

    public function store(Request $request){
        $file = $request->file('file');
        $file->move('Berkas/', $request->file('file')->getClientOriginalName());
        return back()->with('success','Produk Hukum Berhasil Ditambah');
    }
    public function destroy($id)
    {
        File::delete(public_path('Berkas').'/'.$id);
        return back()->with('success','Produk Hukum Berhasil Dihapus');
    }
}
