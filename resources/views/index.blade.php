@extends('layouts.apps')

@section('content')
<main>
    <section>
        <div class="video-background">
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="{{asset('aznews/assets/img/banner/banner.mp4')}}" type="video/mp4">
            </video>
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 style="color:white;font-family: 'Kaushan Script', cursive;" class="display-3">Selamat Datang
                        </h1>
                        <p style="color:white;font-family: 'Kaushan Script', cursive;" class="lead mb-0">di website
                            resmi desa sumberejo</p>
                        <a href="#1"><button type="button" class="btnn-custom mt-5 animate__heartBeat forever" > Let's Go</button></a>
                    </div>
                </div>
            </div>
            <img src="{{asset('aznews/assets/img/banner/wave-d.png')}}" alt=""
                style="position: absolute; bottom:0;z-index:1;width: 100%;">
        </div>
    </section>

    <!-- pariwisata start -->
    <section id="1" class="mt-4">
        <div class="container-fluid py-4">
            <div class="container">
                <center>
                    <h1 class="mb-5" style="font-family: 'Kaushan Script', cursive;">Pariwisata</h1>
                </center>
                <div class="row mb-5">
                    <div class="col-lg-8" data-aos="fade-up">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item "
                                        src="https://www.youtube.com/embed/Eecr2TdZ4-s?autoplay=1;&rel=0;"
                                        allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <h4 class="mb-2">Artikel pariwisata</h4>
                        <div class="trending-bottom text-center">
                            <div class="row">
                                @foreach ($wisata as $item)
                                <div class="col-lg-4 mx-auto " style="overflow: hidden;">
                                    <div class="single-bottom mb-35 shadow">
                                        <div class="trend-bottom-img mb-30" style="overflow:hidden;padding-top:5%;">
                                            <img src="{{asset('foto/pariwisata')}}/{{$item->foto}}"
                                                style="max-height:300px;text-align:center;overflow:hidden;width:auto;">
                                        </div>
                                        <div>
                                            <h5 class="mb-4"><a class="tittle-custom"
                                                    href="{{url('pariwisata/detail' , $item->id_pariwisata)}}">{{$item->nama}}</a>
                                            </h5>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4" data-aos="fade-left">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>Gallery Pariwisata</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="container">
                                <div class="blog_right_sidebar">
                                    <aside class="single_sidebar_widget instagram_feeds">
                                        <a href="">
                                            <h4 class="widget_title">Galeri Pariwisata</h4>
                                        </a>
                                        <ul class="instagram_row flex-wrap">
                                            @foreach ($pariwisata as $item)
                                            <li>
                                                <a href="{{asset('foto/pariwisata')}}/{{$item->foto}}"
                                                    data-toggle="lightbox" data-gallery="example-gallery"
                                                    class="col-sm-4">
                                                    <img class="img-fluid"
                                                        src="{{asset('foto/pariwisata')}}/{{$item->foto}}" alt=""
                                                        style="max-height:80px;text-align:center;overflow:hidden;padding:0;">
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </aside>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="assets/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pariwisata end -->
    <!-- Produkk bumdes start -->
    <section>
        <div class="container-fluid pt-4"
            style="background-image:url('{{asset('aznews/assets/img/banner/background1.png')}}');">
            <div class="container">
                <div class="trending-bottom ">
                    <center>
                        <h1 class="mb-3" style="font-family: 'Kaushan Script', cursive;color:white;">Produk Bumdes</h1>
                    </center>
                    <div class="row">
                        <?php $i=200;
                    $a=0;?>
                        @foreach ($produk as $item)
                        <div class="col-md-4 mb-5" data-aos="zoom-in-down" data-aos-delay="<?=$a=$a+$i;?>">
                            <div style="background-color:transparent;border:none;" class="card mb-4 shadow-sm">
                                <div class="panel-body "
                                    style="max-height:150px;text-align:center;overflow:hidden;padding:0;">
                                    <img src="{{asset('foto/produk')}}/{{$item->foto}}" class=" mx-auto d-block mt-2 "
                                        alt="Responsive image" width="50%">
                                </div>
                                <div class="card-body">
                                    <center>
                                        <h4 style="color:white;" class="card-text">{{$item->judul}}</h4>
                                        <a href="{{url('produk/detail' , $item->id_produk)}}">
                                            <button type="button" class="btn-custom ">Detail</button>
                                        </a>
                                    </center>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- produk bumdes end -->
    <!-- event start -->
    <section>
        <div class="container-fluid pt-4">
            <div class="container">
                <center>
                    <h1 class="mb-5" style="font-family: 'Kaushan Script', cursive;">Event Desa</h1>
                </center>
                <!-- slick -->
                <div class="slicky" data-aos="flip-up">
                    @foreach ($event as $item)
                    <div class="col" style="float: left;">
                        <div class="card mb-1 shadow">
                            <div class="" style="max-height:300px;text-align:center;overflow:hidden;padding:0;">
                                <img src="{{asset('foto/event')}}/{{$item->foto}}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$item->nama}}</h5>
                                <div class="row">
                                    <div class=".col-6 ml-3">
                                        <p>Tanggal : </p>
                                    </div>
                                    <div class="col">
                                        <p>{{$item->tgl}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=".col-6  ml-3">
                                        <p>Waktu : </p>
                                    </div>
                                    <div class="col">
                                        <p>{{$item->waktu}}</p>
                                    </div>
                                </div>
                                <a href="{{url('event')}}" class="btn-custom p-2 ">Lihat selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- event end -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20 mt-5">
        <div class="container">
            <center>
                <h1 class="mb-5" style="font-family: 'Kaushan Script', cursive;">Covid -19</h1>
            </center>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            @foreach ($artikel as $item)
                                            <div class="col-lg-6 col-md-6" data-aos="fade-righ" data-aos-delay="100">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img"
                                                        style="max-height:300px;text-align:center;overflow:hidden;padding:0;">
                                                        <img src="{{asset('foto/artikel')}}/{{$item->foto}}" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">Artikel</span>
                                                        <h4><a
                                                                href="{{url('covid/artikel/Lihat selengkapnya' , $item->id_artikel)}}">{{$item->judul}}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @foreach ($infografik as $item)
                                            <div class="col-lg-6 col-md-6" data-aos="fade-righ" data-aos-delay="200">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img"
                                                        style="max-height:300px;text-align:center;overflow:hidden;padding:0;">
                                                        <img src="{{asset('foto/infografik')}}/{{$item->foto}}" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">infografik</span>
                                                        <h4><a href="{{url('covid')}}">{{$item->judul}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-out">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-40">
                        <h3>Data sebaran Covid</h3>
                    </div>
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            @foreach ($grafik as $item)
                            <div style="background-color:#2C347C;" class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span style="color:white;">{{ $item['positif'] }}</span>
                                    <p style="color:white;">Positif</p>
                                </div>
                            </div>
                            <div style="background-color:#3C928C;" class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span style="color:white;">{{ $item['sembuh'] }}</span>
                                    <p style="color:white;">Sembuh</p>
                                </div>
                            </div>
                            <div style="background-color:#EC6F58;" class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span style="color:white;">{{ $item['meninggal'] }}</span>
                                    <p style="color:white;">Meninggal</p>
                                </div>
                            </div>
                            <div style="background-color:#CEB546;" class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span style="color:white;">{{ $item['dirawat'] }}</span>
                                    <p style="color:white;">Aktif</p>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="assets/img/news/news_card.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->

</main>


@endsection