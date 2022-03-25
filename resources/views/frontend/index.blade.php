@extends('frontend.layouts.apps')

@section('content') 
    @push('style')

        <style type="text/css">

           
           

            .item-saker{
                position: absolute;
                width: 45px !important;
               
                left: 20px;
                top: 24px;
            }

            .quatang img {
                height: 36px;
                margin-top: 2px;
                max-width: 50px;
                padding: 2px;
                border-radius: 3px;
                box-shadow: 0 0 0px 1px #fff;
                width: auto !important;

            }

            .quatang {
                
               
                height: 40px;
                width: 100%;
                /*padding-left: 65px;*/
                background-repeat: no-repeat;
                background-color: #e3f5ff;
                background-position-x: left;
                border-radius: 4px;
                text-align: left;
            }

            /*deal*/

            .title-deal {
                text-align: center;
                text-transform: uppercase;
                background: #B20000;
                color: #fff;
                height: 33px;
            }

            .text-center {
                text-align: center;
            }

            .promotion-price {
                color: #ff0202;
                font-weight: bold;
                font-size: 18px;
            }

            .woocommerce-loop-product__title a {
                font-size: 17px;
                font-weight: bold;
                color: #ff0202;
            }



            @media screen and (max-width: 776px){

              /* .bar-top-left{
                    display: none !important;
                }*/
                .bar-top{
                    display: block !important;
                }
                .homebanner-container {
                    width: 100% !important;
                    padding: 0 !important;
                    height: auto !important;
                } 

                .homebanner .item img {
                    height: auto !important;
                }

                #sync1 .item {

                    height: auto !important;
                }  

                .owl-dots{
                    display: none;
                }

               /* .homebanner .item img{
                    width: auto !important;
                } 

*/
            }

            @media screen and (min-width: 777px){

                /* dot owlcarousel*/

               .owl-dots .owl-dot span {
                    width: 100%;
                    border: 1px solid #ccc;
                    padding: 10px;
                    text-align: center;
                    box-sizing: border-box;
                    height: 55px;
                    border-top: 3px solid transparent;
                    font-size: 26px;
                }
                
                .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
                    border-top: 3px solid #0083d1;
                    color: #0083d1;
                   
                }
                .owl-dots{
                    display: flex;
                    margin-top: 19px;
                }

                /*end dot*/

                #sync1 {
                    position:relative
                }
                .owl-prev{
                    position: absolute;
                    top: 50%;
                }
                .owl-next{
                    position: absolute;
                    top: 50%;
                }
                .banner-right{
                    max-width: 260px;
                    width: 100%;
                    margin-left: 10px;
                } 
                .title-deal strong{
                    line-height: 33px;
                }   
            }
            
        </style>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dienmay.css') }}"> 
    @endpush
    

    <div class="locationbox__overlay"></div>
    <div class="locationbox">
        <div class="locationbox__item locationbox__item--right" onclick="OpenLocation()">
            <p>Chọn địa chỉ nhận hàng</p>
            <a class="cls-location" href="javascript:void(0)">Đóng</a>
        </div>
        <div class="locationbox__item" id="lc_title"><i class="icondetail-address-white"></i><span> Vui lòng đợi trong giây lát...</span></div>
        <div class="locationbox__popup" id="lc_pop--choose">
            <div class="locationbox__popup--cnt locationbox__popup--choose">
                <div class="locationbox__popup--chooseDefault">
                    <div class="lds-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <b id="h-provincename" style="display:none!important" data-provinceid="3">Hồ Chí Minh</b>
    </div>
    <div class="locationbox__popup new-popup hide" id="lc_pop--sugg">
        <div class="locationbox__popup--cnt locationbox__popup--suggestion new-locale">
            <div class="flex-block">
                <i class="icon-location"></i>
                <p>Hãy chọn <b>địa chỉ cụ thể</b> để chúng tôi cung cấp <b>chính xác</b> th&#x1EDD;i gian giao h&#xE0;ng v&#xE0; t&#xEC;nh tr&#x1EA1;ng h&#xE0;ng.</p>
            </div>
            <div class="btn-block">
                <a href="javascript:;" class="btn-location" onclick="OpenLocation()"><b>Chọn địa chỉ</b></a>
                <a href="javascript:;" class="btn-location gray" onclick="SkipLocation()"><b>Đóng</b></a>
            </div>
        </div>
    </div>
    
    <section>
        <div class="bar-top">
           <!--  <div class="bar-top-left-none"></div> -->
            <div class="homebanner-container">
                <!-- Banner chính -->
                <aside class="homebanner">
                    <div id="sync1" class="slider-banner owl-carousel homebanners">

                        @if(isset($banners))

                        @foreach($banners as $value)
                        <div class="item" data-dot="<span>{{ $value->title }}</span>">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="{{ $value->link }}"><img  src="{{ asset($value->image) }}" alt="{{ $value->title }}"  ></a>
                        </div>
                        @endforeach
                        @endif
                        
                    </div>
                    <div id="sync2" class="slider-banner owl-carousel">
                        @if(isset($banners))
                        @foreach($banners as $value)
                        <div class="item">
                            <h3>
                                {{  $value->title }}
                            </h3>
                        </div>
                         @endforeach
                        @endif
                        
                    </div>
                </aside>

                <!-- <h1>gdfgdfgdfgdgdgdgd</h1> -->
                <!-- End -->
            </div>
            <div class="preorder-hot"> <!-- banner phải -->

                <div class="banner-right">
                    <a href="/deal">
                        <div class="title-deal">
                            <strong>Deal of the day</strong> 
                        </div>
                    </a>
                    <div class="col-inner box-shadow-1">
                        <div class="prod-1 large-columns-1 medium-columns- small-columns- row-collapse">
                            <div class="">
                                <div class="col-inner">
                                    <style type="text/css">
                                        .ux-timer {
                                        width: 100%;
                                        position: relative;
                                        border-spacing: 5px;
                                        /*margin: 0.3em 0 0.2em;*/
                                        display: table;
                                        }
                                        .ux-timer span{display:table-cell;font-weight:bolder;text-align:center;color:#FFF;border-radius:5px;background-color:rgba(0,0,0,.85)}
                                    </style>
                                   
                                   
                                    <div class="product-small box prod-1 has-hover box-normal box-text-bottom">
                                        <div class="box-image">

                                            <div class="box-image">
                                                <div class="box-image-child">
                                                    <a href="/smart-tivi-samsung-ua43au7700-43-inch-4k/" class="img-href">
                                                    <img src="https://dienmaynguoiviet.vn/media/product/6015_1.jpg">    
                                                    </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>
                                          
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                            
                                        </div>
                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a class="title_promotion" href="/smart-tivi-samsung-ua43au7700-43-inch-4k/">Smart Tivi Samsung UA43AU7700 43 inch 4K</a></p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi class="cost">11.000.000 VNĐ</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi class="promotion-price">10.650.000 VNĐ</bdi></span></ins></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="timer-391923717" class="ux-timer dark" data-text-plural="s" data-text-hour="hour" data-text-day="day" data-text-week="week" data-text-min="min" data-text-sec="sec" data-text-hour-p="Giờ" data-text-day-p="" data-text-week-p="" data-text-min-p="Phút" data-text-sec-p="Giây" data-countdown="2022/01/09 21:00"><span class="hour">31 giờ</span> <span class="minutes">05 phút</span><span class="second">31 giây</span></div>
                        <style>
                            #timer-391923717 {
                            font-size: 132%;
                            margin: 0;
                            }
                        </style>
                    </div>
                </div>
                <!-- Banner hot -->
                <!-- <a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/tivi" onclick="jQuery.ajax({ url: '/bannertracking?bid=44915&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/CEDesktop1-254x254-2.png" alt="San pham hot CE Tivi"  ></a><a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/san-pham-doc-quyen" onclick="jQuery.ajax({ url: '/bannertracking?bid=46316&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/Diệntử-254x254.png" alt="Sản phẩm hot CE - Doc quyen"  ></a><a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/gia-dung-online-only" onclick="jQuery.ajax({ url: '/bannertracking?bid=49203&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/Giadụnglớn-254x254-1.png" alt="2021 - Trang chủ hot - Desktop"  ></a><a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/gia-dung-gia-soc" onclick="jQuery.ajax({ url: '/bannertracking?bid=49365&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/Giadụnglớn-1-254x254-1.png" alt="2021 - Trang chủ hot - Desktop"  ></a> -->
                <!-- End -->
                <!-- Banner vệ sinh máy lạnh -->
                <!-- <a class = "w100" aria-label="slide" data-cate="0" data-place="1542" href="https://matbang.thegioididong.com?utm_source=dmx&utm_medium=banner_hot" onclick="jQuery.ajax({ url: '/bannertracking?bid=45341&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/BANNER(262x96)-524x192.jpg" alt="Banner trang chủ hot"  ></a> -->
                <!-- End -->
            </div>
        </div>
        <!-- Banner sub -->
        <!-- div class="sub-banner">
            <a aria-label="slide" data-cate="0" data-place="1595" href="https://www.topzone.vn/topnews/chuoi-topzone-ra-mat-them-loat-cua-hang-moi-1405860" onclick="jQuery.ajax({ url: '/bannertracking?bid=49071&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/1200-60-1200x60-2.png" alt="topzone"  ></a>    
        </div> -->
        <!-- End -->
        <!-- Mời đánh giá sản phẩm đã mua -->
        <!-- End -->
        <!-- Săn sale online -->
        <div class="prd-promo has-banner" style="background-color:#FFE602; " data-html-id="3109">
            <div class="prd-promo__top clearfix" >
                <a data-cate="0" data-place="1868" href="#" ><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/01/banner/Sansale-desk-1200x90-3.png" alt="Theme Giáng Sinh DMX Desk" width="1200" height="90"></a>                
            </div>



           <!--  Sale -->

           <?php  

           $product_sale =  DB::table('products')->join('sale_product', 'products.id', '=', 'sale_product.product_id')->join('makers', 'products.Maker', '=', 'makers.id')->get();
           ?>

           @if(count($product_sale)>0)
           
            <div class="listproduct slider-promo owl-carousel banner-sale" data-size="20">

                @foreach($product_sale as  $value)
                @if($value->active==1)
                <div class="item">
                    <a href='{{ route('details', $value->Link) }}' class=" main-contain" data-s="OnlineSavingCMS" data-site="2" data-pro="3" data-cache="False" data-name="M&#xE1;y gi&#x1EB7;t LG Inverter 8.5 kg FV1408S4W" data-id="227121" data-price="8840000.0" data-brand="LG" data-cate="M&#xE1;y gi&#x1EB7;t" data-box="BoxHome">
                        <div class="item-label">
                        </div>
                        <div class="item-img">
                            <img data-src="{{ asset($value->Image) }}" class="lazyload" alt="{{ $value->Name }}" width=210 height=210>
                            
                            <img src="{{ asset('images/saker/'.strtolower($value->maker).'.png') }}" class="item-saker">
                            
                        </div>
                       <!--  <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Giảm Sốc</span></p> -->
                        <h3>{{ $value->Name }}</h3>
                       
                        <strong class="price">{{  str_replace(',' ,'.', number_format($value->Price))  }}&#x20AB;</strong>
                        <div class="item-rating">
                            <p>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
                            </p>
                            
                        </div>
                    </a>
                </div>
                @endif

                @endforeach
                
            </div>
            @endif
            <!-- <a class="readmore-btn" href="https://www.dienmayxanh.com/flashsale#game"><span>Xem tất cả</span></a> -->
        </div>

        <?php

            // $data = App\Models\product::where('Group_id', 1)->get();

            $group = App\Models\groupProduct::get();

         ?>   

        <div  class="owl-slider-count" style="display: none;">{{ count($group) }}</div> 
        @for($i =0; $i <count($group); $i++)

            <?php
                $all_Product = DB::table('group_product')->join('products', 'group_product.id', '=', 'products.Group_id')->select('products.id')->where('group_product.id', $group[$i]->id)->get();
                $data =  DB::table('products')->join('hot', 'products.id', '=', 'hot.product_id')->join('group_product', 'products.Group_id', '=', 'group_product.id')->where('hot.group_id', $group[$i]->id)->get();


            ?>


        @if(count($data)>0)    
        <div class="box-common _cate_1942">
            <ul class="box-common__tab">
                <li class="active-tab" data-cate-id="1942">{{  @$group[$i]->name }}</li>
                <!-- <li data-cate-id="2162" data-prop-value-ids="90016">Loa karaoke, Dàn âm thanh</li> -->
            </ul>
            <div class="box-common__main relative">
                <div class="preloader">
                    <div class="loaderweb"></div>
                </div>
                <div class="box-common__content">
                    <div class="listproduct slider-home owl-carousel" id="banner-product_{{ $i }}" data-size="10">

                        <?php 
                            $Maker = App\Models\maker::get()->toArray();  

                        ?>
 
                        @foreach($data as $datas)
                        @if($datas->active==1)
                        <div class="item"  data-pos="1">
                            <a href='{{ route('details', $datas->Link) }}'>
                                <div class="item-label">
                                    <span class="lb-tragop">trả góp 0%</span>

                                </div>
                                <div class="item-img">
                                    <img data-src="{{ asset($datas->Image) }}" class="lazyload" alt="{{ $datas->Name }}" width=210 height=210>

                                     <img src="{{ asset('images/saker/'.strtolower($Maker[$datas->Maker]['maker']).'.png') }}" class="item-saker">
                                </div>
                                <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Giảm Sốc</span></p>
                                <h3>{{ $datas->Name }}</h3>
                                <!-- <div class="item-compare">
                                    <span>55 inch</span>
                                    <span>4K</span>
                                </div> -->
                                <strong class="price">{{ number_format($datas->Price , 0, ',', '.')}}&#x20AB;</strong>
                           
                                <div class="item-rating">
                                    <p>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </p>
                                </div>

                                <?php  
                                    $now = Carbon\Carbon::now();

                                    $promotion = promotion_product($datas->product_id, $now);
                                ?>
                                

                                @if(!empty($promotion))

                                    <div class="quatang"><img src="{{ asset($promotion->image) }}"></div>
                                @endif
                                
                            </a>
                        </div>
                        @endif
                        @endforeach
                        
                        
                    </div>
                    <a class="readmore-txt blue" href="{{ route('category-product', @$group[$i]->link)  }}"><span>Xem tất cả <b>{{ @count($all_Product)}}</b> {{ @$group[$i]->name }}</span></a>
                </div>
            </div>
        </div>
        @endif
        @endfor
        <!-- End  -->
     
    
        <!-- Banner dọc 2 bên -->
        <!-- <div class="sticky-sidebar" style="display: none;">
            <a data-cate="0" data-place="1863" href="https://www.dienmayxanh.com/flashsale#game" onclick="jQuery.ajax({ url: '/bannertracking?bid=47538&r='+ (new Date).getTime(), async: true, cache: false });" class="banner-left"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/01/banner/tttt-79x271-1.png" alt="Theme Giáng Sinh Trái" width="79" height="271"></a>
            <a data-cate="0" data-place="1864" href="https://www.dienmayxanh.com/flashsale#game" onclick="jQuery.ajax({ url: '/bannertracking?bid=47537&r='+ (new Date).getTime(), async: true, cache: false });" class="banner-right"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/01/banner/ppp-79x271-1.png" alt="Theme Giáng Sinh Phải" width="79" height="271"></a>        
        </div> -->

        <div class="bottom-search">
            <p>Tìm kiếm nhiều:</p>
            <a href="/kinh-nghiem-hay/6-dieu-dang-mong-doi-o-sieu-pham-iphone-13-iphone-1332649">• Iphone 13</a> 
            <a href="/kinh-nghiem-hay/6-dieu-dang-mong-doi-o-sieu-pham-iphone-13-iphone-1332649">• Iphone 13</a>
            <a href="/kinh-nghiem-hay/6-dieu-dang-mong-doi-o-sieu-pham-iphone-13-iphone-1332649">• Iphone 13</a>
            <a href="/kinh-nghiem-hay/6-dieu-dang-mong-doi-o-sieu-pham-iphone-13-iphone-1332649">• Iphone 13</a>

        </div>
        
    </section>

    
   
    <!-- End -->
    <!-- Hiệu ứng ... rơi -->
    <!-- <div class="falling-container" aria-hidden="true">
        <div class="falling-item">
            ●
        </div>
        <div class="falling-item">
            ●
        </div>
        <div class="falling-item">
            ●
        </div>
        <div class="falling-item">
            ●
        </div>
        <div class="falling-item">
            ●
        </div>
        <div class="falling-item">
            ●
        </div>
    </div> -->
    <!-- End -->
    

     <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @if (session('success'))


        <script type="text/javascript">
            swal({ title: '{{ session("success") }}', type: 'success' });
          
        </script>
        <?php
        Session::forget('success');
        ?>

        
    @endif


    @push('script')

    <script type="text/javascript">

        // đếm thời gian 

         //document.getElementById('svg').innerHTML = xmlSvg;
                                        
        time = 10986;
        number_deal_product =10;
        //in time 
        var h = 12;
        var i = 0;
        var s = 0;
    
        amount = time //calc milliseconds between dates
        days = 0;
        hours = 0;
        mins = 0;
        secs = 0;
        out = "";
    
    
        hours = Math.floor(amount / 3600);
        amount = amount % 3600;
        mins = Math.floor(amount / 60);
        amount = amount % 60;
        secs = Math.floor(amount);
            
            
    
    
        //time run 
        if(parseInt(time)>0 && parseInt(number_deal_product)>0){
         h = hours;
          m = mins;
          s = secs;
        }   
        else{
            let today =  new Date();
            h = 99 - parseInt(today.getHours());
            m = 59 - parseInt(today.getMinutes());
            s = 59 - parseInt(today.getSeconds());
            
        }

        start();    
        function start()
        {

              /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
              if (h === null)
              {
                  h = parseInt($('.hour').text());

              }

              /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
              // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
              //  - giảm số phút xuống 1 đơn vị
              //  - thiết lập số giây lại 59
              if (s === -1){
                  m -= 1;
                  s = 59;
              }

              // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
              //  - giảm số giờ xuống 1 đơn vị
              //  - thiết lập số phút lại 59
              if (m === -1){
                  h -= 1;
                  m = 59;
              }

              // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
              //  - Dừng chương trình
              //if (h == -1){

                 //clearTimeout(timeout);
                 //$('#timer-391923717').hide();
                  //return false;


              //}



              /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/



              var hour =  h.toString()+' giờ';

              var seconds =  s.toString()+' giây';

              var minutes =  m.toString()+' phút';



              $('.hour').text(h<10?'0'+hour:''+hour);
              $('.second').text(s<10?'0'+seconds:''+seconds);
              $('.minutes').text(m<10?'0'+minutes:''+minutes);


              /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
              timeout = setTimeout(function(){
                  s--;
                  start();


              }, 1000);
        }
                                                                                                                                                                 
        if(window.innerWidth>768){
            $('.bar-top-lefts').show();
        } 

        var number_slider =  parseInt($('.owl-slider-count').text());

        for (i = 0; i < number_slider; i++) {

            $('#banner-product_'+i).owlCarousel({
                loop: false,
                margin:10,
                nav:true,
                navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsive:{
                    0:{
                        items:1.5
                    },
                    600:{
                        items:1.5
                    },
                    1000:{
                        items:5
                    }
                }
            });
            
        }

        $('.banner-sale').owlCarousel({
            loop:false,

            margin:10,
            nav:true,
            navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1.5
                },
                600:{
                    items:1.5
                },
                1000:{
                    items:5
                }
            }
        });
       
       
        $('.homebanners').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:true,
            dotsData: true,
            navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1
                },

                 600:{
                    items:1
                },
               
                1000:{
                    items:1
                }
            }
        });

        
    </script>
    @endpush
@endsection      