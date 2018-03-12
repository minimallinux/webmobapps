{{--
  Template Name: Thank You Page
--}}
@extends('layouts.app')
@section('content')
@while(have_posts()) @php(the_post())
  <h1>Thanks For Your Inquiry</h1>
        <p class="uk-text-large">Thank You For Contacting Us. We will normally get back to you within 24 hours. Your contact information is never given out to third parties unless you specifically give permission to do so.</p>
      </div>
    </div>
  </section>
 <section class="features1">
 <div class="tm-section tm-section-color-white">
            <div class="uk-container uk-container-center uk-text-center top">
           <h1 class="tm-margin-large-bottom">Follow us on Twitter and Facebook and Instagram!.</h1>
             <hr class="uk-divider">
            <p class="uk-text-large uk-text-lead">Our Custom Built Mobile Web Application for small businesses who want to improve their search ranking, features and facilties for mobile customers at low cost. We can include completely free many services which usually entail substantial extra costs, all for a one off, fully inclusive low price which is the best in the industry! It is ideal for small businesses who are on a budget, with or without a website as it enables your company to appear well in search returns from mobile devices which are at around 80% now!</p>
            <?php echo do_shortcode("[arrow_sf id='149']"); ?>
           <a target="_blank" href="http://shareasale.com/r.cfm?b=768090&amp;u=1549027&amp;m=59485&amp;urllink=&amp;afftrack="><img src="http://static.shareasale.com/image/59485/openstack-cloud-banner-728x90.jpg" border="0" /></a>
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
          @php(dynamic_sidebar('image2-sidebar-footer'))
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