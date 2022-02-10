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
                @if($value->active==1)
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
                @endif

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
                         @if($datas->active==1)
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
        <div class="sticky-sidebar">
            <a data-cate="0" data-place="1863" href="https://www.dienmayxanh.com/flashsale#game" onclick="jQuery.ajax({ url: '/bannertracking?bid=47538&r='+ (new Date).getTime(), async: true, cache: false });" class="banner-left"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/01/banner/tttt-79x271-1.png" alt="Theme Giáng Sinh Trái" width="79" height="271"></a>
            <a data-cate="0" data-place="1864" href="https://www.dienmayxanh.com/flashsale#game" onclick="jQuery.ajax({ url: '/bannertracking?bid=47537&r='+ (new Date).getTime(), async: true, cache: false });" class="banner-right"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/01/banner/ppp-79x271-1.png" alt="Theme Giáng Sinh Phải" width="79" height="271"></a>        
        </div>
        
    </section>

    
   
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
    

     <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @if (session('success'))


        <script type="text/javascript">
            swal({ title: '{{ session("success") }}', type: 'success' });
          
        </script>
        <?php
        Session::forget('success');
        ?>

        
    @endif
 
@endsection      