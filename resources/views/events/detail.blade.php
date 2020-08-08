@extends('layouts.apps')

@section('content')

<main>
  <div class="container mt-5 mb-5">
    <div class="card mx-auto mb-3" style="width: 40rem;">
      <img src="{{asset('foto/event')}}/{{$data->foto}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$data->nama}}</h5>
            <div class="row mt-3">
            <div class="col border">
                <p>Diselenggarakan oleh :</p>
                {{$data->penyelenggara}}
              </div>
              <div class="col border">
                <p>Tanggal & waktu :</p>
                <p>{{$data->tgl}}</p>
                <p>{{$data->waktu}}</p>
              </div>
              <div class="col border">
                <p>lokasi :</p>
                <p>{{$data->lokasi}}</p>
              </div>
            </div>
            <h5 class="card-title mt-5">Deskripsi Event </h5>
            <p class="card-text" style="white-space:pre-wrap;">{{$data->deskripsi}}</p>
        </div>
    </div>
  </div>
    
</main >
@endsection