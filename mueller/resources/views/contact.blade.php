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
                        <li><a href="index.php">home</a></li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--contact map start-->
<div class="contact_map mt-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="map-area">
                    <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d54580.08778272373!2d29.960609000000005!3d31.241350000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20e445de404f6b02!2sM.Medical!5e0!3m2!1sen!2sus!4v1615926460843!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--contact map end-->

<!--contact area start-->
<div class="contact_area">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12">
                <div class="contact_message form">
                    <h3>Get in touch</h3>
                    {!! Form::open(['route'=>'master.mail']) !!}
                        <p>
                            @csrf
                            <label> Your Name (required)</label>
                            <input name="name" placeholder="Name *" type="text">
                        </p>
                        <p>
                            <label> Your Email (required)</label>
                            <input name="email" placeholder="Email *" type="email">
                        </p>
                        <p>
                            <label> Subject</label>
                            <input name="subject" placeholder="Subject *" type="text">
                        </p>
                        <div class="contact_textarea">
                            <label> Your Message</label>
                            <textarea placeholder="Message *" name="message" class="form-control2"></textarea>
                        </div>
                        <button type="submit"> Send</button>
                        <p class="form-messege"></p>
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
            <div class="col-lg-4 col-md-12" style="padding-top: 5%; padding-left:5%">
                <div class="contact_message content">
                    <ul>
                        <li><i class="fa fa-fax"></i> Address : 2 Adly ykn st. Gleem</li>
                        <li><span style="font-size: 20px; color:black" class=" fa fa-phone "> <span>  </span> <a style="font-size: 15px; " href="tel:01010388955" >  01010388955 </a> <span style="font-size: 18px;">/</span>  <a style="font-size: 15px;" href="tel:01010388955"> 01000070301</a></span></a></li>
                        <li><i class="fa fa-envelope-o"></i>info@mmedicalegypt.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--contact area end-->



<!--footer area start-->
<?php
include "assets/includes/footer.php";
?>
