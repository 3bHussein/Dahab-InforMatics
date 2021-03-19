
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
                        <li class="main_nav_item"><a href="/JoinUs">Join Us </a></li>
                        <li class="main_nav_item"><a href="#">Contact Us</a></li>
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
            <h1>Contact</h1>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
{{--/<form action="{{route ('master.contact')}}">--}}
{{--                        --}}
{{--                    </form>--}}

                    <div class="contact_form">
                        <div class="contact_title">Get in touch</div>
                        <div class="contact_form_container">
                            {!! Form::open(array('route'=>'master.contact')) !!}

                            <div class="form-group">

                                {{csrf_field()}}
                                @method("post")

                                {!! Form::label('name','Name') !!}
                                {!! Form::text('name',null,['class' => 'form-control']) !!}

                                {!! Form::label('email','E-mail') !!}
                                {!! Form::text('email',null,['class' => 'form-control']) !!}

                                {!! Form::label('content','Content') !!}
                                {!! Form::text('content',null,['class' => 'form-control']) !!}
                                <br>

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
                <div class="col-lg-4">
                    <div class="about">
                        <div class="contact_info">
                            <ul>
                                <li class="contact_info_item">
                                    <div class="contact_info_icon">
                                        <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    7 , Farana street
                                </li>
                                <li class="contact_info_item">
                                    <div class="contact_info_icon">
                                        <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    +201222408980
                                </li>
                                <li class="contact_info_item">
                                    <div class="contact_info_icon">
                                        <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>dahab@info.org
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div id="google_map">
                        <div class="map_container">
{{--                            <div id="map"></div>--}}
                            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d391.18859429680776!2d29.90859440345294!3d31.199855339374654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c38d96a77a07%3A0x17108ff1527c268a!2s7%20Al%20Faraana%2C%20Qism%20Bab%20Sharqi%2C%20Alexandria%20Governorate!5e0!3m2!1sen!2seg!4v1613894944139!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{include 'includes/footer.php'}}
{{--    <footer class="footer">--}}
{{--        <div class="container">--}}

{{--            <div class="newsletter">--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <div class="section_title text-center">--}}
{{--                            <h1>Subscribe to newsletter</h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col text-center">--}}
{{--                        <div class="newsletter_form_container mx-auto">--}}
{{--                            <form action="post">--}}
{{--                                <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">--}}
{{--                                    <input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">--}}
{{--                                    <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="footer_content">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-lg-3 footer_col">--}}

{{--                        <div class="logo_container">--}}
{{--                            <div class="logo">--}}
{{--                                <img src="images/logo.png" alt="">--}}
{{--                                <span>course</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 footer_col">--}}
{{--                        <div class="footer_column_title">Menu</div>--}}
{{--                        <div class="footer_column_content">--}}
{{--                            <ul>--}}
{{--                                <li class="footer_list_item"><a href="index.html">Home</a></li>--}}
{{--                                <li class="footer_list_item"><a href="#">About Us</a></li>--}}
{{--                                <li class="footer_list_item"><a href="courses.html">Courses</a></li>--}}
{{--                                <li class="footer_list_item"><a href="news.html">News</a></li>--}}
{{--                                <li class="footer_list_item"><a href="#">Contact</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 footer_col">--}}
{{--                        <div class="footer_column_title">Usefull Links</div>--}}
{{--                        <div class="footer_column_content">--}}
{{--                            <ul>--}}
{{--                                <li class="footer_list_item"><a href="#">Testimonials</a></li>--}}
{{--                                <li class="footer_list_item"><a href="#">FAQ</a></li>--}}
{{--                                <li class="footer_list_item"><a href="#">Community</a></li>--}}
{{--                                <li class="footer_list_item"><a href="#">Campus Pictures</a></li>--}}
{{--                                <li class="footer_list_item"><a href="#">Tuitions</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-3 footer_col">--}}
{{--                        <div class="footer_column_title">Contact</div>--}}
{{--                        <div class="footer_column_content">--}}
{{--                            <ul>--}}
{{--                                <li class="footer_contact_item">--}}
{{--                                    <div class="footer_contact_icon">--}}
{{--                                        <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">--}}
{{--                                    </div>--}}
{{--                                    Blvd Libertad, 34 m05200 Arévalo--}}
{{--                                </li>--}}
{{--                                <li class="footer_contact_item">--}}
{{--                                    <div class="footer_contact_icon">--}}
{{--                                        <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">--}}
{{--                                    </div>--}}
{{--                                    0034 37483 2445 322--}}
{{--                                </li>--}}
{{--                                <li class="footer_contact_item">--}}
{{--                                    <div class="footer_contact_icon">--}}
{{--                                        <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">--}}
{{--                                    </div><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="452d2029292a05262a2835242b3c6b262a28">[email&#160;protected]</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">--}}
{{--                <div class="footer_copyright">--}}
{{--<span>--}}
{{--Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>--}}
{{--</span>--}}
{{--                </div>--}}
{{--                <div class="footer_social ml-sm-auto">--}}
{{--                    <ul class="menu_social">--}}
{{--                        <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>--}}
{{--                        <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                        <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                        <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                        <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
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
