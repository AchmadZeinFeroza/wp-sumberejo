<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_pariwisata;

class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = m_pariwisata::get();
        return view('pariwisata.index',compact('data'));
    }
    public function pariwisata(){
        $data = m_pariwisata::get();
        return view('admin.pariwisata', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new m_pariwisata;
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'youtube' => 'required',
            'deskripsi' => 'required|min:50',
            'foto' => 'required|image|mimes:jpeg,png,gif,webp,pdf'
        ]);
        $data->nama = $request['nama'];
        $data->lokasi = $request['lokasi'];
        $data->deskripsi = $request['deskripsi'];
        $data->youtube = $request['youtube'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/pariwisata/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Pariwisata Berhasil Ditambah');
    }

    public function show($id)
    {
        $data = m_pariwisata::find($id);
        $datas = m_pariwisata::get();
        return view('pariwisata.detail', compact('data', 'datas'));
    }

    public function update(Request $request, $id)
    {
        $data = m_pariwisata::find($id);
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'youtube' => 'required',
            'deskripsi' => 'required|min:50',
            'foto' => 'required|image|mimes:jpeg,png,gif,webp,pdf'
        ]);
        $data->nama = $request['nama'];
        $data->lokasi = $request['lokasi'];
        $data->deskripsi = $request['deskripsi'];
        $data->youtube = $request['youtube'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/pariwisata/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Pariwisata Berhasil Diubah');
    }

    public function destroy($id)
    {
        $data = m_pariwisata::find($id)->delete();
        return back()->with('success','Pariwisata Berhasil Dihapus');
    }
}
