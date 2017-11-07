<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CV Harapan Tour</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
            <script>
                var i=0;
                $(document).ready(function () {
                $('.slidertitle, #slider img').hide();
                    showNextImage();
                    setInterval('showNextImage()', 3000);
                });
                    function showNextImage() {
                        i++;
                        $('#sliderImage' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
                        $('#title' + i).appendTo('#slider').fadeIn(1100).delay(1100).fadeOut(1100);
                        if(i==4){
                        i=0;
                    }
                };
            </script>

        <!-- Styles -->
        <style>
            html, body {
                background:url(../img/bg_img_home.jpg) top center no-repeat;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            #slider {
                 padding:10px 0 10px;
                 position:relative;
                 width:630px;
                 height:310px;

                }
                #slider img{
                width:100%;
                height:300px;
                position:absolute;
                -webkit-border-radius:5px 5px 5px 5px;
                border-radius:5px;
                -moz-border-radius:5px 5px 5px 5px;
                }
                .slidertitle{
                 width:610px;
                 margin-top:256px;
                 text-align:center;
                 position:absolute;
                 padding:10px;
                 -webkit-border-radius:0px 0px 5px 5px;
                 border-radius:0px 0px 5px 5px;
                 -moz-border-radius:5px 5px 5px 5px;
                 color:#FFF;
                 background-color:rgba(12, 22, 23, 0.50);
                }

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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: 600;
                font-style: sans-serif;
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

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            </div>
            <div class="content">
            <center>
            <div id="slider">
            <img id="sliderImage1"src="{{ asset('img/1.jpg') }}">
            <div class="slidertitle" id="title1">Bali</div>
            <img id="sliderImage2"src="{{ asset('img/2.jpg') }}">
            <div class="slidertitle" id="title2">Candi Prambanan</div>
            <img id="sliderImage3"src="{{ asset('img/3.jpg') }}">
            <div class="slidertitle" id="title3">Candi Borobudur</div>
            <img id="sliderImage4"src="{{ asset('img/4.jpg') }}">
            <div class="slidertitle" id="title4">Jatim Park 1 MALANG</div>
            </div>
            </center>
            </div>
            <br/>
            <div class="content">
                <div class="title">
                    CV Harapan Tour
                </div>
                <div class="links">
                    <a href="{{ url('/travel') }}">Travel</a>
                    <a href="https://laracasts.com">Tiket</a>
                    <a href="{{ url('/hello') }}">Galeri</a>
                    <a href="https://forge.laravel.com">Lokasi</a>
                </div>
            </div>
        </div>
    </body>
</html>
