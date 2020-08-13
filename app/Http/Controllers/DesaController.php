<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_profil;
use App\m_struktur;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = m_profil::get();
        $struktur = m_struktur::get();
        return view('desa.index', compact('data' , 'struktur'));
    }
    public function visi()
    {
        $data = m_profil::get();
        return view('desa.visimisi', compact('data'));
    }

    public function struktur(){
        $data = m_profil::get();
        return view('desa.struktur', compact('data'));
    }

    // Admin 

    public function v_profil(){
        $data = m_profil::get();
        return view('admin.profil-desa', compact('data'));
    }

    public function v_struktur(){
        $data = m_struktur::get();
        return view('admin.struktur', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new m_struktur;
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,gif,webp,pdf'
        ]);
        $data->nama = $request['nama'];
        $data->jabatan = $request['jabatan'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/struktur/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Event Berhasil Ditambah');
    }
    public function update_struktur(Request $request, $id){
        $data = m_struktur::find($id);
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,gif,webp,pdf|max:20000'
        ]);
        $data->nama = $request['nama'];
        $data->jabatan = $request['jabatan'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/struktur/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            }
        $data->save();
        return back()->with('success','Event Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data = m_profil::find($id);
        $data->deskripsi = $request['deskripsi'];
        $data->visi = $request['visi'];
        $data->misi = $request['misi'];
        $data->penduduk = $request['penduduk'];
        $data->luas = $request['luas'];
        $data->dusun = $request['dusun'];
        $data->facebook = $request['facebook'];
        $data->telpon = $request['telpon'];
        $data->instagram = $request['instagram'];
        $data->youtube = $request['youtube'];
        $data->gmail = $request['gmail'];
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/profil/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        if($request->hasFile('struktur')){
            $request->file('struktur')->move('foto/profil/', $request->file('struktur')->getClientOriginalName());
            $data->struktur = $request->file('struktur')->getClientOriginalName();
        }
        $data->save();
        return back()->with('success','Profil Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = m_struktur::find($id)->delete();
        return back()->with('success','Event Berhasil Dihapus');
    }
}
