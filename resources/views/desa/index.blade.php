@extends('layouts.apps')

@section('content')
<main>
 @foreach ($data as $item)
        <div class="about-area">
            <div class="container mt-5">
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                                    <div class="about-right mb-90">
                                        <div class="about-img">
                                            <img src="{{asset('foto/profil')}}/{{$item->foto}}" alt="">
                                        </div>
                                        <div class="section-tittle mb-30 pt-30">
                                            <h3>Sejarah</h3>
                                        </div>
                                        <div class="about-prea">
                                            <p class="about-pera1 mb-25">
                                                {{ $item->deskripsi }}
                                            </p>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Section Tittle -->
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
                            <!-- New Poster -->
                            <!-- <div class="news-poster d-none d-lg-block">
                                <img src="{{asset('aznews/assets/img/news/news_card.jpg')}}" alt="">
                            </div> -->
                            <div class="section-tittle mb-40">
                                <h3>Aparatur desa</h3>
                            </div>
                            <aside class="container shadow">
                                <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @php $i = 0;@endphp
                                        @foreach ($struktur as $item)
                                        @if($i === 0)
                                            <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}" class="active"></li>
                                        @else
                                            <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}"></li>
                                        @endif
                                        @php $i++;@endphp
                                        @endforeach
                                    </ol>
                                    <div  class="carousel-inner">
                                        @php $j = 0;@endphp
                                        @foreach ($struktur as $item)       
                                        @if($j === 0)                               
                                        <div class="carousel-item active">
                                        <img src="{{asset('foto/struktur')}}/{{$item->foto}}" class="d-block w-100 rounded" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 style="color:white;">{{$item->nama}}</h5>
                                            <p style="color:black;">{{$item->jabatan}}</p>
                                        </div>
                                        </div>
                                        @else
                                        <div class="carousel-item">
                                            <img src="{{asset('foto/struktur')}}/{{$item->foto}}" class="d-block w-100 rounded" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 style="color:white;">{{$item->nama}}</h5>
                                                <p style="color:black;">{{$item->jabatan}}</p>
                                            </div>
                                            </div>
                                        @endif
                                        @php $j++;@endphp
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </aside>
                        </div>
                   </div>
            </div>
        </div>
 @endforeach
    </main>

@endsection