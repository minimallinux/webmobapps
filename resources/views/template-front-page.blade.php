{{--
  Template Name: Front Page
--}}
@extends('layouts.app')
@section('content')
@while(have_posts()) @php(the_post())
<section class="features1">
    <div class="tm-section tm-section-color-white">
      <div class="uk-container uk-container-center uk-text-center top">
        <h1 class="tm-margin-large-bottom"> What We Do</h1>
        <hr class="uk-divider">
        <p class="uk-text-large uk-text-lead">We build and produce web and ecommerce applications for small businesses from a mobile centric perspective.</p>
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://twitter.com/getuikit">
              <div class="tm-icon">
                <i class="uk-icon-database uk-icon-large"></i>
              </div>
              <h2>Web Technology</h2>
              <p>Web technology covers a wide area involving developing web applications for Internet or Intranet use and is
                advancing at an exponential rate, with new advances appearing almost monthly. It can range from developing
                a static single page up to large &amp; complex web apps. It enables a high speed of communication between
                you and your audience or customers. We make the best use possible of the available technology to produce
                fast and functional applications for small businesses.</p>
            </a>
          </div>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://github.com/uikit/uikit/issues">
              <div class="tm-icon">
                <i class="uk-icon-apple uk-icon-large"></i>
              </div>
              <h2>IOS</h2>
              <p>iOS is the Unix-like mobile operating system which powers most of Apple's mobile devices. It is a proprietary
                software with characteristic and sometimes idiosyncratic features which are usually much liked by its devotees.
                It is one of the two dominant operating systems for mobile devices, so a fair proportion of your visitors
                will be using it. Accordingly, we take in to consideration people who may be using an iOS device when building
                a web application or site for your business and often an app may have IOS specific functionality built in.</p>
            </a>
          </div>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://plus.google.com/communities/114238665434626719878">
              <div class="tm-icon">
                <i class="uk-icon-android uk-icon-large"></i>
              </div>
              <h2>Android</h2>
              <p>Android is an open source mobile operating system based on the Linux kernel for touchscreen mobile devices,
                such as cell phones and tablets. Users can manipulate their devices intuitively with pinching, swiping, and
                tapping. It is the most used operating system in the world today by a considerable margin and around 70%
                of your vistors will be using it. As the worlds dominant mobile OS it is extremely important to consider
                your Android users when building an application or website.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="tm-section tm-section-color-white">
      <div class="uk-container uk-container-center uk-text-center">
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://twitter.com/getuikit">
              <div class="tm-icon">
                <i class="uk-icon-desktop uk-icon-large"></i>
              </div>
              <h2>Web Interfaces</h2>
              <p>Web Interfaces or User Interfaces allow effective operation and control of the device at the human end, whilst
                the machine simultaneously feeds back information that aids the operators decision-making process. With the
                increase in Mobile OS use it is now highly recommended to consider Mobile OS's in your marketing strategy
                and implementation. We take in to account these users of your application or site to provide the most effective
                and easy to use functionality for them.</p>
            </a>
          </div>

          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://github.com/uikit/uikit/issues">
              <div class="tm-icon">
                <i class="uk-icon-google uk-icon-large"></i>
              </div>
              <h2>Search Engine Optimization</h2>
              <p>Many small businesses spend considerable sums on SEO for their site when often this is unnecessary. An effectively
                built application or site can increase their web presence if done correctly. Search Engines now detect a
                users device and return results for that search optimised for it, so having a mobile application or site
                alone can result in a higher ranking than many competitors, often alleviating the need for expensive SEO
                tactics. Check out our Progressive Web Application which is priced well below most SEO budgets alone!</p>
            </a>
          </div>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://plus.google.com/communities/114238665434626719878">
              <div class="tm-icon">
                <i class="uk-icon-google-plus uk-icon-large"></i>
              </div>
              <h2>More</h2>
              <p>If you're interested in discussing, participating and helping each other, the UIkit Google+ community is the
                place to be.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="tm-section tm-section-color-white">
      <div class="uk-container uk-container-center uk-text-center">
        <h1 class="tm-margin-large-bottom">Our Approach</h1>
        <hr class="uk-divider">
        <p class="uk-text-large uk-text-lead">We work closely with you to establish your requirements and find the best solution for your needs.</p>
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>

          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://twitter.com/getuikit">
              <div class="tm-icon">
                <i class="uk-icon-user uk-icon-large"></i>
              </div>
              <h2>User Experience</h2>
              <p>Our prime consideration when building your application is the end user. This encompasses all aspects of the
                end-user's interaction with your company, its services, and its products. The first requirement for an great
                user experience is to meet the exact needs of the customer, with minimal fuss or bother. We build your application
                with this as the primary objective.</p>
            </a>
          </div>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://github.com/uikit/uikit/issues">
              <div class="tm-icon">
                <i class="uk-icon-bolt uk-icon-large"></i>
              </div>
              <h2>Web Performance</h2>
              <p>Modern web pages require browsers to download upwards of 100 files for a page request. We focus primarily on
                using techniques to reduce the number, size and reccurence of files that must be downloaded to increase performance.
                Using these techniques we can decrease the time needed to view an application &amp; also reduce bandwidth
                and load on the servers.</p>
            </a>
          </div>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://plus.google.com/communities/114238665434626719878">
              <div class="tm-icon">
                <i class="uk-icon-tablet uk-icon-large"></i>
              </div>
              <h2>Mobile Optimization</h2>
              <p>Mobile browsing, from tablets to smartphones, is growing at an unprecedented rate. Immediate gratification
                of users informational needs means effectively delivering your product via the mobile web. Mobile optimisation
                is closely aligned with user experience, especially as around eighty percent of all internet searches are
                now made via a mobile device.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="tm-section tm-section-color-white">
      <div class="uk-container uk-container-center uk-text-center">
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://twitter.com/getuikit">
              <div class="tm-icon">
                <i class="uk-icon-superpowers uk-icon-large"></i>
              </div>
              <h2>Progressive Design</h2>
              <p>We’ve abandoned the traditional process of wireframes and Photoshop mockups. Responsive Web Design renders
                that process obsolete. You would need too many wireframes to cover all the different screen sizes available.
                We use an agile design process which is suited for designing responsive patterns. It allows us to focus on
                small pieces of a design and build upon them quickly.</p>
            </a>
          </div>

          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://github.com/uikit/uikit/issues">
              <div class="tm-icon">
                <i class="uk-icon-github-alt uk-icon-large"></i>
              </div>
              <h2>More</h2>
              <p>You want to take part in the development? Fork UIkit on GitHub and send us a pull request. To report a bug,
                file a new issue.</p>
            </a>
          </div>
     
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="https://plus.google.com/communities/114238665434626719878">
              <div class="tm-icon">
                <i class="uk-icon-google-plus uk-icon-large"></i>
              </div>
              <h2>More</h2>
              <p>If you're interested in discussing, participating and helping each other, the UIkit Google+ community is the
                place to be.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="tm-section tm-section-color-white tools">
      <div class="uk-container uk-container-center uk-text-center">
        <h1 class="tm-margin-large-bottom">Our Tools</h1>
        <hr class="uk-divider">
        <p class="uk-text-large uk-text-lead">These are some of the tools we might use to build your application or site.</p>
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
          <div class="uk-width-medium-1-4">
           <div class="notification">
              <h2>Javascript</h2>
            </div>
            <img src="@asset('images/js-min.png')" alt="javascript" uk-cover>
            <p>
              Javascript is a high level object-oriented language with first-class functions, and is known as the scripting language for
              Web pages and has become one of the the widest used programming lamguages today. It is a prototype-based, multi-paradigm
              scripting language that is dynamic, and supports object-oriented, imperative, and functional programming styles.
              With a huge number of libraries available it is a near certainty that it will be used to enhance your app or
              site's funtionality.
            </p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>ExpressJS</h2>
            </div>
            <img src="@asset('images/express-min.png')" alt="ExpressJS" uk-cover>
            <p>
              Express JS is one of the fastest growing web frameworks and many popular web companies like Koding and Prismatic are using
              it in their enterprises. Express.js and Node.js have given JavaScript a back-end functionality, allowing developers
              to build software with JavaScript on the server side. It has a powerful middleware and routing functionality
              to aid devleopment of complex applications and capabilties to build a wide range of applications from a single
              page to Hybrid Mobile app.
            </p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>NodeJS</h2>
            </div>
           <img src="@asset('images/node-min.png')" alt="NodeJS" uk-cover>
            <p>
              Node.js is a development platform for executing JavaScript code server-side. Node is useful for applications that require
              a persistent connection from the browser to the server and is often used for real-time applications such as
              news feeds and web push notifications. It has a single threaded, event based non-blocking I/O model that makes
              it lightweight and efficient. It has a huge range and in fact NPM is the largest system of open source libraries
              in the world.
            </p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Frameworks</h2>
            </div>
           <img src="@asset('images/frameworks-min.png')" alt="Frameworks" uk-cover>
            <p>
              Frameworks are used for building Hybrid Mobile apps or Web apps with iOS and Android native functionality. We concentrate
              on these as they are the two dominant OS for mobile, powering almost 98% of all devices. There are a large
              choice of frameworks available and many of the ones available can be used alongside Apache Cordova to build
              Mobile Apps for your business with a native look and feel. We use these or React Native to produce fast and
              functional Hybrid Mobile apps or websites.
            </p>
          </div>
        </div>
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Cordova</h2>
            </div>
           <img src="@asset('images/cordova-min.png')" alt="Cordova" uk-cover>
            <p>Apache Cordova is a Hybrid Mobile development environment that is used to generate iOS and Android mobile apps.
              It enables wrapping up of CSS, HTML, and JavaScript code and extends the features of HTML and JavaScript to
              work with the device. This means that code can be written once and run on multiple devices so it is not necessary
              to use native Java or Swift code. The performance tradeoff is minimal in comparison to the productivity gains.
              The resulting applications perform very exceptionally well on both iOS and Android devices. </p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Bootstrap</h2>
            </div>
          <img src="@asset('images/bootstrap-min.png')" alt="Bootstrap" uk-cover>
            <p>Bootstrap is a web framework for designing front end websites and web applications. It contains grid based mobile
              responsive components for forms, buttons, navigation, cards, modals and others as well as JavaScript extensions.
              With legacy browser support and large library, its a good choice if you are short on time although care is
              needed if target users have slow and expensive broadband. The latest incarnation has dropped support for older
              browsers although version 3 can still be used if necessary.
            </p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>MaterializeCSS</h2>
            </div>
          <img src="@asset('images/materialize-min.png')" alt="Materialize" uk-cover>
            <p>Materialize is a UI component library created with CSS, JavaScript, and HTML. The UI components help to construct
              attractive, consistent, and functional web pages and web apps, while adhering to modern web design principles
              such as browser portability, device independence, and graceful degradation. Designed by Google, it has a design
              language that combines innovation with technology. The goal is to develop a system of design that allows for
              a unified user experience across all products on any platform.</p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Databases</h2>
            </div>
          <img src="@asset('images/database-min.png')" alt="Databases" uk-cover>
            <p>Most applications make use of a database unless they are specifically built otherwise (ie a static site). We
              generally use MySQL, MariaDB, PostgreSQL or MongoDB although there is a wide range of other options including
              cloud based solutions. You can be tied to a database depending on your choice of framework if using a website.
              Otherwise, depending on your requirements we would generally choose the most suitable database for your project.</p>
          </div>
        </div>
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>CSS Grid</h2>
            </div>
           <img src="@asset('images/cssgrid-min.png')" alt="CSS Grid" uk-cover>
            <p>
              CSS Grid is a method designed for the two-dimensional layout of items on a webpage or application. It excels at dividing
              a page into major regions, or defining the relationship in terms of size, position, and layer, between parts
              of a control built from HTML primitives. Like tables, grid layout enables an author to align elements into
              columns and rows. However, many more layouts are either possible or easier with CSS grid than they were with
              tables. For example, a grid container's child elements could position themselves so they actually overlap and
              layer, similar to CSS positioned elements.
            </p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>VueJS</h2>
            </div>
           <img src="@asset('images/vue-min.png')" alt="VueJS" uk-cover>
            <p>
              Vue JS is a progressive framework for building user interfaces. Unlike other monolithic frameworks, Vue is designed from
              the ground up to be incrementally adoptable. The core library is focused on the view layer only, and is easy
              to pick up and integrate with other libraries or existing projects. Additionally, Vue is perfectly capable
              of powering sophisticated Single-Page Applications when used in combination with modern tooling and supporting
              libraries. Vue JS utilizes a virtual DOM and provides reactive and composable view components. Routing and
              global state management is handled by companion libraries.
            </p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>React Native</h2>
            </div>
          <img src="@asset('images/react-min.png')" alt="React Native" uk-cover>
            <p>React Native is a modern framework that allows JavaScript to run on and interact with IOS and Android phones
              in the same way as native code does but instead of targeting the browser, it targets mobile platforms. Web
              developers can now write mobile applications that look and feel truly “native,” from the comfort of a JavaScript
              library that we already know. As most of the code written can be shared between platforms, it makes it easy
              to simultaneously develop for both Android and iOS. This dynamic and powerful framework is enabling a host
              of opportunities for organisations that want to consolidate down their application architectures, and take
              a ‘write once deploy anywhere’ approach to application development for devices.</p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Opa</h2>
            </div>
            <img src="@asset('images/opa-min.png')" alt="Opa" uk-cover>
            <p>Opa is an open-source programming language for developing scalable web applications. It can be used for both
              client-side and server-side scripting, where complete programs are written in Opa and subsequently compiled
              to Nodejs on the server and JavaScript on the client, with the compiler automating all communication between
              the two. Opa implements strong, static typing, which helps in protecting against security issues such as SQL
              injections and scripting attacks. Opa is functional and has a static type system with type inference. Opa provides
              many structures or functions that are common in web development, as first-class objects, for instance HTML
              and parsers.</p>
          </div>
        </div>
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>UIKit</h2>
            </div>
            <img src="@asset('images/uikit-min.png')" alt="UIKit" uk-cover>
            <p>
              UIKit is a a lightweight and modular front-end framework for developing fast and powerful web interfaces lending a comprehensive
              collection of HTML, CSS, and JS components which are simple to use, easy to customize and extendable. the main
              goal of UIKit was to create a modern framework which offers over 30 modular and extendible components that
              can be combined with each other. Components are divided into different compartments according to their purpose
              and functionality. The end result is code which is clean, light-weight, functional and feature rich.
            </p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Bulma</h2>
            </div>
           <img src="@asset('images/bulma-min.png')" alt="Bulma" uk-cover>
            <p>Bulma is an open source CSS framework based on Flexbox and built with Sass. It's 100% responsive, fully modular,
              and customizable. It has a large library of CSS only classes and modules wuth the ability to adjust using variables
              and other methods. It is not weighed down by largeand sometimes unecessary Javascript modules and enables the
              adding of any extra Javascript to improve the sites functionality without bloat. Its use of Flexbox ensures
              Mobile compatibilty and it is available to use via Node Package Manager for easy addition to any project.</p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Tachyons</h2>
            </div>
          <img src="@asset('images/tachyons-min.png')" alt="Tachyons" uk-cover>
            <p>Tachyons is an open source CSS Toolkit which helps create fast loading, highly readable, and 100% responsive
              interfaces with as little css as possible. It has an nfinitely nestable, fully fluid, extremely light-weight
              and responsive grid system and runs on PostCSS. Like Bulma it is sans Javascript which can easily be added
              to suit the requirements of the project, keeping the weight and load times down to a minimum. Its base classes
              are mobile by default, making it easier to build a site or application template quickly.</p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Milligram</h2>
            </div>
          <img src="@asset('images/milligram-min.png')" alt="Milligram CSS" uk-cover>
            <p>Milligram is a minimalist CSS framework with minimal setup of styles for a fast and clean starting point. It
              is especially designed for better performance and higher productivity with fewer properties to reset resulting
              in cleaner code. It utilises Normalize CSS and has a very small download size and is available via Node Package
              Manager. Again, like Bulma and Tachyons it is sans Javascript enabling the adding of extra Javascript functionality
              where necessary for the project requirements.</p>
          </div>
        </div>
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Wordpress</h2>
            </div>
            <img src="@asset('images/wordpress-min.png')" alt="Wordpress" uk-cover>
            <p>
              WordPress is a CMS based on PHP and MySQL. Features include a plugin architecture and a template system with extensive use
              of the jQuery library and Woocommerce for ecommerce variations. It has a huge ecosystem and is well supported
              and documented. WordPress is a very flexible web application framework and is the most popular website management
              system in the world, powering more than 60 million websites. We typically use a starter like Roots Sage with
              Laravel (Blade) to build from the ground up rapidly.
            </p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Sage 9</h2>
            </div>
          <img src="@asset('images/sage-min.png')" alt="Sage 9" uk-cover>
            <p>Sage 9 for Wordpress is out of beta after years of development. It uses Laravel’s Blade as a templating engine,
              (although these can be replaced with standard PHP files) modern build tools and ES6 Javascript finctionality
              with additional routing and controllers. Other tools include Yarn, NPM, Webpack and Composer. Any CSS Framework
              can be used or none at all, and many different Javascript libraries as suits the project. It enables the building
              of fast and lightweight Wordpress sites without using themes which are often bloated and oversize.</p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Laravel</h2>
            </div>
            <img src="@asset('images/laravel-min.png')" alt="Laravel" uk-cover>
            <p>Laravel is a web application framework with expressive, elegant syntax. It attempts to take the pain out of development
              by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and
              caching. Laravel aims to make the development process a pleasing one for the developer without sacrificing
              application functionality. It combines the best aspects of other web frameworks, including frameworks implemented
              in other languages. It is accessible, yet powerful, providing powerful tools needed for large, robust applications.</p>
          </div>
          <div class="uk-width-medium-1-4">
            <div class="notification">
              <h2>Woocommerce</h2>
            </div>
            <img src="@asset('images/woocommerce-min.png')" alt="Woocommerce" uk-cover>
            <p>WooCommerce is an eCommerce plugin that allows you to sell anything, beautifully. Built to integrate seamlessly
              with WordPress, WooCommerce is the world's favorite eCommerce solution that gives both store owners and developers
              complete control. You can sell both physical and digital goods in all shapes and sizes, offer product variations,
              multiple configurations, and instant downloads to shoppers, and even sell affiliate goods from online marketplaces.
              With endless flexibility and access to hundreds of WordPress extensions, WooCommerce powers over 30% of all
              online stores.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="tm-section tm-section-color-white">
      <div class="uk-container uk-container-center uk-text-center">
        <h1 class="tm-margin-large-bottom">Our Four Step Process</h1>
        <hr class="uk-divider">
        <p class="uk-text-large uk-text-lead">We have a four step process in building your application or site.</p>
        <div class="uk-grid tm-grid-margin-large" data-uk-grid-match="{target:'.uk-panel'}" data-uk-grid-margin>

          <div class="uk-width-medium-1-4">
            <a class="uk-panel tm-panel-link" href="#">
              <div class="tm-icon">
                <i class="uk-icon-comments uk-icon-large"></i>
              </div>
              <h2>Conference</h2>
              <p>Tell us what you want to achieve with your application or site. Do you want just a website or a mobile app,
                or indeed both? We go through the best options suitable for your vision. If you are having a mobile app built
                then we build only Hybrid Apps for iOS and Android. These would also work for desktops so would cover pretty
                much all your potential audience.</p>
            </a>
          </div>
          <div class="uk-width-medium-1-4">
            <a class="uk-panel tm-panel-link" href="#">
              <div class="tm-icon">
                <i class="uk-icon-plug uk-icon-large"></i>
              </div>
              <h2>Connection</h2>
              <p>Send us the information about your business. If you already have a web site we can use this as a starting point
                or just start from scratch. If you want a website building we can recommend frameworks such as Wordpress
                or others to speed up the process. If you are wanting a Hybrid Mobile App then we would normally use the
                framework which we have chosen.</p>
            </a>
          </div>
          <div class="uk-width-medium-1-4">
            <a class="uk-panel tm-panel-link" href="#">
              <div class="tm-icon">
                <i class="uk-icon-area-chart uk-icon-large"></i>
              </div>
              <h2>Analysis</h2>
              <p>Once we have got all the information together we will produce a mock up of the app or site to view. You can
                then suggest alterations as you require and we continue to fine tune it for the best results. You can critique
                the design at any point in the cumulative process. This way we can achieve results quickly, which cuts down
                on build costs.</p>
            </a>
          </div>
          <div class="uk-width-medium-1-4">
            <a class="uk-panel tm-panel-link" href="#">
              <div class="tm-icon">
                <i class="uk-icon-rocket uk-icon-large"></i>
              </div>
              <h2>Delivery</h2>
              <p>When everything is complete we launch your site or app. If it is a site we optimise it for the best SEO experience
                and can also arrange hosting and domain name if necessary at very competitive prices. Your site or app will
                benefit from having been built using the latest web 3.0 technologies. If it is a mobile app it would usually
                be placed in both app stores unless it is a progressive web app.</p>
            </a>
          </div>
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
              <div class="tm-icon">
                <i class="uk-icon-check uk-icon-large"></i>
              </div>
              <h2>Cost Effective</h2>
              <p>It is not about the number of features that a particular framework provides. It’s about the actual functionality
                of the framework and how this can be utilised within your own web application development project. So we
                choose one of the frameworks as per your project needs to save time and cost. We produce applications and
                web properties optimised for time, speed of production, resource lightness and cost effectiveness.</p>
            </a>
          </div>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="#">
              <div class="tm-icon">
                <i class="uk-icon-check uk-icon-large"></i>
              </div>
              <h2>Reliabilty</h2>
              <p>We use agile build methods and frameworks to speed up the process of building your app or site. The methods
                used are tried and tested by millions of enthusiastic and dedicateed coders and we avoid untested technologies
                or methods which consume a lot of time for little reward. Our approach of building for all or at least most
                devices ensures that your app or site will gain the maximun exposure online and keep you competitive.</p>
            </a>
          </div>
          <div class="uk-width-medium-1-3">
            <a class="uk-panel tm-panel-link" href="#">
              <div class="tm-icon">
                <i class="uk-icon-check uk-icon-large"></i>
              </div>
              <h2>Speed</h2>
              <p>Using frameworks helps us to achieve the fastest and most effective results for your project. It ensures that
                time is not wasted on expensive and outdated methodolgy. Many of these provide libraries for database access,
                user management, templating systems, session management, and often promote code reuse to maximise effeciency.
                We pay close attention to the load times of your app or site and these are optimised.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="tm-section tm-section-color-white jumbotron">
      <div class="uk-container uk-container-center uk-text-center uk-container-small">
        <h1>Get A Quote Now!</h1>
        <p class="uk-text-large uk-text-lead">
          If you have any queries or just want to discuss project details for your business then get in touch right away. We will help you get started quiickly and we can help you capture the customers you may be missing out on!
        </p>
        <a href= "https://webmobapps.com/index.php/contact-us/" class="uk-button tm-button-custom" data-uikit-download>
          <i class="fa fa-phone"></i> Get A Call</a>
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
          @php(dynamic_sidebar('image1-sidebar-footer'))
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