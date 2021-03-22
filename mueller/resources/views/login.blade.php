<?php
include "assets/includes/header.php";
?>
<!--Offcanvas menu area end-->

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!-- customer login start -->
<div class="customer_login mt-32">
    <div class="container">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form">
                    <h2>login</h2>
                    <form action="#">
                        <p>
                            <label>Username or email <span>*</span></label>
                            <input type="text">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password">
                        </p>
                        <div class="login_submit">
                            <a href="#">Lost your password?</a>
                            <label for="remember">
                                <input id="remember" type="checkbox">
                                Remember me
                            </label>
                            <button type="submit">login</button>

                        </div>

                    </form>
                </div>
            </div>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register">
                    <h2>Register</h2>
                    <form action="#">
                        <p>
                            <label>Email address <span>*</span></label>
                            <input type="text">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password">
                        </p>
                        <div class="login_submit">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
</div>
<!-- customer login end -->

<!--call to action start-->
<section class="call_to_action">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="call_action_inner">
                    <div class="call_text">
                        <h3>We Have <span>Recommendations</span> for You</h3>
                        <p>Take 30% off when you spend $150 or more with code Autima11</p>
                    </div>
                    <div class="discover_now">
                        <a href="#">discover now</a>
                    </div>
                    <div class="link_follow">
                        <ul>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--call to action end-->

<!--footer area start-->
<?php
include "assets/includes/footer.php";
?>
