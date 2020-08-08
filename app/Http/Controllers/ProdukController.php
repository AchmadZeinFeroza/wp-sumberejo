<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = m_produk::get();
        return view('product.produk', compact('data'));
    }
    public function produk(){
        $data = m_produk::get();
        return view('admin.produk', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new m_produk;
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required|min:50',
            'foto' => 'required|image|mimes:jpeg,png,gif,webp,pdf'
        ]);
        $data->judul = $request['judul'];
        $data->deskripsi = $request['deskripsi'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/produk/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','produk Berhasil Ditambah');
    }

    public function show($id)
    {
         $data = m_produk::find($id);
         $datas = m_produk::get();
        return view('product.detail', compact('data', 'datas'));
    }

    public function update(Request $request, $id)
    {
        $data = m_produk::find($id);
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required|min:50',
            'foto' => 'required|image|mimes:jpeg,png,gif,webp,pdf'
        ]);
        $data->judul = $request['judul'];
        $data->deskripsi = $request['deskripsi'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/produk/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','produk Berhasil Ditambah');
    }

    public function destroy($id)
    {
        $data = m_produk::find($id)->delete();
        return back()->with('success','produk Berhasil Dihapus');
    }
}
