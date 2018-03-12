{{--
  Template Name: Terms Page
--}}
@extends('layouts.app')
@section('content')
@while(have_posts()) @php(the_post())
  <h1>Terms Of Service</h1>
        <p class="uk-text-large">We implement the following terms of service in order to maintain general and special arrangements, provisions, requirements, rules, specifications, and standards that form an integral part of our agreement with our customers.</p>
       </div>
    </div>
  </section>
 <section class="features1">
 <div class="tm-section tm-section-color-white">
            <div class="uk-container uk-container-center uk-text-center top">
            <h1 class="tm-margin-large-bottom">Terms</h1>
             <hr class="uk-divider">
            <p class="uk-text-large uk-text-lead">Please read our terms carefully to get a clear understanding of how we implement our terms of service.</p>
            <h3>Terms</h3>
  <p class="uk-text-medium">By accessing this website you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>
<h3>Use License</h3>
    <p class="uk-text-medium">Permission is granted to temporarily download one copy of the materials (information or software) on Webmobapps' website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>

   <ul style="list-style-type: none;padding: 0; margin: 0;">
       <li>Modify or copy the materials;</li>
       <li>Use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
       <li>Attempt to decompile or reverse engineer any software contained on Webmobapps' website;</li>
       <li>Remove any copyright or other proprietary notations from the materials; or</li>
       <li>Transfer the materials to another person or "mirror" the materials on any other server.</li>
   </ul><br />

   <p class="uk-text-medium">Additionally, this license shall automatically terminate if you violate any of these restrictions and may be terminated by Webmobapps at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</p>
<h3>Disclaimer</h3>
 <p class="uk-text-medium">The materials on Webmobapps' website are provided on an 'as is' basis. Webmobapps makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>
   <p class="uk-text-medium">Further, Webmobapps does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</p>
<h3>Limitations</h3>
 <p class="uk-text-medium">In no event shall Webmobapps or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Webmobapps' website, even if Webmobapps or a Webmobapps authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
<h3>Accuracy of materials</h3>
 <p class="uk-text-medium">The materials appearing on Webmobapps website could include technical, typographical, or photographic errors. Webmobapps does not warrant that any of the materials on its website are accurate, complete or current. Webmobapps may make changes to the materials contained on its website at any time without notice. However Webmobapps does not make any commitment to update the materials.</p>
<h3>Links</h3>
 <p class="uk-text-medium">Webmobapps has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Webmobapps of the site. Use of any such linked website is at the user's own risk.</p>
<h3>Modifications</h3>
 <p class="uk-text-medium">Webmobapps may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>
<h3>Governing Law</h3>
 <p class="uk-text-medium">These terms and conditions are governed by and construed in accordance with the laws of The United Kingdom and you irrevocably submit to the exclusive jurisdiction of the courts in that Country or location.</p>
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