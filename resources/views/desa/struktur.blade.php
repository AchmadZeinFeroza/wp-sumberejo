@extends('layouts.apps')

@section('content')
@foreach ($data as $item)
     <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 posts-list text-center">
                <h2>Struktu Organisasi</h2>
                <br>
                <img class="img-fluid" src="{{asset('foto/profil')}}/{{$item->struktur}}" alt="">
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
 @endforeach
 @endsection