@include('cookie-consent::index')

 
 <!-- fancybox -->
 <link rel="stylesheet" href="/assets/css/jquery.fancybox.min.css">
 <!-- jquery ui -->
 <link rel="stylesheet" href="/assets/css/jquery-ui.css">
 <!-- swiper js -->
 {{-- <link rel="stylesheet" href="/assets/css/swiper.css"> --}}
 <!-- flaticon  CSS-->
 <link rel="stylesheet" href="/assets/font/flaticon.css">
 <!-- Bootstarp icon-->
 <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

 <!-- Styles CSS -->
 <link rel="stylesheet" href="/assets/css/style.css">
 <link rel="stylesheet" href="/assets/css/responsive.css">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="/assets/css/custom.css">
 <link rel="stylesheet" href="/css/main-website/main.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- ===============  mobile downbar start =============== -->
  <div class="mobil-sidebar d-sm-none">
    <ul class="mobil-sidebar-icons">
        <li class="category-icon"><a href="#"><i class="flaticon-menu"></i></a></li>

        <li class="cart-icon">
            <a href="/cart"><i class="flaticon-shopping-cart"></i></a>
            <div class="cart-count cart_products_number"></div>
        </li>

    </ul>
</div>
<!-- ===============  mobile downbar end =============== -->

<!-- ===============  header area start =============== -->
<header>
    <div class="header-area sticky">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo d-flex justify-content-between align-items-center h-100">
                        <a href="/"><img class="header_IMG" src="/img/header-logo.svg" alt="logo"></a>

                        <div class="mobile-menu d-flex ">

                            
                            <ul class="d-flex mobil-nav-icons align-items-center">
                                {{-- <li class="search-icon global-top" ><a href="javascript:void(0)"><i class="flaticon-search-1"></i></a></li> --}}
                                <!-- <li><a href="dashboard.html"><i class="flaticon-user"></i></a></li> -->
                                <!-- <li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a></li> -->
                                <li title="Преминете към плащане" class="cart-icon"><a href="/cart"><i class="flaticon-shopping-cart"></i></a>
                                    <div class="has-count cart_products_number"></div>                                
                                </li>
                            </ul>
                            <a class="hamburger d-block d-xl-none">
                                <span class="h-top"></span>
                                <span class="h-middle"></span>
                                <span class="h-bottom"></span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6">

                    <nav class="main-nav">
                        <div class="inner-logo d-xl-none">
                            <a href="/">
                                <a href="/"><img class="header_IMG" src="/img/header-logo.svg" alt="logo"></a>
                            </a>
                        </div>
                        <ul>
                            <li class="has-child-menu">
                                <a href="/">Начало</a>
                            </li>
                            {{-- <li><a href="about.html">За Нас</a></li> --}}
                            <li class="has-child-menu">
                                <a href="/shop">Магазин</a>
                                {{-- <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="product.html">Shop</a></li>
                                    <li><a href="product-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="product-details.html">Shop Details</a></li>
                                </ul> --}}
                            </li>

                            <!-- <li class="has-child-menu">
                                <a href="javascript:void(0)">Pages</a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="order.html">Orders</a></li>
                                    <li><a href="setting.html">Setting</a></li>
                                    <li><a href="comming-soon.html">Comming Soon</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404</a></li>
                                   
                                </ul>
                            </li> -->
                            <!-- <li class="has-child-menu">
                                <a href="javascript:void(0)">Blog</a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-standard.html">Blog Standard</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="/contacts">Контакти</a></li>
                        </ul>

                        <ul class="inner-social-icons d-xl-none d-flex flex-wrap">
                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                            {{-- <li><a href="#"><i class="flaticon-twitter-1"></i></a></li> --}}
                            <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
                            {{-- <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li> --}}
                        </ul>
                    </nav>
                </div>

                <div class="col-xl-3 col-2 d-none d-xl-block">
                    <div class="nav-right h-100 d-flex align-items-center justify-content-end">
                        <ul class="d-flex nav-icons">
                            {{-- <li class="search-icon"><a href="javascript:void(0)"><i class="flaticon-search-1"></i></a></li> --}}
                            {{-- <li><a href="dashboard.html"><i class="flaticon-user"></i></a></li> --}}
                            {{-- <li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a></li> --}}
                            <li title="Преминете към плащане" class="cart-icon"><a href="/cart"><i class="flaticon-shopping-cart"></i></a>
                                <div class="has-count cart_products_number"></div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- ===============  header area end =============== -->


 <script src="/javascript/header.js"></script>
    <!--Javascript -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/swiper.js"></script>

    <!-- Custom JavaScript -->
