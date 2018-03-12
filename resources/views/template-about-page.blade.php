{{--
  Template Name: About Page
--}}
@extends('layouts.app')
@section('content')
@while(have_posts()) @php(the_post())
  <h1>About Us</h1>
        <p class="uk-text-large">A Short Summary Of Us</p>
      </div>
    </div>
  </section>
 <section class="features1">
<div class="tm-section tm-section-color-white">
            <div class="uk-container uk-container-center uk-text-center top">
            <h1 class="tm-margin-large-bottom">A Bit More About Us</h1>
             <hr class="uk-divider">
            <p class="uk-text-large uk-text-lead">We are a small team in the UK and we specialise in creating web properties for small businesses. We focus on getting your message across to your customers in the best possible way and uitilize a wide range of tools to do so.</p>
            <img class="img" width="1200px" height="635px" src="@asset('images/devices.jpg')" alt="Mobile Devices">
         </div>
       </div>
       <div class="tm-section tm-section-color-white">
            <div class="uk-container uk-container-center uk-text-center">
            <h1 class="tm-margin-large-bottom">Even More About Us!</h1>
             <hr class="uk-divider">
            <p class="uk-text-medium" >.<br /><br />
          Smartphones are replacing laptops and PC's and apps are replacing many websites. We can custom build a Progressive Web Application for your business which is made available in both app stores for your customers to download.
          It has a huge list of features including free unlimited Push Notifications, free Booking Software, free Merchant Service Integration, Web Based back-office for management and much more!<br /><br />
           Progressive Web Apps are the next generation for Mobile Web and our turkey app has been developed over a 3 year period with this in mind. It is built specifically for small businesses on a budget and enables them to compete online without having to incur heavy costs!<br /><br />
           Many businesses pay ongoing fees for services such as SEO, Web Site Maintainance, Booking Software, Text Messaging and other services. Our application can include all these completely free in addition to many other features, all for a small one-off payment, with no monthly fees, no third party advertising or other hidden costs!<br /><br />
          Silent Salesman is a Progressive Web Application for small businesses based on Web 3.0 technologies. Offline and Online modes with a Web Based CMS for input management. Approved by Apple and Google for App store listing with other download methods available. Windows Phone functionality also.<br /><br />
          A Huge range of features and benefits ensures that your business in ranked well for mobile device searches online. A 3 -4 week build time with no painful testing or development failures. A personal developer is assigned to the build process with a top quality control system in place.<br />
          </p>
          <h3 class="uk-heading">Below are a few of the features of our Custom Built Progressive Web App.</h3>
        </div>
       </div>
      <div class="tm-section tm-section-color-white">
         <div class="uk-container uk-container-center uk-text-center">
          <h1 class="tm-margin-large-bottom">Check Out Our Short Video Below</h1>
           <hr class="uk-divider">
            <p class="uk-text-large uk-text-lead">A Look At How Smartphones Are Being Used To Access Businesses And Organizations Content. 
            <div class="uk-width-large videoWrapper">  
               <iframe width="560" height="315" src="https://www.youtube.com/embed/CRN9QBO1nqA?wmode=transparent" scrolling="no" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="tm-section tm-section-color-white">
            <div class="uk-container uk-container-center uk-text-center">
            <h1 class="tm-margin-large-bottom">Why Choose Us?</h1>
             <hr class="uk-divider">
            <p class="uk-text-large uk-text-lead">Three reasons why you should choose us for your project.</p>
               <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
                    <div class="uk-width-medium-1-3">
                        <a class="uk-panel tm-panel-link" href="#">
                            <div class="tm-icon"><i class="uk-icon-check uk-icon-large"></i></div>
                            <h2>Cost Effective</h2>
                            <p>It is not about the number of features that a particular framework provides. It’s about the actual functionality of
                            the framework and how this can be utilised within your own web application development project. So we choose one of
                            the frameworks as per your project needs to save time and cost. We produce applications and web properties optimised
                            for time, speed of production, resource lightness and cost effectiveness.</p>
                        </a>
                    </div>
                     <div class="uk-width-medium-1-3">
                        <a class="uk-panel tm-panel-link" href="#">
                            <div class="tm-icon"><i class="uk-icon-check uk-icon-large"></i></div>
                            <h2>Reliabilty</h2>
                              <p>We use agile build methods and frameworks to speed up the process of building your app or site. The methods used are
                              tried and tested by millions of enthusiastic and dedicateed coders and we avoid untested technologies or methods which
                              consume a lot of time for little reward. Our approach of building for all or at least most devices ensures that your
                             app or site will gain the maximun exposure online and keep you competitive</p>
                        </a>
                    </div>
                     <div class="uk-width-medium-1-3">
                        <a class="uk-panel tm-panel-link" href="#">
                            <div class="tm-icon"><i class="uk-icon-check uk-icon-large"></i></div>
                            <h2>Speed</h2>
                           <p>Using frameworks helps us to achieve the fastest and most effective results for your project. It ensures that time
                           is not wasted on expensive and outdated methodolgy. Many of these provide libraries for database access, user management,
                           templating systems, session management, and often promote code reuse to maximise effeciency. We pay close attention
                           to the load times of your app or site and these are optimised.</p>
                        </a>
                    </div>
                 </div>
              </div>
        </div> 
        <div class="tm-section tm-section-color-white">
           <div class="uk-container uk-container-center uk-text-center clients">
            <h1 class="tm-margin-large-bottom">Our Clients</h1>
            <hr class="uk-divider">
            <p class="uk-text-large uk-text-lead">Here Are Some Of Our Satisfied Clients</p> 
             <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
            <div class="uk-width-medium-1-4">
                <figure class="uk-overlay uk-overlay-hover">
                      <img width="500" height="325" src="@asset('images/frameworks-min.png')" alt="">
                       <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                            <div>Client Name</div>
                        </figcaption>
                        <a class="uk-position-cover" href="#"></a>
                    </figure>
                </div>

               <div class="uk-width-medium-1-4">
                     <figure class="uk-overlay uk-overlay-hover">
                       <img width="500" height="325" src="@asset('images/frameworks-min.png')" alt="">
                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                            <div>Client Name</div>
                        </figcaption>
                        <a class="uk-position-cover" href="#"></a>
                    </figure>
                </div>

               <div class="uk-width-medium-1-4">
                   <figure class="uk-overlay uk-overlay-hover">
                        <img width="500" height="325" src="@asset('images/frameworks-min.png')" alt="">
                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                            <div>Client Name</div>
                        </figcaption>
                        <a class="uk-position-cover" href="#"></a>
                    </figure>
                </div>

               <div class="uk-width-medium-1-4">
                    <figure class="uk-overlay uk-overlay-hover">
                        <img width="500" height="325" src="@asset('images/frameworks-min.png')" alt="">
                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center">
                            <div>Client Name</div>
                        </figcaption>
                        <a class="uk-position-cover" href="#"></a>
                    </figure>
                </div>
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