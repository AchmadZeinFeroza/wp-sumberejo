@extends('layouts.apps')

@section('content')
     <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset('foto/produk')}}/{{$data->foto}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>
                        {{$data->judul}}
                     </h2>
                     
                     <p class="excert" style="white-space:pre-wrap;">
                        {{$data->deskripsi}}
                     </p>
                  </div>
               </div>
              
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">produk lainnya</h4>
                     <ul class="instagram_row flex-wrap">
                        @foreach ($datas as $item)
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="{{asset('foto/produk')}}/{{$item->foto}}" alt="">
                           </a>
                        </li>
                        @endforeach
                     </ul>
                  </aside>
                  <!-- <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside> -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

@endsection