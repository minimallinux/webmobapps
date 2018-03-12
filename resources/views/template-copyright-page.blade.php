{{--
  Template Name: Copyright Page
--}}
@extends('layouts.app')
@section('content')
@while(have_posts()) @php(the_post())
  <h1>Copyright Notice</h1>
        <p class="uk-text-large">We implement the following copyright restrictions in order to maintain general and special arrangements, provisions, requirements, rules, specifications, and standards that form an integral part of our agreement with our customers.</p>
       </div>
    </div>
  </section>
 <section class="features1">
 <div class="tm-section tm-section-color-white">
            <div class="uk-container uk-container-center uk-text-center top">
            <h1 class="tm-margin-large-bottom">Copyright</h1>
             <hr class="uk-divider">
            <p class="uk-text-large uk-text-lead">Please read our copyright carefully to get a clear understanding of how we implement copyright restrictions.</p>
             <p class="uk-text-medium">This website and its content is copyright of Webmobapps - © Webmobapps 2018. All rights reserved.</p>
<h3>Any redistribution or reproduction of part or all of the contents in any form is prohibited other than the following:</h3>
<ul style="list-style-type: none;padding: 0; margin: 0;">
       <li> <p class="uk-text-medium">You may print or download to a local hard disk extracts for your personal and non-commercial use only</li></p>
       <li> <p class="uk-text-medium">You may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material.</p></li>
       <li> <p class="uk-text-medium">>You may not, except with our express written permission, distribute or commercially exploit the content.</li></p>
       <li> <p class="uk-text-medium">Nor may you transmit it or store it in any other website or other form of electronic retrieval system.</p></li>
       </ul>
       <br />
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