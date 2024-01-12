 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

     <title>Deba - Đăng ký</title>
     <meta name="keywords"
         content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">

     <!-- site Favicon -->
     <link rel="icon" href="{{ asset('admin/assets/img/deba-logo.png') }}" sizes="32x32" />
     <link rel="apple-touch-icon" href="{{ asset('admin/assets/img/deba-logo.png') }}" />
     <meta name="msapplication-TileImage" content="{{ asset('admin/assets/img/deba-logo.png') }}" />

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

 <body class="register_page">
     @include('fe.navbar')

     <!-- Ec breadcrumb start -->
     <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="row ec_breadcrumb_inner">
                         <div class="col-md-6 col-sm-12">
                             <h2 class="ec-breadcrumb-title">Register</h2>
                         </div>
                         <div class="col-md-6 col-sm-12">
                             <!-- ec-breadcrumb-list start -->
                             <ul class="ec-breadcrumb-list">
                                 <li class="ec-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                 <li class="ec-breadcrumb-item active">Register</li>
                             </ul>
                             <!-- ec-breadcrumb-list end -->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Ec breadcrumb end -->

     <!-- Start Register -->
     <section class="ec-page-content section-space-p">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="section-title">
                         <h2 class="ec-bg-title">Đăng ký</h2>
                         <h2 class="ec-title">Đăng ký</h2>
                     </div>
                 </div>
                 <div class="ec-register-wrapper">
                     <div class="ec-register-container">
                         <div class="ec-register-form">
                             <form action="{{ route('do-register') }}" method="post">
                                 @csrf
                                 <span class="ec-register-wrap ec-register-half">
                                     <label>Tên*</label>
                                     <input type="text" name="name" placeholder="Nhập tên của bạn..." required />
                                 </span>
                                 <span class="ec-register-wrap ec-register-half">
                                     <label>Email*</label>
                                     <input type="email" name="email" placeholder="Nhập email..." required />
                                 </span>
                                 <span class="ec-register-wrap ec-register-half">
                                     <label>Số điện thoại</label>
                                     <input type="number" name="phone" placeholder="Nhập số điện thoại..." />
                                 </span>
                                 <span class="ec-register-wrap ec-register-half">
                                     <label>Password*</label>
                                     <input type="password" name="password" placeholder="Nhập số mật khẩu..."
                                         required />
                                 </span>
                                 <span class="ec-register-wrap">
                                     <label>Địa chỉ</label>
                                     <input type="text" name="address" placeholder="Địa chỉ..." />
                                 </span>
                                 {{-- <span class="ec-register-wrap ec-register-half">
                                     <label>City *</label>
                                     <span class="ec-rg-select-inner">
                                         <select name="ec_select_city" id="ec-select-city"
                                             class="ec-register-select">
                                             <option selected disabled>City</option>
                                             <option value="1">City 1</option>
                                             <option value="2">City 2</option>
                                             <option value="3">City 3</option>
                                             <option value="4">City 4</option>
                                             <option value="5">City 5</option>
                                         </select>
                                     </span>
                                 </span>
                                 <span class="ec-register-wrap ec-register-half">
                                     <label>Country *</label>
                                     <span class="ec-rg-select-inner">
                                         <select name="ec_select_country" id="ec-select-country"
                                             class="ec-register-select">
                                             <option selected disabled>Country</option>
                                             <option value="1">Country 1</option>
                                             <option value="2">Country 2</option>
                                             <option value="3">Country 3</option>
                                             <option value="4">Country 4</option>
                                             <option value="5">Country 5</option>
                                         </select>
                                     </span>
                                 </span>
                                 <span class="ec-register-wrap ec-register-half">
                                     <label>Region State</label>
                                     <span class="ec-rg-select-inner">
                                         <select name="ec_select_state" id="ec-select-state"
                                             class="ec-register-select">
                                             <option selected disabled>Region/State</option>
                                             <option value="1">Region/State 1</option>
                                             <option value="2">Region/State 2</option>
                                             <option value="3">Region/State 3</option>
                                             <option value="4">Region/State 4</option>
                                             <option value="5">Region/State 5</option>
                                         </select>
                                     </span>
                                 </span> --}}
                                 <span class="ec-register-wrap ec-register-btn">
                                     <button class="btn btn-primary" type="submit">Đăng ký</button>
                                 </span>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- End Register -->

     <!-- Footer Start -->
     <footer class="ec-footer section-space-mt">
         <div class="footer-container">
             <div class="footer-top section-space-footer-p">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-12 col-lg-3 ec-footer-contact">
                             <div class="ec-footer-widget">
                                 <div class="ec-footer-logo"><a href="#"><img
                                             src="{{ asset('admin/assets/img/deba-logo.png') }}" alt=""><img
                                             class="dark-footer-logo"
                                             src="{{ asset('admin/assets/img/deba-logo.png') }}" alt="Site Logo"
                                             style="display: none;" /></a></div>
                                 <h4 class="ec-footer-heading">Contact us</h4>
                                 <div class="ec-footer-links">
                                     <ul class="align-items-center">
                                         <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.
                                         </li>
                                         <li class="ec-footer-link"><span>Call Us:</span><a
                                                 href="tel:+440123456789">+44
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
             <div class="footer-bottom">
                 <div class="container">
                     <div class="row align-items-center">
                         <!-- Footer social Start -->
                         <div class="col text-left footer-bottom-left">
                             <div class="footer-bottom-social">
                                 <span class="social-text text-upper">Follow us on:</span>
                                 <ul class="mb-0">
                                     <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                                 class="ecicon eci-facebook"></i></a></li>
                                     <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                                 class="ecicon eci-twitter"></i></a></li>
                                     <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                                 class="ecicon eci-instagram"></i></a></li>
                                     <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                                 class="ecicon eci-linkedin"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                         <!-- Footer social End -->
                         <!-- Footer Copyright Start -->
                         <div class="col text-center footer-copy">
                             <div class="footer-bottom-copy ">
                                 <div class="ec-copy">Copyright © 2023 <a class="site-name text-upper"
                                         href="#">ekka<span>.</span></a>. All Rights Reserved</div>
                             </div>
                         </div>
                         <!-- Footer Copyright End -->
                         <!-- Footer payment -->
                         <div class="col footer-bottom-right">
                             <div class="footer-bottom-payment d-flex justify-content-end">
                                 <div class="payment-link">
                                     <img src="frontend/assets/images/icons/payment.png" alt="">
                                 </div>

                             </div>
                         </div>
                         <!-- Footer payment -->
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     <!-- Footer Area End -->

     <!-- Footer navigation panel for responsive display -->
     <div class="ec-nav-toolbar">
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
     </div>
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

     <!-- Feature tools -->
     <div class="ec-tools-sidebar-overlay"></div>
     <div class="ec-tools-sidebar">
         <div class="tool-title">
             <h3>Features</h3>
         </div>
         <a href="#" class="ec-tools-sidebar-toggle in-out">
             <img alt="icon" src="frontend/assets/images/common/settings.png" />
         </a>
         <div class="ec-tools-detail">
             <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
                 <h3>Color Scheme</h3>
                 <ul class="bg-panel">
                     <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                     <li data-color="02"><a href="#" class="colorcode2"></a></li>
                     <li data-color="03"><a href="#" class="colorcode3"></a></li>
                     <li data-color="04"><a href="#" class="colorcode4"></a></li>
                     <li data-color="05"><a href="#" class="colorcode5"></a></li>
                 </ul>
             </div>
             <div class="ec-tools-sidebar-content">
                 <h3>Backgrounds</h3>
                 <ul class="bg-panel">
                     <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                     <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                     <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                     <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
                 </ul>
             </div>
             <div class="ec-tools-sidebar-content">
                 <h3>Full Screen mode</h3>
                 <div class="ec-fullscreen-mode">
                     <div class="ec-fullscreen-switch">
                         <div class="ec-fullscreen-btn">Mode</div>
                         <div class="ec-fullscreen-on">On</div>
                         <div class="ec-fullscreen-off">Off</div>
                     </div>
                 </div>
             </div>
             <div class="ec-tools-sidebar-content">
                 <h3>Dark mode</h3>
                 <div class="ec-change-mode">
                     <div class="ec-mode-switch">
                         <div class="ec-mode-btn">Mode</div>
                         <div class="ec-mode-on">On</div>
                         <div class="ec-mode-off">Off</div>
                     </div>
                 </div>
             </div>
             <div class="ec-tools-sidebar-content">
                 <h3>RTL mode</h3>
                 <div class="ec-change-rtl">
                     <div class="ec-rtl-switch">
                         <div class="ec-rtl-btn">Rtl</div>
                         <div class="ec-rtl-on">On</div>
                         <div class="ec-rtl-off">Off</div>
                     </div>
                 </div>
             </div>
             <div class="ec-tools-sidebar-content">
                 <h3>Clear local storage</h3>
                 <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
             </div>
         </div>
     </div>
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
