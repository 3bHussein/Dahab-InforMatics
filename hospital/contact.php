<?php
include 'includes/header.php';
?>

        <!-- /.Main header -->



<div class="blog-content  yes-vc">
    <div class="row ">
            <div class="kc_clfw"></div><section class="kc-elm kc-css-952765 kc_row"><div class="kc-row-container"><div class="kc-wrap-columns"><div class="kc-elm kc-css-711041 kc_col-sm-12 kc_column kc_col-sm-12"><div class="kc-col-container">

         <div class="map-content">
            <!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
            <div id="map"></div>
        </div>
        
           <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDHeh9zEbXo-YCWJcicXH2VRwVwAf_tq0"></script>      
 <script>
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 4, scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(23.8103968, 90.41256666), //Dhaka

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "administrative.locality", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}]}, {"featureType": "administrative.locality", "elementType": "labels.icon", "stylers": [{"visibility": "on"}, {"color": "#f1c40f"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#037d71"}, {"visibility": "on"}]}]
                };

                // image from external URL

                var myIcon = 'wp-content/themes/hospital/assets/img/marker.png';

                //preparing the image so it can be used as a marker
                //https://developers.google.com/maps/documentation/javascript/reference#Icon
                //includes hacky fix "size" to allow for wobble
                var catIcon = {
                    url: myIcon
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(23.8103968, 90.41256666), //Dhaka
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP
                });
            }
        </script>

</div></div></div></div></section><section class="kc-elm kc-css-817679 kc_row"><div class="kc-row-container  kc-container  contact-content"><div class="kc-wrap-columns"><div class="kc-elm kc-css-268172 kc_col-sm-7 kc_column kc_col-sm-7"><div class="kc-col-container"> 

<div class="contect-des">
    <div class="contact-header">
        <h2>
            <span class="headline">For help with a technical problem relating to our Tompkins Appliance or our apps please visit our Customer Services Helpdesk. Help with any matters about subscriptions.</span>
        </h2>

        <p></p>
    </div>
   
</div>
 

<div class="kc-elm kc-css-853423 kc_row kc_row_inner"><div class="kc-elm kc-css-556584 kc_col-sm-6 kc_column_inner kc_col-sm-6"><div class="kc_wrapper kc-col-inner-container"> 
            <div class="media contact-service">
                <i class="et-global mr-3"></i>
                <div class="media-body">
                    <h4 class="mt-0">Address</h4>
                    <div>1355 Market St, Suite 900 San Francisco, CA 94103</div>
                </div>
            </div>          
                    
 
            <div class="media contact-service">
                <i class="et-alarmclock mr-3"></i>
                <div class="media-body">
                    <h4 class="mt-0">Working hours</h4>
                    <div>Monday-Friday: 9AM–12:30PM 1:30–5PM 
Saturday-Sunday: Closed</div>
                </div>
            </div>          
                    
</div></div><div class="kc-elm kc-css-719038 kc_col-sm-6 kc_column_inner kc_col-sm-6"><div class="kc_wrapper kc-col-inner-container"> 
            <div class="media contact-service">
                <i class="et-envelope mr-3"></i>
                <div class="media-body">
                    <h4 class="mt-0">Email Address</h4>
                    <div><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed8b849f9e99c3818c9e99ad88958c809d8188c38e8280">[email&#160;protected]</a>
<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="422b2c242d02273a232f322e276c212d2f">[email&#160;protected]</a></div>
                </div>
            </div>          
                    
 
            <div class="media contact-service">
                <i class="sl-phone mr-3"></i>
                <div class="media-body">
                    <h4 class="mt-0">Phone Number</h4>
                    <div>Support: +88-01817-584639 Sales: +88-01922-296392</div>
                </div>
            </div>          
                    
</div></div></div></div></div><div class="kc-elm kc-css-171409 kc_col-sm-5 kc_column kc_col-sm-5"><div class="kc-col-container"><div class="kc-contact-form7 kc-elm kc-css-240131"><div role="form" class="wpcf7" id="wpcf7-f215-p260-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response" role="alert" aria-live="polite"></div>
<form action="/wptheme/hospitalbdtask_demo/contact/#wpcf7-f215-p260-o1" method="post" class="wpcf7-form init" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="215" />
<input type="hidden" name="_wpcf7_version" value="5.2.2" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f215-p260-o1" />
<input type="hidden" name="_wpcf7_container_post" value="260" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<div class="contact-form">
<h3>Let's Talk!</h3>
<div class="row">
<div class="col-md-9">
<div class="form-group">
                                        <label>Your Name (required)</label><br />
                                      <span class="wpcf7-form-control-wrap text-803"><input type="text" name="text-803" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" id="f_name" aria-invalid="false" /></span>
                                    </div>
<div class="form-group">
                                        <label>Your Email (required)</label><br />
                                      <span class="wpcf7-form-control-wrap email-460"><input type="email" name="email-460" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="email" aria-required="true" aria-invalid="false" /></span>
                                    </div>
<div class="form-group">
                                        <label>Subject</label><br />
                                       <span class="wpcf7-form-control-wrap text-137"><input type="text" name="text-137" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" id="subject" aria-invalid="false" /></span>
                                    </div>
</p></div>
</p></div>
<div class="form-group">
                                <label>Message</label><br />
                              <span class="wpcf7-form-control-wrap textarea-521"><textarea name="textarea-521" cols="0" rows="5" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" id="massage" aria-required="true" aria-invalid="false"></textarea></span>
                            </div>
<p>                          <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-outline-primary" id="submit" />
                        </p></div>
<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div></form></div></div></div></div></div></div></section>     





    </div>
</div>
   
        <footer class="main-footer footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                        <div id="text-5" class="  col-md-3 widget widget_text col-block "> <h3 class="footer-title">Hospital Management System</h3>			<div class="textwidget">
<div class="footer-des">
<p class="des">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
<div class="btnBlock ">
                                <a href="contact.html" class="btn btn-link">Contact Us<i class="ti-arrow-right"></i></a>
                            </div>
</p></div>
</div>
		</div>            <div id="recent-posts-2" class="  col-md-3 widget  col-block ">                                 <h3 class="footer-title">Departments</h3>               
                   <ul class="footer-link list-unstyled">
                   	 				 	<li><a href="department_cat/anatomy-neurobiology/">Anatomy &amp; Neurobiology</a></li>
				 				 	<li><a href="department_cat/biological-chemistry/">Biological Chemistry</a></li>
				 				 	<li><a href="department_cat/clinical-departments/">Clinical Departments</a></li>
				 				 	<li><a href="department_cat/dermatology/">Dermatology</a></li>
				 				 	<li><a href="department_cat/emergency-medicine/">Emergency Medicine</a></li>
				 				 
				</ul>

                                     

            </div>            <div id="text-2" class="  col-md-3 widget widget_text col-block "> <h3 class="footer-title">Quick Links</h3>			<div class="textwidget"><ul class="footer-link list-unstyled quickLink">
<li><a href="#">About</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">Doctors</a></li>
<li><a href="#">Departments</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Timetable</a></li>
<li><a href="#">Map</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Medical</a></li>
<li><a href="#">Gallery</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Timetable</a></li>
</ul>
</div>
		</div><div id="contact_us-2" class="  col-md-3 widget address-inner col-block ">
     
 <h3 class="footer-title">Contact Details</h3><div class="addressLink">1355 Market St, Suite 900 San Francisco, CA 94103    <ul class="list-unstyled">
        <li><i class="ti-mobile"></i> Tel: <a href="tel:808-526-0030"> (123) 456-7890</a></li>
        <!-- <li><i class="icon-mobile"></i> text: <a href="sms:808-526-0030">(123) 456-7890</a></li> -->
        <li><i class="ti-email"></i> Email: <a class="linkUnderlined" href="http://first.last@example.com"><span class="__cf_email__" data-cfemail="187e716a6b6c3674796b6c587d60797568747d367b7775">[email&#160;protected]</span></a></li>
        <li><i class="ti-printer"></i> Fax:  (123) 456-7890</li>
    </ul>
<div class="btnBlock "><a class="btn btn-link" href="#" target="_blank" rel="noopener">Get Directions<i class="ti-arrow-right"></i></a></div>
</div>

        </div>                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.Footer -->
        <div class="sub-footer dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                                                <div class="coptText">
                            Copyright © 2016-2018 bdtask . All rights reserved. 
                        </div>
                                           </div>
                </div>
            </div>
        </div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type='text/javascript'>
/* <![CDATA[ */
var object = {"ajaxurl":"https:\/\/wordpressall.thememinister.com\/wptheme\/hospitalbdtask_demo\/wp-admin\/admin-ajax.php","nonce":"b5525599e6"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/booking365/public/ajax/msbdt-public-service-display-ajax.js?ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var object = {"ajaxurl":"https:\/\/wordpressall.thememinister.com\/wptheme\/hospitalbdtask_demo\/wp-admin\/admin-ajax.php","nonce":"b5525599e6"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/booking365/public/ajax/multi-appointment-select-disable-date-agnist-doctor-ajax.js?ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var object = {"ajaxurl":"https:\/\/wordpressall.thememinister.com\/wptheme\/hospitalbdtask_demo\/wp-admin\/admin-ajax.php","nonce":"b5525599e6"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/booking365/public/ajax/msbdt-public-professional-display-ajax.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='wp-content/plugins/booking365/public/js/msbdt-bootstrap.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/plugins/booking365/public/js/msbdt-jquery-ui.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/plugins/booking365/public/js/msbdt-jquery-1.12.4.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/plugins/booking365/public/js/msbdt-jquery.slimscroll.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/plugins/booking365/public/js/msbdt-public.js?ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/wordpressall.thememinister.com\/wptheme\/hospitalbdtask_demo\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.2.2'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/js/popper.min.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/bootstrap/js/bootstrap.min.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/metismenu/metisMenu.min.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/OwlCarousel2/dist/owl.carousel.min.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/select2/dist/js/select2.min.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/masonry/dist/masonry.pkgd.min.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/js/file-upload.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/js/jquery.easing.min.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/js/script.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/js/popper.min.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/bootstrap/js/bootstrap.min.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/metismenu/metisMenu.min.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/OwlCarousel2/dist/owl.carousel.min.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/select2/dist/js/select2.min.js?ver=1.1'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='wp-includes/js/masonry.min.js?ver=3.3.2'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/js/file-upload.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/js/jquery.easing.min.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/hospital/assets/js/script.js?ver=1.1'></script>
<script type='text/javascript' src='wp-content/themes/hospital/js/navigation.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/themes/hospital/js/skip-link-focus-fix.js?ver=20151215'></script>
<script type='text/javascript' src='wp-content/plugins/kingcomposer/assets/frontend/js/kingcomposer.min.js?ver=2.9.5'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min.js?ver=5.3.7'></script>


</body>
</html>
