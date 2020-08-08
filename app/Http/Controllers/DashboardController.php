<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_artikel;
use App\m_event;
use App\m_infografik;
use App\m_pariwisata;
use App\m_produk;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = m_artikel::get()->count();
        $event = m_event::get()->count();
        $infografik = m_infografik::get()->count();
        $pariwisata = m_pariwisata::get()->count();
        $produk = m_produk::get()->count();
        return view('admin.dashboard', compact('artikel','event','infografik','pariwisata','produk'));
    }
}
