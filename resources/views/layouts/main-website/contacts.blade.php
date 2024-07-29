<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакти</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="20x20">

</head>

<body>


  @include('layouts.main-website.header')

     <!-- ===============  breadcrumb start =============== -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-wrap">
                        <h3 class="page-title">Свържете се с нас</h3>

                        <ul class="page-switcher">
                          <li><i class="fas fa-phone"> &nbsp <a class="numbContacts" href="tel:0894938614">0894 938 614</a></i></li>
                            {{-- <li><a href="/shop">Към Магазина <i class="bi bi-chevron-right"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <!-- ===============  breadcrumb end =============== -->


    <!-- =============== contact us wrapper start =============== -->

    <div class="contact-wrapper mt-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header">
                        {{-- <h2>Искате да направите бърза поръчка или просто имате запитване,<br> обадете се на: 0894 938 614</h2> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div style="display: none" class="col-xxl-12 col-lg-12">
                    <div class="contact-form-wrapper">
                        <h3>Get In Touch</h3>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form action="#" method="POST" class="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="review-input-group">
                                        <label for="fname">Your Full Name</label>
                                        <input type="text" name="fname" id="fname" placeholder="Your full name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="review-input-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" placeholder="Your email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="review-input-group">
                                        <textarea name="review-area" id="review-area" cols="30" rows="7"
                                            placeholder="Your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit-btn">
                                        <input type="submit" value="Send Message">
                                    </div>
                                </div>

                            </div>
                            <p class="form-message"></p>
                        </form>
                    </div>
                </div>
            </div> --}}

            <div class="contact-cards row">

                <div>
                    <div class="contact-card">
                        <div class="card-batch">
                            <h5>Контакти</h5>
                        </div>
                        <ul class="contact-card-list">
                            <li><strong>Имейл: </strong> contact@designhub.com</li>
                            <li><strong>Телефон: </strong><a href="tel:0894938614"> &nbsp 0894 938 614</a></li>
                        </ul>
                        <div>
                        <u><p>Работно време:</p></u>
                        <p>Понеделник - Петък: 09:00 - 20:00 </p>
                        <p>Събота и Неделя: 10:00 - 16:00</p>
                        </div>
                        
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="contact-card">
                        <div class="card-batch">
                            <h5>Branch No 02</h5>
                        </div>
                        <ul class="contact-card-list">
                            <li><strong>Address:</strong> 168/170, Ave 01, Mirpur DOHS, Bangladesh</li>
                            <li><strong>Email:</strong> info@example.com</li>
                            <li><strong>Phone:</strong> +02 1234 567 88</li>
                        </ul>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-4">
                    <div class="contact-card">
                        <div class="card-batch">
                            <h5>Branch No 03</h5>
                        </div>
                        <ul class="contact-card-list">
                            <li><strong>Address:</strong> 168/170, Ave 01, Mirpur DOHS, Bangladesh</li>
                            <li><strong>Email:</strong> info@example.com</li>
                            <li><strong>Phone:</strong> +02 1234 567 88</li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

     <!-- =============== contact us wrapper end =============== -->


    
    <!-- =============== Footer area start =============== -->
    @include('layouts.main-website.footer')
    <!-- =============== Footer area end =============== -->





    <!--Javascript -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>

   
</body>

</html>