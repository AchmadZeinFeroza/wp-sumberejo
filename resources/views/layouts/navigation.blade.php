<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
               <div class="header-bottom header-sticky shadow">
                    <div class="container ">
                        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 ">
                                <a class="navbar-brand" href="#">
                                    <img style="width:160px;height:auto;" src="{{asset('aznews/assets/img/logo/kab.png')}}" alt="" loading="lazy">
                                </a>
                                <h3 class="my-0 mr-md-auto font-weight-normal" style="font-family:arkipelago;font-size:44px;"></h3>
                            <nav style="" class="navbar navbar-expand-lg navbar-light my-2 my-md-0 mr-md-3">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span style="margin-right:300px;" class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto ">
                                    <li class="nav-item  ">
                                        <a class="nav-link " href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        profil desa
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{url('desa')}}">Sejarah</a>
                                        <a class="dropdown-item" href="{{url('desa/visi')}}">Visi & Misi</a>
                                        <a class="dropdown-item" href="{{url('desa/struktur')}}">struktur</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('produk')}}">Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('event')}}">Event</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('pariwisata')}}">Pariwisata</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('covid')}}">Covid-19</a>
                                    </li>
                                    </ul>
                                   
                                </div>
                            </nav>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Header End -->
    </header>