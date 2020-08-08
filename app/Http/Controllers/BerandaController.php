<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\m_produk;
use App\m_event;
use App\m_pariwisata;
use App\m_infografik;
use App\m_artikel;


class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = m_produk::get()->take(3);
        $event = m_event::get();
        $pariwisata = m_pariwisata::get();
        $wisata = m_pariwisata::get()->take(3);
        $artikel = m_artikel::get()->take(2);
        $infografik = m_infografik::get()->take(2);
        try {
            $response = Http::get('https://api.kawalcorona.com/indonesia');
            $grafik = $response->json();
        } catch (\Exception $e){
            $grafik = [
                0 => [
            "name" => "Indonesia",
            "positif" => "0",
            "sembuh" => "0",
            "meninggal" => "0",
            "dirawat" => "0"
                ]
            ];
        }      
        return view('index', compact('produk' , 'event' , 'pariwisata' , 'artikel' , 'infografik' ,'grafik', 'wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
