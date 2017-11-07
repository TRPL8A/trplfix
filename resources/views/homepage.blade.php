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
    <div class="for_banners">
      <article class="col1">
        <div class="tabs">
          <ul class="nav">
            <li class="selected"><a href="#Flight">Tiket Pesawat</a></li>
            <li><a href="#tour">Wisata</a></li>
            <li class="end"><a href="#Rental">Rental Mobil</a></li>
          </ul>
          <div class="content">
            <div class="tab-content" id="Flight">
              <form id="form_1">
                {!! Form::open(['method' => 'GET', 'url' => '/cari', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                <div>
                  <div class="radio">
                    <div>
                      <input type="radio" name="name1" checked>
                      <span class="left">Domestic</span>
                      <input type="radio" name="name1">
                      <span class="left">International</span> </div>
                  </div>
                  <div class="row"> <span class="left">Dari</span>
                    <input type="text" class="input" name="search">
                  </div>
                  <div class="row"> <span class="left">Tujuan</span>
                    <input type="text" class="input" name="tujuan">
                  </div>
                  <div>
                    <div class="col1">
                      <div class="row"> <span class="left">Berangkat</span>
                        <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                      </div>
                  </div>
                  <div class="row"> <span class="left">Dewasa</span>
                    <input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Anak-anak</span>
                    <input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
                    <span class="pad_left1">(0-3 tahun)</span> </div>
                  <div> <span class="right relative"><button type="submit"><strong>Cari</strong></button></span> 
                    <a href="#" class="link1">More Options</a> </div>
                </div>
                {!! Form::close() !!}
              </form>
            </div>
            <div class="tab-content" id="Hotel">
              <form id="form_2" action="#" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="checkbox" checked>
                      Our Partners </div>
                  </div>
                  <div class="row"> <span class="left">Location</span>
                    <input type="text" class="input">
                  </div>
                  <div class="row"> <span class="left">Check-in </span>
                    <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Check-out </span>
                    <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Rooms</span>
                    <input type="text" class="input2" value="1"  onblur="if(this.value=='') this.value='1'" onFocus="if(this.value =='1' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Adults</span>
                    <input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Children</span>
                    <input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
                    <span class="pad_left1">(0-11 years)</span> </div>
                    <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Search</strong></a></span>
                   <a href="#" class="link1">More Options</a> </div>
                </div>
              </form>
            </div>
            <div class="tab-content" id="Rental">
              <form id="form_3" action="#" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="radio" name="name2" checked>
                      <span class="left">Avis</span>
                      <input type="radio" name="name2">
                      <span class="left">Europcar</span> </div>
                  </div>
                  <div class="row"> <span class="left">Rental location</span>
                    <input type="text" class="input">
                  </div>
                  <div class="row"> <span class="left">Pick-up</span>
                    <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                    <input type="text" class="input2" value="12:00"  onblur="if(this.value=='') this.value='12:00'" onFocus="if(this.value =='12:00' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Return</span>
                    <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                    <input type="text" class="input2" value="12:00"  onblur="if(this.value=='') this.value='12:00'" onFocus="if(this.value =='12:00' ) this.value=''">
                  </div>
                  <div class="row_select"> <span class="left">Miles &amp; More</span>
                    <select>
                      <option>no membership</option>
                    </select>
                  </div>
                  <div class="row_select">
                    <div class="pad_left1"> Country of residence<br>
                      <div class="select1">
                        <select>
                          <option>&nbsp;</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Search</strong></a></span> </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div class="wrapper pad1">
      <article class="col1">
        <div class="box1">
          <h2 class="top">Promo Paket Super Rekreasi</h2>
          <div class="pad"> <strong>Dari Jember Ke Malang</strong><br>
            <ul class="pad_bot1 list1">
              <li> <span class="right color1">Harga Mulai Rp 2 Juta</span> Jatim Park 1</a> </li>
            </ul>
            <strong>Dari Jember Ke Bali</strong><br>
            <ul class="pad_bot1 list1">
              <li> <span class="right color1">Harga Mulai Rp 1 Juta</span> Pantai Kuta</a> </li>
            </ul>
            <strong>Dari Jember Ke JATENG</strong><br>
            <ul class="pad_bot2 list1">
              <li> <span class="right color1">Harga Mulai 1,2 Juta</span> Candi Borobudur</a> </li>
              <li> <span class="right color1">Harga Mulai 1 Juta</span> Candi Prambanan</a> </li>
              <li> <span class="right color1">Harga Mulai 1,5 Juta</span> Malioboro</a> </li>
            </ul>
          </div>
          <h2>Tour Walisongo</h2>
          
            <ul class="pad_bot2 list1">
              <li class="pad_bot1"> <span class="right color1">Harga Mulai 5 Juta</span> WaliLimo</a> </li>
              <li class="pad_bot1"> <span class="right color1">Harga Mulai 10 Juta</span> WaliSongo</a> </li>
            </ul>
          
        </div>
      </article>
      <article class="col2">
        <h2>Sekilas Tentang CV Harapan Tour</h2>
        
          <article class="cols">
            <figure><img src="images/page1_img1.jpg" alt="" class="pad_bot2"></figure>
            <p class="pad_bot1"><strong>CV Harapan Tour merupakan salah satu CV yang bergerak dibidang transportasi</strong></p>
            <p>Dengan Berbagai Keunggulan dan Pelayanannya CV Harapan Tour pilihan yang tepat untuk anda yang ingin bepergian atau berwisata</p>
          </article>
          <article class="cols pad_left1">
            <figure><img src="images/page1_img2.jpg" alt="" class="pad_bot2"></figure>
            <p class="pad_bot1"><strong>Slogan Kami:</strong></p>
            <p>Perjalanan Cepat Dan Aman, dibekali dengan kemampuan driver yang handal,berpengalaman dan memiliki jam terbang yang banyak akan memberikan kenyamanan tersendiri untuk anda</p>
            <p>Harga Terjangkau, Silahkan dibandingkan dengan agen tiket dan jasa travel lainnya </p>
            <p>Pelayanan Ramah, Kepuasan anda adalah kepuasan kami</p>
          </article>
        
        <a href="#" class="button1"><strong>Baca Selengkapnya</strong></a> </article>
    </div>
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