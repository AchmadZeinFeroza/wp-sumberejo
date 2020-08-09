@extends('layouts.apps')

@section('content')
<main>
    <!-- Start Youtube -->
    <div class="youtube-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        @foreach ($data as $link)
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/{{trim($link->youtube, 'https://www.youtube.com/watch?v=')}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-caption">
                            <div class="top-caption">
                                <span class="color1">Pariwisata</span>
                            </div>
                            <div class="bottom-caption">
                                <h2>Pariwisata Desa Sumberejo</h2>
                                <p>Desa Sumberejo merupakan salah satu desa yang terletak paling selatan dari Kecamatan Ambulu Kabupaten Jember, desa ini berada didekat pantai Watu Ulo dan Payangan. Karena letaknya jauh dengan kota, mayoritas masyarakatnya adalah petani, pedagang, dan nelayan. Desa Sumberejo mempunyai banyak icon pariwisata, antara lain Pantai Watu Ulo, Teluk Love, Bukit Kambing, dan sebagainya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testmonial-nav text-center">
                            @foreach ($data as $link)
                            <div class="single-video">
                                <iframe  src="https://www.youtube.com/embed/{{trim($link->youtube, 'https://www.youtube.com/watch?v=')}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>{{$link->nama}}</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Start youtube -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($data as $pariwisata)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{asset('foto/pariwisata')}}/{{$pariwisata->foto}}" alt="">
                                <a href="{{url('pariwisata/detail' , $pariwisata->id_pariwisata)}}" class="blog_item_date">
                                    <p>Detail</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('pariwisata/detail' , $pariwisata->id_pariwisata)}}">
                                    <h2>{{$pariwisata->nama}}</h2>
                                </a>
                                <p>{{ Illuminate\Support\Str::limit($pariwisata->deskripsi, $limit = 120, $end = '...') }}</p>
                                <ul class="blog-info-link">
                                    <li><a href="{{$pariwisata->lokasi}}"><i class="fa fa-user"></i> Lokasi</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach ($data as $item)
                            <div class="media post_item">
                                <img src="{{asset('foto/pariwisata')}}/{{$item->foto}}" alt="post" class="img-fluid" width="50%">
                                <div class="media-body">
                                    <a href="{{url('pariwisata/detail' , $item->id_pariwisata)}}">
                                        <h3>{{$item->nama}}</h3>
                                    </a>
                                    <p>{{ $item->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>

                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

</main>


@endsection