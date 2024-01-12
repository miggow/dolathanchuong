 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

     <title>DEBA - Đăng nhập.</title>
     <meta name="keywords"
         content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">

     <link rel="icon" href="{{ asset('frontend/assets/images/deba-logo.png') }}" sizes="32x32" />
     <link rel="apple-touch-icon" href="{{ asset('frontend/assets/images/deba-logo.png') }}" />
     <meta name="msapplication-TileImage" content="{{ asset('frontend/assets/images/deba-logo.png') }}" />

     <!-- css Icon Font -->
     <link rel="stylesheet" href="frontend/assets/css/vendor/ecicons.min.css" />

     <!-- css All Plugins Files -->
     <link rel="stylesheet" href="frontend/assets/css/plugins/animate.css" />
     <link rel="stylesheet" href="frontend/assets/css/plugins/swiper-bundle.min.css" />
     <link rel="stylesheet" href="frontend/assets/css/plugins/jquery-ui.min.css" />
     <link rel="stylesheet" href="frontend/assets/css/plugins/countdownTimer.css" />
     <link rel="stylesheet" href="frontend/assets/css/plugins/slick.min.css" />
     <link rel="stylesheet" href="frontend/assets/css/plugins/bootstrap.css" />

     <!-- Main Style -->
     <link rel="stylesheet" href="frontend/assets/css/style.css" />
     <link rel="stylesheet" href="frontend/assets/css/responsive.css" />

     <!-- Background css -->
     <link rel="stylesheet" id="bg-switcher-css" href="frontend/assets/css/backgrounds/bg-4.css">
 </head>

 <body>
     @include('fe.navbar')

     <!-- Ec breadcrumb start -->
     <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="row ec_breadcrumb_inner">
                         <div class="col-md-6 col-sm-12">
                             <h2 class="ec-breadcrumb-title">Login</h2>
                         </div>
                         <div class="col-md-6 col-sm-12">
                             <!-- ec-breadcrumb-list start -->
                             <ul class="ec-breadcrumb-list">
                                 <li class="ec-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                 <li class="ec-breadcrumb-item active">Login</li>
                             </ul>
                             <!-- ec-breadcrumb-list end -->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Ec breadcrumb end -->

     <!-- Ec login page -->
     <section class="ec-page-content section-space-p">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="section-title">
                         <h2 class="ec-bg-title">Đăng nhập</h2>
                         <h2 class="ec-title">Đăng nhập</h2>
                     </div>
                 </div>
                 <div class="ec-login-wrapper">
                     <div class="ec-login-container">
                         <div class="ec-login-form">
                             <form action="{{ route('do-login') }}" method="post">
                                 @csrf
                                 <span class="ec-login-wrap">
                                     <label>Email*</label>
                                     <input type="text" name="email" placeholder="Enter your email add..."
                                         required />
                                 </span>
                                 <span class="ec-login-wrap">
                                     <label>Password*</label>
                                     <input type="password" name="password" placeholder="Enter your password"
                                         required />
                                 </span>
                                 <span class="ec-login-wrap ec-login-fp">
                                     <label><a href="#">Quên mật khẩu?</a></label>
                                 </span>
                                 <span class="ec-login-wrap ec-login-btn">
                                     <button class="btn btn-primary" type="submit">Đăng nhập</button>
                                     <a href="{{ route('register') }}" class="btn btn-secondary">Đăng ký</a>
                                 </span>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Footer Start -->
     <footer class="ec-footer section-space-mt">
         <div class="footer-container">
             <div class="footer-top section-space-footer-p">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-12 col-lg-3 ec-footer-contact">
                             <div class="ec-footer-widget">
                                 <div class="ec-footer-logo"><a href="{{ route('home') }}"><img
                                             src="{{ asset('frontend/assets/images/debalogo.jpg') }}"
                                             alt=""><img class="dark-footer-logo"
                                             src="{{ asset('frontend/assets/images/debalogo.jpg') }}" alt="Site Logo"
                                             style="display: none;" /></a></div>
                                 <h4 class="ec-footer-heading">Contact us</h4>
                                 <div class="ec-footer-links">
                                     <ul class="align-items-center">
                                         <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.
                                         </li>
                                         <li class="ec-footer-link"><span>Call Us:</span><a href="tel:+440123456789">+44
                                                 0123 456 789</a></li>
                                         <li class="ec-footer-link"><span>Email:</span><a
                                                 href="mailto:example@ec-email.com">+example@ec-email.com</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-12 col-lg-2 ec-footer-info">
                             <div class="ec-footer-widget">
                                 <h4 class="ec-footer-heading">Information</h4>
                                 <div class="ec-footer-links">
                                     <ul class="align-items-center">
                                         <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                         <li class="ec-footer-link"><a href="faq.html">FAQ</a></li>
                                         <li class="ec-footer-link"><a href="#">Delivery Information</a></li>
                                         <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-12 col-lg-2 ec-footer-account">
                             <div class="ec-footer-widget">
                                 <h4 class="ec-footer-heading">Account</h4>
                                 <div class="ec-footer-links">
                                     <ul class="align-items-center">
                                         <li class="ec-footer-link"><a href="#">My Account</a></li>
                                         <li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
                                         <li class="ec-footer-link"><a href="#">Wish List</a></li>
                                         <li class="ec-footer-link"><a href="#">Specials</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-12 col-lg-2 ec-footer-service">
                             <div class="ec-footer-widget">
                                 <h4 class="ec-footer-heading">Services</h4>
                                 <div class="ec-footer-links">
                                     <ul class="align-items-center">
                                         <li class="ec-footer-link"><a href="#">Discount Returns</a></li>
                                         <li class="ec-footer-link"><a href="#">Policy & policy </a></li>
                                         <li class="ec-footer-link"><a href="#">Customer Service</a></li>
                                         <li class="ec-footer-link"><a href="terms-condition.html">Term &
                                                 condition</a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-12 col-lg-3 ec-footer-news">
                             <div class="ec-footer-widget">
                                 <h4 class="ec-footer-heading">Newsletter</h4>
                                 <div class="ec-footer-links">
                                     <ul class="align-items-center">
                                         <li class="ec-footer-link">Get instant updates about our new products and
                                             special promos!</li>
                                     </ul>
                                     <div class="ec-subscribe-form">
                                         <form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
                                             action="#">
                                             <div id="ec_news_signup" class="ec-form">
                                                 <input class="ec-email" type="email" required=""
                                                     placeholder="Enter your email here..." name="ec-email"
                                                     value="" />
                                                 <button id="ec-news-btn" class="button btn-primary" type="submit"
                                                     name="subscribe" value=""><i
                                                         class="ecicon eci-paper-plane-o"
                                                         aria-hidden="true"></i></button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <!-- Footer Area End -->

     <!-- Footer navigation panel for responsive display -->
     {{-- <div class="ec-nav-toolbar">
         <div class="container">
             <div class="ec-nav-panel">
                 <div class="ec-nav-panel-icons">
                     <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i
                             class="fi-rr-menu-burger"></i></a>
                 </div>
                 <div class="ec-nav-panel-icons">
                     <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i
                             class="fi-rr-shopping-bag"></i><span
                             class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                 </div>
                 <div class="ec-nav-panel-icons">
                     <a href="{{ route('home') }}" class="ec-header-btn"><i class="fi-rr-home"></i></a>
                 </div>
                 <div class="ec-nav-panel-icons">
                     <a href="wishlist.html" class="ec-header-btn"><i class="fi-rr-heart"></i><span
                             class="ec-cart-noti">4</span></a>
                 </div>
                 <div class="ec-nav-panel-icons">
                     <a href="{{ route('login') }}" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                 </div>

             </div>
         </div>
     </div> --}}
     <!-- Footer navigation panel for responsive display end -->



     <!-- Cart Floating Button -->
     <div class="ec-cart-float">
         <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
             <div class="header-icon"><i class="fi-rr-shopping-basket"></i>
             </div>
             <span class="ec-cart-count cart-count-lable">3</span>
         </a>
     </div>
     <!-- Cart Floating Button end -->

     <!-- Whatsapp -->
     <div class="ec-style ec-right-bottom">
         <!-- Start Floating Panel Container -->
         <div class="ec-panel">
             <!-- Panel Header -->
             <div class="ec-header">
                 <strong>Need Help?</strong>
                 <p>Chat with us on WhatsApp</p>
             </div>
             <!-- Panel Content -->
             <div class="ec-body">
                 <ul>
                     <!-- Start Single Contact List -->
                     <li>
                         <a class="ec-list" data-number="918866774266"
                             data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                             <div class="d-flex bd-highlight">
                                 <!-- Profile Picture -->
                                 <div class="ec-img-cont">
                                     <img src="frontend/assets/images/whatsapp/profile_01.jpg" class="ec-user-img"
                                         alt="Profile image">
                                     <span class="ec-status-icon"></span>
                                 </div>
                                 <!-- Display Name & Last Seen -->
                                 <div class="ec-user-info">
                                     <span>Sahar Darya</span>
                                     <p>Sahar left 7 mins ago</p>
                                 </div>
                                 <!-- Chat iCon -->
                                 <div class="ec-chat-icon">
                                     <i class="fa fa-whatsapp"></i>
                                 </div>
                             </div>
                         </a>
                     </li>
                     <!--/ End Single Contact List -->
                     <!-- Start Single Contact List -->
                     <li>
                         <a class="ec-list" data-number="918866774266"
                             data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                             <div class="d-flex bd-highlight">
                                 <!-- Profile Picture -->
                                 <div class="ec-img-cont">
                                     <img src="frontend/assets/images/whatsapp/profile_02.jpg" class="ec-user-img"
                                         alt="Profile image">
                                     <span class="ec-status-icon ec-online"></span>
                                 </div>
                                 <!-- Display Name & Last Seen -->
                                 <div class="ec-user-info">
                                     <span>Yolduz Rafi</span>
                                     <p>Yolduz is online</p>
                                 </div>
                                 <!-- Chat iCon -->
                                 <div class="ec-chat-icon">
                                     <i class="fa fa-whatsapp"></i>
                                 </div>
                             </div>
                         </a>
                     </li>
                     <!--/ End Single Contact List -->
                     <!-- Start Single Contact List -->
                     <li>
                         <a class="ec-list" data-number="918866774266"
                             data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                             <div class="d-flex bd-highlight">
                                 <!-- Profile Picture -->
                                 <div class="ec-img-cont">
                                     <img src="frontend/assets/images/whatsapp/profile_03.jpg" class="ec-user-img"
                                         alt="Profile image">
                                     <span class="ec-status-icon ec-offline"></span>
                                 </div>
                                 <!-- Display Name & Last Seen -->
                                 <div class="ec-user-info">
                                     <span>Nargis Hawa</span>
                                     <p>Nargis left 30 mins ago</p>
                                 </div>
                                 <!-- Chat iCon -->
                                 <div class="ec-chat-icon">
                                     <i class="fa fa-whatsapp"></i>
                                 </div>
                             </div>
                         </a>
                     </li>
                     <!--/ End Single Contact List -->
                     <!-- Start Single Contact List -->
                     <li>
                         <a class="ec-list" data-number="918866774266"
                             data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                             <div class="d-flex bd-highlight">
                                 <!-- Profile Picture -->
                                 <div class="ec-img-cont">
                                     <img src="frontend/assets/images/whatsapp/profile_04.jpg" class="ec-user-img"
                                         alt="Profile image">
                                     <span class="ec-status-icon ec-offline"></span>
                                 </div>
                                 <!-- Display Name & Last Seen -->
                                 <div class="ec-user-info">
                                     <span>Khadija Mehr</span>
                                     <p>Khadija left 50 mins ago</p>
                                 </div>
                                 <!-- Chat iCon -->
                                 <div class="ec-chat-icon">
                                     <i class="fa fa-whatsapp"></i>
                                 </div>
                             </div>
                         </a>
                     </li>
                     <!--/ End Single Contact List -->
                 </ul>
             </div>
         </div>
         <!--/ End Floating Panel Container -->
         <!-- Start Right Floating Button-->
         <div class="ec-right-bottom">
             <div class="ec-box">
                 <div class="ec-button rotateBackward">
                     <img class="whatsapp" src="frontend/assets/images/common/whatsapp.png" alt="whatsapp icon" />
                 </div>
             </div>
         </div>
         <!--/ End Right Floating Button-->
     </div>
     <!-- Whatsapp end -->


     <!-- Feature tools end -->

     <!-- Vendor JS -->
     <script src="frontend/assets/js/vendor/jquery-3.5.1.min.js"></script>
     <script src="frontend/assets/js/vendor/popper.min.js"></script>
     <script src="frontend/assets/js/vendor/bootstrap.min.js"></script>
     <script src="frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
     <script src="frontend/assets/js/vendor/modernizr-3.11.2.min.js"></script>

     <!--Plugins JS-->
     <script src="frontend/assets/js/plugins/swiper-bundle.min.js"></script>
     <script src="frontend/assets/js/plugins/countdownTimer.min.js"></script>
     <script src="frontend/assets/js/plugins/scrollup.js"></script>
     <script src="frontend/assets/js/plugins/jquery.zoom.min.js"></script>
     <script src="frontend/assets/js/plugins/slick.min.js"></script>
     <script src="frontend/assets/js/plugins/infiniteslidev2.js"></script>
     <script src="frontend/assets/js/vendor/jquery.magnific-popup.min.js"></script>
     <script src="frontend/assets/js/plugins/jquery.sticky-sidebar.js"></script>

     <!-- Main Js -->
     <script src="frontend/assets/js/vendor/index.js"></script>
     <script src="frontend/assets/js/main.js"></script>

 </body>

 </html>
