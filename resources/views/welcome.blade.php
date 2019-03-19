

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>spearWifi</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            body {
                font: 400 15px Mukta, sans-serif;
                line-height: 1.8;
                color: #818181;
            }
            h2 {
                font-size: 24px;
                color: #3d5467;
                font-weight: 600;
                margin-bottom: 30px;
            }
            h4 {
                font-size: 19px;
                line-height: 1.375em;
                color: #3d5467;
                font-weight: 400;
            }
            .jumbotron {
                background: url('welcomeBG.jpg') repeat;
                background-size: cover;
                postion: relative;
                height: 100vh;
                padding: 300px 25px;
                font-family: Mukta, sans-serif;
            }

            .transbox {
                position: center;
                padding: 10px;
                background-color: #f1edee;
                opacity: 0.9;
                border-radius: 50px;
            }

            .container-fluid {
                padding: 60px 50px;
            }
            .bg-grey {
                background-color: #f6f6f6;
            }
            .logo-small {
                color: #db5461;
                font-size: 50px;
            }
            .logo {
                color: #db5461;
                font-size: 200px;
            }
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .thumbnail img {
                width: 100%;
                height: 100%;
                margin-bottom: 10px;
            }
            .carousel-control.right, .carousel-control.left {
                background-image: none;
                color: #db5461;
            }
            .carousel-indicators li {
                border-color: #db5461;
            }
            .carousel-indicators li.active {
                background-color: #db5461;
            }
            .item h4 {
                font-size: 19px;
                line-height: 1.375em;
                font-weight: 400;
                font-style: italic;
                margin: 70px 0;
            }
            .item span {
                font-style: normal;
            }
            .panel {
                border: 1px solid #686963;
                border-radius:0 !important;
                transition: box-shadow 0.5s;
            }
            .panel:hover {
                box-shadow: 5px 0px 40px rgba(0,0,0, .2);
            }
            .panel-footer .btn:hover {
                border: 1px solid #8aa29e;
                background-color: #fff !important;
                color: #db5461;
            }
            .panel-heading {
                color: #fff !important;
                background-color: #db5461 !important;
                padding: 25px;
                border-bottom: 1px solid transparent;
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }
            .panel-footer {
                background-color: white !important;
            }
            .panel-footer h3 {
                font-size: 32px;
            }
            .panel-footer h4 {
                color: #aaa;
                font-size: 14px;
            }
            .panel-footer .btn {
                margin: 15px 0;
                background-color: #db5461;
                color: #fff;
            }
            .navbar {
                margin-bottom: 0;
                padding-bottom: 5px;
                background-color: #f1edee;
                z-index: 9999;
                border: 0;
                font-size: 14px;
                line-height: 1.42857143 !important;
                letter-spacing: .1rem;
                border-radius: 0;
                font-family: Mukta;
            }
            .navbar li a, .navbar .navbar-brand {
                color: #686963;
                font-weight: 600;
                letter-spacing: .1rem;
                font-size: 14px;
                text-decoration: none;
                text-transform: uppercase;
            }
            .navbar li {
                padding-top: 17px;
                text-align: center;
            }
            .navbar-nav li a:hover, .navbar-nav li.active a {

                background-color: #f1edee;
            }
            .navbar-default .navbar-toggle {
                border-color: transparent;
                color: #fff !important;
            }
            footer .glyphicon {
                font-size: 20px;
                margin-bottom: 10px;
                color: #8aa29e;
            }
            .slideanim {visibility:hidden;}
            .slide {
                animation-name: slide;
                -webkit-animation-name: slide;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                visibility: visible;
            }
            @keyframes slide {
                0% {
                    opacity: 0;
                    transform: translateY(70%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0%);
                }
            }
            @-webkit-keyframes slide {
                0% {
                    opacity: 0;
                    -webkit-transform: translateY(70%);
                }
                100% {
                    opacity: 1;
                    -webkit-transform: translateY(0%);
                }
            }
            @media screen and (max-width: 768px) {
                .col-sm-4 {
                    text-align: center;
                    margin: 25px 0;
                }
                .btn-lg {
                    width: 100%;
                    margin-bottom: 35px;
                }
            }
            @media screen and (max-width: 480px) {
                .logo {
                    font-size: 150px;
                }
            }






            html, body {
                background-color: #f1edee;
                color: #686963;
                font-family: 'Mukta', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
            }

            .links > a {
                color: #db5461;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .sectionHeader {
                color: #db5461;
                font-weight: 600;
                letter-spacing: .1rem;
                font-size: 17px;
                text-decoration: none;
                text-transform: uppercase;
            }

            .coHeader1 {
                color: #8aa29e;
                padding-top: 55px;
                font-weight: 700;
                letter-spacing: .2rem;
                font-size: 40px;
                text-decoration: none;
            }
            .coHeader {
                color: #3d5467;
                font-weight: 700;
                letter-spacing: .2rem;
                font-size: 30px;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="spearWifiLogoFull.png" height="50px"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#features">FEATURES</a></li>
                    <li><a href="#pricing">PRICING</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    @if (Route::has('login'))
                            @auth
                            <li><a href="{{ url('/home') }}"><span class="sectionHeader">DASHBOARD</span></a></li>
                            @else
                            <li><a href="{{ route('login') }}"><span class="sectionHeader">LOGIN</span></a></li>

                                @if (Route::has('register'))
                                <li> <a href="{{ route('register') }}"><span class="sectionHeader">REGISTER</span></a></li>
                                @endif
                            @endauth
                        @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <div class="transbox">
            <h4><span class="coHeader1">Use your Wifi for</span></h4>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h4><span class="coHeader">real-time communication</span></h4>
                    </div>
                    <div class="item">
                        <h4><span class="coHeader">customer profiling</span></h4>
                    </div>
                    <div class="item">
                        <h4><span class="coHeader">marketing initiatives</span></h4>
                    </div>
                    <div class="item">
                        <h4><span class="coHeader">gathering reviews</span></h4>
                    </div>
                    <div class="item">
                        <h4><span class="coHeader">customer care</span></h4>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>Why<img src="spearWifiNameOnly.png" height="45px">?</h2><br>
                <h4>We"ll boost your digital marketing capabilities by unlocking power information at a minimal cost - GROWING YOUR BUSINESS! </h4><br>
                <p>After getting to know one another, we will configure your existing wifi infrastructure to start collecting information from your wifi users. The information we collect will help feed specialized metrics that we create (or creaete together) and present it to you in a way that is easy to understand and use. Powerful marketing information that will fuel your digital marketing campaigns, understand who your key demographics are, gathering reviews and much more.</p>
                <br>
            </div>
            <div class="col-sm-4">
                <img class="slideanim" src="spearWifiLogoOnly.png">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-globe logo slideanim"></span>
            </div>
            <div class="col-sm-8">
                <h2>Protecting your information is our top priority!</h2><br>
                <h4>Designed from the ground up - our #1 goal is to ensure that only you have access to your own information and network.</h4><br>
                <p>Only you will benefit from the information we collect from your clientele. Together, we will unlock extra avenues of growth within your business model and the best part - this information is accessible anywhere in the world irregardless if you have one location or a million!</p>
            </div>
        </div>
    </div>

    <!-- Container (Services Section) -->
    <div id="features" class="container-fluid text-center">
        <h2>FEATURES</h2>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-off logo-small"></span>
                <h4>QUICK SETUP</h4>
                <p>It only takes a few minutes to get you setup</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-heart logo-small"></span>
                <h4>EASE OF USE</h4>
                <p>Simplicity and ease of use - you don't need to be a rocket scientist</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo-small"></span>
                <h4>UNLOCK GROWTH</h4>
                <p>Access new clientele or focus on your most loyal - or both</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-leaf logo-small"></span>
                <h4>ECO-FRIENDLY</h4>
                <p>100% Digital and access 24/7</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-random logo-small"></span>
                <h4>CUSTOMIZABLE</h4>
                <p>Looking for something specific? We're open to working with you!</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-wrench logo-small"></span>
                <h4>USE YOUR BRANDING</h4>
                <p>Your clients will see your branding for a seamless experience</p>
            </div>
        </div>
    </div>

    <!-- Container (Pricing Section) -->
    <div id="pricing" class="container-fluid bg-grey">
        <div class="text-center">
            <h2>PRICING</h2>
            <h4>Small business or a big corporation? We have a plan just for you!</h4>
        </div>
        <div class="row slideanim">
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Basic</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>1</strong> Location</p>
                        <p><strong>Free </strong>Setup</p>
                        <p><strong>Free </strong>Support</p>
                        <p><strong>Unlimited </strong>Access</p>
                        <p><strong>Unlimited </strong>Downloads</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$49</h3>
                        <h4>per month</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Pro</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>2-5</strong> Locations</p>
                        <p><strong>Priority </strong>Support</p>
                        <p><strong>Unlimited </strong>Access</p>
                        <p><strong>Unlimited </strong>Downloads</p>
                        <p><strong>Branch Integration</strong></p>
                    </div>
                    <div class="panel-footer">
                        <h3>$45</h3>
                        <h4>per month per location</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Premium</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>6+</strong> Locations</p>
                        <p><strong>Priority </strong>Support</p>
                        <p><strong>Unlimited </strong>Downloads</p>
                        <p><strong>Branch Integration</strong></p>
                        <p><strong>Custom Analytics</strong></p>
                    </div>
                    <div class="panel-footer">
                        <h3>$39</h3>
                        <h4>per month per location</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid">
        <h2 class="text-center">Get In-touch!</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>You'll hear back from us soon</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Toronto, ON Canada</p>
                <p><span class="glyphicon glyphicon-phone"></span> +1 (416) 416-4164</p>
                <p><span class="glyphicon glyphicon-envelope"></span> help@spearwifi.com</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Copyright 2019 spearWifi Inc - All Rights Reserved</p>
    </footer>

    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            });
        })
    </script>

    </body>
</html>
