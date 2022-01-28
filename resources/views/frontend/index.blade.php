@extends('frontend.layouts.apps')

@section('content') 
    @push('style')
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
    <script>
        var isHome = true;
    </script>
    <section>
        <div class="bar-top">
            <div class="bar-top-left-none"></div>
            <div class="homebanner-container">
                <!-- Banner chính -->
                <aside class="homebanner">
                    <div id="sync1" class="slider-banner owl-carousel">
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/flashsale" onclick="jQuery.ajax({ url: '/bannertracking?bid=49126&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2021/12/banner/690-300-690x300-20.png" alt="Xanh Giảm Tất[break]Giảm ngay 5 - 45%"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/gia-dung" onclick="jQuery.ajax({ url: '/bannertracking?bid=49471&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/690-300-690x300-4.png" alt="2022 - JA - Gia dung chung 690*300"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/tu-lanh" onclick="jQuery.ajax({ url: '/bannertracking?bid=49144&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/690-300(1)-690x300-1.png" alt="Rinh Tủ Lạnh[break]Giảm Đến 22%"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/may-lanh" onclick="jQuery.ajax({ url: '/bannertracking?bid=49447&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/690-300-690x300-7.png" alt="Mua Máy Lạnh[break]Giao - Lắp Miễn Phí"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/tivi#c=1942&o=5&pi=0" onclick="jQuery.ajax({ url: '/bannertracking?bid=49552&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/690-300-690x300-6.png" alt="Sắm Tivi Đón Tết[break]Giảm Đến 13 Triệu"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/khuyen-mai-hot" onclick="jQuery.ajax({ url: '/bannertracking?bid=48979&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/690-300-690x300-17.png" alt="Điện Máy Sale Lớn[break]Giảm Đến 30%"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/may-giat" onclick="jQuery.ajax({ url: '/bannertracking?bid=49157&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/690-300-690x300-3.png" alt="Sắm Máy Giặt[break]Giảm Đến 30%"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/tivi-lg" onclick="jQuery.ajax({ url: '/bannertracking?bid=49423&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/690-300-690x300.png" alt="Tivi LG"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/tu-lanh-samsung" onclick="jQuery.ajax({ url: '/bannertracking?bid=49823&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/690-300-690x300-9.png" alt="Tủ lạnh Samsung"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/may-giat-samsung" onclick="jQuery.ajax({ url: '/bannertracking?bid=49821&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/690-300-690x300-8.png" alt="Máy giặt Samsung"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/xe-dap?v=ldp" onclick="jQuery.ajax({ url: '/bannertracking?bid=49896&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/690-300-690x300-3.jpg" alt="Xe Đạp"  ></a>
                        </div>
                        <div class="item">
                            <a aria-label="slide" data-cate="0" data-place="1535" href="https://www.dienmayxanh.com/may-loc-nuoc" onclick="jQuery.ajax({ url: '/bannertracking?bid=49182&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/690-300-690x300-27.png" alt="Máy Lọc Nước[break]Giảm Đến 31%"  ></a>
                        </div>
                    </div>
                    <div id="sync2" class="slider-banner owl-carousel">
                        <div class="item">
                            <h3>
                                Xanh Giảm Tất<br/>Giảm ngay 5 - 45%
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Cửa Nhà Sung Túc<br/>Đồ Bếp Giảm Đến 35%
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Rinh Tủ Lạnh<br/>Giảm Đến 22%
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Mua Máy Lạnh<br/>Giảm Đến 10%
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Sắm Tivi Đón Tết<br/>Giảm Đến 13 Triệu
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Điện Máy Sale Lớn<br/>Giảm Đến 30%
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Sắm Máy Giặt<br/>Giảm Đến 30%
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Sắm Tivi LG<br/>Giảm Đến 6 Triệu
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Tủ Lạnh Samsung<br/>Giảm Đến 20%
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Máy Giặt Samsung<br/>Giảm Đến 27%
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                14-16/1 Mua Xe Đạp<br/>Giảm Lớn Đến 20%
                            </h3>
                        </div>
                        <div class="item">
                            <h3>
                                Máy Lọc Nước<br/>Giảm Đến 31%
                            </h3>
                        </div>
                    </div>
                </aside>
                <!-- End -->
            </div>
            <div class="preorder-hot">
                <!-- Banner hot -->
                <a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/tivi" onclick="jQuery.ajax({ url: '/bannertracking?bid=44915&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/CEDesktop1-254x254-2.png" alt="San pham hot CE Tivi"  ></a><a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/san-pham-doc-quyen" onclick="jQuery.ajax({ url: '/bannertracking?bid=46316&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/Diệntử-254x254.png" alt="Sản phẩm hot CE - Doc quyen"  ></a><a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/gia-dung-online-only" onclick="jQuery.ajax({ url: '/bannertracking?bid=49203&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/Giadụnglớn-254x254-1.png" alt="2021 - Trang chủ hot - Desktop"  ></a><a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/gia-dung-gia-soc" onclick="jQuery.ajax({ url: '/bannertracking?bid=49365&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/Giadụnglớn-1-254x254-1.png" alt="2021 - Trang chủ hot - Desktop"  ></a>
                <!-- End -->
                <!-- Banner vệ sinh máy lạnh -->
                <a class = "w100" aria-label="slide" data-cate="0" data-place="1542" href="https://matbang.thegioididong.com?utm_source=dmx&utm_medium=banner_hot" onclick="jQuery.ajax({ url: '/bannertracking?bid=45341&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/BANNER(262x96)-524x192.jpg" alt="Banner trang chủ hot"  ></a>
                <!-- End -->
            </div>
        </div>
        <!-- Banner sub -->
        <div class="sub-banner">
            <a aria-label="slide" data-cate="0" data-place="1595" href="https://www.topzone.vn/topnews/chuoi-topzone-ra-mat-them-loat-cua-hang-moi-1405860" onclick="jQuery.ajax({ url: '/bannertracking?bid=49071&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/1200-60-1200x60-2.png" alt="topzone"  ></a>    
        </div>
        <!-- End -->
        <!-- Mời đánh giá sản phẩm đã mua -->
        <!-- End -->
        <!-- Săn sale online -->
        <div class="prd-promo has-banner" style="background-color:#FFE602; " data-html-id="3109">
            <div class="prd-promo__top clearfix" >
                <a data-cate="0" data-place="1868" href="https://www.dienmayxanh.com/flashsale#game" onclick="jQuery.ajax({ url: '/bannertracking?bid=47543&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/01/banner/Sansale-desk-1200x90-3.png" alt="Theme Giáng Sinh DMX Desk" width="1200" height="90"></a>                
            </div>



           <!--  Sale -->

           <?php  

           $product_sale =  DB::table('sale_product')->join('products', 'sale_product.product_id', '=', 'products.id')->get();?>

           @if(count($product_sale)>0)
           
            <div class="listproduct slider-promo owl-carousel" data-size="20">

                @foreach($product_sale as  $value)

                <div class="item">
                    <a href='{{ route('details', $value->Link) }}' class=" main-contain" data-s="OnlineSavingCMS" data-site="2" data-pro="3" data-cache="False" data-name="M&#xE1;y gi&#x1EB7;t LG Inverter 8.5 kg FV1408S4W" data-id="227121" data-price="8840000.0" data-brand="LG" data-cate="M&#xE1;y gi&#x1EB7;t" data-box="BoxHome">
                        <div class="item-label">
                        </div>
                        <div class="item-img">
                            <img data-src="{{ asset($value->Image) }}" class="lazyload" alt="{{ $value->Name }}" width=210 height=210>
                        </div>
                        <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Giảm Sốc</span></p>
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
                            <p class="item-rating-total">746</p>
                        </div>
                    </a>
                </div>

                @endforeach
                
            </div>
            @endif
            <!-- <a class="readmore-btn" href="https://www.dienmayxanh.com/flashsale#game"><span>Xem tất cả</span></a> -->
        </div>
        <!-- End -->
        <!-- Bạn đã xem -->
        <div class="watched"></div>
        <!-- End -->

        <?php

            // $data = App\Models\product::where('Group_id', 1)->get();

            $group = App\Models\groupProduct::get();

         ?>   
        @for($i =0; $i <count($group); $i++)

            <?php
                $all_Product = DB::table('group_product')->join('products', 'group_product.id', '=', 'products.Group_id')->select('products.id')->where('group_product.id', $group[$i]->id)->get();
                $data =  DB::table('hot')->join('products', 'hot.product_id', '=', 'products.id')->where('hot.group_id', $group[$i]->id)->get();
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
                    <div class="listproduct slider-home owl-carousel" data-size="10">

                        
                        @foreach($data as $datas)

                        <div class="item"  data-pos="1">
                            <a href='/{{ $datas->Link }}' class=" main-contain" data-s="Nomal" data-site="2" data-pro="3" data-cache="True" data-name="{{ $datas->Name }}" data-id="238784" data-price="20900000.0" data-brand="Sony" data-cate="Tivi" data-box="BoxHome">
                                <div class="item-label">
                                    <span class="lb-tragop">Trả góp 0%</span>
                                </div>
                                <div class="item-img">
                                    <img data-src="{{ asset($datas->Image) }}" class="lazyload" alt="{{ $datas->Name }}" width=210 height=210>
                                </div>
                                <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Giảm Sốc</span></p>
                                <h3>{{ $datas->Name }}</h3>
                                <div class="item-compare">
                                    <span>55 inch</span>
                                    <span>4K</span>
                                </div>
                                <strong class="price">{{ number_format($datas->Price , 0, ',', '.')}}&#x20AB;</strong>
                           
                                <div class="item-rating">
                                    <p>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </p>
                                    <p class="item-rating-total">55</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                        
                    </div>
                    <a class="readmore-txt blue" href="{{ route('category-product', @$group[$i]->link)  }}"><span>Xem tất cả <b>{{ @count($all_Product)}}</b> {{ @$group[$i]->name }}</span></a>
                </div>
            </div>
        </div>
        @endif
        @endfor
        <!-- End  -->
     
     
      
        <div class="trademark">
            <h4 class="title-layout">CHUYÊN TRANG THƯƠNG HIỆU</h4>
            <div class="trademark-slider owl-carousel" data-size="3">
                <a aria-label="slide" data-cate="0" data-place="1540" href="https://www.dienmayxanh.com/samsung" onclick="jQuery.ajax({ url: '/bannertracking?bid=49256&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/samsung-390x210.png" alt="Chuyên trang Samsung"  ></a><a aria-label="slide" data-cate="0" data-place="1540" href="https://www.dienmayxanh.com/gia-dung-online-only" onclick="jQuery.ajax({ url: '/bannertracking?bid=49265&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/giadungonline-390x210.png" alt="Chuyên trang gia dụng online"  ></a><a aria-label="slide" data-cate="0" data-place="1540" href="https://www.dienmayxanh.com/xa-hang" onclick="jQuery.ajax({ url: '/bannertracking?bid=47242&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/10/banner/dungcugd-390x210.png" alt="Chuyên trang DCGĐ"  ></a>        
            </div>
        </div>
        <!-- End -->
        <!-- Sản phẩm mới -->
        <div class="product-news">
            <h4 class="title-layout">S&#x1EA2;N PH&#x1EA8;M M&#x1EDA;I</h4>
            <div class="product-news-slider owl-carousel" data-size="3">
                <a aria-label="slide" data-cate="0" data-place="1541" href="https://www.dienmayxanh.com/tivi-moi" onclick="jQuery.ajax({ url: '/bannertracking?bid=49835&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload" data-src="https://cdn.tgdd.vn/2022/01/banner/NewTV2207-780x420.png" alt="Banner sản phẩm mới Tivi"  ></a><a aria-label="slide" data-cate="0" data-place="1541" href="https://www.dienmayxanh.com/tag/perfetto?key=perfetto" onclick="jQuery.ajax({ url: '/bannertracking?bid=48925&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload" data-src="https://cdn.tgdd.vn/2021/12/banner/NewGD3-780x420.png" alt="San pham moi - GD"  ></a><a aria-label="slide" data-cate="0" data-place="1541" href="https://www.dienmayxanh.com/tag/ibonne?key=ibonne" onclick="jQuery.ajax({ url: '/bannertracking?bid=48961&r='+ (new Date).getTime(), async: true, cache: false });"><img  loading="lazy" class="lazyload" data-src="https://cdn.tgdd.vn/2021/12/banner/NewGD3-780x420-1.png" alt="San pham moi - GD"  ></a>        
            </div>
        </div>
        <!-- End -->
        <div class="application">
            <div class="col1">
                <!-- Tư vấn chọn mua -->
                <div class="ttl-main">
                    <h4 class="title-layout">TƯ VẤN CHỌN MUA</h4>
                    <a href="/kinh-nghiem-hay" class="readmore-txt blue">Xem thêm</a>
                </div>
                <div class="col1__ct" data-size="6">
                    <a href="/kinh-nghiem-hay/mini-game-san-ma-giam-li-xi-don-tet-tu-50-500-n-1410292" class="col1-big">
                        <div class="col1-big-img">
                            <img data-src="https://cdn.tgdd.vn/Files/2022/01/11/1410292/mini-game-san-ma-giam-li-xi-don-tet-tu-50-500-n-760x367.jpg" class="lazyload" alt="Mini Game: S&#x103;n m&#xE3; gi&#x1EA3;m l&#xEC; x&#xEC; &#x111;&#xF3;n T&#x1EBF;t t&#x1EEB; 50 - 500 ng&#xE0;n">
                        </div>
                        <p class="col1-title">Mini Game: S&#x103;n m&#xE3; gi&#x1EA3;m l&#xEC; x&#xEC; &#x111;&#xF3;n T&#x1EBF;t t&#x1EEB; 50 - 500 ng&#xE0;n</p>
                    </a>
                    <div class="col1-simple">
                        <a href="/kinh-nghiem-hay/may-lanh-daikin-tcl-gree-khuyen-mai-cuoi-tuan-de-1410351" class="spl-item">
                            <div class="spl-item__img">
                                <img data-src="https://cdn.tgdd.vn/Files/2022/01/12/1410351/may-lanh-daikin-tcl-gree-khuyen-mai-cuoi-tuan-de-1-318x154.jpg" class="lazyload" alt="M&#xE1;y l&#x1EA1;nh Daikin, TCL, Gree khuy&#x1EBF;n m&#xE3;i cu&#x1ED1;i tu&#x1EA7;n &#x111;&#x1EBF;n 520K, t&#x1EB7;ng combo &#x1ED1;ng &#x111;&#x1ED3;ng c&#x1EF1;c h&#x1EA5;p d&#x1EAB;n">
                            </div>
                            <div class="spl-item__content">
                                <p class="spl-item-title">M&#xE1;y l&#x1EA1;nh Daikin, TCL, Gree khuy&#x1EBF;n m&#xE3;i cu&#x1ED1;i tu&#x1EA7;n &#x111;&#x1EBF;n 520K, t&#x1EB7;ng combo &#x1ED1;ng &#x111;&#x1ED3;ng c&#x1EF1;c h&#x1EA5;p d&#x1EAB;n</p>
                            </div>
                        </a>
                        <a href="/kinh-nghiem-hay/may-giat-mini-la-gi-nen-mua-hay-khong-904759" class="spl-item">
                            <div class="spl-item__img">
                                <img data-src="https://cdn.tgdd.vn/Files/2016/10/25/904759/may-giat-mini-la-gi-nen-mua-hay-khong--7-318x154.jpg" class="lazyload" alt="M&#xE1;y gi&#x1EB7;t mini l&#xE0; g&#xEC;? C&#xF3; n&#xEA;n mua m&#xE1;y gi&#x1EB7;t mini kh&#xF4;ng?">
                            </div>
                            <div class="spl-item__content">
                                <p class="spl-item-title">M&#xE1;y gi&#x1EB7;t mini l&#xE0; g&#xEC;? C&#xF3; n&#xEA;n mua m&#xE1;y gi&#x1EB7;t mini kh&#xF4;ng?</p>
                            </div>
                        </a>
                        <a href="/kinh-nghiem-hay/tung-bung-khai-truong-cua-hang-ava-fashion-1409963" class="spl-item">
                            <div class="spl-item__img">
                                <img data-src="https://cdn.tgdd.vn/Files/2022/01/09/1409963/tung-bung-khai-chuong-cua-hang-ava-fashiont-the-1-318x154.jpg" class="lazyload" alt="T&#x1B0;ng b&#x1EEB;ng khai tr&#x1B0;&#x1A1;ng AVA FASHION - Th&#x1EBF; gi&#x1EDB;i th&#x1EDD;i trang gi&#x1EA3;m S&#x1ED0;C 20%, mua s&#x1EA3;n ph&#x1EA9;m th&#x1EE9; 2 gi&#x1EA3;m &#x111;&#x1EBF;n 40%">
                            </div>
                            <div class="spl-item__content">
                                <p class="spl-item-title">T&#x1B0;ng b&#x1EEB;ng khai tr&#x1B0;&#x1A1;ng AVA FASHION - Th&#x1EBF; gi&#x1EDB;i th&#x1EDD;i trang gi&#x1EA3;m S&#x1ED0;C 20%, mua s&#x1EA3;n ph&#x1EA9;m th&#x1EE9; 2 gi&#x1EA3;m &#x111;&#x1EBF;n 40%</p>
                            </div>
                        </a>
                        <a href="/kinh-nghiem-hay/tung-bung-khai-truong-cua-hang-ava-sport-1409871" class="spl-item">
                            <div class="spl-item__img">
                                <img data-src="https://cdn.tgdd.vn/Files/2022/01/08/1409871/tung-bung-khai-chuong-cua-hang-ava-sport-the-gio-318x154.jpg" class="lazyload" alt="T&#x1B0;ng b&#x1EEB;ng khai tr&#x1B0;&#x1A1;ng c&#x1EED;a h&#xE0;ng AVA SPORT - Th&#x1EBF; gi&#x1EDB;i &#x111;&#x1ED3; th&#x1EC3; thao ch&#xED;nh h&#xE3;ng, gi&#x1EA3;m S&#x1ED0;C 20%, mua s&#x1EA3;n ph&#x1EA9;m th&#x1EE9; 2 gi&#x1EA3;m &#x111;&#x1EBF;n 40%">
                            </div>
                            <div class="spl-item__content">
                                <p class="spl-item-title">T&#x1B0;ng b&#x1EEB;ng khai tr&#x1B0;&#x1A1;ng c&#x1EED;a h&#xE0;ng AVA SPORT - Th&#x1EBF; gi&#x1EDB;i &#x111;&#x1ED3; th&#x1EC3; thao ch&#xED;nh h&#xE3;ng, gi&#x1EA3;m S&#x1ED0;C 20%, mua s&#x1EA3;n ph&#x1EA9;m th&#x1EE9; 2 gi&#x1EA3;m &#x111;&#x1EBF;n 40%</p>
                            </div>
                        </a>
                        <a href="/kinh-nghiem-hay/the-gioi-di-dong-khai-truong-5-chuoi-cua-hang-ava-1409862" class="spl-item">
                            <div class="spl-item__img">
                                <img data-src="https://cdn.tgdd.vn/Files/2022/01/08/1409862/the-gioi-di-dong-khai-chuong-5-chuoi-cua-hang-ava-318x154.jpg" class="lazyload" alt="Th&#x1EBF; Gi&#x1EDB;i Di &#x110;&#x1ED9;ng khai tr&#x1B0;&#x1A1;ng 5 chu&#x1ED7;i c&#x1EED;a h&#xE0;ng AVA: Khuy&#x1EBF;n m&#xE3;i S&#x1ED0;C 20%, mua s&#x1EA3;n ph&#x1EA9;m th&#x1EE9; 2 gi&#x1EA3;m &#x111;&#x1EBF;n 40%">
                            </div>
                            <div class="spl-item__content">
                                <p class="spl-item-title">Th&#x1EBF; Gi&#x1EDB;i Di &#x110;&#x1ED9;ng khai tr&#x1B0;&#x1A1;ng 5 chu&#x1ED7;i c&#x1EED;a h&#xE0;ng AVA: Khuy&#x1EBF;n m&#xE3;i S&#x1ED0;C 20%, mua s&#x1EA3;n ph&#x1EA9;m th&#x1EE9; 2 gi&#x1EA3;m &#x111;&#x1EBF;n 40%</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End -->
            </div>
            <div class="col2">
                <!-- Món ngon mỗi ngày -->
                <div class="ttl-main">
                    <h4 class="title-layout">MÓN NGON MỖI NGÀY</h4>
                    <a href="/vao-bep" class="readmore-txt blue">Xem thêm</a>
                </div>
                <div class="col2__ct" data-size="1">
                    <a href="/vao-bep/cach-chon-tom-kho-ngon-cho-ngay-tet-phan-biet-tom-dat-kho-va-16296">
                        <div class="cook-img">
                            <img data-src="https://cdn.tgdd.vn/2022/01/CookDishThumb/cach-chon-tom-kho-ngon-cho-ngay-tet-phan-biet-tom-dat-kho-va-thumb-620x620.jpg" class="lazyload" alt="C&#xE1;ch ch&#x1ECD;n t&#xF4;m kh&#xF4; ngon cho ng&#xE0;y T&#x1EBF;t, ph&#xE2;n bi&#x1EC7;t t&#xF4;m &#x111;&#x1EA5;t kh&#xF4; v&#xE0; t&#xF4;m bi&#x1EC3;n kh&#xF4;">
                        </div>
                        <div class="cook-main">
                            <p class="cook-title">C&#xE1;ch ch&#x1ECD;n t&#xF4;m kh&#xF4; ngon cho ng&#xE0;y T&#x1EBF;t, ph&#xE2;n bi&#x1EC7;t t&#xF4;m &#x111;&#x1EA5;t kh&#xF4; v&#xE0; t&#xF4;m bi&#x1EC3;n kh&#xF4;</p>
                            <p class="cook-time">
                                <span class="fixheight"></span>
                            </p>
                        </div>
                    </a>
                </div>
                <!-- End -->
            </div>
        </div>
        <div class="bottom-search">
            <p>Tìm kiếm nhiều:</p>
            <a href="/kinh-nghiem-hay/6-dieu-dang-mong-doi-o-sieu-pham-iphone-13-iphone-1332649">• Iphone 13</a> <a href="/vao-bep">• Món ngon mỗi ngày</a> <a href="/tivi-sony">• Tivi Sony</a> <a href="/thiet-bi-cham-soc-suc-khoe">Thiết bị y tế</a> <a href="/cham-soc-me-va-be">Đồ dùng mẹ và bé</a> <a href="/may-giat-moi">• Máy giặt mới 2021</a> <a href="/may-giat-midea">• Máy giặt Midea</a> <a href="/kinh-nghiem-hay/dong-ho-mat-kinh">• Tư vấn Đồng hồ</a> <a href="/may-giat-lg">• Máy giặt LG</a> <a href="/may-lanh-moi">• Máy lạnh mới 2021</a> <a href="/may-lanh-electrolux">• Máy lạnh Electrolux</a> <a href="/may-lanh-lg">• Máy lạnh LG</a> <a href="/dien-thoai/iphone-13">• Iphone 13 mới</a>  <a href="https://www.dienmayxanh.com/xe-dap-thong-nhat">• Xe đạp Thống Nhất</a> <a href="https://www.dienmayxanh.com/micro">• ​Micro</a> <a href="https://www.dienmayxanh.com/lo-vi-song">• ​Microwave</a> <a href="https://www.dienmayxanh.com/man-hinh-may-tinh-viewsonic">• ​Màn hình ViewSonic</a> <a href="https://www.dienmayxanh.com/may-chay-bo">• Máy chạy bộ</a> <a href="https://www.dienmayxanh.com/may-rua-chen-bosch">• Máy rửa chén bát Bosch</a>
        </div>
        <!-- Banner dọc 2 bên -->
        <div class="sticky-sidebar">
            <a data-cate="0" data-place="1863" href="https://www.dienmayxanh.com/flashsale#game" onclick="jQuery.ajax({ url: '/bannertracking?bid=47538&r='+ (new Date).getTime(), async: true, cache: false });" class="banner-left"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/01/banner/tttt-79x271-1.png" alt="Theme Giáng Sinh Trái" width="79" height="271"></a>
            <a data-cate="0" data-place="1864" href="https://www.dienmayxanh.com/flashsale#game" onclick="jQuery.ajax({ url: '/bannertracking?bid=47537&r='+ (new Date).getTime(), async: true, cache: false });" class="banner-right"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/01/banner/ppp-79x271-1.png" alt="Theme Giáng Sinh Phải" width="79" height="271"></a>        
        </div>
        <!-- End -->
    </section>
    <!-- Popup banner -->
    <!-- End -->
    <!-- Hiệu ứng ... rơi -->
    <div class="falling-container" aria-hidden="true">
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
    </div>
    <!-- End -->
    <section class="page1 prmotebannerbhx">
        <div class="prmotebanner-bhx">
        </div>
    </section>
    <div class="preloader preall">
        <div class="loaderweb"></div>
    </div>
    <p id="gb-top-page" class="hide">↑</p>
    <form id="form-zone-bhx">
        <div class="zone-bhx">
        </div>
    </form>
        <div id="dldingtext">Bạn vui lòng chờ trong giây lát...</div>
 
@endsection      