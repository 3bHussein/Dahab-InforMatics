<?php
include 'assets/includes/header.php';
?>

<div class="page-banner-area">
<div class="container">
<div class="page-banner-content">
<h2>Career</h2>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>Career</li>
</ul>
</div>
</div>
<div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
<img src="assets/images/page-banner/shape-1.png" alt="image">
</div>
<div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
<img src="assets/images/page-banner/shape-2.png" alt="image">
</div>
<div class="page-banner-shape-3" data-speed="0.08" data-revert="true">
<img src="assets/images/page-banner/shape-3.png" alt="image">
</div>
<div class="page-banner-shape-4" data-speed="0.08" data-revert="true">
<img src="assets/images/page-banner/shape-4.png" alt="image">
</div>
</div>


<div class="contact-area ptb-100">
<div class="container">
<div class="contact-form">
<h3>Upload your resume</h3>
<form id="contactForm">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name*">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-6 col-md-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control"
 required data-error="Please enter your email" placeholder="Email*">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="10" rows="3" required data-error="Write your message" placeholder="Message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
 <button type="submit" class="default-btn">Apply <i class="ri-arrow-right-line"></i><span></span></button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>



<?php
include 'assets/includes/footer.php';
?>