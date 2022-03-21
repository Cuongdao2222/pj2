


<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

         
        @if(\Request::route()->getName()=='details') 

        @if(isset($meta))


        <title>{{ $meta->meta_title }}</title>
        <meta name="description" content="{{ $meta->meta_content }}"/>
        <meta property="og:title" content="{{ $meta->meta_title }}" />
        <meta property="og:description" content="{{ $meta->meta_content }}" /> 

        @endif
        @else
        
        
        <title>sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến</title>

        <meta name="description" content="Siêu thị Điện Máy Người Việt mua sắm thiết bị điện tử điện lạnh, gia dụng, máy lọc nước chính hãng giá rẻ. Nhiều ưu đãi, giao và lắp đặt miễn phí."/>

         <meta property="og:title" content="Điện Máy Người Việt - Mua sắm điện máy chính hãng giá rẻ" />
        <meta property="og:description" content="Siêu thị Điện Máy Người Việt mua sắm thiết bị điện tử điện lạnh, gia dụng, máy lọc nước chính hãng giá rẻ. Nhiều ưu đãi, giao và lắp đặt miễn phí." /> 
        @endif
        
        <meta http-equiv="cache-control" content="no-cache" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://dienmaynguoiviet.vn/template/dienmaynguoiviet/images/favicon.ico"/>
        <meta name="robots" content="index,follow" />
      
        <meta name="keywords" content="sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến"/>
        
        <link rel="alternate" type="application/rss+xml" title="RSS Feed for https://dienmaynguoiviet.vn" href="/product.rss" />
      
        <meta name="viewport" content="width=device-width" />
          
        <meta property="og:image" content="https://dienmaynguoiviet.vn/media/banner/logo_logo.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"> 
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style type="text/css">
            .product_list_cart {
            display: flex;
            /*padding: 10px;*/
            margin-bottom: 20px;
        }

        .product_list_cart .cart_col_3 {
            width: 36%;
            text-align: right;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .modal-content{
            width: 100%;
        }


        .product_list_cart .col_price {
            color: #c10017;
        }

        .product_list_cart .col_input input, .product_list_cart .col_input a {
            width: 35px;
            height: 30px;
            text-align: center;
            display: inline-block;
            border: 1px solid #ccc;
            line-height: 30px;
            float: right;
            margin-right: -1px;
            background-color: transparent;
        }
        .cart_col_1{
            width: 20%;
        }  
        .total-cart-price, .cart-foot span{
            color: #c10017;
            font-weight: bold;
        }

        .ng_ml {
            position: relative;
            margin-bottom: 10px;
        }

        .ng_ml label {
            padding-left: 20px;
            cursor: pointer;
        }

        .ng_ml .active:before {
            background-color: #549ae6;
            border: 1px solid #549ae6;
        }

        .ng_ml label:before {
            content: "\f00c";
            font-weight: 900;
            font-family: Font Awesome\ 5 Free;
            max-width: 16px;
            width: 100%;
            height: 16px;
            line-height: 14px;
            border: 1px solid #777777;
            text-align: center;
            border-radius: 3px;
            color: #fff;
            vertical-align: 1px;
            margin-right: 5px;
            position: absolute;
            left: 0;
        }

        .cart-foot {
            padding: 0 10px 20px;
            border-bottom: 1px solid #a4a4a4;
            margin-bottom: 10px;
            padding-top: 20px;
            border-top: 1px solid #e1e1e1;
        }

        .btn-add-cart {
            margin-top: 10px;
            color: #fff;
            font-size: 14px;
            padding: 8px 5px;
            line-height: 18px;
            width: 100%;
            border-radius: 5px;
            display: block;
            text-align: center;
            cursor: pointer;
            background: #e11b1e;
            background: -webkit-linear-gradient(#f52f32,#e11b1e);
            background: -o-linear-gradient(#f52f32,#e11b1e);
            background: -moz-linear-gradient(#f52f32,#e11b1e);
            background: linear-gradient(#f52f32,#e11b1e);
            border: solid 1px #e11b1e;
            }

            .installment-purchase a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            padding: 8px 5px;
            line-height: 18px;
            width: 49%;
            border-radius: 5px;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            background: #ffde00;
            }
            .add-to-cart {
            margin-top: 10px;
            margin-bottom: 10px;
            }

            .prod-info h1 {
                font-size: 20px;
                font-weight: 600;
            }


            .prod-info input{
                width: 50px;
                height: 37px;
                text-align: center;
                border: 1px solid #ddd;
                margin: 0;
                padding: 0;
            }

            .prod-info .btn-buy{
                display: inline-block;
                height: 35px;
                line-height: 35px;
                padding: 0 10px 0 10px;
                color: #fff;
                border-bottom: 2px solid #a80000;
                background-color: #fc3f3f;
                background-image: -moz-linear-gradient(center top , #fc3f3f, #d91c1c);
                background-image: -webkit-linear-gradient(top,#fc3f3f,#d91c1c);
            }

            .c3_box .title_box_cart {
                font-weight: 500;
                font-size: 20px;
                padding: 8px 15px;
            }

            .c3_box .item-form {
                padding: 5px 15px;
            }

            .option-group .step_option {
                float: left;
                cursor: pointer;
                text-align: left;
                margin-bottom: 0px;
                width: auto!important;
                margin-right: 25px;
              
            }

            .st_opt {
                display: block;
                width: 16px;
                height: 16px;
                cursor: pointer;
                float: left;
                border: 1px solid #b2b2b2;
                margin-right: 10px;
                border-radius: 50%;
            }

            .st_opt_active {
                background: #0e76bd;
            }

            .c3_box input {
                display: block;
                padding: 9px 0;
                height: 35px;
                border: 1px solid #d9d9d9;
                border-radius: 4px;
                margin: 10px 0 5px;
                text-indent: 10px;
                width: 100%;
            }

            .c3_box textarea {
                display: block;
                padding: 9px 0;
                height: 105px;
                border: 1px solid #d9d9d9;
                border-radius: 4px;
                margin: 10px 0 5px;
                text-indent: 10px;
                width: 100%;
                outline: none;
            }

            .ng_ml input {
                position: absolute;
               /* height: 100%;
                padding: 0;
                margin: 0;*/
                visibility: hidden;
            }

            #form-sub label.error{
                display: inline-block !important;
                opacity: 1 !important;
            }

            #count_shopping_cart_store {
                position: absolute;
                top: -5px;
                right: 52px;
                color: #fff;
                background-color: #fe0000;
                height: 18px;
                line-height: 18px;
                width: 18px;
                border-radius: 100%;
                text-align: center;
            }
            .header__cart{
                position: relative;
            }
            .cart_col_2{
                width: 44%;
            }

            footer .col-footer h3 {
                text-transform: uppercase;
                font-size: 16px;
                color: #424242;
                font-weight: bold;
                margin-top: 0;
                margin-bottom: 15px;
            }

            footer .col-footer ul li {
                margin-bottom: 8px;
                font-weight: bold;
            }

            .col-footer #now_submit {
                width: 60px;
                line-height: 40px;
                background-color: #fe0000;
                display: inline-block;
                text-align: center;
                border-radius: 1px;
                color: #fff;
                cursor: pointer;
            }

            .col-footer #email_newsletter {
                height: 40px;
                padding: 5px;
                
            }

            .footer .row{
                margin-top: 30px;
            }

          /*  phần responsive*/

            @media screen and (max-width: 776px){

                .header__top section{
                    display: block !important;
                }
                .desktop{
                    display: none;

                }
                .submenu{
                    display: none;
                }
                .header__top-mobile .header__logo{
                    width: 100%;
                }

                .header__top-mobile img{

                    width: 100%;

                } 
                .item-label{
                    display: none;
                }

                .theme-lunar-new-year .footer::after {
                    width: auto !important;

                 }   
                .header__main section{
                    display: block !important;
                }

                .header__main .category{
                    width: auto;
                }

                .bar-top-lefts {
                    width: 100% !important;
                }    
                .preorder-hot{
                    display: none !important;
                }

                .theme-lunar-new-year .box-common .box-common__tab {
                    padding: 0 !important;
                }    
                .box-common__content{
                    overflow: hidden !important;
                }
                .header__logo{
                    padding: 0 !important;
                }
                body{
                   min-width: auto !important;
                }
                .header__cart{
                    border:0 !important;
                }    

                .all-icons-head{
                    height: 50px;
                    margin: 0;
                    margin-left: 0 !important;
                }
                .icons-heads{
                    line-height: 50px;
                }
                .icons-1{
                    text-align: left;
                }

                .icons-2{
                    text-align: center;
                }

                .icons-3{
                    text-align: right;
                }

                #count_shopping_cart_store {

                    top: -6px;
                    right: 0;

                }  

                .bar-top-lefts {
                    position: sticky !important;
                }  


            }
           
            @media screen and (min-width: 777px){
                .mobiles{
                    display: none;
                }
               
            }
           
        </style>


        @stack('style')
        
    </head>
    <body class="theme-lunar-new-year">
        <div class="banner-media desktop">
            <div class="media-slider" data-size="1">
                <div class="item" data-background-color="#CF1F2F" data-order="1">
                    <a aria-label="slide" data-cate="0" data-place="1295" href="#" onclick="jQuery.ajax({ url: '/bannertracking?bid=49608&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/1200-44-1200x44.png" alt="BF"  ></a>
                </div>
            </div>
            <style>
                .banner-media{
                background-color: #CF1F2F;
                }

                .header__top-mobile section{
                    display: block;
                }

                .header__top-mobile .header__search{
                    width: auto;
                }

                .header__top-mobile .header__search input{
                    border-radius: 0;
                }

                .header__history{
                    width: auto !important;
                }

                 /*ẩn icon hổ*/
                .theme-lunar-new-year .footer::before{
                    display: none;
                }

                .theme-lunar-new-year .footer::after{
                    display: none;
                }
                .col-footer #email_newsletter {
                   
                    width: 183px !important;
                }

            </style>
        </div>
        <header class="header   theme-lunar-new-year" data-sub="0">


            <div class="header__top desktop">
                <section>
                    <a href="{{route('homeFe')}}" class="header__logo">
                        <img src="{{ asset('images/template/logochuan.png') }}" style="height:40px;">   
                   
                    </a>
                    <div class="bordercol"></div>
                   
                    <form  class="header__search" method="get" action="{{ route('search-product-frontend') }}">
                        <input id="skw" type="text" class="input-search" placeholder="tìm sản phẩm..." name="key" autocomplete="off" maxlength="100">
                        <button type="submit">
                        <i class="icon-search"></i>
                        </button>
                        <div id="search-result"></div>
                    </form>

                    <?php
                        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();


                        $number_cart = count($cart);

                        $active_cart =  count($cart)>0?'active':'';
                     ?>   
                    <a href="javascript:void(0)" class="header__cart {{ $active_cart }}" onclick="showToCart()">

                        <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:22px"></i>
                        <b id="count_shopping_cart_store"><span class="number-cart">{{ $number_cart }}</span></b>

                        
                        <!-- <i class="icon-cart">{{ $number_cart }}</i> -->
                        <!-- <span>Giỏ hàng</span> -->
                    </a>
                    <a href="{{ route('tin') }}" class="header__history">Tin tức khuyến mãi</a>
                    <div class="bordercol"></div>
                   
                </section>
            </div>

            <div class="header__top header__top-mobile mobiles">
                <section>
                    <div class="col-xs-12">
                        <a href="/" class="header__logo">
                            <img src="{{ asset('images/template/logochuan.png') }}">   
                       
                        </a>

                    </div>
                    
                    
                    <div class="col-xs-12">
                        <form  class="header__search" method="get" action="{{ route('search-product-frontend') }}">
                            <input id="skw" type="text" class="input-search" placeholder="tìm sản phẩm..." name="key" autocomplete="off" maxlength="100">
                            <button type="submit">
                            <i class="icon-search"></i>
                            </button>
                            <div id="search-result"></div>
                        </form>
                    </div>    

                    <?php
                        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();


                        $number_cart = count($cart);

                        $active_cart =  count($cart)>0?'active':'';
                     ?>  
                    <div class="row col-12 all-icons-head">  
                        <div class="col-4 icons-heads icons-1">
                            
                            <a href="javascript:void(0)" class="header__cart {{ $active_cart }}" onclick="showToCart()">
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:22px"></i>
                                <b id="count_shopping_cart_store"><span class="number-cart">{{ $number_cart }}</span></b>
                            </a>
                             
                        </div>

                        <div class="col-4 icons-heads icons-2">
                            

                           <a href="tel: 02473036336" class="header__cart ">
                                 <i class="fa fa-phone" aria-hidden="true" style="font-size:22px"></i>
                            </a>
                        </div>

                        <div class="col-4 icons-heads icons-3">
                            
                            <a href="{{ route('tin') }}" class="header__cart ">
                                <i class="fa fa-newspaper-o" aria-hidden="true" style="font-size:22px"></i>
                                
                            </a>
                        </div>
                        
                    </div>
                    

                
                </section>
            </div>



            <div class="header__main">
                <section>
                    <div class="category">
                        <p class="category__txt"><span class="menu-list">Danh mục</span></p>
                        <!-- <a href="/danh-muc-nhom-hang" class="category__all">Tất cả nhóm hàng</a> -->
                        <div class="bar-top-lefts">
                            <ul class="main-menu">
                                <li data-submenu-id="submenu">
                                    <div class="dropdown">
                                        <span>
                                        <i class="fa fa-arrows" aria-hidden="true"></i>

                                        </span>
                                        <a href="/dan-loa-dvd">Giảm giá đặc biệt</a>
                                    </div>
                                   
                                </li>

                                <li data-submenu-id="submenu-1">
                                    <div class="dropdown">
                                        <span>
                                        <i class="fa fa-television" aria-hidden="true"></i>
                                        </span>
                                        <a href="{{ route('category-product', 'ti-vi') }}">Tivi</a>
                                    </div>
                                    <div id="submenu-1" class="submenu">
                                        <aside>
                                            <p class="menuitem__title">Thương hiệu </p>

                                            <ul class="main-child">
                    
                                            <li>
                                              <a href="/tivi-samsung/">Tivi Samsung</a>
                                            </li>
                                            
                                            <li>
                                              <a href="/tivi-lg/">Tivi LG</a>
                                            </li>
                                            
                                            <li>
                                              <a href="/tivi-sony/">Tivi Sony</a>
                                            </li>
                                            
                                            <li>
                                              <a href="/tivi-tcl/">Tivi TCL</a>
                                            </li>
                                            
                                            <li>
                                              <a href="/tivi-philips/">Tivi Philips</a>
                                            </li>
                                            
                                          </ul>
                                           
                                        </aside>

                                        <aside>
                                            <p class="menuitem__title">Loại Tivi</p>
                                            <ul class="main-child">
                    
                                                <li>
                                                  <a href="/8k/">8K</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-4k/">4K</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-man-hinh-cong/">Tivi Màn Hình Cong</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-3d/">Tivi 3D</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/smart-tivi/">Smart Tivi</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-led/">Tivi LED</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-oled/">Tivi OLED</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-qled/">Tivi QLED</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-frame/">Tivi Frame</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-neo-qled/">Tivi Neo QLED</a>
                                                </li>
                                                
                                            </ul>
                                        </aside>

                                        <aside>
                                            <p class="menuitem__title">Kích cỡ Tivi</p>
                                            <ul class="main-child">
                    
                                                <li>
                                                  <a href="/8k/">8K</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-4k/">4K</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-man-hinh-cong/">Tivi Màn Hình Cong</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-3d/">Tivi 3D</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/smart-tivi/">Smart Tivi</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-led/">Tivi LED</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-oled/">Tivi OLED</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-qled/">Tivi QLED</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-frame/">Tivi Frame</a>
                                                </li>
                                                
                                                <li>
                                                  <a href="/tivi-neo-qled/">Tivi Neo QLED</a>
                                                </li>
                                                
                                            </ul>
                                        </aside>
                                       
                                    </div>
                                </li>

                                <li data-submenu-id="submenu-2">
                                    <div class="dropdown">
                                        <span>
                                            <img src="https://dienmaynguoiviet.vn/media/category/cat_34ead602847eccffd2bc5af611a422d2.png" style="width: 100%";">
                                        </span>
                                        <a href="{{ route('category-product', 'tu-lanh') }}">Tủ lạnh</a>
                                    </div>
                                    <div id="submenu-2" class="submenu">

                                        
                
                                        <aside>
                                            <p class="menuitem__title">Thương hiệu</p>
                                            
                                            <ul class="main-child">
                                                <li>
                                                    <a href="/tu-lanh-hitachi/">Hitachi</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-lanh-panasonic/">Panasonic</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-lanh-samsung/">Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-lanh-sharp/">Sharp</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-lanh-lg/">LG</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-lanh-electrolux/">Electrolux</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-lanh-funiki/">Funiki</a>
                                                </li>
                                            </ul>
                                        </aside>

                                        <aside class="item-sub">
                                            
                                            <p class="menuitem__title">Dung Tích</p>
                                            
                                            <ul class="main-child">
                                                <li>
                                                    <a href="/duoi-150-lit/">Dưới 150 lít</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-150-200-lit/">Từ 150 - 200 lít</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-200-300-lit/">Từ 200 - 300 lít</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-300-400-lit/">Từ 300 - 400 lít</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-400-500-lit/">Từ 400 - 500 lít</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-500-600-lit/">Từ 500 - 600 lít</a>
                                                </li>
                                                <li>
                                                    <a href="/tren-600-lit/">Trên 600 lít</a>
                                                </li>
                                            </ul>
                                        </aside>
                                        <aside class="item-sub">
                                            <p class="menuitem__title">Loại tủ</p>
                                          
                                            <ul class="main-child">
                                                <li>
                                                    <a href="/tu-lanh-side-by-side/">Tủ lạnh Side By Side</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-lanh-ngan-da-duoi/">Tủ lạnh ngăn đá dưới</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-lanh-ngan-da-tren/">Tủ Lạnh Ngăn Đá Trên</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-lanh-mini/">Tủ Lạnh Mini</a>
                                                </li>
                                            </ul>
                                        </aside>
                                       
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-3">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-maygiat"></i>
                                        </span>
                                        <a href="/may-giat">Máy giặt</a>
                                       
                                    </div>
                                    <div id="submenu-3" class="submenu">
                                        <aside>
                                            <p class="menuitem__title">Thương hiệu</p>
                                           
                                            <ul class="main-child">
                                                <li>
                                                    <a href="/may-giat-electrolux/">Máy giặt Electrolux</a>
                                                </li>
                                                <li>
                                                    <a href="/may-giat-lg/">Máy giặt LG</a>
                                                </li>
                                                <li>
                                                    <a href="/may-giat-panasonic/">Máy giặt Panasonic</a>
                                                </li>
                                                <li>
                                                    <a href="/may-giat-samsung/">Máy giặt Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="/may-giat-sharp/">Máy giặt Sharp</a>
                                                </li>
                                            </ul>
                                        </aside>
                                        <aside>
                                             <p class="menuitem__title">Kiểu giặt</p>
                                           
                                            <ul class="main-child">
                                                <li>
                                                    <a href="/may-giat-long-ngang/">Lồng Ngang</a>
                                                </li>
                                                <li>
                                                    <a href="/may-giat-long-dung/">Lồng Đứng</a>
                                                </li>
                                                <li>
                                                    <a href="/long-nghieng/">Lồng Nghiêng</a>
                                                </li>
                                            </ul>
                                        </aside>
                                        <aside>
                                             <p class="menuitem__title">Khối lượng giặt</p>
                                           
                                            <ul class="main-child">
                                                <li>
                                                    <a href="/duoi-7kg/">Dưới 7kg</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-7-8kg/">Từ 7 - 8kg</a>
                                                </li>
                                                <li>
                                                    <a href="/tu-8-9kg/">Từ 8 - 9kg</a>
                                                </li>
                                                <li>
                                                    <a href="/tren-9kg/">Trên 9kg</a>
                                                </li>
                                            </ul>
                                        </aside>
                                    </div>
                                </li>


                                <li data-submenu-id="submenu-4">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-maylanh"></i>
                                        </span>
                                        <a href="/may-lanh">Máy Điều hòa</a>
                                    </div>
                                    <div id="submenu-4" class="submenu">
                                        <ul class="main-child">
                                            <aside>
                                                <p class="menuitem__title">Thương hiệu</p>
                                               
                                                <ul class="main-child">
                                                    <li>
                                                        <a href="/dieu-hoa-daikin/">Điều hòa Daikin</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-panasonic/">Điều hòa Panasonic</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-mitsubishi/">Điều hòa Mitsubishi</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-lg/">Điều hòa LG</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-sharp/">Điều hòa Sharp</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-funiki/">Điều hòa Funiki</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-samsung/">Điều hòa Samsung</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-nagakawa/">Điều hòa Nagakawa</a>
                                                    </li>
                                                </ul>
                                            </aside>
                                            
                                            <aside>
                                                <p class="menuitem__title">Tiết kiệm điện</p>
                                                <ul class="main-child">
                                                    <li>
                                                        <a href="/dieu-hoa-tiet-kiem-dien/">Điều hòa tiết kiệm điện</a>
                                                    </li>
                                                    <li>
                                                        <a href="/co/">Có</a>
                                                    </li>
                                                </ul>
                                            </aside>
                                            <aside>
                                                <p class="menuitem__title">Công Suất</p>
                                                
                                                <ul class="main-child">
                                                    <li>
                                                        <a href="/1hp/">1HP</a>
                                                    </li>
                                                    <li>
                                                        <a href="/15hp/">1.5HP</a>
                                                    </li>
                                                    <li>
                                                        <a href="/2hp/">2HP</a>
                                                    </li>
                                                    <li>
                                                        <a href="/25hp/">2.5HP</a>
                                                    </li>
                                                    <li>
                                                        <a href="/3hp/">3HP</a>
                                                    </li>
                                                </ul>
                                            </aside>
                                            <aside>
                                                <p class="menuitem__title">Loại Điều Hòa</p>
                                                
                                                <ul class="main-child">
                                                    <li>
                                                        <a href="/dieu-hoa-1-chieu/">Điều Hòa 1 Chiều</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-2-chieu/">Điều Hòa 2 Chiều</a>
                                                    </li>
                                                </ul>
                                            </aside>
                                            <aside>
                                                 <p class="menuitem__title">Kiểu Máy Điều Hòa</p>
                                                
                                                <ul class="main-child">
                                                    <li>
                                                        <a href="/treo-tuong/">Treo Tường</a>
                                                    </li>
                                                    <li>
                                                        <a href="/tu-dung/">Tủ Đứng</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-am-tran/">Âm Trần</a>
                                                    </li>
                                                    <li>
                                                        <a href="/dieu-hoa-ap-tran/">Áp Trần</a>
                                                    </li>
                                                </ul>
                                            </aside>
                                        </ul>
                                    </div>
                                </li>
                                

                                <li data-submenu-id="submenu-5">
                                    <div class="dropdown">
                                        <span>
                                            <i class="icon-diengiadung"></i>
                                        </span>
                                        <a href="/may-lanh">Đồ gia dụng</a>
                                    </div>

                                    <div id="submenu-5" class="submenu">

                                       
                                        <aside>
                                            <p class="menuitem__title">Sản Phẩm Gia Dụng</p>
                                           
                                            <ul class="main-child">
                                                <li>
                                                    <a href="/may-hut-bui/">Máy Hút Bụi</a>
                                                </li>
                                                <li>
                                                    <a href="/binh-nong-lanh/">Bình nóng lạnh</a>
                                                </li>
                                                <li>
                                                    <a href="/ban-la/">Bàn Là, Bàn Ủi</a>
                                                </li>
                                                <li>
                                                    <a href="/may-say-toc/">Máy Sấy Tóc</a>
                                                </li>
                                                <li>
                                                    <a href="/may-loc-khong-khi-samsung/">Máy lọc không khí Samsung</a>
                                                </li>
                                                <li>
                                                    <a href="/may-loc-khong-khi-sharp/">Máy lọc không khí Sharp</a>
                                                </li>
                                            </ul>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">Sản Phẩm Nhà Bếp</p>
                                            
                                            <ul class="main-child">
                                                <li>
                                                    <a href="/noi-com-dien/">Nồi Cơm Điện</a>
                                                </li>
                                                <li>
                                                    <a href="/lo-vi-song/">Lò Vi Sóng</a>
                                                </li>
                                                <li>
                                                    <a href="/binh-thuy-dien/">Bình Thủy Điện</a>
                                                </li>
                                                <li>
                                                    <a href="/am-sieu-toc/">Ấm Siêu Tốc</a>
                                                </li>
                                                <li>
                                                    <a href="/may-xay-sinh-to/">Máy Xay Sinh Tố</a>
                                                </li>
                                                <li>
                                                    <a href="/may-ep-hoa-qua/">Máy Ép Hoa Quả</a>
                                                </li>
                                                <li>
                                                    <a href="/may-xay-da-nang/">Máy Xay Đa Năng</a>
                                                </li>
                                            </ul>
                                        </aside>

                                    </div>
                                    
                                </li>

                                <li data-submenu-id="submenu-6">
                                    <div class="dropdown">
                                        <span>
                                            <i class="icon-maylanh"></i>
                                        </span>
                                        <a href="/may-lanh">Tủ đông</a>
                                    </div>
                                    
                                </li>

                                <li data-submenu-id="submenu-7">
                                    <div class="dropdown">
                                        <span>
                                            <i class="icon-maylanh"></i>
                                        </span>
                                        <a href="/may-lanh">Tủ mát</a>
                                    </div>
                                    
                                </li>

                                <li data-submenu-id="submenu-8">
                                    <div class="dropdown">
                                        <span>
                                            <i class="icon-maylanh"></i>
                                        </span>
                                        <a href="/may-lanh">Máy sấy quần áo</a>
                                    </div>
                                    
                                </li>

                                <li data-submenu-id="submenu-9">
                                    <div class="dropdown">
                                        <span>
                                            <i class="icon-maylanh"></i>
                                        </span>
                                        <a href="/may-lanh">Máy đổi trả</a>
                                    </div>
                                    
                                </li>

                            </ul>  
                            
                        </div>
                    </div>
                    <!-- <ul class="txt-list" data-id="706">
                        <li><a data-cate="0" data-place="706" href="https://www.dienmayxanh.com/may-giat" onclick="jQuery.ajax({ url: '/bannertracking?bid=46706&r='+ (new Date).getTime(), async: true, cache: false });">Máy giặt giảm sốc đến 31%</a></li>
                        <li><a data-cate="0" data-place="706" href="https://www.dienmayxanh.com/xe-dap?v=ldp" onclick="jQuery.ajax({ url: '/bannertracking?bid=46742&r='+ (new Date).getTime(), async: true, cache: false });">Xe đạp giảm sốc 20% + Quà Hot</a></li>
                        <li><a data-cate="75,55,2002,1882,2402,822,2528,1987,56,1990,2222,2064,1922,2428,2062,1962,1943,522,54,1983,86,44,462,1944,1991,2023,2342,42,2302,346,2262,0,85,58,2102,1988,2065,1363,443,60,2322,2403,1982,1985,1986,2063,1662,1942,57,1992,1989,166,2162,2529,1742,2182,1984,2142,482,2202" data-place="706" href="https://www.dienmayxanh.com/gia-dung-online-only" onclick="jQuery.ajax({ url: '/bannertracking?bid=27911&r='+ (new Date).getTime(), async: true, cache: false });">Gia dụng Online giảm sốc đến 45%</a></li>
                    </ul> -->
                </section>
            </div>
        </header>

        @yield('content')


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin giỏ hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="tbl_list_carts">
                            
                        </div>

                        <div class="c3_col_1">
                            <form class="c3_box" id="form-sub" method="post"  action="{{ route('order') }}">
                                {{ csrf_field() }}
                                <div class="title_box_cart"> Thông tin khách hàng</div>
                                <div class="item-form">
                                    <div class="option-group clearfix">
                                        <div class="step_option">
                                            <span class="st_opt st_opt_active" data-value="Anh" data-name="sex"></span><span>Anh</span>
                                        </div>
                                        <div class="step_option">
                                            <span class="st_opt" data-value="Chị" data-name="sex"></span><span>Chị</span>
                                        </div>
                                        <input type="hidden" name="sex" id="sex" value="Nam">
                                    </div>
                                    <!--option-group-->
                                </div>
                                <div class="item-form" style="width: 50%;display: inline-block;">
                                    <input type="text" name="name" id="buyer_name" placeholder="Họ tên">
                                </div>
                                <div class="item-form" style="width: 49%;display: inline-block;">
                                    <input type="text" name="phone_number" id="buyer_tel" value="" placeholder="Số điện thoại">
                                </div>
                                <div class="item-form">
                                    <input type="text" name="mail" id="buyer_email" value="" placeholder="Email">
                                </div>
                                <div class="item-form">
                                    <textarea name="address" placeholder="Địa chỉ" id="buyer_address"></textarea>
                                </div>
                                <div class="item-form" style="width: 50%;display: inline-block;color: #0083d1;">
                                    <select name="province" class="form-control" id="ship_to_province" onchange="getDistrict(this.value)">
                                        <option value="0">--Lựa chọn--</option>
                                        <option value="1">Hà nội</option>
                                        <option value="2">TP HCM</option>
                                        <option value="5">Hải Phòng</option>
                                        <option value="4">Đà Nẵng</option>
                                        <option value="6">An Giang</option>
                                        <option value="7">Bà Rịa-Vũng Tàu</option>
                                        <option value="13">Bình Dương</option>
                                        <option value="15">Bình Phước</option>
                                        <option value="16">Bình Thuận</option>
                                        <option value="14">Bình Định</option>
                                        <option value="8">Bạc Liêu</option>
                                        <option value="10">Bắc Giang</option>
                                        <option value="9">Bắc Kạn</option>
                                        <option value="11">Bắc Ninh</option>
                                        <option value="12">Bến Tre</option>
                                        <option value="18">Cao Bằng</option>
                                        <option value="17">Cà Mau</option>
                                        <option value="3">Cần Thơ</option>
                                        <option value="24">Gia Lai</option>
                                        <option value="25">Hà Giang</option>
                                        <option value="26">Hà Nam</option>
                                        <option value="27">Hà Tĩnh</option>
                                        <option value="30">Hòa Bình</option>
                                        <option value="28">Hải Dương</option>
                                        <option value="29">Hậu Giang</option>
                                        <option value="31">Hưng Yên</option>
                                        <option value="32">Khánh Hòa</option>
                                        <option value="33">Kiên Giang</option>
                                        <option value="34">Kon Tum</option>
                                        <option value="35">Lai Châu</option>
                                        <option value="38">Lào Cai</option>
                                        <option value="36">Lâm Đồng</option>
                                        <option value="37">Lạng Sơn</option>
                                        <option value="39">Long An</option>
                                        <option value="40">Nam Định</option>
                                        <option value="41">Nghệ An</option>
                                        <option value="42">Ninh Bình</option>
                                        <option value="43">Ninh Thuận</option>
                                        <option value="44">Phú Thọ</option>
                                        <option value="45">Phú Yên</option>
                                        <option value="46">Quảng Bình</option>
                                        <option value="47">Quảng Nam</option>
                                        <option value="48">Quảng Ngãi</option>
                                        <option value="49">Quảng Ninh</option>
                                        <option value="50">Quảng Trị</option>
                                        <option value="51">Sóc Trăng</option>
                                        <option value="52">Sơn La</option>
                                        <option value="53">Tây Ninh</option>
                                        <option value="56">Thanh Hóa</option>
                                        <option value="54">Thái Bình</option>
                                        <option value="55">Thái Nguyên</option>
                                        <option value="57">Thừa Thiên-Huế</option>
                                        <option value="58">Tiền Giang</option>
                                        <option value="59">Trà Vinh</option>
                                        <option value="60">Tuyên Quang</option>
                                        <option value="61">Vĩnh Long</option>
                                        <option value="62">Vĩnh Phúc</option>
                                        <option value="63">Yên Bái</option>
                                        <option value="19">Đắk Lắk</option>
                                        <option value="22">Đồng Nai</option>
                                        <option value="23">Đồng Tháp</option>
                                        <option value="21">Điện Biên</option>
                                        <option value="20">Đăk Nông</option>
                                    </select>
                                </div>
                                <div id="district-holder-login" style="width: 49%;display: inline-block;color: #0083d1;"></div>
                                <!-- <div id="ajxTaxInvoice" class="item-form">
                                    <div class="ng_ml">
                                        <input type="checkbox" onclick="showTap('pnlTaxInvoice')" name="chkTaxInvoice" id="chkTaxInvoice">
                                        <label id="bale_ml" for="chkTaxInvoice">Xuất hóa đơn công ty</label>
                                    </div>
                                    <div style="width: 100%; margin-top:10px; padding: 0px;display: none;" id="pnlTaxInvoice">
                                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="120" align="left">Công ty/Tổ chức:
                                                    </td>
                                                    <td align="left">
                                                        <input type="text" id="txtTaxName" value="" size="50" name="user_info[tax_company]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120" align="left">Địa chỉ:
                                                    </td>
                                                    <td align="left">
                                                        <input type="text" id="txtTaxAddress" value="" size="50" name="user_info[tax_address]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="120" align="left">Mã số thuế:
                                                    </td>
                                                    <td align="left">
                                                        <input type="text" id="txtTaxCode" name="user_info[tax_code]" value="">
                                                        <span class="cmt" id="txtTaxCodeView">&nbsp;</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> -->
                                <!--ajxTaxInvoice-->
                                <div class="item-form">
                                    <h4 style="font-size:15px; margin-top:20px;">Hình thức thanh toán:</h4>
                                    <table style="width:100%;">
                                        <tbody>
                                            <tr class="item-paymethod">
                                                <td><input type="radio" style="width:initial; padding:0; margin:0; height:auto;" checked="" name="pay_method" value="1" class="pay_option" id="paymethod_1"></td>
                                                <td>
                                                    <label for="paymethod_1">Thẻ tín dụng</label>
                                                    <div id="pay_0" style="display:none;" class="pay_content"></div>
                                                </td>
                                            </tr>
                                            <tr class="item-paymethod">
                                                <td><input type="radio" style="width:initial; padding:0; margin:0; height:auto;" name="pay_method" value="2" class="pay_option" id="paymethod_2"></td>
                                                <td>
                                                    <label for="paymethod_2">Thẻ ATM nội địa</label>
                                                    <div id="pay_1" style="display:none;" class="pay_content"></div>
                                                </td>
                                            </tr>
                                            <tr class="item-paymethod">
                                                <td><input type="radio" style="width:initial; padding:0; margin:0; height:auto;" name="pay_method" value="3" class="pay_option" id="paymethod_3"></td>
                                                <td>
                                                    <label for="paymethod_3">Trả tiền khi nhận hàng</label>
                                                    <div id="pay_2" style="display:none;" class="pay_content">Trả tiền khi nhận hàng</div>
                                                </td>
                                            </tr>
                                            <tr class="item-paymethod">
                                                <td><input type="radio" style="width:initial; padding:0; margin:0; height:auto;" name="pay_method" value="4" class="pay_option" id="paymethod_4"></td>
                                                <td>
                                                    <label for="paymethod_4">Thanh toán trả góp qua Alepay (Qua thẻ Visa, Master, JCB)</label>
                                                    <div id="pay_3" style="display:none;" class="pay_content"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="clear"></div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Đặt hàng</button>
                                </div>


                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

       <!--  Endmodal -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-footer">
                        <h3 class="title">Thông tin</h3>
                        <ul class="footer_list-link">
                            <li>
                                <a href="#">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="#">Liên hệ</a>
                            </li>
                            <li>
                                <a href="#">Dự án bán buôn</a>
                            </li>
                            <li>
                                <a href="#">Tuyển dụng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-footer">
                        <h3 class="title">Hỗ trợ mua hàng</h3>
                        <ul class="footer_list-link">
                            <li>
                                <a href="#">Hướng dẫn trả góp</a>
                            </li>
                            <li>
                                <a href="#">Cách thức thanh toán</a>
                            </li>
                            <li>
                                <a href="#">Bảng giá vật tư lắp đặt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-footer">
                        <h3 class="title">Tổng đài hỗ trợ</h3>
                        <ul class="footer_list-link">
                            <li>Mua hàng
                                <a href="tel:02473036336">0247.303.6336</a>
                            </li>
                            <li>CSKH
                                <a href="tel:0916917949">0916917949</a>
                            </li>
                            <li>Bảo hành
                                <a href="tel:02436879145">0243.687.9145</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-footer">
                        <h3 class="title">Chính sách</h3>
                        <ul class="footer_list-link">
                            <li>
                                <a href="#">Chính sách &amp; quy định chung</a>
                            </li>
                            <li>
                                <a href="#">Chính sách đổi trả sản phẩm</a>
                            </li>
                            <li>
                                <a href="#">Chính sách bảo hành</a>
                            </li>
                            <li>
                                <a href="#">Chính sách giao hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-footer">
                        <form>
                            <input id="email_newsletter" type="text" placeholder="Nhận thông tin khuyến mại">
                            <span id="now_submit">Gửi</span>
                        </form>
                        <!-- <h4 style="margin-top: 20px;margin-bottom: 10px;">Kết nối với chúng tôi</h4>
                        <a class="ft-fb" rel="nofollow" href="https://www.facebook.com/dienmaynguoiviet/"><i class="fab fa-facebook-f"></i></a>
                        <a class="ft-yt" rel="nofollow" href="https://www.youtube.com/channel/UCRVWFSZs8k81B61_hwmkMIA"><i class="fab fa-youtube"></i></a>
                        <a rel="nofollow" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=1180"><img style="max-height: 40px" src="/template/dienmaynguoiviet/images/dathongbao.png"></a> -->
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <p> <b>© 2018. Công ty TNHH Thương Mại Phú Tiến. Địa chỉ: : Kho Đóng Tàu, Ngõ 683 Đường Nguyễn Khoái, Quận Hoàng
                            Mai, TP HN. GPKD số : 0102011440 do Sở Kế Hoạch và Đầu Tư TP. Hà Nội, cấp ngày 25/02/2004 </b>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        

        
         <script src="{{ asset('js/layout.js') }}" type="text/javascript"></script>
         <script src="{{ asset('js/layout1.js') }}" type="text/javascript"></script>
        
        <!-- <script async="async" defer="defer" src="https://cdn.tgdd.vn/mwgcart/mwgcore/js/bundle/homeGTM.min.v202111271240.js" type="text/javascript"></script> -->
        <script>
            window.dataLayer = window.dataLayer || [];
            
            dataLayer.push({ 'pageType':'Home','pagePlatform':'Web','pageStatus':'Kinh doanh'})
            
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

   <!--  <script src="https://cdn.tgdd.vn/mwgcart/mwgcore/js/bundle/globalDMX.min.v202201141000.js" type="text/javascript"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>


    @stack('script')
    <script type="text/javascript">


        $(window).resize(function(){
            if($(window).width()<768){

                $('.bar-top-lefts').hide();
            }
         
        });
        
         $("#exampleModal").on("hidden.bs.modal", function () {
            $('#tbl_list_carts').html('');
        });

        function showToCart() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{ route('showCart') }}",
               
                success: function(result){
                  
                   // numberCart = result.find("#number-product-cart").text();

                    $('#tbl_list_carts').append(result);

                   
                    $('#exampleModal').modal('show'); 
                    
                }
            });
            
        }

        // check sub mit

        $( "#form-sub" ).submit(function( event ) {

          
            const numberProduct =  parseInt($('#number-product-cart').text()) ;

            if($('#ship_to_province').val()==0){

                alert('vui lòng lựa chọn thành phố');
                event.preventDefault();   


            }
            else{
                if(numberProduct<=0){
                    alert('không thể mua sản phẩm vì trong giỏ hàng ko có sản phẩm')
                    event.preventDefault();
                }
                else{
                     return;
                }
            }

            
        });

        $(".st_opt").bind("click", function(){
            $('.st_opt').removeClass('st_opt_active');

            $(this).addClass('st_opt_active');

            let sex = $(this).attr('data-value');

            $('#sex').val(sex);

        });


        $(".menu-list").bind("click", function(){
            if($(".bar-top-lefts").is(":hidden")){
                $(".bar-top-lefts").show()
            }
            else{
                $(".bar-top-lefts").hide();
            }
        });  


        $().ready(function() {
             jQuery.validator.addMethod("phonenu", function (value, element) {
                if ( /^\d{3}-?\d{3}-?\d{4}$/g.test(value)) {
                    return true;
                } else {
                    return false;
                };
            }, "Invalid phone number");

            $("#form-sub").validate({
                rules: {
                    "name": {
                        required: true,
                        maxlength: 15
                    },
                    "phone_number": {
                        required: true,
                         phonenu: true,
                    },

                    "mail": {
                        email: true,
                        
                    },

                    "address":{
                        required:true,
                    },
                    "province":{
                        required:true,
                    }

                   
                },
                messages: {
                    "name": {
                        required: "Bắt buộc nhập Họ và tên",
                        maxlength: "Hãy nhập tối đa 15 ký tự"
                    },
                    "phone_number": {
                        required: "Bắt buộc nhập số điện thoại",
                       
                    },
                    "mail":{
                        email: "Email không đúng định dạng",
                    },

                    "address":{
                        required:"Bắt buộc nhập thông tin địa chỉ",
                    },
                    "province":{
                        required:"Bắt buộc chọn thành phố",
                    }
                   
                }
            });
        });
    
    </script>
      
    </body>
</html>