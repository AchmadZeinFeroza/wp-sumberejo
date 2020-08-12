@extends('layouts.apps')

@section('content')
@foreach ($data as $item)
     <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset('foto/profil')}}/{{$item->foto}}" alt="">
                  </div>
                  <div class="blog_details">
                     @if($item->visi != null)
                      <center>
                          <h2>visi
                          </h2>
                      </center>
                      
                      <p class="excert"  style="white-space:pre-wrap;">
                          {{$item->visi}}
                        </p>
                     @endif
                     @if($item->misi != null)
                        <center>
                            <h2>Misi
                            </h2>
                        </center>
                        <p  style="white-space:pre-wrap;">
                           {{$item->misi}}
                     </p>
                     @endif
                  </div>
               </div>
              
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <div class="section-tittle mb-40">
                     <h3>Follow Us</h3>
                 </div>
                 <!-- Flow Socail -->
                 <div class="single-follow mb-45">
                     <div class="single-box">
                         @if($item->facebook != null)
                         <div class="follow-us d-flex align-items-center">
                             <div class="follow-social">
                                 <a href="{{ $item->facebook }}"><img src="{{asset('aznews/assets/img/news/icon-fb.png')}}" alt=""></a>
                             </div>
                         </div> 
                         @endif
                         @if($item->gmail != null)
                         <div class="follow-us d-flex align-items-center">
                             <div class="follow-social">
                                 <a href="#"><img src="{{asset('aznews/assets/img/news/icon-tw.png')}}" alt=""></a>
                             </div>
                         </div>
                         @endif
                         @if($item->instagram != null)
                             <div class="follow-us d-flex align-items-center">
                             <div class="follow-social">
                                 <a href="#"><img src="{{asset('aznews/assets/img/news/icon-ins.png')}}" alt=""></a>
                             </div>
                         </div>
                         @endif
                         @if($item->youtube != null)
                         <div class="follow-us d-flex align-items-center">
                             <div class="follow-social">
                                 <a href="#"><img src="{{asset('aznews/assets/img/news/icon-yo.png')}}" alt=""></a>
                             </div>
                         </div>
                         @endif
                     </div>
                 </div>
                  <aside class="single_sidebar_widget newsletter_widget">
                  <h4 class="widget_title">Peta desa</h4>
                     <div class="embed-responsive embed-responsive-16by9">
                        <<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63149.80650164479!2d113.53898479984754!3d-8.415122450665221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69d4abeb7b85d%3A0xab8539caac0c52ee!2sSumberrejo%2C%20Ambulu%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1594657801328!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
@endforeach
@endsection