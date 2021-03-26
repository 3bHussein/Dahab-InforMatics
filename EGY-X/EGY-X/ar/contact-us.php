<?php
include "includes/nav.php";
?>
 <!-- RD Google Map-->
<!-- <section class="section section-fluid">
  <div class="google-map-container" data-zoom="14" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
    <div class="google-map rd-google-map__model"></div>
    <ul class="google-map-markers">
      <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
    </ul>
  </div>
</section> -->
<style>
  /* webkit solution */
 
select > caption { text-align:left; } 
 

  </style>

<section class="breadcrumbs-custom-inset">
    <div class=" breadcrumbs-custom context-dark bg-overlay-39 ">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Contact US</h3>
            <ul class="breadcrumbs-custom-path">
                <li><a href="/home">الرئسية</a></li>
                <li class="active"><strong>C</strong>ontact</li>
            </ul>
        </div>
        <div class="box-position" style="background-image: url(images/bg-elements-2.jpg);"></div>
    </div>
</section>
<!-- Contact Form-->
<section class="section section-sm section-last bg-default text-left" style="padding-top: 100px;">
    <div class="container">
        <article class="title-classic">
            <div class="title-classic-title">
                <h3>ابقي علي تواصل</h3>
            </div>
            <div class="title-classic-text">
                <p>إذا كانت لديك أي أسئلة ، فما عليك سوى ملء نموذج الاتصال وسنقوم بالرد عليك قريبًا.</p>
            </div>
        </article>
        {!! Form::open(array('route'=>'master.contactmail')) !!}
            <div class="row row-14 gutters-14">
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="contact-your-name-2">الاسم</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email-2">البريد الالكتروني</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                        <label class="form-label" for="contact-phone-2">رقم التليفون</label>
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="form-wrap">
{{--                        <input class="form-input" id="subject-1" type="text" name="phone" data-constraints="@Numeric">--}}
                        <select class="form-input" name="subject"style= ""dir="rtl">
                            <option name="" value="Share-courses">
                            شارك دوراتك معنا
                            </option>
                            <option name="" value="Share-books">
                            شارك كتبك معنا
                            </option>
                            <option name="" value="Share-Others">
                            أُخْرى
                            </option>
                        </select>


                        
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap">
                        <label class="form-label" for="contact-message-2">الرسالة</label>
                        <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                    </div>
                </div>
            </div>
        {!! Form::submit('Apply',['class'=>'btn', 'style'=>'background-color: #4261e4; color:white']) !!}
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
</section>
<!-- Contact information-->
<!-- <section class="section section-sm section-first bg-default">
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="tel:#">+1 323-913-4688</a></p>
            <p class="box-contacts-link"><a href="tel:#">+1 323-888-4554</a></p>
          </div>
        </article>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-up104"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
          </div>
        </article>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="mailto:#">mail@demolink.org</a></p>
            <p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section> -->



<!-- Page Footer-->
<?php
include "includes/footer.php";
?>

 