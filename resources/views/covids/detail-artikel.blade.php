@extends('layouts.app')

@section('content')
<main>
     
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
       <div class="container">
          <div class="row">
             <div class="col-lg-8 posts-list mx-auto">
                <div class="single-post">
                    <div class="text-center">
                        <div class="feature-img">
                           <img class="img-fluid" src="{{asset('foto/artikel')}}/{{$data->foto}}" alt="">
                        </div>
                        <br>
                        <div class="blog-details">
                            <h2>{{$data->judul}}</h2>
                        </div>
                    </div>
                   <div class="blog_details">
                      <p class="excert text-justify" style="white-space:pre-wrap;">
                         {{$data->deskripsi}}
                      </p>
                   </div>
                </div>
             </div>
          </div>                  
       </div>
    </section>
    <!--================ Blog Area end =================-->
 
 </main>
@endsection