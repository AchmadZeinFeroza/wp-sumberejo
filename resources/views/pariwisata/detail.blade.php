@extends('layouts.apps')

@section('content')
<main>
     
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset('foto/pariwisata')}}/{{$data->foto}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$data->nama}}</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="{{ $data->lokasi }}"><i class="fa fa-user"></i> Lokasi</a></li>
                     </ul>
                     <p class="excert" style="white-space:pre-wrap;">
                        {{$data->deskripsi}}
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget instagram_feeds">
                     <a href=""><h4 class="widget_title">Galeri Pariwisata</h4></a> 
                     <ul class="instagram_row flex-wrap">
                        @foreach ($datas as $item)
                        <li>
                           <a href="{{url('pariwisata/detail' , $item->id_pariwisata)}}">
                              <img class="img-fluid" src="{{asset('foto/pariwisata')}}/{{$item->foto}}" alt="">
                           </a>
                        </li>
                        @endforeach
                     </ul>
                  </aside>
               </div>
            </div>
         </div>                  
      </div>
   </section>
   <!--================ Blog Area end =================-->

</main>
@endsection