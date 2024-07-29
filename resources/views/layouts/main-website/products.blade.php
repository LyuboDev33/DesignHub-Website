<!DOCTYPE html>
<html lang="en">

<head>
    <title>EG Shop Fashion - Multipurpose e-Commerce HTML Template</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.png" type="image/png" sizes="20x20">
   

</head>

<body>

   @include("layouts.main-website.header")

   
   @foreach ($products as $product)
       
   <form style="margin-top: 100px" class="order_form" method="POST" action="/buy-product">
    @csrf

    <h1 class="header_h1">{{ $product->product_name }}</h1>
    
    <div class="flexed_product">
    
    <img class="main_page_productIMG" src="/img/main_page_img/{{ $product->product_image }}" alt="Продукт {{ $product->product_name }}">
    
    {{-- THIS IS THE CODE TO --}}
    <div class="image_background">
    <img class="zoom_image">
    <img class="close_x_image" src="/img/main_page_img/x.svg" alt="Затвори проозорец">
    </div>

    <div class="available_product_div">
        <span class="code_unique">Код на продукта: {{ $product->unique }}</span>
        <span class="available">Продуктът е наличен!</span>
        <s><p class="price_tag">Стара цена: {{ $product->price_tag }} лв.</p></s>
        <p id="fin_price">{{ $product->price_tag }} лв.</p>
        <p class="saveUp"></p>

        <p class="label_selectSize">Налични размери:</p>
        <div class="span_available_sizes">
         
        </div>
    
        <br>
    
        <select required id="sizes">
            <option disabled selected>Изберете размер</option>
            <option value="{{$product->available_sizes}}">{{$product->available_sizes }}</option>
            
          </select>
    
          <br>
          <p class="errorSize"></p>
    
        <button title="Добави продукта" class="add_to_cart_btn" type="submit">ДОБАВИ В КОЛИЧКА</button> <br>

        <div class="first_div main">
            <img class="img_illustrate" src="/img/check-mark.svg" alt="Доставка">
            <p class="text_order">Преглед и Тест при получаване на вашата поръчка.</p>
        </div>
        
       
          <div class="second_div main">
            <img class="img_illustrate" src="/img/main_page_img/delivery-time.svg" alt="Доставка">
            <p class="text_order">Всички поръчки се изпълняват за срок от 1 до 3 работни дни.</p>
        </div>
      
        
        <div class="third_div main">
            <img class="img_illustrate medal" src="/img/main_page_img/warranty.svg" alt="Доставка">
            <p class="text_order">100% Гаранция за връщане или заменяне на продукт в рамките на 14 дни.</p>
        </div>

    </div>

</div>

        <hr style="width: 100%;">

        {{-- <p class="description_products_label"><b>Описание на продукт:</b></p> --}}
        <div class="description_products">{!! $product->description !!}</div>


    <br>
   
    <input class="hidden_uniqueID" value="{{$product->unique }}" type="hidden">
    <input class="hidden_discount" value="{{ $product->discount }}" type="hidden">
    </form>


    <input type="hidden" class="sizes_template" value="{{ $product->available_sizes  }}">

    <div class="container_background">
        <div class="modal_success">
            <img class="succes_tick_svg" src="/img/main_page_img/success.svg" alt="Успешна поръчка снимка">
            <img class="close_x" src="/img/main_page_img/x.svg" alt="Затвори проозорец">

            <p class="succes_message"></p>
            <div class="modal_btns">
                <a class="go_to_checkout" href="/cart">ПРЕМИНИ КЪМ ПЛАЩАНЕ</a>
                <button class="continue_shopping">ПРОДЪЛЖИ ПАЗАРУВАНЕТО</button>
            </div>
        </div>
    </div>


    @endforeach
   

    @include('layouts.main-website.footer')
    
    <!-- =============== Footer area end =============== -->

    <script src="/javascript/cart_logic.js"></script>
    <script src="/assets/js/main.js"></script>

</body>

</html>