




    <?php
   include "includes/header.php";
   ?>




  <div class="wrapper-body wrapper-container" id="PageContainer">

    <main class="main-content" id="MainContent" role="main" tabindex="-1">
      <div class="product-template product-template-default">
  <div class="container">
    
    <div class="next_prev-groups">
      


<div class="breadcrumb">
  <a href="/" data-translate="general.breadcrumbs.home">Home</a>  
   
  
    
      <span class="arrow">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </span>

      
      
        
        <span><a href="/collections/anwar-products" title="">Anwar Products</a></span>
        
      
    
  
    <span class="arrow">
      <i class="fa fa-angle-right" aria-hidden="true"></i>
  	</span>
  	
  	<span>Anwar Charcoal Facial Wash غسول البشرة بالفحم</span>
    
  
  
</div>


      
<div class="next-prev-product">
  <div class="next-prev-icons">
  	
    
    
    <a class="next-btn icon-pro" href="/collections/anwar-products/products/hyaluronic-acid-collagen" data-next-prev-icon data-target="#next-product-modal">
      <svg aria-hidden="true" data-prefix="fal" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" class="svg-inline--fa fa-angle-right fa-w-6 fa-3x"><path fill="currentColor" d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z" class=""></path></svg>
    </a>
    
  </div>
  
  <div class="next-prev-modal" data-next-prev-modal>
  	
    
    
    <div id="next-product-modal" class="next-prev-content" data-next-prev-content>
      <div class="content">
        <a class="product-image" href="/collections/anwar-products/products/hyaluronic-acid-collagen">
          <img src="//cdn.shopify.com/s/files/1/0438/9185/1432/products/hyaluCOllagenpsd_compact.jpg?v=1595703999" alt="Anwar Hyaluronic Acid Collagen سيرم هيالورونيك أسيد بالكولاجين">
        </a>
        <div class="column-right">
          <a class="product-name" href="/collections/anwar-products/products/hyaluronic-acid-collagen">
            
<span>
  Anwar Hyaluronic Acid Collagen سيرم هيالورونيك أسيد بالكولاجين
</span>

          </a>
          
          <div class="price-box">
            

            <div class="price-regular">
              
              <span>
                250.00
              </span>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

<script>
  $(document).ready(function() {
    var nextPrevProduct = $('.next-prev-product'),
        iconNextPrev = nextPrevProduct.find('[data-next-prev-icon]'),
        contentNextPrev = nextPrevProduct.find('[data-next-prev-content]'),
        modal = nextPrevProduct.find('[data-next-prev-modal]');
    
    if(!('ontouchstart' in document)) {
      iconNextPrev.hover(function() {
        var curLink = $(this),
            curContent = $(curLink.data('target'));    
        
        if(!$(this).hasClass('active')) {
          iconNextPrev.removeClass('active');
          contentNextPrev.removeClass('active');
          
          curLink.addClass('active');
          curContent.addClass('active');
          modal.show();
        }
                
        nextPrevProduct.mouseleave(function() {
          if(modal.is(':visible')) {
            iconNextPrev.removeClass('active');
            contentNextPrev.removeClass('active');
            modal.hide();
          };
        });   
      });
    }
    
    else {
      iconNextPrev.off('click').on('click', function(e) {
      	e.preventDefault();
        e.stopPropagation();
        
        var curLink = $(this),
            curContent = $(curLink.data('target'));
        
        if(!$(this).hasClass('active')) {
          iconNextPrev.removeClass('active');
          contentNextPrev.removeClass('active');
          
          curLink.addClass('active');
          curContent.addClass('active');
          modal.show();
        }
        else {
          curLink.removeClass('active');
          curContent.removeClass('active');
          modal.hide();
        }
      });
    };
    
    $(document).on('click', function(e) {
      if(!$(e.target).closest('[data-next-prev-modal]').length && modal.is(':visible')) {
        iconNextPrev.removeClass('active');
        contentNextPrev.removeClass('active');
        modal.hide();
      };
    });
  });
</script>
 	
    </div>
    
    
  	   
    <div class="halo-product-content">
      <div class="row pro-page">
        <div id="shopify-section-sidebar-section" class="shopify-section col-12 col-xl-3 col-sidebar">
<div class="sidebar-label">
  <span class="icon-filter">
  	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" x="0px" y="0px" viewBox="0 0 48 48" xml:space="preserve"><g><path d="M6,48c-0.552,0-1-0.447-1-1v-7c0-0.553,0.448-1,1-1s1,0.447,1,1v7C7,47.553,6.552,48,6,48z"></path><path d="M6,31c-0.552,0-1-0.447-1-1V1c0-0.553,0.448-1,1-1s1,0.447,1,1v29C7,30.553,6.552,31,6,31z"></path><g><path d="M6,41c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S9.309,41,6,41z M6,31c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4    S8.206,31,6,31z"></path><path d="M42,48c-0.552,0-1-0.447-1-1V26c0-0.553,0.448-1,1-1s1,0.447,1,1v21C43,47.553,42.552,48,42,48z"></path><path d="M42,17c-0.552,0-1-0.447-1-1V1c0-0.553,0.448-1,1-1s1,0.447,1,1v15C43,16.553,42.552,17,42,17z"></path><path d="M42,27c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S45.309,27,42,27z M42,17c-2.206,0-4,1.794-4,4s1.794,4,4,4    s4-1.794,4-4S44.206,17,42,17z"></path><path d="M24,48c-0.552,0-1-0.447-1-1V21c0-0.553,0.448-1,1-1s1,0.447,1,1v26C25,47.553,24.552,48,24,48z"></path><path d="M24,12c-0.552,0-1-0.447-1-1V1c0-0.553,0.448-1,1-1s1,0.447,1,1v10C25,11.553,24.552,12,24,12z"></path><path d="M24,22c-3.309,0-6-2.691-6-6s2.691-6,6-6c3.309,0,6,2.691,6,6S27.309,22,24,22z M24,12c-2.206,0-4,1.794-4,4s1.794,4,4,4    s4-1.794,4-4S26.206,12,24,12z"></path></g></g></svg>
  </span>
  <span class="sidebar_more" >
    Sidebar
  </span>
</div>

<div class="sidebar" data-sticky-sidebar>
  <a href="javascript:void(0)" title="Close" class="close-sidebar close">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" class="icon-close">
    <path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" font-weight="400" font-family="sans-serif" white-space="normal" overflow="visible"/>
</svg>    
  </a>
  

  
    
    <div class="widget sidebar-links">
      
      <div class="widget-title">
        <h3 class="sidebar-title">
          
<span>
  Categories
</span>

        </h3>
      </div>
      

      <div class="widget-content">
        <ul>
          
          

          
          <li class="sidebar-link-lv1">
            <p class="link-action-wrapper">
            <a href="/collections/skin-care" >
              
<span>
  Skin Care
</span>

            </a>

            
          </li>        
          
          <li class="sidebar-link-lv1">
            <p class="link-action-wrapper">
            <a href="/collections/hair" >
              
<span>
  Hair Care
</span>

            </a>

            
          </li>        
          
          <li class="sidebar-link-lv1">
            <p class="link-action-wrapper">
            <a href="/collections/organic-products" >
              
<span>
  Organic Products
</span>

            </a>

            
          </li>        
          
          <li class="sidebar-link-lv1">
            <p class="link-action-wrapper">
            <a href="/collections/anwar-products" class="active">
              
<span>
  Anwar Products
</span>

            </a>

            
          </li>        
                  
          
        </ul>
      </div>
    </div>
    
  
  

  
    
    <div class="widget sidebar-widget-product" data-sidebar-product>
      
      <div class="widget-title">   
        <h3 class="sidebar-title">
          
<span>
  Featured Products
</span>

        </h3>
      </div>
      
      
      
      <div class="widget-product">
        <div class="products-grid row">
          
          <div class="grid-item col-12 ">
            













<div class="inner product-item" id="product-5650118672552">
  <div class="inner-top">
    <div class="product-top">
      <div class="product-image ">
        <a href="/collections/anwar-products/products/organica-aloe-vera-gel-%D8%AC%D9%84-%D8%A7%D9%84%D8%B5%D8%A8%D8%A7%D8%B1" class="product-grid-image" alt="Organica Aloe Vera Gel جل الصبار" data-collections-related="/collections/anwar-products?view=related">
          <img data-srcset="//cdn.shopify.com/s/files/1/0438/9185/1432/products/41733878_1108407105995089_2756015479448403968_n_120x.jpg?v=1597845142" alt="Organica Aloe Vera Gel جل الصبار" class="lazyload " data-sizes="auto" data-image />     
          
        </a>
      </div>

      
      
      
        <a class="quickview-button" href="javascript:void(0)" id="organica-aloe-vera-gel-جل-الصبار" title="Quick View" >
          <span >
            Quick View
          </span>
        </a>
       

      
        <div class="product-des abs-top">
          
<a class="wishlist" data-icon-wishlist href="#" data-product-handle="organica-aloe-vera-gel-جل-الصبار" data-id="5650118672552">
    <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
    <span class="wishlist-text text-hover" >
        Add to Wish List
    </span>
</a>
 
          
<a class="compare-button" data-icon-compare href="javascript:void(0)" data-compare-product-handle="organica-aloe-vera-gel-جل-الصبار" data-id="5650118672552" title="Add to Compare" >
    <svg class="icon" height="512" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"  /><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"  /><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"  /><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"  /></svg>
    <span class="compare-text text-hover" >
        Add to Compare
    </span>
</a>
         
        </div>
      

    </div>
    
    <div class="product-bottom">
      
        <div class="product-vendor"><a href="/collections/vendors?q=Organica%20Beauty%20Inc." title="Organica Beauty Inc.">Organica Beauty Inc.</a></div>
      
      
      <a class="product-title" id="product-title" href="/collections/anwar-products/products/organica-aloe-vera-gel-%D8%AC%D9%84-%D8%A7%D9%84%D8%B5%D8%A8%D8%A7%D8%B1">
        
<span>
  Organica Aloe Vera Gel جل الصبار
</span>

      </a>
      
      <span class="shopify-product-reviews-badge" data-id="5650118672552"></span>
      
      <div class="price-box">
        
        <div class="price-regular">
          <span>100.00</span>
        </div>
        
      </div>
      
      <ul class="item-swatch">

  
  
  
  
  

</ul>

      
    </div>
    
    <div class="action">
      
      <form action="/cart/add" method="post" class="variants" id="product-actions-5650118672552" enctype="multipart/form-data">    
        
        
        <input type="hidden" name="id" value="35817819930792" />
        
        
        <button data-btn-addToCart class="btn add-to-cart-btn" type="submit"  data-form-id="#-5650118672552">
          Add to Cart
        </button>
         
        
        
        
      </form>      
    </div>
    
  </div>
</div>
          </div>
          
          <div class="grid-item col-12 ">
            













<div class="inner product-item" id="product-5769326166184">
  <div class="inner-top">
    <div class="product-top">
      <div class="product-image ">
        <a href="/collections/anwar-products/products/moroccon-loaf-%D9%84%D9%8A%D9%81-%D9%85%D8%BA%D8%B1%D8%A8%D9%89" class="product-grid-image" alt="Moroccon Loaf ليف مغربى" data-collections-related="/collections/anwar-products?view=related">
          <img data-srcset="//cdn.shopify.com/s/files/1/0438/9185/1432/products/j97eJSEdMoGWEW7Zb6ZnQLJiSncHBesFilgWTtuC_120x.jpg?v=1599832852" alt="Moroccon Loaf ليف مغربى" class="lazyload " data-sizes="auto" data-image />     
          
        </a>
      </div>

      
      
      
        <a class="quickview-button" href="javascript:void(0)" id="moroccon-loaf-ليف-مغربى" title="Quick View" >
          <span >
            Quick View
          </span>
        </a>
       

      
        <div class="product-des abs-top">
          
<a class="wishlist" data-icon-wishlist href="#" data-product-handle="moroccon-loaf-ليف-مغربى" data-id="5769326166184">
    <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
    <span class="wishlist-text text-hover" >
        Add to Wish List
    </span>
</a>
 
          
<a class="compare-button" data-icon-compare href="javascript:void(0)" data-compare-product-handle="moroccon-loaf-ليف-مغربى" data-id="5769326166184" title="Add to Compare" >
    <svg class="icon" height="512" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"  /><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"  /><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"  /><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"  /></svg>
    <span class="compare-text text-hover" >
        Add to Compare
    </span>
</a>
         
        </div>
      

    </div>
    
    <div class="product-bottom">
      
        <div class="product-vendor"><a href="/collections/vendors?q=Organica%20Beauty%20Inc." title="Organica Beauty Inc.">Organica Beauty Inc.</a></div>
      
      
      <a class="product-title" id="product-title" href="/collections/anwar-products/products/moroccon-loaf-%D9%84%D9%8A%D9%81-%D9%85%D8%BA%D8%B1%D8%A8%D9%89">
        
<span>
  Moroccon Loaf ليف مغربى
</span>

      </a>
      
      <span class="shopify-product-reviews-badge" data-id="5769326166184"></span>
      
      <div class="price-box">
        
        <div class="price-regular">
          <span>45.00</span>
        </div>
        
      </div>
      
      <ul class="item-swatch">

  
  
  
  
  

</ul>

      
    </div>
    
    <div class="action">
      
      <form action="/cart/add" method="post" class="variants" id="product-actions-5769326166184" enctype="multipart/form-data">    
        
        
        <input type="hidden" name="id" value="36206964637864" />
        
        
        <button data-btn-addToCart class="btn add-to-cart-btn" type="submit"  data-form-id="#-5769326166184">
          Add to Cart
        </button>
         
        
        
        
      </form>      
    </div>
    
  </div>
</div>
          </div>
          
          <div class="grid-item col-12 ">
            













<div class="inner product-item" id="product-5486677426344">
  <div class="inner-top">
    <div class="product-top">
      <div class="product-image ">
        <a href="/collections/anwar-products/products/coffee-scrub" class="product-grid-image" alt="Organica Coffee Scrub سكرب القهوة" data-collections-related="/collections/anwar-products?view=related">
          <img data-srcset="//cdn.shopify.com/s/files/1/0438/9185/1432/products/organic_120x.jpg?v=1595771673" alt="Organica Coffee Scrub سكرب القهوة" class="lazyload " data-sizes="auto" data-image />     
          
        </a>
      </div>

      
      
      
        <a class="quickview-button" href="javascript:void(0)" id="coffee-scrub" title="Quick View" >
          <span >
            Quick View
          </span>
        </a>
       

      
        <div class="product-des abs-top">
          
<a class="wishlist" data-icon-wishlist href="#" data-product-handle="coffee-scrub" data-id="5486677426344">
    <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
    <span class="wishlist-text text-hover" >
        Add to Wish List
    </span>
</a>
 
          
<a class="compare-button" data-icon-compare href="javascript:void(0)" data-compare-product-handle="coffee-scrub" data-id="5486677426344" title="Add to Compare" >
    <svg class="icon" height="512" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"  /><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"  /><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"  /><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"  /></svg>
    <span class="compare-text text-hover" >
        Add to Compare
    </span>
</a>
         
        </div>
      

    </div>
    
    <div class="product-bottom">
      
        <div class="product-vendor"><a href="/collections/vendors?q=Organica%20Beauty%20Inc." title="Organica Beauty Inc.">Organica Beauty Inc.</a></div>
      
      
      <a class="product-title" id="product-title" href="/collections/anwar-products/products/coffee-scrub">
        
<span>
  Organica Coffee Scrub سكرب القهوة
</span>

      </a>
      
      <span class="shopify-product-reviews-badge" data-id="5486677426344"></span>
      
      <div class="price-box">
        
        <div class="price-regular">
          <span>100.00</span>
        </div>
        
      </div>
      
      <ul class="item-swatch">

  
  
  
  
  

</ul>

      
    </div>
    
    <div class="action">
      
      <form action="/cart/add" method="post" class="variants" id="product-actions-5486677426344" enctype="multipart/form-data">    
        
        
        <input type="hidden" name="id" value="35360725794984" />
        
        
        <button data-btn-addToCart class="btn add-to-cart-btn" type="submit"  data-form-id="#-5486677426344">
          Add to Cart
        </button>
         
        
        
        
      </form>      
    </div>
    
  </div>
</div>
          </div>
          
          <div class="grid-item col-12 ">
            













<div class="inner product-item" id="product-5486580433064">
  <div class="inner-top">
    <div class="product-top">
      <div class="product-image  image-swap">
        <a href="/collections/anwar-products/products/pure-shea-butter" class="product-grid-image" alt="Organica Pure Shea Butterزبدة الشيا الخام" data-collections-related="/collections/anwar-products?view=related">
          <img data-srcset="//cdn.shopify.com/s/files/1/0438/9185/1432/products/organic5_120x.jpg?v=1599736321" alt="Organica Pure Shea Butterزبدة الشيا الخام" class="images-one lazyload" data-sizes="auto" />

          <span class="images-two">
            <img data-srcset="//cdn.shopify.com/s/files/1/0438/9185/1432/products/fc3f7565-eac8-4cd4-9b68-f726b6403046_120x.jpg?v=1599736363" alt="Organica Pure Shea Butterزبدة الشيا الخام" class="lazyload " data-sizes="auto" data-image />
          </span> 

          
        </a>
      </div>

      
      
      
        <a class="quickview-button" href="javascript:void(0)" id="pure-shea-butter" title="Quick View" >
          <span >
            Quick View
          </span>
        </a>
       

      
        <div class="product-des abs-top">
          
<a class="wishlist" data-icon-wishlist href="#" data-product-handle="pure-shea-butter" data-id="5486580433064">
    <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
    <span class="wishlist-text text-hover" >
        Add to Wish List
    </span>
</a>
 
          
<a class="compare-button" data-icon-compare href="javascript:void(0)" data-compare-product-handle="pure-shea-butter" data-id="5486580433064" title="Add to Compare" >
    <svg class="icon" height="512" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"  /><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"  /><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"  /><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"  /></svg>
    <span class="compare-text text-hover" >
        Add to Compare
    </span>
</a>
         
        </div>
      

    </div>
    
    <div class="product-bottom">
      
        <div class="product-vendor"><a href="/collections/vendors?q=Organica%20Beauty%20Inc." title="Organica Beauty Inc.">Organica Beauty Inc.</a></div>
      
      
      <a class="product-title" id="product-title" href="/collections/anwar-products/products/pure-shea-butter">
        
<span>
  Organica Pure Shea Butterزبدة الشيا الخام
</span>

      </a>
      
      <span class="shopify-product-reviews-badge" data-id="5486580433064"></span>
      
      <div class="price-box">
        
        <div class="price-regular">
          <span><em>from </em>65.00</span>
        </div>
        
      </div>
      
      <ul class="item-swatch">

  
  
  
  
  

</ul>

      
    </div>
    
    <div class="action">
      
      <form action="/cart/add" method="post" class="variants" id="product-actions-5486580433064" enctype="multipart/form-data">    
        
        
        <input class="btn" type="button" onclick="window.location.href='/products/pure-shea-butter'" value="Select Options" />
        
        
      </form>      
    </div>
    
  </div>
</div>
          </div>
          
          <div class="grid-item col-12 ">
            













<div class="inner product-item" id="product-5486691516584">
  <div class="inner-top">
    <div class="product-top">
      <div class="product-image ">
        <a href="/collections/anwar-products/products/coconut-oil" class="product-grid-image" alt="Organica Coconut Oil زيت جوز الهند" data-collections-related="/collections/anwar-products?view=related">
          <img data-srcset="//cdn.shopify.com/s/files/1/0438/9185/1432/products/organic3_120x.jpg?v=1595771523" alt="Organica Coconut Oil زيت جوز الهند" class="lazyload " data-sizes="auto" data-image />     
          
        </a>
      </div>

      
      
      
        <a class="quickview-button" href="javascript:void(0)" id="coconut-oil" title="Quick View" >
          <span >
            Quick View
          </span>
        </a>
       

      
        <div class="product-des abs-top">
          
<a class="wishlist" data-icon-wishlist href="#" data-product-handle="coconut-oil" data-id="5486691516584">
    <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
    <span class="wishlist-text text-hover" >
        Add to Wish List
    </span>
</a>
 
          
<a class="compare-button" data-icon-compare href="javascript:void(0)" data-compare-product-handle="coconut-oil" data-id="5486691516584" title="Add to Compare" >
    <svg class="icon" height="512" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"  /><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"  /><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"  /><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"  /></svg>
    <span class="compare-text text-hover" >
        Add to Compare
    </span>
</a>
         
        </div>
      

    </div>
    
    <div class="product-bottom">
      
        <div class="product-vendor"><a href="/collections/vendors?q=Organica%20Beauty%20Inc." title="Organica Beauty Inc.">Organica Beauty Inc.</a></div>
      
      
      <a class="product-title" id="product-title" href="/collections/anwar-products/products/coconut-oil">
        
<span>
  Organica Coconut Oil زيت جوز الهند
</span>

      </a>
      
      <span class="shopify-product-reviews-badge" data-id="5486691516584"></span>
      
      <div class="price-box">
        
        <div class="price-regular">
          <span>75.00</span>
        </div>
        
      </div>
      
      <ul class="item-swatch">

  
  
  
  
  

</ul>

      
    </div>
    
    <div class="action">
      
      <form action="/cart/add" method="post" class="variants" id="product-actions-5486691516584" enctype="multipart/form-data">    
        
        
        <input type="hidden" name="id" value="35360744964264" />
        
        
        <button data-btn-addToCart class="btn add-to-cart-btn" type="submit"  data-form-id="#-5486691516584">
          Add to Cart
        </button>
         
        
        
        
      </form>      
    </div>
    
  </div>
</div>
          </div>
          
          <div class="grid-item col-12 ">
            













<div class="inner product-item sold-out" id="product-5650133909672">
  <div class="inner-top">
    <div class="product-top">
      <div class="product-image ">
        <a href="/collections/anwar-products/products/organica-rose-water-%D9%85%D8%A7%D8%A1-%D8%A7%D9%84%D9%88%D8%B1%D8%AF" class="product-grid-image" alt="Organica Rose Water ماء الورد" data-collections-related="/collections/anwar-products?view=related">
          <img data-srcset="//cdn.shopify.com/s/files/1/0438/9185/1432/products/41818762_1108406939328439_3676988941682081792_n_120x.jpg?v=1597845475" alt="Organica Rose Water ماء الورد" class="lazyload " data-sizes="auto" data-image />     
          
        </a>
      </div>

      
       <div class="product-label">
           

          

          
          <strong class="label sold-out-label" >Sold out</strong>
          <br>
          

          

          

        </div>
      
      
      
        <a class="quickview-button" href="javascript:void(0)" id="organica-rose-water-ماء-الورد" title="Quick View" >
          <span >
            Quick View
          </span>
        </a>
       

      
        <div class="product-des abs-top">
          
<a class="wishlist" data-icon-wishlist href="#" data-product-handle="organica-rose-water-ماء-الورد" data-id="5650133909672">
    <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
    <span class="wishlist-text text-hover" >
        Add to Wish List
    </span>
</a>
 
          
<a class="compare-button" data-icon-compare href="javascript:void(0)" data-compare-product-handle="organica-rose-water-ماء-الورد" data-id="5650133909672" title="Add to Compare" >
    <svg class="icon" height="512" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"  /><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"  /><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"  /><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"  /></svg>
    <span class="compare-text text-hover" >
        Add to Compare
    </span>
</a>
         
        </div>
      

    </div>
    
    <div class="product-bottom">
      
        <div class="product-vendor"><a href="/collections/vendors?q=Organica%20Beauty%20Inc." title="Organica Beauty Inc.">Organica Beauty Inc.</a></div>
      
      
      <a class="product-title" id="product-title" href="/collections/anwar-products/products/organica-rose-water-%D9%85%D8%A7%D8%A1-%D8%A7%D9%84%D9%88%D8%B1%D8%AF">
        
<span>
  Organica Rose Water ماء الورد
</span>

      </a>
      
      <span class="shopify-product-reviews-badge" data-id="5650133909672"></span>
      
      <div class="price-box">
        
        <div class="price-regular">
          <span>65.00</span>
        </div>
        
      </div>
      
      <ul class="item-swatch">

  
  
  
  
  

</ul>

      
    </div>
    
    <div class="action">
      
      <form action="/cart/add" method="post" class="variants" id="product-actions-5650133909672" enctype="multipart/form-data">    
        
        <input class="btn add-to-cart-btn" type="submit" value="Unavailable" disabled="disabled" />
        
      </form>      
    </div>
    
  </div>
</div>
          </div>
          
          <div class="grid-item col-12 ">
            













<div class="inner product-item" id="product-5486599930024">
  <div class="inner-top">
    <div class="product-top">
      <div class="product-image ">
        <a href="/collections/anwar-products/products/moroccoan-soap" class="product-grid-image" alt="Organica Moroccoan Soap صابون المغربى" data-collections-related="/collections/anwar-products?view=related">
          <img data-srcset="//cdn.shopify.com/s/files/1/0438/9185/1432/products/organic6_120x.jpg?v=1595771864" alt="Organica Moroccoan Soap صابون المغربى" class="lazyload " data-sizes="auto" data-image />     
          
        </a>
      </div>

      
      
      
        <a class="quickview-button" href="javascript:void(0)" id="moroccoan-soap" title="Quick View" >
          <span >
            Quick View
          </span>
        </a>
       

      
        <div class="product-des abs-top">
          
<a class="wishlist" data-icon-wishlist href="#" data-product-handle="moroccoan-soap" data-id="5486599930024">
    <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
    <span class="wishlist-text text-hover" >
        Add to Wish List
    </span>
</a>
 
          
<a class="compare-button" data-icon-compare href="javascript:void(0)" data-compare-product-handle="moroccoan-soap" data-id="5486599930024" title="Add to Compare" >
    <svg class="icon" height="512" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"  /><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"  /><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"  /><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"  /></svg>
    <span class="compare-text text-hover" >
        Add to Compare
    </span>
</a>
         
        </div>
      

    </div>
    
    <div class="product-bottom">
      
        <div class="product-vendor"><a href="/collections/vendors?q=Organica%20Beauty%20Inc." title="Organica Beauty Inc.">Organica Beauty Inc.</a></div>
      
      
      <a class="product-title" id="product-title" href="/collections/anwar-products/products/moroccoan-soap">
        
<span>
  Organica Moroccoan Soap صابون المغربى
</span>

      </a>
      
      <span class="shopify-product-reviews-badge" data-id="5486599930024"></span>
      
      <div class="price-box">
        
        <div class="price-regular">
          <span>100.00</span>
        </div>
        
      </div>
      
      <ul class="item-swatch">

  
  
  
  
  

</ul>

      
    </div>
    
    <div class="action">
      
      <form action="/cart/add" method="post" class="variants" id="product-actions-5486599930024" enctype="multipart/form-data">    
        
        
        <input type="hidden" name="id" value="35360635093160" />
        
        
        <button data-btn-addToCart class="btn add-to-cart-btn" type="submit"  data-form-id="#-5486599930024">
          Add to Cart
        </button>
         
        
        
        
      </form>      
    </div>
    
  </div>
</div>
          </div>
          
          <div class="grid-item col-12 ">
            













<div class="inner product-item" id="product-5650037309608">
  <div class="inner-top">
    <div class="product-top">
      <div class="product-image ">
        <a href="/collections/anwar-products/products/natural-cyperus-oil-%D8%B2%D9%8A%D8%AA-%D8%A7%D9%84%D8%B3%D8%B9%D8%AF-%D8%A7%D9%84%D8%AC%D8%A8%D9%84%D9%89" class="product-grid-image" alt="Natural Cyperus Oil زيت السعد الجبلى" data-collections-related="/collections/anwar-products?view=related">
          <img data-srcset="//cdn.shopify.com/s/files/1/0438/9185/1432/products/83903525_1474208059414990_5543778553989955584_n_120x.jpg?v=1597843780" alt="Natural Cyperus Oil زيت السعد الجبلى" class="lazyload " data-sizes="auto" data-image />     
          
        </a>
      </div>

      
      
      
        <a class="quickview-button" href="javascript:void(0)" id="natural-cyperus-oil-زيت-السعد-الجبلى" title="Quick View" >
          <span >
            Quick View
          </span>
        </a>
       

      
        <div class="product-des abs-top">
          
<a class="wishlist" data-icon-wishlist href="#" data-product-handle="natural-cyperus-oil-زيت-السعد-الجبلى" data-id="5650037309608">
    <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
    <span class="wishlist-text text-hover" >
        Add to Wish List
    </span>
</a>
 
          
<a class="compare-button" data-icon-compare href="javascript:void(0)" data-compare-product-handle="natural-cyperus-oil-زيت-السعد-الجبلى" data-id="5650037309608" title="Add to Compare" >
    <svg class="icon" height="512" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"  /><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"  /><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"  /><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"  /></svg>
    <span class="compare-text text-hover" >
        Add to Compare
    </span>
</a>
         
        </div>
      

    </div>
    
    <div class="product-bottom">
      
        <div class="product-vendor"><a href="/collections/vendors?q=Organica%20Beauty%20Inc." title="Organica Beauty Inc.">Organica Beauty Inc.</a></div>
      
      
      <a class="product-title" id="product-title" href="/collections/anwar-products/products/natural-cyperus-oil-%D8%B2%D9%8A%D8%AA-%D8%A7%D9%84%D8%B3%D8%B9%D8%AF-%D8%A7%D9%84%D8%AC%D8%A8%D9%84%D9%89">
        
<span>
  Natural Cyperus Oil زيت السعد الجبلى
</span>

      </a>
      
      <span class="shopify-product-reviews-badge" data-id="5650037309608"></span>
      
      <div class="price-box">
        
        <div class="price-regular">
          <span>125.00</span>
        </div>
        
      </div>
      
      <ul class="item-swatch">

  
  
  
  
  

</ul>

      
    </div>
    
    <div class="action">
      
      <form action="/cart/add" method="post" class="variants" id="product-actions-5650037309608" enctype="multipart/form-data">    
        
        
        <input type="hidden" name="id" value="35817516892328" />
        
        
        <button data-btn-addToCart class="btn add-to-cart-btn" type="submit"  data-form-id="#-5650037309608">
          Add to Cart
        </button>
         
        
        
        
      </form>      
    </div>
    
  </div>
</div>
          </div>
          
        </div> 
      </div>
      
    </div>
    
  
  

   
  		
    <div class="widget sidebar-banner">
      

      <a class="animate-scale" href="https://anwar.store/collections/organic-products/products/argan-oil?variant=35360766329000">
        
        <img data-src="//cdn.shopify.com/s/files/1/0438/9185/1432/files/1_1024x1024_crop_center.png?v=1596475549"
                     src="//cdn.shopify.com/s/files/1/0438/9185/1432/files/1_1024x1024_crop_center.png?v=1596475549" alt="Anwar Pharmacy" itemprop="logo"
                     class="lazyautosizes lazyloaded" data-sizes="auto">
        
      </a>
      
      
      
    </div>
  	
  
  

   
  		
    <div class="widget sidebar-banner">
      

      <a class="animate-scale" href="https://anwar.store/products/vichy-mineral-89?_pos=1&_sid=f585930a6&_ss=r">
        
        <img data-src="//cdn.shopify.com/s/files/1/0438/9185/1432/files/2_1024x1024_crop_center.png?v=1596475539"
                     src="//cdn.shopify.com/s/files/1/0438/9185/1432/files/2_1024x1024_crop_center.png?v=1596475539" alt="Anwar Pharmacy" itemprop="logo"
                     class="lazyautosizes lazyloaded" data-sizes="auto">
        
      </a>
      
      
      
    </div>
  	
  
  

      
    
  

</div>





<style>  
  
  
  @media (min-width: 1200px) { 
    
    
    
    
  }  
</style>


</div>
        <div id="shopify-section-product-template-default" class="shopify-section col-12 col-xl-9 col-main"><div data-section-id="product-template-default" data-section-type="product" id="ProductSection-product-template-default" data-enable-history-state="true" data-collections-related="/collections/anwar-products?view=related">
    <div class="product product-default">

        <div class="row product_top horizontal-tabs">
            <div class="col-md-6 product-photos" data-more-view-product>
                <div  class="product-img-box horizontal-moreview">
                    <div style="position: relative;" class="wrapper-images">
                        <div class="product-photo-container slider-for">
                            
                                
                                <div class="thumb filter-anwar-charcoal-facial-wash-غسول-البشرة-بالفحم">
                                    <a data-zoom class="fancybox" rel="gallery1" href="//cdn.shopify.com/s/files/1/0438/9185/1432/products/charzo_1024x1024.jpg?v=1595705721" data-fancybox="images">
                                        <img id="product-featured-image-10402505949352" src="//cdn.shopify.com/s/files/1/0438/9185/1432/products/charzo_1024x1024.jpg?v=1595705721" alt="Anwar Charcoal Facial Wash غسول البشرة بالفحم"
                                            class="lazyload"
                                            data-src="//cdn.shopify.com/s/files/1/0438/9185/1432/products/charzo_1024x1024.jpg?v=1595705721"
                                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                            data-aspectratio="//cdn.shopify.com/s/files/1/0438/9185/1432/products/charzo_1024x1024.jpg?v=1595705721"
                                            data-sizes="auto">
                                    </a>
                                </div>
                                
                            
                        </div>

                        

















                        
                    </div>
                    
                    <div class="click-to-zoom">
                        <span class="text">
<span>
  Roll over or click image to zoom in
</span>
</span>
                    </div>
                    
                    <div class="slider-nav" data-rows="5" data-vertical="false">
                        
                          
                          <div class="item filter-anwar-charcoal-facial-wash-غسول-البشرة-بالفحم">
                            <div class="product-single__media" data-media-id="10402505949352">
                              <a href="javascript:void(0)" data-image="//cdn.shopify.com/s/files/1/0438/9185/1432/products/charzo_1024x1024.jpg?v=1595705721" data-zoom-image="//cdn.shopify.com/s/files/1/0438/9185/1432/products/charzo_1024x1024.jpg?v=1595705721">
                                <img src="//cdn.shopify.com/s/files/1/0438/9185/1432/products/charzo_compact.jpg?v=1595705721" alt="Anwar Charcoal Facial Wash غسول البشرة بالفحم">
                              </a>
                            </div>
                          </div>
                          
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6 product-shop">
                <h1 class="product-title">
                    
<span>
  Anwar Charcoal Facial Wash غسول البشرة بالفحم
</span>

                </h1>

                
                <div class="group_item">
                    
                    <span class="shopify-product-reviews-badge" data-id="5486280212648"></span>
                    

                    
                    <div data-soldOut-product class="sold_product" data-items="3,5,6,7,8,10,12,15" data-hours="10,15,16,17,18,20,25,35">
                        <svg id="icon-fire" viewBox="0 0 384 512"><path fill="currentColor" d="M216 23.858c0-23.802-30.653-32.765-44.149-13.038C48 191.851 224 200 224 288c0 35.629-29.114 64.458-64.85 63.994C123.98 351.538 96 322.22 96 287.046v-85.51c0-21.703-26.471-32.225-41.432-16.504C27.801 213.158 0 261.332 0 320c0 105.869 86.131 192 192 192s192-86.131 192-192c0-170.29-168-193.003-168-296.142z"></path></svg>
                        <span class="items-count">2</span>
                        
<span>
  sold in last
</span>

                        <span class="hours-num">8</span>
                        
<span>
  hours
</span>

                    </div>
                    
                </div>
                

                
                <div class="product-infor">
                    
                    <div class="vendor-product">
                        
                        
                        <label>
                            Brand:
                        </label>
                        
                        
                        <span>
                          <a href="/collections/vendors?q=Anwar" title="Anwar">Anwar</a>
                        </span>
                    </div>
                    

                    

                    
                    <div class="product-inventory">
                        
                        
                        <label>
                            Availability:
                        </label>
                        
                        
                        <span>
                        
                        
                        
                        In stock
                        
                        
                        </span>
                    </div>
                    

                    
                </div>
                


                

                  

                

                <div class="prices">
                    
                    <span class="price" itemprop="price">
                        100.00
                    </span>
                    
                    <input type="hidden" id="product_regular_price" name="product_regular_price" value="10000">
                </div>

                <div class="label-sale-bg"></div>

                

                

                <form method="post" action="/cart/add" id="add-to-cart-form" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" novalidate="novalidate"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                
                
                <div id="product-variants">

                    
                    
                    













    
    

    
    
    
    

    
    
    

    
    
    

    

    
    





<div class="swatch title swatch-0 " data-option-index="0" style="display: none">
    <div class="header">
        
        <span>
        Title
        <em>*</em>
        </span>
        
    </div>

    
    
        

        

        
        
        
        <div data-value="Default Title" class="swatch-element default-title available">
            

            <input  id="swatch-0-default-title" type="radio" name="option-0" value="Default Title" checked/>

            
            <label for="swatch-0-default-title">
                Default Title
                <span class="crossed-out"> </span>
            </label>
            
        </div>
        

        <input class="text" data-value="swatch-0-default-title" type="hidden" data-value-sticky="36027539325096" />
    
</div>



                    
                    

                    
                    <input type="hidden" name="id" value="36027539325096" />
                    
                </div>
                
              
                
              
                
                <div class="quantity">
                    <label for="quantity" >
                        Quantity:
                    </label>
                    <div class="qty-group">
                        <a href="#" data-minus-qtt class="minus button"></a>
                        <input type="text" data-qtt-id="quantity__5486280212648" name="quantity" value="1">
                        <a href="#" data-plus-qtt class="plus button"></a>
                    </div>
                </div>
                

                
                <div class="total-price">
                    <label >
                        Subtotal:
                    </label>
                    <span class="total-money">
                        100.00
                    </span>
                </div>
                

                
                <div class="groups-btn">
                    
                    
                    <div class="bottom-button">
                        <input data-btn-addToCart type="submit" name="add" class="btn"  id="product-add-to-cart" value="Add to Cart" data-form-id="#add-to-cart-form">
                        
<a class="wishlist" data-icon-wishlist href="#" data-product-handle="charcoal-facial-wash" data-id="5486280212648">
    <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
    <span class="wishlist-text text-hover" >
        Add to Wish List
    </span>
</a>
 
                    </div>
                        

                        
                            
                                <div data-shopify="payment-button" class="shopify-payment-button"><button class="shopify-payment-button__button shopify-payment-button__button--unbranded shopify-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button><button class="shopify-payment-button__more-options shopify-payment-button__button--hidden" disabled="disabled" aria-hidden="true"> </button></div>
                            
                        

                </div>
                
                
                </form>

                
                <div id="customers_view" data-customer-view="100, 59, 11, 14, 185, 193, 165, 50, 38, 99, 112, 46, 10, 125, 200, 250, 18">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <label>100</label> 
<span>
  customers are viewing this product
</span>

                    </div>
                

                

                

                

                
            </div>
        </div>

        
            

        

        
        <div class="product_bottom">
            
            



<div class="tabs__product-page horizontal-tabs">
    
    <ul class="list-tabs">
        
        <li class="tab-title">
            <a href="#" data-tapTop data-target="#collapse-tab1" class="tab-links active">
                
<span>
  Description
</span>

            </a>
        </li>
        

        
        <li class="tab-title">
            <a href="#" data-tapTop data-target="#collapse-tab2" class="tab-links ">
                
<span>
  Customer Reviews
</span>

            </a>
        </li>
        

        
        <li class="tab-title">
            <a href="#" data-tapTop data-target="#collapse-tab3" class="tab-links ">
                
<span>
  Shipping & Returns
</span>

            </a>
        </li>
        

        

    </ul>

    <div class="wrapper-tab-content">
        

        
        

        <div class="tab-title">
            <a href="#" data-tapTop data-target="#collapse-tab1" class="tab-links active">
                
<span>
  Description
</span>

                <span class="icon-dropdown">
                <i class="fa fa-angle-down"></i>
                </span>
            </a>
        </div>

        <div class="tab-content active" data-TabContent id="collapse-tab1">
            
            <div>
                <h4 style="text-align: right;">غسول للبشرة بالفحم<br><span data-mce-fragment="1"> لتنقية البشرة من السموم المسببة للحبوب والبكتريا المسببة للرؤوس السوداء والبيضاء وازالة دهون البشرة</span><br>
</h4>
            </div>
            

            
        </div>
        

        
        <div class="tab-title">
            <a href="#" data-tapTop data-target="#collapse-tab2" class="tab-links ">
                
<span>
  Customer Reviews
</span>

                <span class="icon-dropdown">
                <i class="fa fa-angle-down"></i>
                </span>
            </a>
        </div>

        <div class="tab-content " data-TabContent id="collapse-tab2">
            <div id="shopify-product-reviews" data-id="5486280212648">
                
            </div>
        </div>
        

        
        <div class="tab-title">
            <a href="#" data-tapTop data-target="#collapse-tab3" class="tab-links ">
                
<span>
  Shipping & Returns
</span>

                <span class="icon-dropdown">
                <i class="fa fa-angle-down"></i>
                </span>
            </a>
        </div>

        <div class="tab-content " data-TabContent id="collapse-tab3">
            

            
            
            <div>
                <h4>Returns Policy</h4>
<p>You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.)..</p>
<p>
    You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).</p>
<p>
    If you need to return an item, simply login to your account, view the order using the "Complete Orders" link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the returned item..</p>
<h4>Shipping</h4>
<p>We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations..</p>
<p>
    When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.</p>
<p>
    Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound..</p>
            </div>
            
            
        </div>
        

        
    </div>
    
</div>


            
            

        </div>
        
    </div>
</div>

 
<div class="sticky_form" data-sticky-add-to-cart>
    <div class="container">
        <div class="row align-items-center">

            

            <div class="col-12 col-lg-9">
                <form method="post" action="/cart/add" id="form-sticky" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                    <div class="row align-items-center">
                        <div class=" col-img-title">
                            <div class="pr-img sticky-item">
                                <img src="//cdn.shopify.com/s/files/1/0438/9185/1432/products/charzo_compact.jpg?v=1595705721" alt="">

                                <div class="product-title">
                                    
<span>
  Anwar Charcoal Facial Wash غسول البشرة بالفحم
</span>

                                </div>
                            </div>
                        </div>

                        <div class="col-variant">                           
                            <div class="sticky-item sticky_group">
                                
                                

                                
                                <div class="quantity">
                                    <div class="qty-group">
                                        <a href="#" data-minus-qtt class="minus button"></a>
                                        <input type="text" data-qtt-id="quantity__5486280212648" name="quantity" value="1">
                                        <a href="#" data-plus-qtt class="plus button"></a>
                                    </div>
                                </div>
                                
                            </div>                                                        
                        </div>

                        <div class=" col-actions">
                            <div class="action sticky-item">
                                
                                <input type="hidden" name="id" value="36027539325096" /> 
                                <input data-sticky-btn-addToCart type="submit" name="add" class="btn sticky-add-to-cart"  value="Add to Cart">          
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js" type="text/javascript"></script>


<script>
  var buttonSlt = '[data-minus-qtt], [data-plus-qtt]',
      buttonElm = $(buttonSlt);

  $(document).on('click', buttonSlt, function(e) {
      e.preventDefault();
      e.stopPropagation();

      var self = $(this),
          input = $('.quantity input[name="quantity"]'),
          oldVal = parseInt(input.val()),
          newVal = 1;

      switch (true) {
          case (self.hasClass('plus')): {
              newVal = oldVal + 1;
              break;
          }
          case (self.hasClass('minus') && oldVal > 1): {
              newVal = oldVal - 1;
              break;
          }
      }

      input.val(newVal).trigger('change');


  });
    
    $('[data-qtt-id]').on('change', updatePricing);



    function updatePricing() {
      var quantity = parseInt($('[data-qtt-id]').val());
      var p = $('.product #product_regular_price').val();
      var totalPrice1 = p * quantity;
      var g = Shopify.formatMoney(totalPrice1, window.money_format);
      $('.product .total-price span').html(g);

      
      
      
        
    };
    

    var inven_array = {
          
          "36027539325096":"11",
          
        };
    var inven_num = '';

    var selectCallback = function(variant, selector) {
        var addToCartBtn = $('#product-add-to-cart'),
            productPrice = $('.product .price'),
            comparePrice = $('.product .compare-price'),
            productInventory = $('.product-inventory'),
            productSku = $('.product .sku-product'),
            labelSave = $('.product .label-sale-bg'),
            labelSave1 = $('.product .sale-label');

        if(variant) {
        // addToCartbtn
            if (variant.available) {
                for( variant_id in inven_array){
                  if(variant.id == variant_id ){
                    inven_num = inven_array[variant_id];
                    var inventoryQuantity = parseInt(inven_num);
                  }
                  if(inventoryQuantity > 0){
                    // We have a valid product variant, so enable the submit button
                    addToCartBtn.removeClass('disabled').removeAttr('disabled').val(window.inventory_text.add_to_cart);
                    $('.groups-btn').removeClass('remove');
                  }else{
                    addToCartBtn.removeClass('disabled').removeAttr('disabled').val(window.inventory_text.pre_order);
                    $('.groups-btn').addClass('remove');

                  }
                }
            }
            else {
                addToCartBtn.val(window.inventory_text.sold_out).addClass('disabled').attr('disabled', 'disabled');
            };

        // Prices
            $('.product #product_regular_price').val(variant.price);
            productPrice.html(Shopify.formatMoney(variant.price, "{{amount}}"));

            if(variant.compare_at_price > variant.price) {
                productPrice.addClass("on-sale");
                comparePrice
                    .html(Shopify.formatMoney(variant.compare_at_price, "{{amount}}"))
                    .show();
                
                    labelSave.html('<p>'+'-' + Math.floor((variant.compare_at_price - variant.price) * 100 / variant.compare_at_price) + '%' + '</p>').show();
                
            }
            else {
                comparePrice.hide();
                productPrice.removeClass("on-sale");
                
                    labelSave.hide();
                
            };

            
            updatePricing();
            

            

            
            if (variant.available) {
                if (variant.inventory_management != null) {
                    productInventory.find('span').text(window.inventory_text.in_stock);
                }
                else {
                    productInventory.find('span').text(window.inventory_text.many_in_stock);
                }
            }
            else {
                productInventory.find('span').text(window.inventory_text.out_of_stock);
            }
            

            var form = $('#' + selector.domIdPrefix).closest('form');

            for (var i=0,length=variant.options.length; i<length; i++) {
                var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');

                if (radioButton.size()) {
                    radioButton.get(0).checked = true;
                }
            };
        }
        else {
            addToCartBtn.val(window.inventory_text.sold_out).addClass('disabled').attr('disabled', 'disabled');
        };

        
    
        /*begin variant image*/
        $(document).ready(function(){
          if (variant && variant.featured_image) {
              var originalImage = $("img[id|='product-featured-image']");
              var newImage = variant.featured_image;
              var element = originalImage[0];

              Shopify.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                  jQuery('.slider-nav img').each(function() {
                      var grandSize = $(this).attr('src').split('?')[0].replace('compact','1024x1024');

                      newImageSizedSrc = newImageSizedSrc.split('?')[0];

                      if(grandSize === newImageSizedSrc) {
                          var item = $(this).closest('.item');

                          item.trigger('click');
                          return false;
                      }
                  });
              });
          };
        });

        $('.selector-wrapper').removeClass('option-non');
        
            if ($('.selector-wrapper:eq(0) option').length < 2) {
                $('.selector-wrapper:eq(0)').addClass('option-non');
            }
        
    };

    $(function($) {

        if($('#product-selectors').length > 0){
          new Shopify.OptionSelectors('product-selectors', {
              product: {"id":5486280212648,"title":"Anwar Charcoal Facial Wash غسول البشرة بالفحم","handle":"charcoal-facial-wash","description":"\u003ch4 style=\"text-align: right;\"\u003eغسول للبشرة بالفحم\u003cbr\u003e\u003cspan data-mce-fragment=\"1\"\u003e لتنقية البشرة من السموم المسببة للحبوب والبكتريا المسببة للرؤوس السوداء والبيضاء وازالة دهون البشرة\u003c\/span\u003e\u003cbr\u003e\n\u003c\/h4\u003e","published_at":"2020-07-25T21:35:21+02:00","created_at":"2020-07-25T21:35:20+02:00","vendor":"Anwar","type":"Anwar Products","tags":["Anwar","Anwar Products","Charcoal","Facial Wash","Skin Care"],"price":10000,"price_min":10000,"price_max":10000,"available":true,"price_varies":false,"compare_at_price":10000,"compare_at_price_min":10000,"compare_at_price_max":10000,"compare_at_price_varies":false,"variants":[{"id":36027539325096,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":false,"featured_image":null,"available":true,"name":"Anwar Charcoal Facial Wash غسول البشرة بالفحم","public_title":null,"options":["Default Title"],"price":10000,"weight":0,"compare_at_price":10000,"inventory_management":"shopify","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0438\/9185\/1432\/products\/charzo.jpg?v=1595705721"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0438\/9185\/1432\/products\/charzo.jpg?v=1595705721","options":["Title"],"media":[{"alt":null,"id":10402505949352,"position":1,"preview_image":{"aspect_ratio":1.0,"height":945,"width":945,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0438\/9185\/1432\/products\/charzo.jpg?v=1595705721"},"aspect_ratio":1.0,"height":945,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0438\/9185\/1432\/products\/charzo.jpg?v=1595705721","width":945}],"content":"\u003ch4 style=\"text-align: right;\"\u003eغسول للبشرة بالفحم\u003cbr\u003e\u003cspan data-mce-fragment=\"1\"\u003e لتنقية البشرة من السموم المسببة للحبوب والبكتريا المسببة للرؤوس السوداء والبيضاء وازالة دهون البشرة\u003c\/span\u003e\u003cbr\u003e\n\u003c\/h4\u003e"},
              onVariantSelected: selectCallback,
              enableHistoryState: true
          });

        }



        Shopify.linkOptionSelectors({"id":5486280212648,"title":"Anwar Charcoal Facial Wash غسول البشرة بالفحم","handle":"charcoal-facial-wash","description":"\u003ch4 style=\"text-align: right;\"\u003eغسول للبشرة بالفحم\u003cbr\u003e\u003cspan data-mce-fragment=\"1\"\u003e لتنقية البشرة من السموم المسببة للحبوب والبكتريا المسببة للرؤوس السوداء والبيضاء وازالة دهون البشرة\u003c\/span\u003e\u003cbr\u003e\n\u003c\/h4\u003e","published_at":"2020-07-25T21:35:21+02:00","created_at":"2020-07-25T21:35:20+02:00","vendor":"Anwar","type":"Anwar Products","tags":["Anwar","Anwar Products","Charcoal","Facial Wash","Skin Care"],"price":10000,"price_min":10000,"price_max":10000,"available":true,"price_varies":false,"compare_at_price":10000,"compare_at_price_min":10000,"compare_at_price_max":10000,"compare_at_price_varies":false,"variants":[{"id":36027539325096,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":false,"featured_image":null,"available":true,"name":"Anwar Charcoal Facial Wash غسول البشرة بالفحم","public_title":null,"options":["Default Title"],"price":10000,"weight":0,"compare_at_price":10000,"inventory_management":"shopify","barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0438\/9185\/1432\/products\/charzo.jpg?v=1595705721"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0438\/9185\/1432\/products\/charzo.jpg?v=1595705721","options":["Title"],"media":[{"alt":null,"id":10402505949352,"position":1,"preview_image":{"aspect_ratio":1.0,"height":945,"width":945,"src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0438\/9185\/1432\/products\/charzo.jpg?v=1595705721"},"aspect_ratio":1.0,"height":945,"media_type":"image","src":"https:\/\/cdn.shopify.com\/s\/files\/1\/0438\/9185\/1432\/products\/charzo.jpg?v=1595705721","width":945}],"content":"\u003ch4 style=\"text-align: right;\"\u003eغسول للبشرة بالفحم\u003cbr\u003e\u003cspan data-mce-fragment=\"1\"\u003e لتنقية البشرة من السموم المسببة للحبوب والبكتريا المسببة للرؤوس السوداء والبيضاء وازالة دهون البشرة\u003c\/span\u003e\u003cbr\u003e\n\u003c\/h4\u003e"}, '.product');

        

        $('.product-shop .selector-wrapper label').append('<em>*</em>');

        
            $('.selector-wrapper:eq(0)').addClass('title');
        

        
        $('.selector-wrapper').hide();
        

        

    });
</script>





</div>
        <div id="shopify-section-product-recommendations" class="shopify-section">




<div id="product-recommendations">
  <div class="container">
    <div class="related-products page-width product-recommendations js-product-recomendation" data-product-id="5486280212648" data-limit="8" data-section-id="product-recommendations" data-section-type="product-recommendations" data-related-products>
      
    </div>
  </div>
</div>

</div>
      </div>
    </div>   
  </div>
</div>
<div class="recently-content-sections">
  <div class="container">
    <div id="shopify-section-recently-viewed-products" class="shopify-section"> 
<script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0438/9185/1432/t/2/assets/jquery.products.min.js?v=10436957144424339264" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/0438/9185/1432/t/2/assets/slick.min.js?v=8064982737169629649" type="text/javascript"></script>

<section class="recently-viewed-products" style="display: none;">
  
  <div class="widget-title">   
    <h3 class="box-title">
      <span class="title"> 
        
<span>
  Recently Viewed Products 
</span>

      </span>
    </h3>
  </div>
  
  

  
  <div class="widget-product">
    <div class="products-grid row five-items" data-rows="5" data-rowlt="4" data-rowtb="4" data-rowtblg="3" data-rowbm="2" id="recently-viewed-products-grid"></div>
  </div>
</section>

<script>
  
  function splitTitle(title) {
    if (title.indexOf("|") < 0) 
      return title;
    var titleArr = title.split("|")[0];
    return titleArr;
  }

</script>

  
  <script id="recently-viewed-product-grid-template" type="text/x-jquery-tmpl">
  

  <div class="grid-item col-6 col-md-4 col-lg-3 col5 ">
    <div class="inner product-item{{if !available}} sold-out {{/if}}{{if compare_at_price_min > price_min}} on-sale{{/if}}" data-product-id="product-${id}">
      <div class="inner-top">
      <div class="product-top">
        <div class="product-image">
            <a href="${url}" class="product-grid-image" data-collections-related="/collections/${collection}?view=related">
              <img src="${featured_image}" alt="${featured_image.alt}"/>
            </a>
        </div>

        <div class="product-label">
          ${( tagNew = false ),''}
          ${( tagLabel = false ),''}
          {{if tags}}
            {{each tags}} 
                {{if $value =="new" || $value =="New"}}
                    ${( tagNew = true ),''}
                {{/if}}

                 {{if $value =="custom label" || $value =="Custom Label"}}
                      ${( tagLabel = true ),''}
                  {{/if}}
             {{/each}}
          {{/if}}

          {{if tagNew}}
            <strong class="label new-label" >
                New
            </strong>
            <br>
          {{/if}}

          



          
          
          

            {{if compare_at_price_min > price_min}} 
              <strong class="label sale-label">
                <span>
                    Sale
                </span>
            </strong>
            <br>
            {{/if}}

          
          
          


          {{if !available}}
            <strong class="label sold-out-label">
              <span >
                Sold out
              </span>
            </strong>
            <br>
          {{/if}}
                     
           {{if tagLabel}}
            <strong class="label custom-label">
              <span >
                Custom Label
              </span>
            </strong>
          {{/if}}
         
        </div>
        
        

        
             
              <a class="quickview-button" href="javascript:void(0)" id="${handle}">
                     <span >
                        Quick View
             </span>                        
             </a>
              
          
          
        
          <div class="product-des abs-top">
            
            
            
              <a class="wishlist" data-icon-wishlist href="#" data-product-handle="${handle}" data-id="${id}">
                  <svg id="lnr-heart" viewBox="0 0 1024 1024" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="path1" d="M486.4 972.8c-4.283 0-8.566-1.074-12.434-3.222-4.808-2.67-119.088-66.624-235.122-171.376-68.643-61.97-123.467-125.363-162.944-188.418-50.365-80.443-75.901-160.715-75.901-238.584 0-148.218 120.582-268.8 268.8-268.8 50.173 0 103.462 18.805 150.051 52.952 27.251 19.973 50.442 44.043 67.549 69.606 17.107-25.565 40.299-49.634 67.55-69.606 46.589-34.147 99.878-52.952 150.050-52.952 148.218 0 268.8 120.582 268.8 268.8 0 77.869-25.538 158.141-75.901 238.584-39.478 63.054-94.301 126.446-162.944 188.418-116.034 104.754-230.314 168.706-235.122 171.376-3.867 2.149-8.15 3.222-12.434 3.222zM268.8 153.6c-119.986 0-217.6 97.614-217.6 217.6 0 155.624 120.302 297.077 221.224 388.338 90.131 81.504 181.44 138.658 213.976 158.042 32.536-19.384 123.845-76.538 213.976-158.042 100.922-91.261 221.224-232.714 221.224-388.338 0-119.986-97.616-217.6-217.6-217.6-87.187 0-171.856 71.725-193.314 136.096-3.485 10.453-13.267 17.504-24.286 17.504s-20.802-7.051-24.286-17.504c-21.456-64.371-106.125-136.096-193.314-136.096z"></path></svg>
                  <span class="wishlist-text text-hover" {% if settings.enable_multilang %}data-translate="wishlist.general.add_to_wishlist"{% endif %}>
                      {{ 'wishlist.general.add_to_wishlist' | t }}
                  </span>
              </a>
              
              
            

            
             
            

             
              
            
              <a class="compare-button" data-icon-compare href="javascript:void(0)" data-compare-product-handle="${handle}" data-id="${id}">
                  <svg class="icon" height="512" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M815.415 818.951c-15.614 0-28.278-12.667-28.278-28.278v-489.739c0-43.452-35.349-78.8-78.8-78.8h-145.669c-15.614 0-28.278-12.667-28.278-28.278s12.667-28.278 28.278-28.278h145.669c74.676 0 135.36 60.684 135.36 135.36v489.739c0 15.614-12.667 28.278-28.278 28.278z"  /><path d="M595.808 309.182c-6.039 0-12.078-2.062-16.938-6.481l-86.606-76.884c-8.395-7.513-13.257-18.265-13.257-29.605s4.861-22.095 13.257-29.605l86.606-77.034c10.458-9.426 26.659-8.395 35.939 2.062s8.395 26.659-2.062 35.939l-77.034 68.49 77.034 68.49c10.458 9.426 11.489 25.481 2.062 35.939-5.008 5.891-11.93 8.69-18.999 8.69z"  /><path d="M447.194 822.045h-145.669c-74.676 0-135.36-60.684-135.36-135.36v-489.885c0-15.614 12.667-28.278 28.278-28.278s28.278 12.667 28.278 28.278v489.739c0 43.452 35.349 78.8 78.8 78.8h145.669c15.614 0 28.278 12.667 28.278 28.278 0 15.76-12.667 28.428-28.278 28.428z"  /><path d="M414.053 904.231c-7.069 0-13.994-2.946-18.999-8.543-9.28-10.458-8.395-26.659 2.062-35.939l77.034-68.49-77.034-68.49c-10.458-9.426-11.489-25.481-2.062-35.939 9.426-10.458 25.481-11.489 35.939-2.062l86.606 76.884c8.395 7.513 13.257 18.265 13.257 29.605s-4.861 22.095-13.257 29.605l-86.606 76.884c-4.861 4.419-11.046 6.481-16.938 6.481z"  /></svg>
                  <span class="compare-text text-hover" {% if settings.enable_multilang %}data-translate="compare.general.add_to_compare"{% endif %}>
                      {{ 'compare.general.add_to_compare' | t }}
                  </span>
              </a>
            
               
            

          </div>
        
          
        

        </div>
            
        <div class="product-bottom">
          
           
          
          <div class="product-vendor">
              <a href="/collections/vendors?q=${vendor}" title="Anna">${vendor}</a>                
           </div>
          
             
          
            
          
            
          
              <a class="product-title lang1" href="${url}">${splitTitle(title)}</a>
          
            
          
            
          
            
          
            <span class="shopify-product-reviews-badge" data-id="${id}"></span>
          
            
          

          <div class="price-box">
            {{if compare_at_price_min > price_min}} 
              <p class="sale">
                <span class="old-price">
                  {{html Shopify.formatMoney(compare_at_price_min, window.money_format)}}
                </span>
                
                <span class="special-price">
                  {{if price_varies}}
                    <em>from </em>
                  {{/if}}
                    {{html Shopify.formatMoney(price_min, window.money_format)}}
               </span>
              </p>
            {{else}}
              <p class="regular-product">
                <span>
                  {{if price_varies}}<em>from </em>{{/if}}
                    {{html Shopify.formatMoney(price_min, window.money_format)}}
                </span>
              </p>
            {{/if}}
          </div>   
          
          <div class="abs-bottom-mb">
            
            
            
            <div class="action">
                <form action="/cart/add" method="post" class="variants" id="add-to-cart-form-list-${id}" data-id="product-actions-${id}" enctype="multipart/form-data">    
                    {{if !available}}
                        <button class="btn add-to-cart-btn" type="submit" disabled="disabled" >
                            Unavailable
                        </button>
                    {{else variants.length > 1 }}
                        <a class="btn" href='${url}' title='${title}' >
                        Select Options
                        </a>
                    {{else}}
                      <input type="hidden" name="id" value="${variants[0].id}" />      
                      <button data-btn-addToCart class="btn add-to-cart-btn" type="submit"  data-form-id="#add-to-cart-form-list-${id}">
                      Add to Cart
                      </button>
                    {{/if}}
                </form>
            </div>
            
            
            
          </div>

        </div>                        
      </div>
    </div>
  </div>

</script>


<script>
    $('.recently-content-sections').hide();

    Shopify.Products.showRecentlyViewed({ 
        howManyToShow: 10,
        wrapperId: 'recently-viewed-products-grid', 
        templateId: 'recently-viewed-product-grid-template',
        onComplete: function() {
            var recentlyViewBlock = $('.recently-viewed-products');
            var recentlyGrid = recentlyViewBlock.find('.products-grid');
            var productGrid = recentlyGrid.children();
            var rows = recentlyGrid.data('rows');
            var rowlt = recentlyGrid.data('rowlt');

            if(productGrid.length) {
                recentlyViewBlock.show();
            $('.recently-content-sections').show();

                if(recentlyViewBlock.is(':visible')) {    

                    
                    
                    if(!recentlyGrid.hasClass('slick-initialized')) {

                    recentlyGrid.slick({
                        infinite: false,
                        speed: 1000,
                        slidesToShow: rows,
                        slidesToScroll: 1,
                        dots: false,
                        arrows: true,
                        nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 17 33" xml:space="preserve"><g id="e4eb89a6-f885-43b8-9259-0d6b1516fab0"><g id="_x38_e584754-6657-46f1-a9d8-2cfd6623b552"><g><polygon points="14.9,14.5 0,0 0,3.7 11.1,14.5 13.2,16.5 11.1,18.5 0,29.3 0,33 14.9,18.5 17,16.5 "></polygon></g></g></g></svg></button>',
                        prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 33"><g id="7f9a1925-e8c7-4614-8787-3c6095a9f6e1" data-name="Layer 2"><g id="c9b7920a-81fa-4bfe-ad13-4da717c6854b" data-name="Layer 1"><g id="c2d982ff-0cf6-4220-b365-47f30d708fea" data-name="e4eb89a6-f885-43b8-9259-0d6b1516fab0"><g id="f51d455e-6b9c-4c4e-96db-a5004582beda" data-name="8e584754-6657-46f1-a9d8-2cfd6623b552"><polygon points="0 16.5 2.1 18.5 17 33 17 29.3 5.9 18.5 3.8 16.5 5.9 14.5 17 3.7 17 0 2.1 14.5 0 16.5"></polygon></g></g></g></g></svg></button>',
                        responsive: [
                          {
                            breakpoint: 1450,
                            settings: {
                                slidesToShow: rowlt,
                                slidesToScroll: 1
                            }
                          },
                          {
                            breakpoint: 1281,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 1
                            }
                          },
                          {
                            breakpoint: 1025,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                                arrows:false,
                                dots: true           
                            }
                          },
                          {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                arrows:false,
                                dots: true                
                            }
                          },
                          {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                arrows:false,
                                dots: true
                            }
                          },
                          {
                            breakpoint: 370,
                            settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                              arrows:false,
                              dots: true
                            }
                          }
                        ]
                        });
                    };     

                    if($('.spr-badge').length > 0) {
                    return window.SPR.registerCallbacks(), window.SPR.initRatingHandler(), window.SPR.initDomEls(), window.SPR.loadProducts(), window.SPR.loadBadges();
                    }; 
        
                    if (window.show_multiple_currencies) {
                    Currency.convertAll(window.shop_currency, $('#currencies .active').attr('data-currency'), '#dropdown-cart span.money', 'money_format');
                    };
                }; 
            }
            
            else {
                recentlyViewBlock.hide();
            };

            var wishListItems = localStorage.getItem('items') ? JSON.parse(localStorage.getItem('items')) : [];

            if (!wishListItems.length) {
                return;
            }

            for (var i = 0; i < wishListItems.length; i++) {
                var icon = $('[data-product-handle="'+ wishListItems[i] +'"]');
                icon.addClass('whislist-added');
                icon.find('.wishlist-text').text(window.inventory_text.remove_wishlist);
            };
        }
    });
</script>

<script>
    Shopify.Products.recordRecentlyViewed();
</script>



</div>
  </div>
</div>



<div class="modal fade halo_modal-custom" id="video_product" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <a data-dismiss="modal" class="close close-modal" title="Close" href="javascript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px" class="icon-close">
    <path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" font-weight="400" font-family="sans-serif" white-space="normal" overflow="visible"/>
</svg>
                </a>
            </div>

            <div class="modal-body">
                <div class="videoWrapper">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="themevale_popup">
  <div id="shopify-section-someone-purchased" class="shopify-section">
<style>

  @media (max-width:1199px){
    .product-notification{
      bottom: 15px; 
      left: 15px;
    }
    .show_sticky .product-notification {
        bottom: 65px!important;
        transition: bottom .35s ease-in-out;
        margin-bottom: 15px;
    }
  }
  @media (max-width: 1024px){
    .show_sticky .product-notification{
        bottom: 80px;
    }
    .countdown-css.show_sticky .product-notification{
        bottom: 116px;
    }
  }
  @media (max-width:768px){
    .product-notification{
      bottom:15px;
      left:0px;
    }
    .countdown-css.show_sticky .product-notification {
        bottom: 92px!important;
        transition: bottom .35s ease-in-out;
        margin-bottom: 15px;
    }
  }
  @media (max-width: 479px){
    .product-notification{
      bottom:0;
    }
    .show_sticky .product-notification{
        bottom: 58px!important;
        transition: bottom .35s ease-in-out;
        margin-bottom: 0;
    }
    .countdown-css.show_sticky .product-notification {
        bottom: 85px!important;
        transition: bottom .35s ease-in-out;
        margin-bottom: 0;
    }
  }
  @media (max-width: 320px){
    .countdown-css.show_sticky .product-notification {
        bottom: 89px!important;
        transition: bottom .35s ease-in-out;
        margin-bottom: 0;
    }
  }

  @media (min-width: 1200px) {
      .show_sticky .product-notification {
        bottom: 65px!important;
        transition: bottom .35s ease-in-out;
      }
  }
</style>

<script>

    $(document).ready(function() {
      $('.product-notification').addClass('notifi-left');
      if($('#accept-cookies').hasClass('cookies-left')){
        $('.themevale_popup').addClass('all-left')
      }
    })

</script>






<style>
   @media (min-width: 481px) {
    .product-notification{
      
        left: 15px;
      
    }
   }
  
  
    @media (max-width: 767px) {
      .product-notification{
        display:none;
      }
    }
  
</style>
</div>
  <div id="shopify-section-cookie_popup" class="shopify-section">




</div>
</div>


    </main>

    <?php
   include "includes/footer.php";
   ?>


