<section class="cover2">
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
      <div class="uk-container uk-container-center uk-text-center intro">
     


   
  	 	
