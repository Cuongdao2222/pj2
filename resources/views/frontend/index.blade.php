@extends('frontend.layouts.apps')

@section('content') 
    @push('style')

        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
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


                <!-- Banner hot -->
                <a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/tivi">
                    <img  src="https://cdn.tgdd.vn/2022/01/banner/CEDesktop1-254x254-2.png" alt="San pham hot CE Tivi"  >
                </a>
                <a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/san-pham-doc-quyen">
                    <img  src="https://cdn.tgdd.vn/2022/01/banner/Diệntử-254x254.png" alt="Sản phẩm hot CE - Doc quyen"  >
                </a>
                <a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/gia-dung-online-only">
                    <img  src="https://cdn.tgdd.vn/2022/01/banner/Giadụnglớn-254x254-1.png" alt="2021 - Trang chủ hot - Desktop"  >
                </a>
                <a class = "" aria-label="slide" data-cate="0" data-place="1539" href="https://www.dienmayxanh.com/gia-dung-gia-soc">
                    <img  src="https://cdn.tgdd.vn/2022/01/banner/Giadụnglớn-1-254x254-1.png" alt="2021 - Trang chủ hot - Desktop"  >
                </a>
                <!-- End -->
                
            </div>
            
            @if(\Request::route()->getName()=='homeFe')        
            <div class="category mobile">
                <p class="category__txts">
                <span class="menu-list">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </span></p>
                <!-- <a href="/danh-muc-nhom-hang" class="category__all">Tất cả nhóm hàng</a> -->
                <nav class="nav-list" style="display: none;">
                    <a href="/dtdd">Tivi</a>
                    <a href="/laptop-ldp">Tủ lạnh</a>
                    <a href="/may-tinh-bang">Máy giặt</a>
                    <a href="/phu-kien">Điều hòa</a>
                    <a href="/dong-ho-thong-minh-ldp">Đồ gia dụng</a>
                    <a href="/avaji">Tủ đông</a>
                    <a href="/pc-may-in">Tủ mát</a>
                    <a href="/may-doi-tra">Máy sấy quần áo</a>
                    <a href="/sim-so-dep">A.O.Smith</a>
                    <a href="/tien-ich" class="promotion-menu">
                        Giảm giá <br>đặc biệt
                        <span class="item__label">- 5%</span>
                    </a>
                </nav>
            </div>
            @endif
            
               
        </div>

        <section class="menus-banner">
            <ul>
                <li class="col-">
                    <a href="tivi-cao-cap">
                        <picture>
                            <source media="(min-width:1201px)" srcset="https://samnec.com.vn/public/image/menu-cate/03/cao-cap.png">
                            <img src="https://samnec.com.vn/public/image/menu-cate/03/cao-cap.png" alt="Samnec điện máy">
                        </picture>
                    </a>
                    <p><a href="tivi-cao-cap">TV cao cấp</a></p>
                </li>
                <li>
                    <a href="tu-lanh">
                        <picture>
                            <source media="(min-width:1201px)" srcset="https://samnec.com.vn/public/image/menu-cate/03/tu-lanh.png">
                            <img src="https://samnec.com.vn/public/image/menu-cate/03/tu-lanh.png" alt="Samnec điện máy">
                        </picture>
                    </a>
                    <p><a href="tu-lanh">Tủ lạnh</a></p>
                </li>
                <li>
                    <a href="may-giat">
                        <picture>
                            <source media="(min-width:1201px)" srcset="https://samnec.com.vn/public/image/menu-cate/03/may-giat.png">
                            <img src="https://samnec.com.vn/public/image/menu-cate/03/may-giat.png" alt="Samnec điện máy">
                        </picture>
                    </a>
                    <p><a href="may-giat">Máy giặt</a></p>
                </li>
                <li>
                    <a href="gia-dung">
                        <picture>
                            <source media="(min-width:1201px)" srcset="https://samnec.com.vn/public/image/menu-cate/03/gia-dung.png">
                            <img src="https://samnec.com.vn/public/image/menu-cate/03/gia-dung.png" alt="Samnec điện máy">
                        </picture>
                    </a>
                    <p><a href="gia-dung">Gia dụng</a></p>
                </li>
                <li>
                    <a href="tivi-inch-lon-gia-re">
                        <picture>
                            <source media="(min-width:1201px)" srcset="https://samnec.com.vn/public/image/menu-cate/03/sale.png">
                            <img src="https://samnec.com.vn/public/image/menu-cate/03/sale.png" alt="Samnec điện máy">
                        </picture>
                    </a>
                    <p><a href="tivi-inch-lon-gia-re">TV Inch lớn giá rẻ</a></p>
                </li>
                <li>
                    <a href="tra-gop">
                        <picture>
                            <source media="(min-width:1201px)" srcset="https://samnec.com.vn/public/image/menu-cate/03/tra-gop.png">
                            <img src="https://samnec.com.vn/public/image/menu-cate/03/tra-gop.png" alt="Samnec điện máy">
                        </picture>
                    </a>
                    <p><a href="tra-gop">Trả góp</a></p>
                </li>
            </ul>
        </section>
       

        <?php 
            $deal = App\Models\deal::get();

            $now  = Carbon\Carbon::now();

            if(!empty($deal)&count($deal)>0){

                $timeDeal_star = $deal[0]->start;

                $timeDeal_star =  \Carbon\Carbon::create($timeDeal_star);

                $timeDeal_end = $deal[0]->end;

                $timeDeal_end =  \Carbon\Carbon::create($timeDeal_end);

                $timestamp = $now->diffInSeconds($timeDeal_end);
        
            }


        ?>

        @if(!empty($deal)&count($deal)>0)

        @if($now->between($timeDeal_star, $timeDeal_end))


        <!-- flash sale -->
            <div class="">
                <div class="flash-sale" style="height: 398px;">
                    <span id="banner-flash-sale"><a href="https://www.nguyenkim.com/loa-di-dong-energizer-bts106bk.html">
                    <img width="256" src="https://cdn.nguyenkimmall.com/images/companies/_1/MKT_ECM/0820/Flash_Sale_Theme_256x396.png" style="width: 256px; height: 396px" alt="banner-fs">
                    </a></span>
                    <div class="flash-product nk-product-of-flash-sales">
                        <div class="col-flash col-flash-2 active">
                            <div id="sync1S" class="slider-banner owl-carousel flash-sale-banner">

                                @foreach($deal as $value)

                                @if( $value->active ==1)

                                <div class="item">
                                    <a href="{{ route('details', $value->link) }}">
                                        <div class="img">
                                            <img width="327" src="{{ asset($value->image) }}" title="{{ $value->name }}">
                                        </div>
                                    </a>
                                    <div class="desc">
                                      <a href="{{ route('details', $value->link) }}">
                                        <h4 class="title">{{ $value->name }}</h4>
                                        <div class="container-price">
                                               <div>
                                                    <p class="black-price">{{ @str_replace(',' ,'.', number_format($value->deal_price))}}</p><span class="price-old">{{ @str_replace(',' ,'.', number_format($value->price)) }}</span>
                                               </div>
                                        </div>
                                        <div style="margin-top: 11px">
                                            <div class="nk-top-stickers"><span class="nk-sticker nk-new">Mới</span></div><div>
                                                    <p class="title-shock-price">Giá sốc online</p>
                                                    <span class="price-new">{{ @str_replace(',' ,'.', number_format($value->deal_price)) }}</span>
                                                </div>
                                        </div><div class="review_product star"><span class="star_icon_avg_rate_npv" 0="" 5="" title="0/5"><span class="nki-Star-o-new"></span><span class="nki-Star-o-new"></span><span class="nki-Star-o-new"></span><span class="nki-Star-o-new"></span><span class="nki-Star-o-new"></span></span><div class="line_break">|</div><div class="reviewCount">0 đánh giá</div></div><div class="container-timeline">
                                            <span class="timeline"><span style="width: 2%"></span></span>
                                           <!--  <p>Đã bán <span style="color: #EE1E25">2</span> / 100 sản phẩm</p> -->
                                        </div>
                                        <div style="width: 100%; height: 1px; background: #ECECEC; margin-top: 8px"></div>
                                        <div class="countdown-flash-sale">
                                            <div class="time-cd time-fl">
                                                
                                                <div class="time">
                                                    <span class="hours">
                                                        <span class="hourss"> 6</span>
                                                        
                                                        <div style="margin-top: 2px; width:100%; height:1px; background: #FF3647"></div>
                                                        <span>Giờ</span>
                                                    </span>
                                                    <p style="font-size: 28px; line-height: 55px;font-weight: bold;color: #101010; margin: 0 7px" >:</p>

                                                    <span class="hours">
                                                        <span class="minutess"> 6</span>
                                                        <div style="margin-top: 2px; width:100%; height:1px; background: #FF3647"></div>
                                                        <span>phút</span>
                                                    </span>
                                                    <p style="font-size: 28px; line-height: 55px;font-weight: bold;color: #101010; margin: 0 7px">:</p>
                                                    <span class="hours">
                                                        <span class="secondss"> 6</span>
                                                        <div style="margin-top: 2px; width:100%; height:1px; background: #FF3647"></div>
                                                        <span>giây</span>
                                                    </span>
                                                   
                                                  
                                                </div>
                                            </div>
                                        </div>
                                      </a>
                                    </div>
                                </div>

                                @endif

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <!--  end flash  -->

         @endif 
         @endif  


        <div class="clearfix"></div> 

        <div class="prd-promo has-banner" style="background-color:#FFF3EE; " data-html-id="3109">

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
                            
                            
                            
                        </div>
                       <!--  <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Giảm Sốc</span></p> -->
                        <h3>{{ $value->Name }}</h3>
                       
                        <strong class="price">{{  @str_replace(',' ,'.', number_format($value->Price))  }}.&#x20AB;</strong>
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
            
        </div>

        <?php

            // $data = App\Models\product::where('Group_id', 1)->get();

            $group = App\Models\groupProduct::where('parent_id', 0)->get();
         ?>   

        <div  class="owl-slider-count" style="display: none;">{{ count($group) }}</div> 
        @for($i =0; $i <count($group); $i++)

            <?php
                $all_Product = DB::table('group_product')->join('products', 'group_product.id', '=', 'products.Group_id')->select('products.id')->where('group_product.id', $group[$i]->id)->where('products.active', 1)->get();
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

                                     <img src="{{ asset('images/saker/'.strtolower($value->maker??'').'.png') }}" class="item-saker">

                                     
                                </div>
                                <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Giảm Sốc</span></p>
                                <h3>{{ $datas->Name }}</h3>
                                <!-- <div class="item-compare">
                                    <span>55 inch</span>
                                    <span>4K</span>
                                </div> -->
                                <strong class="price">{{ @number_format($datas->Price , 0, ',', '.')}}&#x20AB;</strong>
                           
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

        <div class="applications">
            <div class="col1">
                <!-- Tư vấn chọn mua -->
                <div class="ttl-main">
                    <h4 class="title-layout">Tin tức nổi bật</h4>
                    <a href="{{ route('tin') }}" class="readmore-txt blue">Xem thêm</a>
                </div>
                <div class="col1__ct" data-size="6">

                    <?php  

                        $post = App\Models\post::where('active',1)->where('hight_light', 1)->select('link', 'title', 'image')->get()->toArray();

                    ?>

                    @if(isset($post) && count($post)>0)
                    <a href="{{ route('details', $post[0]['link']) }}" class="col1-big">
                        <div class="col1-big-img">
                            <img data-src="{{ asset( $post[0]['image'])  }}" class=" ls-is-cached lazyloaded" alt="{{ $post[0]['title'] }}" src="{{ $post[0]['image'] }}">
                        </div>
                       
                    </a>
                    <div class="col1-simple">

                        @for($i=1; $i<count($post); $i++)

                        <a href="{{ route('details', $post[$i]['link']) }}" class="spl-item">
                            <div class="spl-item__img">
                                <img data-src="{{ asset($post[$i]['image']) }}" class=" lazyloaded" alt="{{ $post[$i]['title'] }}" src="{{ asset($post[$i]['image']) }}">
                            </div>
                            <div class="spl-item__content">
                                <p class="spl-item-title">{{ $post[$i]['title'] }}</p>
                            </div>
                        </a>

                        @endfor
                       
                    </div>

                    @endif
                </div>
                <!-- End -->
            </div>
        </div>
        

        <div class="bottom-search">
            <p>Tìm kiếm nhiều:</p>

            <?php  $link =  DB::table('muchsearch')->get();  ?>

            @isset($link)
            @foreach($link as $links)
            <a href="{{ $links->link }}">• {{@$links->title  }}</a> 
            @endforeach
            @endif
           

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
                                        
        time = '{{ @$timestamp }}';
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



              var hour =  h.toString();

              var seconds =  s.toString();

              var minutes =  m.toString();



              $('.hourss').text(h<10?'0'+hour:''+hour);
              $('.secondss').text(s<10?'0'+seconds:''+seconds);
              $('.minutess').text(m<10?'0'+minutes:''+minutes);


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
                nav:false,
                navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsive:{
                    0:{
                        items:2.5
                    },
                    600:{
                        items:2.5
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
                    items:2.5
                },
                600:{
                    items:2.5
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

        $('.flash-sale-banner').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            autoplay:false,
            
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa fa-angle-right'></i>"],
            responsive:{
                0:{
                    items:1
                },

                 600:{
                    items:2
                },
               
                1000:{
                    items:2
                }
            }
        });

        
    </script>
    @endpush
@endsection      