{{--
  Template Name: Contact Page
--}}
@extends('layouts.app')
@section('content')
@while(have_posts()) @php(the_post())
  <h1>Contact Us</h1>
        <p class='uk-text-large'>If you have any queries or just want to discuss project details for your business then get in touch right away by entering your details below.</p>
      </div>
    </div>
  </section>
 <section class="features1">
<div class="tm-section tm-section-color-white">
            <div class="uk-container uk-container-center uk-text-center top">
            <h1 class="tm-margin-large-bottom">Get In Touch</h1>
             <hr class="uk-divider">
            <p class="uk-text-large uk-text-lead">Your contact information is never given out to third parties unless you specifically give permission to do so.</p>
          </div>
       </div>
            <div class="tm-section tm-section-color-white">
            <div class="uk-container">
                       <div class='uk-grid'>
                <div class='uk-width-medium-7-10 form'>
         <h1 class='tm-margin-large-bottom'>Get A Call About Your Project</h1>
              <p class='uk-text-large uk-text-lead'>Just enter your details below with your enquiry and we will get straight back to you.</p> 
         <?php echo do_shortcode("[webmobapps_custom_form]"); ?> 
</div>
<div class='uk-width-medium-3-10 contact'>
<h1 class='tm-margin-large-bottom'>Contact Us</h1>
<p class='uk-text-large uk-text-lead'>Contact Details</p>
<h3>Email</h3>
<p><a style="text-decoration:none;" href='mailto:sales@webmobapps.com?Subject=Enquiry' target='_top'>sales@webmobapps.com</a></p>
<h3>Phone</h3>
<p><a style="text-decoration:none;" href='tel:+44 1302 459640'>+44 1302 459640</a></p>
<address>
<h3>Address</h3>
<p>Unit 10729<br />
Chynoweth House<br />
Trevissome Park<br />
Truro<br />
TR4 8UN<br />
UK </p></address>
</div>
</div> 
</div>
</div>
 <div class="tm-section tm-section-color-white">
         <div class="uk-container uk-container-center uk-text-center">
          <h1 class="tm-margin-large-bottom">Our Location</h1>
          <hr class="uk-divider">
          <div class="uk-width-large map">  
          <?php echo do_shortcode("[ank_google_map]"); ?> 
          </div>
        </div>
      </div>
</section>
<section class="footer">
    <div class="site-info">
      <div class="uk-container">
        <div class="uk-flex">
          <div class="uk-width-1-3 media">
            <a class="logo" href="index.php">
             <img src="@asset('images/logo.png')" width="160" height="40" title="Webmobapps" alt="Webmobapps">
            </a>
            <div>&nbsp;</div>
          @php(dynamic_sidebar('image4-sidebar-footer'))
          </div>
          <div class="uk-width-1-3 links margin">
          @php(dynamic_sidebar('first-footer-widget-area'))
          </div>
          <div class="uk-width-1-3 links">
          @php(dynamic_sidebar('second-footer-widget-area'))
          </div>
          <div class="uk-width-1-3 links">
          @php(dynamic_sidebar('third-footer-widget-area'))
          </div>
          <div class="uk-width-1-3 links">
          @php(dynamic_sidebar('fourth-footer-widget-area'))
          </div>
        </div>
      </div>
      <div class="uk-container uk-container-center uk-text-center">
        <hr class="divider">
      </div>
      <div class="uk-container">
        <div class="uk-flex bottom">
          <div class="uk-width-1-2 copyright uk-width-9-10">
          <p><?php printf( __( 'Copyright %1$s', 'webmobapps' ), '<a href="'. esc_url( 'https://webmobapps.com' ) .'">Webmobapps</a> © 2018 All Rights Reserved' ); ?></p>
          </div>
          <div class="uk-width-1-2 social uk-width-9-10">
            @php(dynamic_sidebar('social-footer-widget-area'))
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </section> 
@php(wp_footer()) 
@endwhile
@endsection