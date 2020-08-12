<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>sumberejo </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('aznews/assets/img/logo/pemkab.png')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/ticker-style.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/x.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{ asset('aznews/assets/css/style.css')}}">
            <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
            <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
            <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Frank+Ruhl+Libre:wght@900&family=Kaushan+Script&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
        <style>
        .trend-bottom-cap h5{
            color:white;
            position: static;
            display:inline;
            color: #fff;
            background-color: #fc3f00;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .trend-bottom-cap h5:hover{
            background-color:transparent;
            color:#fc3f00;
        }
        .trend-bottom-cap .cap{
            margin-top:3%;
        }
        .cap a:hover{
            color:black;
        }
        .carousel-item{
            height:500px;
        }
        .btn-custom{
            width: 100px;
            background-color: #f27420;
            border: none;
            height: 30px;
            border-radius: 5px;  
        }
        .btn-custom:hover{
            background-color:transparent;
            border:1px solid #f27420;
            color: #f27420;
            cursor:pointer;
        }
        .btnn-custom{
           
           background-color:transparent;
           border:1px solid #f27420;
           color: #f27420;
           cursor:pointer;
           font-size:30px;
           padding: 1% 3%;
           border-radius: 30px;
       }
       .btnn-custom:hover{
           background-color:#f27420;
           color: white;
           cursor:pointer;
           font-size:30px;
           padding: 1% 3%;
           border-radius: 30px; 
       }
        .slick-arrow{
            position:absolute;
            bottom:-50px;
            z-index:inherit;
            background-color: white;
            border:1px solid #f27420;
            padding:8px 15px;
            border-radius:50px;
            width:100px;
            outline:none;
            color:#f27420;  
            cursor:pointer;
        }
        .slick-next{
            left:52%;
        }
        .slick-prev{
            left:42%;
        }
        .video-background {
            position: relative;
            background-color: black;
            height: 87vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
            margin-top:-16px;
        }

        .video-background video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        .video-background .container {
            position: relative;
            z-index: 2;
        }

        .video-background .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
        }

        .tittle-custom:hover {
            color:#f27420;
        }

        @media (pointer: coarse) and (hover: none) {
            .video-background {
                background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
            }
            header video {
                display: none;
            }
        }
        </style>
   </head>

   <body>
       
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <!-- navigation start -->
    @include('layouts.navigation')
    <!-- navigation end -->

    <!-- content start -->
    @yield('content')
    <!-- content end -->

   
    
   <footer>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>                             
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('aznews/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('aznews/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('aznews/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('aznews/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/slick.min.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{asset('aznews/assets/js/gijgo.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('aznews/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('aznews/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- Breaking New Pluging -->
        <script src="{{asset('aznews/assets/js/jquery.ticker.js')}}"></script>
        <script src="{{asset('aznews/assets/js/site.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('aznews/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('aznews/assets/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('aznews/assets/js/contact.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('aznews/assets/js/mail-script.js')}}"></script>
        <script src="{{asset('aznews/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('aznews/assets/js/plugins.js')}}"></script>
        <script src="{{asset('aznews/assets/js/main.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- slick -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
        <script>
            AOS.init();
        </script>
        <script>
        $('.slicky').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false
                }
                
            }
        ]
        });
        
        $(window).on('resize', function() {
            $('.slicky').slick('resize');
         });
        </script>
        <script>
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox();
                });
        </script> 
        
    </body>
</html>