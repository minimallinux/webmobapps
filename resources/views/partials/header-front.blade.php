<section class="cover1">
    <nav class="tm-navbar uk-navbar">
      <div class="uk-container uk-container-center">
        <a class="uk-navbar-brand uk-hidden-small" href="index.html">
          <img class="uk-margin uk-margin-remove" src="@asset('images/logo.png')" width="160" height="40" title="Webmobapps" alt="Webmobapps">
        </a>
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'uk-navbar-nav uk-hidden-small uk-navbar-flip']) !!}
        @endif
        <a class="uk-navbar-toggle uk-visible-small" href="#tm-offcanvas" data-uk-offcanvas=""></a>
        <div class="uk-navbar-brand uk-navbar-center uk-visible-small">
          <img src="@asset('images/logo.png')" width="160" height="40" title="Webmobapps" alt="Webmobapps">
        </div>
      </div>
    </nav>
 <div class="uk-offcanvas" id="tm-offcanvas">
      <div class="uk-offcanvas-bar">
        <li class="uk-nav-header"> Menu</li>
        @if (has_nav_menu('mobile_navigation'))
        {!! wp_nav_menu(['theme_location' => 'mobile_navigation', 'menu_class' => 'uk-nav uk-nav-offcanvas uk-nav-parent-icon']) !!}
        @endif 
        </div>
        </div>
  <div class="tm-section1">
      <div class="uk-container uk-container-center uk-text-center">
        <div class="uk-grid">
          <div class="uk-width-medium-4-10 intro">
            <h1>Custom Built Mobile Web Technology</h1>
            <p class="uk-text-large">Multiuser mobile applications and web properties for small businesses using the latest high tech solutions and applications.</p>
            <br />
            <a href = "https://webmobapps.com/index.php/contact-us/" class="uk-button tm-button-custom" data-uikit-download>
              <i class="fa fa-phone"></i> Request A Call</a>
          </div>
          <div class="uk-width-medium-6-10 introimg">
            <img src="@asset('images/phone.png')" alt="Smartphone">
          </div>
        </div>
      </div>
    </div>
  </section>
  



 
     


    
