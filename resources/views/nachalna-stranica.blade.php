{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css"> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
  {{-- <link rel="icon" type="image/x-icon" href="/img/favicon.svg"> --}}
{{-- 
  <link rel="stylesheet" href="/css/reset.css">
  <title>Начална страница</title> --}}
{{-- </head> --}}
{{-- <body class="body_main"> --}}


{{-- @include('layouts.main-website.header') --}}



{{-- <main>
  @include('layouts.main-website.main')   --}}
  {{-- The products are picked up with AJAX from 
    <script src="/javascript/ajax/main_page_products.js"></script>
    HTML Code for the products can be found there 
 --}}
{{-- </main> --}}

{{-- @include('layouts.main-website.footer') --}}

{{-- <script src="/javascript/ajax/main_page_products.js"></script>
</body>
</html> --}}

<!doctype html>
<html lang="en">

<head>
    <title>DesignHub Начална Страница</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="20x20">
    <!-- fancybox -->
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.min.css">
    <!-- jquery ui -->
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <!-- swiper js -->
    <link rel="stylesheet" href="assets/css/swiper.css">
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

</head>

<body>

   @include("layouts.main-website.header")

    <!-- ===============  Hero area start =============== -->
    <div class="hero-area position-relative">

        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide-item mani_page_headSwiper">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="slide-item-content">
                                    <h5>Вземи До 50% Намаление</h5>
                                    <h2 class="slide-item-title">Твоите дрехи, твоите правила</h2>
                                    <p>Наслади се на персонализирани дизайни от DesignHub</p>
                                    <div class="slide-item-btn">
                                        <a href="product.html" class="primary-btn-xl">Към Магазина</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slide-item-figure d-flex justify-content-lg-end">
                                  <img class="header_mainpic" src="/img/main-pic-8.png" alt="Дама с тениска">
                                  <div class="florting-figure">
                                        <img class="smaller_pichead" src="/img/main-pic-9.png" alt="Дама с тениска">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide hero-slide-item">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="slide-item-content">
                                    <h5>Вземи До 50% Намаление</h5>
                                    <h2 class="slide-item-title">Unlock Your Style With EG FASHION</h2>
                                    <p>Създай визия по твой вкус с DesignHub.</p>
                                    <div class="slide-item-btn">
                                        <a href="/shop" class="primary-btn-xl">Към Магазина</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slide-item-figure d-flex justify-content-lg-end">
                                  <img class="header_mainpic" src="/img/main-pic-10.png" alt="Дама с тениска">
                                    <div class="florting-figure">
                                      <img class="smaller_pichead" src="/img/main-pic-11.png" alt="Дама с тениска">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="hero-btns">
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="flaticon-right-arrow-2"></i></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="flaticon-left-arrow"></i></div>
        </div> --}}
    </div>
    <!-- ===============  Hero area end =============== -->



    <!-- =============== Banner md area start =============== -->
    <!-- <div class="banner-md-area">
        <div class="container-fluid p-0">
            <div class="banner-grid">
                <div class="single-grid single-grid1 pl-0">
                    <div class="single-banner-md single-banner-md1 h-100 ">
                        <a href="product.html"><img src="assets/images/banner/banner-md1.png" alt=""></a>

                        <div class="banner-overlay end-0">
                            <div class="banner-content text-end">
                                <h4>Smart Watch <br> Collection</h4>
                                <div class="banner-btn"><a href="product.html">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-grid single-grid2">
                    <div class="single-banner-md single-banner-md2 h-100">
                        
                        <a href="product.html"><img src="assets/images/banner/banner-md2.png" alt=""></a>


                        <div class="banner-overlay2 justify-content-center">
                            <div class="banner-content text-center">
                                <h4>Woman’s Summer <br> Sale is Here</h4>
                                <div class="banner-btn"><a href="product.html">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-grid single-grid3 pr-0">
                    <div class="single-banner-md single-banner-md3 h-100">
                        <a href="product.html"><img src="assets/images/banner/banner-md3.png" alt=""></a>

                        <div class="banner-overlay">
                            <div class="banner-content">
                                <h4>Short T-Shirt for <br> Woman</h4>
                                <div class="banner-btn"><a href="product.html">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- =============== Banner md area end =============== -->


    <!-- =============== Features area start =============== -->
    <div class="feature-area">
        <div class="background_boxes">
            <div class="row container_with_3boxes">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card">
                        <div class="feature-vactor position-absolute">
                            <img src="assets/images/shapes/feature-line-vactor.png" alt="">
                        </div>
                        <div class="feature-icon">
                            <i class="flaticon-delivery"></i>
                        </div>
                        <h5>Бърза Доставка</h5>
                        <p>2-3 работни дни</p>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card">
                        <div class="feature-vactor position-absolute">
                            <img src="assets/images/shapes/feature-line-vactor.png" alt="">
                        </div>
                        <div class="feature-icon">
                            <i class="flaticon-money-1"></i>
                        </div>
                        <h5>100% Гаранция</h5>
                        <p>за Връщане/Замяна</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-card">
                        <div class="feature-vactor position-absolute">
                            <img src="assets/images/shapes/feature-line-vactor.png" alt="">
                        </div>
                        <div class="feature-icon">
                            {{-- <i class="flaticon-headphones"></i> --}}
                            <img class="flaticon-box" src="/img/open-box.png" alt="">
                        </div>
                        <h5>Преглед и Тест</h5>
                        <p>при получаване</p>
                    </div>
                </div>
               
        </div>
    </div>
    <!-- =============== Features area start =============== -->


    <!-- =============== Product area start =============== -->
    <div class="product-area mt-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>НОВИ ПРОДУКТИ</h2>
                        <p>Достъпни Цени и Високо Качество</p>
                    </div>
                </div>
            </div>
            <div class="row">

              {{-- @include('layouts.main-website.main') --}}



               {{-- <div class="col-lg-12">
                <div class="product-tab-buttons">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">New Trendy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">New Arrival</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Best Seller</button>
                        </li>
                      </ul>
                  </div>
               </div> --}}

                <div class="col-lg-12">
                    <div class="tab-content product-tab" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div >
                                    <div class="product-card-m">
                                        <div>
                                            <div id="products_container_main">



                                            {{-- HTML code and Logic for the products is rendered inside main-page-products.js --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md1.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="sale">sale</span>
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            <div class="color-option">
                                               
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Atom-SL-Hoody-Elysium-Front</a> </h5>
                                            <div class="product-price">
                                                <del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md2.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                                
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Alroy-Short-7-Women-s-Fortune</a> </h5>
                                            <div class="product-price">
                                                <ins class="new-price">$20.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md3.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            <div class="color-option">
                                                
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Beta-LT-Jacket-Phantasm-Front</a> </h5>
                                            <div class="product-price">
                                                <ins class="new-price">$87.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md4.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="discount">-10%</span>
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            <div class="color-option">
                                                
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Womens Vintage Straight Deni</a> </h5>
                                            <div class="product-price">
                                                <ins class="new-price">$190.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md5.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            <div class="color-option">
                                               
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Konseal-Pant-Black-Back</a> </h5>
                                            <div class="product-price">
                                                <del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md6.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="sale">sale</span>
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Atom-SL-Hoody-Elysium-Front</a> </h5>
                                            <div class="product-price">
                                                <ins class="new-price">$20.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md1.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="sale">sale</span>
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            <div class="color-option">
                                                
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Atom-SL-Hoody-Elysium-Front</a> </h5>
                                            <div class="product-price">
                                                <del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md2.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                                
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Alroy-Short-7-Women-s-Fortune</a> </h5>
                                            <div class="product-price">
                                                <ins class="new-price">$20.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md3.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            <div class="color-option">
                                                
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Beta-LT-Jacket-Phantasm-Front</a> </h5>
                                            <div class="product-price">
                                                <ins class="new-price">$87.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md4.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="discount">-10%</span>
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            <div class="color-option">
                                                
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Womens Vintage Straight Deni</a> </h5>
                                            <div class="product-price">
                                                <ins class="new-price">$190.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md5.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            <div class="color-option">
                                               
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Konseal-Pant-Black-Back</a> </h5>
                                            <div class="product-price">
                                                <del class="old-price">$32.74</del><ins class="new-price">$29.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md6.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                                <span class="sale">sale</span>
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Atom-SL-Hoody-Elysium-Front</a> </h5>
                                            <div class="product-price">
                                                <ins class="new-price">$20.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-card-m">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/images/product/p-md7.png" alt="">
                                            </a>
                                            <div class="product-lavels">
                                            </div>
                
                                            <div class="add-product"><a href="product-details.html"><i class="flaticon-plus"></i></a></div>
                
                                            <div class="color-option">
                                                
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <h5 class="product-title"> <a href="product-details.html">Motus-AR-Hoody-Women</a> </h5>
                                            <div class="product-price">
                                                <ins class="new-price">$87.05</ins>
                                            </div>
                                            <div class="product-actions">
                                                <a href="#"><i class="flaticon-heart"></i></a>
                                                <a href="product-details.html"><i class="flaticon-search"></i></a>
                                                <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Product area end =============== -->


    <!-- =============== wide banner area start =============== -->
    <div class="wide-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="offer-container swiper-container position-relative">
                        <div class="swiper-wrapper">
                            <div class="single-offer swiper-slide">
                                <h5>Намаления до 50%</h5>
                                <h2>Възползвайте Се От Нашите Месечни Намаления</h2>
                                <div class="offer-countdown" id="timer">
                                    <div class="countdown-box">
                                        <h3 id="days">23</h3>
                                        <h5>ДНИ</h5>
                                    </div>
                                    <div class="countdown-box">
                                        <h3 id="hours">...</h3>
                                        <h5>ЧАСА</h5>
                                    </div>
                                    <div class="countdown-box">
                                        <h3 id="minutes">...</h3>
                                        <h5>МИН</h5>
                                    </div>
                                    <div class="countdown-box">
                                        <h3 id="seconds">...</h3>
                                        <h5>СЕК</h5>
                                    </div>
                                </div>
                                <div class="offer-details-btn">
                                    <a href="/discounts" class="primary-btn-l">Към Намаленията</a>
                                </div>
                            </div>
                            {{-- <div class="single-offer swiper-slide">
                                <h5>New Season Only $50</h5>
                                <h2>Exclusive Collection For Kid's</h2>
                                <div class="offer-countdown">
                                    <div class="countdown-box">
                                        <h3>50</h3>
                                        <h5>DAYS</h5>
                                    </div>
                                    <div class="countdown-box">
                                        <h3>25</h3>
                                        <h5>HOURS</h5>
                                    </div>
                                    <div class="countdown-box">
                                        <h3>40</h3>
                                        <h5>MINS</h5>
                                    </div>
                                    <div class="countdown-box">
                                        <h3>30</h3>
                                        <h5>SECS</h5>
                                    </div>
                                </div>
                                <div class="offer-details-btn">
                                    <a href="product.html" class="primary-btn-l">View Details</a>
                                </div> --}}
                            </div>
                        </div>

                        <!-- navigation buttons -->
                        {{-- <div class="offer-btns">
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="flaticon-left-arrow"></i></div>
                            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="flaticon-right-arrow-2"></i></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== wide banner area end =============== -->

    <!-- =============== Blog area start =============== -->
    <div class="blog-area-start mt-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        {{-- <h2>LATEST NEWS !</h2>
                        <p>Exclusive products have just arrived. Check them out</p> --}}
                    </div>
                </div>
            </div>

            <div class="row">
          


                
            </div>
        </div>
    </div>
    <!-- =============== Blog area end =============== -->

    <!--  =============== sponsor logo area start ===============-->
    {{-- <div class="sponsor-logo-area mt-120">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <div class="single-logo">
                        <a href="#"><i class="flaticon-symbols-3"></i></a>
                    </div>
                </div>
       
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <div class="single-logo">
                        <a href="#"><i class="flaticon-ning-social-logo"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <div class="single-logo">
                        <a href="#"><i class="flaticon-gather-logo"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <div class="single-logo">
                        <a href="#"><i class="flaticon-inside-the-hotel-logotype"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <div class="single-logo">
                        <a href="#"><i class="flaticon-virus-total-text-logo"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-6">
                    <div class="single-logo">
                        <a href="#"><i class="flaticon-blogbus-logo"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div> --}}
    <!--  =============== sponsor logo area end ===============-->
    

    <!-- =============== Banner grid area start =============== -->
    <div class="banner-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        {{-- <h2>ТОВА МОЖЕ ДА СТЕ ВИЕ</h2> --}}
                        {{-- <p>Exclusive products have just arrived. Check them out</p> --}}
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 mt-24">
                    <div class="single-banner-grid">
                        <img src="/img/main-pic-2.png" alt="Дама с тениска">
                        
                        <div class="banner-grid-overlay">
                            <div class="banner-grid-content">
                                {{-- <h4>Pink Collection Woman’s <br>Shoes 2021</h4> --}}
                                {{-- <div class="banner-grid-btn">
                                    <a href="product.html">View All</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-5 mt-24">
                            <div class="single-banner-grid">
                                <img src="/img/main-pic-3.png" alt="Дама с тениска">
                                <div class="banner-grid-overlay2">
                                    <div class="banner-grid-content">
                                        {{-- <h4>Heart Lovely Diamond </h4> --}}
                                        {{-- <div class="banner-grid-btn">
                                            <a href="product.html">View All</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5 mt-24">
                            <div class="single-banner-grid">
                                <img src="/img/main-pic-5.png" alt="Дама с тениска">
                                <div class="banner-grid-overlay2">
                                    <div class="banner-grid-content">
                                        {{-- <h4>Heart Lovely Diamond </h4> --}}
                                        {{-- <div class="banner-grid-btn">
                                            <a href="product.html">View All</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5 mt-24">
                            <div class="single-banner-grid">
                                <img src="/img/main-pic-7.png" alt="Дама с тениска">
                                <div class="banner-grid-overlay2">
                                    <div class="banner-grid-content">
                                        {{-- <h4>Heart Lovely Diamond </h4> --}}
                                        {{-- <div class="banner-grid-btn">
                                            <a href="product.html">View All</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Banner grid area end =============== -->


    <!-- =============== Footer area start =============== -->
   @include("layouts.main-website.footer")





    <!--Javascript -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/swiper.js"></script>
    <script src="/assets/js/jquery.fancybox.min.js"></script>
   <script src="/javascript/ajax/main_page_products.js"></script>

   <script src="/assets/js/main.js"></script>


    <!-- Custom JavaScript -->
    
</body>

</html>