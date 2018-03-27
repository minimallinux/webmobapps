{{--
  Template Name: Blog Page
--}}
@extends('layouts.app')
@section('content')
@while(have_posts()) @php(the_post())
  <h1>Blog</h1>
        <p class="uk-text-large">Webmobapps Blog &amp; News</p>
      </div>
    </div>
  </section>
 <section class="features1">
<div class="tm-section tm-section-color-white">
            <div class="uk-container uk-container-center uk-text-center top">
            <h1 class="tm-margin-large-bottom">News In Mobile Web Development</h1>
             <hr class="uk-divider">
            <p class="uk-text-large uk-text-lead">We are a small team in the UK and we specialise in creating web properties for small businesses. We focus on getting your message across to your customers in the best possible way and uitilize a wide range of tools to do so.</p>
            <?php echo do_shortcode("[slider]"); ?> 
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