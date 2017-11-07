<!DOCTYPE html>
<html lang="en">
<head>
<title>CV Harapan Tour</title>
<meta charset="utf-8">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('css/layout.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
<script type="text/javascript" src="{{ asset('js/jquery-1.5.2.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/cufon-yui.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cufon-replace.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Cabin_400.font.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tabs.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.jqtransform.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/jquery.nivo.slider.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/atooltip.jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

<style>
	.full-height {
    	height: 10vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.main, .tabs ul.nav a, .content, .button1, .box1, .top { behavior:url("../js/PIE.htc")}</style>
<![endif]-->
</head>
<body id="page1">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            </div>

<div class="main">
  <!--header -->
  <header>
    <div class="wrapper">
      <h1><a href="{{ url('/') }}" id="logo">CV Harapan Tour</a></h1>
      <br><span id="slogan">Perjalanan Cepat, Aman</span>
      <br><span id="slogan">Harga Terjangkau</span>
      <br><span id="slogan">Pelayanan Ramah</span></br>
    </div>
    <nav>
      <ul id="menu">
        <li id="menu_active"><a href="{{ url('/travel') }}"><span><span>Pemesanan Tiket</span></span></a></li>
        <li><a href="{{ url('/hello') }}"><span><span>Galeri</span></span></a></li>
        <li><a href="services.html"><span><span>Patner Kerja</span></span></a></li>
        <li><a href="safety.html"><span><span>Tentang Kami</span></span></a></li>
        <li class="end"><a href="contacts.html"><span><span>Contacts Us</span></span></a></li>
      </ul>
    </nav>
  </header>
  <!-- / header -->
  <!--content -->
  <section id="content">





    
  </section>
  <!--content end-->
  <!--footer -->
  <footer>
    
      <ul id="icons">
        <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon5.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon6.jpg" alt=""></a></li>
      </ul>
      <div class="links"><h5>Copyright &copy; TRPL 5A All Rights Reserved<br>
        Design by TRPL 5A &copy; 2017</h5></div>
    
  </footer>
  <!--footer end-->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(document).ready(function () {
    tabs.init();
});
jQuery(document).ready(function ($) {
    $('#form_1, #form_2, #form_3').jqTransform({
        imgPath: 'jqtransformplugin/img/'
    });
});
$(window).load(function () {
    $('#slider').nivoSlider({
        effect: 'fade', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft' 
        slices: 15,
        animSpeed: 500,
        pauseTime: 6000,
        startSlide: 0, //Set starting Slide (0 index)
        directionNav: false, //Next & Prev
        directionNavHide: false, //Only show on hover
        controlNav: false, //1,2,3...
        controlNavThumbs: false, //Use thumbnails for Control Nav
        controlNavThumbsFromRel: false, //Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', //Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
        keyboardNav: true, //Use left & right arrows
        pauseOnHover: true, //Stop animation while hovering
        manualAdvance: false, //Force manual transitions
        captionOpacity: 1, //Universal caption opacity
        beforeChange: function () {},
        afterChange: function () {},
        slideshowEnd: function () {} //Triggers after all slides have been shown
    });
});
</script>
</body>
</html>