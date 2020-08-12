@extends('layouts.apps')

@section('content')
<main>
    <aside>
        <div style="width:50%;" class="container">
            <div class="py-5 text-center">
                <img style="width:10%;" src="{{asset('aznews/assets/img/logo/pemkab.png')}}" alt="" class="d-block mx-auto mb-4">
                <h2>Produk Hukum</h2>
                <p>UU 6 tahun 2014 tentang Desa (UU Desa) menyebutkan bahwa Desa adalah desa dan desa adat atau yang disebut dengan nama lain, selanjutnya disebut Desa, adalah kesatuan masyarakat hukum yang memiliki batas wilayah yang berwenang untuk mengatur dan mengurus urusan pemerintahan, kepentingan masyarakat setempat berdasarkan prakarsa masyarakat, hak asal usul, dan/atau hak tradisional yang diakui dan dihormati dalam sistem pemerintahan Negara Kesatuan Republik Indonesia.</p>
                <div class="border-bottom"></div>
            </div>
        </div>
    </aside>
    <div class="album py-5 ">
        <div class="container">
            <div class="row">
                <section class="whats-news-area pt-50 pb-20 mt-5">
                <div class="col-12">
                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- card one -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach ($files as $item)  
                                    @php $ext = pathinfo(($item->getPath()).'/'.$item->getFileName(), PATHINFO_EXTENSION) @endphp       
                                    <a href="{{basename($item->getPath()).'/'.$item->getFileName()}}"  download>                             
                                    <div class="col-lg-4 col-md-6 shadow" data-aos="fade-righ" data-aos-delay="100">
                                        <div class="single-what-news mb-100">
                                            <div class="what-img"
                                            style="max-height:300px;text-align:center;overflow:hidden;padding:0;">
                                            @if ( $ext === 'pdf')
                                                <img src="{{asset('foto/icon')}}/pdf.svg" alt="">
                                            @elseif( $ext === 'word')
                                                <img src="{{asset('foto/icon')}}/word.png" alt="">
                                            @elseif( $ext === 'jpeg' || $ext === 'png' || $ext === 'jpg' || $ext === 'svg')
                                                <img src="{{asset('foto/icon')}}/image.png" alt="">
                                            @else
                                                <img src="{{asset('foto/icon')}}/file.png" alt="">
                                            @endif
                                            </div>
                                            <div class="what-cap">
                                                <span class="color1">Produk Hukum</span>
                                                <h4><a
                                                    href="{{basename($item->getPath()).'/'.$item->getFileName()}}">{{$item->getFileName()}}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Nav Card -->
                </div>
            </section>
            </div>
        </div>
    </div>
        </div>
    </div>
</main>

@endsection