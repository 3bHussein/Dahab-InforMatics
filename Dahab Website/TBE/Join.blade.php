<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dahab In4matics</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dahab Informatics">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>
<div class="super_container">

    <header class="header d-flex flex-row">
        <div class="header_content d-flex flex-row align-items-center">

            <div class="logo_container">
                <div class="logo">
                    <span><img style = "width : 100px"src="images/DI-logo.jpg" alt=""></span>

                </div>
            </div>

            <nav class="main_nav_container">
                <div class="main_nav">
                    <ul class="main_nav_list">
                        <li class="main_nav_item"><a href="/Home">home</a></li>
                        <li class="main_nav_item"><a href="/About">About us</a></li>
                        <li class="main_nav_item"><a href="/Services">Services</a></li>
                        <li class="main_nav_item"><a href="#">Join Us </a></li>
                        <li class="main_nav_item"><a href="/ContactUs">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_side d-flex flex-row justify-content-center align-items-center">
            <img src="images/phone-call.svg" alt="">
            <span ><a href="te:+201222408980" style="color: #FFFCF4;">+20 122 240 8980 </a></span>
        </div>

        <div class="hamburger_container">
            <i class="fas fa-bars trans_200"></i>
        </div>
    </header>

    <div class="menu_container menu_mm">

        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="/Home">Home</a></li>
                    <li class="menu_item menu_mm"><a href="/About">About us</a></li>
                    <li class="menu_item menu_mm"><a href="/Services">Services</a></li>
                    <li class="menu_item menu_mm"><a href="/JoinUs">Join Us</a></li>
                    <li class="menu_item menu_mm"><a href="/ContactUs">Contact Us</a></li>
                </ul>

                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
            </div>
        </div>
    </div>

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Join us</h1>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="contact_form">
                        <div class="contact_title">Upload your resume</div>
                        <div class="contact_form_container">
                            {!! Form::open(array('route'=>'employee','files'=> true)) !!}

                            <div class="form-group">

                                {{csrf_field()}}

                                {!! Form::label('name','Name') !!}
                                {!! Form::text('name',null,['class' => 'form-control']) !!}

                                {!! Form::label('email','E-mail') !!}
                                {!! Form::text('email',null,['class' => 'form-control']) !!}
                                <br>

                                {!! Form::file('file',['class' => 'form-control']) !!}

                            </div>
                            {!! Form::submit('Apply',['class'=>'btn btn-warning']) !!}

                            {!! Form::close() !!}
                            <br>
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{include 'includes/footer.php'}}
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
