@extends('layouts-admin.master')
@section('content')
<div class="row">
    <div class="col-md-6 col-xl-6">
        <a href="">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="mx-auto">
                        <h3>Artikel</h3>
                        <h1 class="text-center">{{$artikel}}</h1>
                    </div>       
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-6">
      <a href="">
          <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="mx-auto">
                    <h3>Event</h3>
                    <h1 class="text-center">{{$event}}</h1>
                </div>       
            </div>
          </div>
      </a>
      </div>
    <div class="col-md-6 col-xl-6">
      <a href="">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="mx-auto">
                    <h3>Infografik</h3>
                    <h1 class="text-center">{{$infografik}}</h1>
                </div>       
            </div>
        </div>
      </a>
    </div>  
    <div class="col-md-6 col-xl-6">
      <a href="">
        <div class="card mb-3 widget-content bg-slick-carbon">
            <div class="widget-content-wrapper text-white">
                <div class="mx-auto">
                    <h3>Pariwisata</h3>
                    <h1 class="text-center">{{$pariwisata}}</h1>
                </div>       
            </div>
        </div>
      </a>
    </div>  
    <div class="col-md-6 col-xl-6 mx-auto">
      <a href="">
        <div class="card mb-3 widget-content bg-asteroid">
            <div class="widget-content-wrapper text-white">
                <div class="mx-auto">
                    <h3>Produk</h3>
                    <h1 class="text-center">{{$produk}}</h1>
                </div>       
            </div>
        </div>
      </a>
    </div>  
</div>
@endsection