@extends('layouts.apps')

@section('content')
<main>
    <div class="section-top-border mb-5">
        <div class="container">
            <center>
                <h3 class="" style="">Jumlah terpapar Covid-19</h3>
                <div class="border-bottom mt-3"></div>
            </center>
            <center>
            <div class="row mt-5">
                <div style="height:100px; border-radius:10px;" class="col  ">
                    <h5 style=" " class="">Positif</h5>
                </div>
                <div style="height:100px; border-radius:10px;" class="col  ">
                    <h5 style=" " class="">Sembuh</h5>
                </div>
                <div style="height:100px; border-radius:10px;" class="col ">
                    <h5 style=" " class="">Meninggal dunia</h5>
                </div>
            </div>
            </center>
            <center>
                @foreach ($grafik as $item)
                    
                <div style="margin-top:-4%;" class="row ">
                    <div style="height:100px; border-radius:10px;" class="col bg-danger">
                        <h1 style="color:white; " class="mt-4">{{ $item['positif'] }}</h1>
                    </div>
                    <div style="height:100px; border-radius:10px;" class="col bg-primary circle ">
                        <h1 style="color:white; " class="mt-4">{{ $item['sembuh'] }}</h1>
                    </div>
                    <div style="height:100px; border-radius:10px;" class="col bg-dark">
                        <h1 style="color:white; " class="mt-4">{{ $item['meninggal'] }}</h1>
                        
                    </div>
                </div>
                @endforeach
            </center>
            <br>
            <br>
            
        </div>    
    </div>
    <div class="section-top-border mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <h3>Edukasi covid</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="{{url('covid')}}" class="text-dark">infografis edukasi covid-19 </a></li>
                        <li class="list-group-item"><a href="{{url('covid/video')}}" class="text-dark">video edukasi covid-19</a></li>
                        <li class="list-group-item"><a href="{{url('covid/artikel')}}" class="text-dark">Artikel Edukasi COVID 19</a> </li>
                      </ul>
                </div>
                @yield('content-covid')
            </div>
        </div>    
    </div>
</main>
@endsection