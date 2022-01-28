@extends('frontend.layouts.apps')

@section('content') 
    @push('style')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}"> 

        <style type="text/css">
            
            .bar-top-left{
                display: none !important;
            }
        </style>
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
        <!--#region WebSite-->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "WebSite",
                "name": "Siêu thị Điện máy XANH - Mua bán điện tử, điện lạnh, gia dụng",
                "alternateName":  "Siêu thị Điện máy XANH - Mua bán điện tử, điện lạnh, gia dụng",
                "url": "https://www.dienmayxanh.com",
                "potentialAction": [{
                "@type": "SearchAction",
                "target": "https://www.dienmayxanh.com/tag/{search_term_string}",
                "query-input": "required name=search_term_string"
                }]
            }
        </script>
        <!--#endregion-->
        <!--#region BreadcrumbList-->
        <script type="application/ld+json">
            {"@type":"BreadcrumbList","@context":"https://schema.org","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://www.dienmayxanh.com","name":"Điện máy Xanh"}},{"@type":"ListItem","position":2,"item":{"@id":"https://www.dienmayxanh.com/tivi","name":"Tivi"}}]}
        </script>
        <!--#endregion-->
        <!--#region Product-->
        <script type="application/ld+json">
            {"@context":"https://schema.org","@type":"Product","name":"Tivi ","image":["https://cdn.tgdd.vn/Products/Images/1942/238784/TimerThumb/led-sony-kd-55x80j-(14).jpg"],"description":"Mua Tivi giá rẻ, smart tivi, tivi FullHD, 4K, TV 8K, giá tốt, giao miễn phí toàn quốc, trả góp 0%, bảo hành 2 năm, hư gì đổi nấy tận nhà (miễn phí tháng đầu) phục vụ tận tâm","brand":{"@type":"Brand","name":["Sony","Samsung","LG","TCL","Casper","FFALCON","AQUA"]},"offers":{"@type":"AggregateOffer","priceCurrency":"VND","seller":{"@id":"https://www.dienmayxanh.com#Organization"},"offerCount":154,"lowPrice":5490000.0,"highPrice":890000000.0}}
        </script>
        <!--#endregion-->
        <!--#region Organization-->
        <script type="application/ld+json">
            {"@context":"https://schema.org","@type":"Organization","@id":"https://www.dienmayxanh.com/#Organization","name":"Điện Máy Xanh","url":"https://www.dienmayxanh.com","logo":{"@type":"ImageObject","url":"https://cdn.thegioididong.com/v2015/ContentMwg/logo/logo.png"},"contactPoint":[{"@type":"ContactPoint","telephone":"18001060","contactType":"sales","areaServed":"VN","availableLanguage":["EN","VN"]},{"@type":"ContactPoint","telephone":"18001763","contactType":"technical support","areaServed":"VN","availableLanguage":["EN","VN"]},{"@type":"ContactPoint","telephone":"18001062","contactType":"customer support","areaServed":"VN","availableLanguage":["EN","VN"]}],"sameAs":["https://www.facebook.com/thegioididongcom/","https://vn.linkedin.com/company/thegioidong-dienmayxanh","https://www.youtube.com/user/TGDDVideoReviews","https://www.instagram.com/watch.thegioididong/","https://vt.tiktok.com/RH9SSp/","https://vi.wikipedia.org/wiki/Thegioididong.com"]}
        </script>
        <!--#endregion-->
        <div class="bsc-block">
            <section>
                <ul class="breadcrumb hide">
                    <li><a href="tivi">Tivi</a></li>
                    <li>
                        <p class="sort-total"><b>153</b> ...</p>
                    </li>
                </ul>
            </section>
        </div>
        <div class="top-banner">
            <section>
                <div class="slider-bannertop owl-carousel owl-theme">
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/tivi#c=1942&o=5&pi=0" onclick="jQuery.ajax({ url: '/bannertracking?bid=49550&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  src="https://cdn.tgdd.vn/2022/01/banner/800-200-800x200-38.png" alt="tivi chung"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/tivi-samsung" onclick="jQuery.ajax({ url: '/bannertracking?bid=49368&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/800-200-800x200-235.png" alt="2022 - JA - Samsung TV"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1944,166,462,1942,2002,1943" data-place="1537" href="https://www.dienmayxanh.com/flashsale" onclick="jQuery.ajax({ url: '/bannertracking?bid=49128&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/800-200-800x200-184.png" alt="Xanh Giảm Tất Giảm ngay 5 - 45%"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/khuyen-mai/sang-sac-xuan-bung-gan-ket-mua-tivi-lg-nhan-nga-1403418" onclick="jQuery.ajax({ url: '/bannertracking?bid=48718&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/800-200-800x200-100.png" alt="Tivi LG Tết"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/tivi-casper" onclick="jQuery.ajax({ url: '/bannertracking?bid=49267&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/800-200-800x200-211.png" alt="Tivi Casper"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/tivi-tcl" onclick="jQuery.ajax({ url: '/bannertracking?bid=49122&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/800-200-800x200-182.png" alt="Tivi TCL"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/khuyen-mai/cung-aqua-sam-tet-ruoc-them-qua-bat-ngo-1397867" onclick="jQuery.ajax({ url: '/bannertracking?bid=47906&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/11/banner/800-200-800x200-160.png" alt="Tết AQUA"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/tivi-aqua" onclick="jQuery.ajax({ url: '/bannertracking?bid=49826&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/800-200-800x200-93.png" alt="Tivi Aqua"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/tivi-ffalcon?g=32-inch" onclick="jQuery.ajax({ url: '/bannertracking?bid=49875&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/800-200-800x200-105.png" alt="Tivi FFalcon"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/tag/ls03a?key=ls03a" onclick="jQuery.ajax({ url: '/bannertracking?bid=49991&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/800-200-800x200-124.png" alt="2022 - JA - Samsung TV"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1944,1962,1943,2002,1942" data-place="1537" href="https://www.dienmayxanh.com/khuyen-mai-hot" onclick="jQuery.ajax({ url: '/bannertracking?bid=48908&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2021/12/banner/800-200-800x200-135.png" alt="Xả hàng Điên máy"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/tivi-sony" onclick="jQuery.ajax({ url: '/bannertracking?bid=49206&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/800-200-800x200-23.png" alt="Tivi Sony"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1942" data-place="1537" href="https://www.dienmayxanh.com/tivi-lg" onclick="jQuery.ajax({ url: '/bannertracking?bid=49420&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/800-200-800x200-5.png" alt="Tivi LG"  ></a>
                    </div>
                    <div class="item">
                        <a aria-label="slide" data-cate="1944,166,462,1942,2002,1943" data-place="1537" href="https://www.dienmayxanh.com/flashsale#game" onclick="jQuery.ajax({ url: '/bannertracking?bid=50009&r='+ (new Date).getTime(), async: true, cache: false });"><img width=800 height=200  loading="lazy" class="lazyload owl-lazy" data-src="https://cdn.tgdd.vn/2022/01/banner/800-200-800x200-128.png" alt="Săn Cá Chép Nhận Coupon Đến 500 Ngàn"  ></a>
                    </div>
                </div>
                <div class="promote-banner ">
                    <a href="/Banner C&#x1ED1; &#x110;&#x1ECB;nh" class="promote-item">
                    <a aria-label="slide" data-cate="1942" data-place="1538" href="#" onclick="jQuery.ajax({ url: '/bannertracking?bid=43621&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2021/07/banner/TraGop390-97-390x97-1.png" alt="Banner Cố Định"  ></a>
                    </a>
                    <a href="/tivi tr&#x1B0;ng b&#xE0;y" class="promote-item">
                    <a aria-label="slide" data-cate="1942" data-place="1538" href="https://www.dienmayxanh.com/may-doi-tra/tivi?type=7#" onclick="jQuery.ajax({ url: '/bannertracking?bid=45610&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2021/08/banner/390-97-390x97-4.png" alt="tivi trưng bày"  ></a>
                    </a>
                </div>
            </section>
        </div>
        <div class="box-filter top-box  block-scroll-main cate-1942">
            <section>
                <div class="jsfix scrolling_inner scroll-right">
                    <div class="box-filter block-scroll-main scrolling">
                        <div class="scroll-btn show-right">
                            <div class="btn-right-scroll"></div>
                        </div>
                        <div class="filter-total ">
                            <div class="filter-item__title jsTitle">
                                <div class="arrow-filter"></div>
                                <i class="icon-filter"></i>Bộ lọc
                                <strong class="number count-total"></strong>
                            </div>
                            <div class="filter-show show-total" id="wrapper">
                                <div class="list-filter-active">
                                    <span>Đã chọn: </span>
                                    <div class="manu"></div>
                                    <div class="price"></div>
                                    <div class="props"></div>
                                    <div class="props-slider"></div>
                                    <a href="javascript:;" class="clr-filter" onclick="removeAllFilterActive()">Xóa tất cả</a>
                                </div>
                                <div class="show-total-main">
                                    <a href="javascript:;" class="close-popup-total"><i class="iconcate-closess"></i>Đóng</a>
                                    <div class="show-total-item clearfix warpper-manu-inside arranged">
                                        <p class="show-total-txt">Hãng</p>
                                        <div class="filter-list filter-list--hang manu">
                                            <a href="tivi-sony" class="c-btnbox   filter-manu" data-href="sony" data-id="722" data-name="Sony">
                                            <img src="https://cdn.tgdd.vn/Brand/2/Sony1942-b_57.png" width="68" height="30" alt="Sony">
                                            </a>
                                            <a href="tivi-samsung" class="c-btnbox   filter-manu" data-href="samsung" data-id="2002" data-name="Samsung">
                                            <img src="https://cdn.tgdd.vn/Brand/2/Samsung1942-b_51.png" width="68" height="30" alt="Samsung">
                                            </a>
                                            <a href="tivi-lg" class="c-btnbox   filter-manu" data-href="lg" data-id="2003" data-name="LG">
                                            <img src="https://cdn.tgdd.vn/Brand/2/LG1942-b_16.png" width="68" height="30" alt="LG">
                                            </a>
                                            <a href="tivi-tcl" class="c-btnbox   filter-manu" data-href="tcl" data-id="2005" data-name="TCL">
                                            <img src="https://cdn.tgdd.vn/Brand/2/TCL1942-b_57.png" width="68" height="30" alt="TCL">
                                            </a>
                                            <a href="tivi-casper" class="c-btnbox   filter-manu" data-href="casper" data-id="19376" data-name="Casper">
                                            <img src="https://cdn.tgdd.vn/Brand/2/Casper1942-b_5.png" width="68" height="30" alt="Casper">
                                            </a>
                                            <a href="tivi-ffalcon" class="c-btnbox   filter-manu" data-href="ffalcon" data-id="19692" data-name="FFALCON">
                                            <img src="https://cdn.tgdd.vn/Brand/2/FFALCON1942-b_25.png" width="68" height="30" alt="FFALCON">
                                            </a>
                                            <a href="tivi-aqua" class="c-btnbox   filter-manu" data-href="aqua" data-id="24750" data-name="AQUA">
                                            <img src="https://cdn.tgdd.vn/Brand/2/Aqua1943-s34-135x80-1.png" width="68" height="30" alt="AQUA">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="filter-border"></div>
                                    <div class="show-total-item count-item arranged">
                                        <p class="show-total-txt">Giá</p>
                                        <div class="filter-list price">
                                            <a href="tivi?p=duoi-5-trieu" data-href="duoi-5-trieu" class="c-btnbox " data-id="333">D&#x1B0;&#x1EDB;i 5 tri&#x1EC7;u</a>
                                            <a href="tivi?p=tu-5tr-7tr" data-href="tu-5tr-7tr" class="c-btnbox " data-id="335">T&#x1EEB; 5tr - 7tr</a>
                                            <a href="tivi?p=tu-7tr-10tr" data-href="tu-7tr-10tr" class="c-btnbox " data-id="336">T&#x1EEB; 7tr - 10tr</a>
                                            <a href="tivi?p=tu-10tr-12tr" data-href="tu-10tr-12tr" class="c-btnbox " data-id="575">T&#x1EEB; 10tr - 12tr</a>
                                            <a href="tivi?p=tu-12tr-15tr" data-href="tu-12tr-15tr" class="c-btnbox " data-id="337">T&#x1EEB; 12tr - 15tr</a>
                                            <a href="tivi?p=tu-15tr-20tr" data-href="tu-15tr-20tr" class="c-btnbox " data-id="338">T&#x1EEB; 15tr - 20tr</a>
                                            <a href="tivi?p=tu-20tr-30tr" data-href="tu-20tr-30tr" class="c-btnbox " data-id="574">T&#x1EEB; 20tr - 30tr</a>
                                            <a href="tivi?p=tu-30tr-50tr" data-href="tu-30tr-50tr" class="c-btnbox " data-id="710">T&#x1EEB; 30tr - 50tr</a>
                                            <a href="tivi?p=tu-50tr-85tr" data-href="tu-50tr-85tr" class="c-btnbox " data-id="711">T&#x1EEB; 50tr - 85tr</a>
                                            <a href="tivi?p=tren-85-trieu" data-href="tren-85-trieu" class="c-btnbox " data-id="576">Tr&#xEA;n 85 tri&#x1EC7;u</a>
                                        </div>
                                        <div class="price-slider text-active" data-activetxt="">
                                            <p class="range-toggle">
                                                <a href="javascript:;" onclick="loadPriceRangeSlider(this)">
                                                <i class="iconcate-range"></i>
                                                <span class="down">Hoặc chọn mức giá phù hợp với bạn</span>  
                                                </a>
                                            </p>
                                            <div class="container">
                                                <div class="row-input">
                                                    <form class="range-price">
                                                        <span class="range-left">
                                                        <input type="tel" maxlength="8" name="price-min-value" data-minvalue="5400000" value="5400">
                                                        <label class="place-holder">.000đ</label>
                                                        </span>
                                                        <span class="range-right">
                                                        <input type="tel" maxlength="8" name="price-max-value" data-maxvalue="900000000" value="900000">
                                                        <label class="place-holder">.000đ</label>
                                                        </span>
                                                    </form>
                                                </div>
                                                <div id="slider-range-total"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show-total-item  count-item">
                                        <p class="show-total-txt">K&#xED;ch c&#x1EE1; m&#xE0;n h&#xEC;nh</p>
                                        <div class="filter-list filter-list--kich-co-man-hinh  props">
                                            <a href="tivi?g=32-inch" data-smooth="0" data-id="43170" class="c-btnbox ">32 inch</a>
                                            <a href="tivi?g=40-inch" data-smooth="0" data-id="43356" class="c-btnbox ">40 inch</a>
                                            <a href="tivi?g=43-inch" data-smooth="0" data-id="43358" class="c-btnbox ">43 inch</a>
                                            <a href="tivi?g=48-inch" data-smooth="0" data-id="44869" class="c-btnbox ">48 inch</a>
                                            <a href="tivi?g=49-inch" data-smooth="0" data-id="45198" class="c-btnbox ">49 inch</a>
                                            <a href="tivi?g=50-inch" data-smooth="0" data-id="43361" class="c-btnbox ">50 inch</a>
                                            <a href="tivi?g=55-inch" data-smooth="0" data-id="43364" class="c-btnbox ">55 inch</a>
                                            <a href="tivi?g=58-inch" data-smooth="0" data-id="43365" class="c-btnbox ">58 inch</a>
                                            <a href="tivi?g=60-inch" data-smooth="0" data-id="43366" class="c-btnbox ">60 inch</a>
                                            <a href="tivi?g=65-inch" data-smooth="0" data-id="43367" class="c-btnbox ">65 inch</a>
                                            <a href="tivi?g=70-inch" data-smooth="0" data-id="43368" class="c-btnbox ">70 inch</a>
                                            <a href="tivi?g=75-inch" data-smooth="0" data-id="43369" class="c-btnbox ">75 inch</a>
                                            <a href="tivi?g=82-inch" data-smooth="0" data-id="70557" class="c-btnbox ">82 inch</a>
                                            <a href="tivi?g=85-inch" data-smooth="0" data-id="43372" class="c-btnbox ">85 inch</a>
                                            <a href="tivi?g=86-inch" data-smooth="0" data-id="56089" class="c-btnbox ">86 inch</a>
                                            <a href="tivi?g=99-inch" data-smooth="0" data-id="186269" class="c-btnbox ">99 inch</a>
                                            <a href="tivi?g=110-inch" data-smooth="0" data-id="186268" class="c-btnbox ">110 inch</a>
                                        </div>
                                    </div>
                                    <div class="show-total-item  count-item">
                                        <p class="show-total-txt">&#x110;&#x1ED9; ph&#xE2;n gi&#x1EA3;i</p>
                                        <div class="filter-list filter-list--do-phan-giai  props">
                                            <a href="tivi?g=ultra-hd-4k" data-smooth="0" data-id="43376" class="c-btnbox ">4K</a>
                                            <a href="tivi?g=full-hd" data-smooth="0" data-id="43171" class="c-btnbox ">Full HD</a>
                                            <a href="tivi?g=hd" data-smooth="0" data-id="43374" class="c-btnbox ">HD</a>
                                            <a href="tivi?g=8k" data-smooth="0" data-id="138328" class="c-btnbox ">8K</a>
                                        </div>
                                    </div>
                                    <div class="show-total-item  count-item">
                                        <p class="show-total-txt">Lo&#x1EA1;i Tivi</p>
                                        <div class="filter-list filter-list--loai-tivi  props">
                                            <a href="tivi?g=tivi-oled" data-smooth="0" data-id="45855" class="c-btnbox ">Tivi OLED</a>
                                            <a href="tivi?g=tivi-qled" data-smooth="0" data-id="63136" class="c-btnbox ">Tivi QLED</a>
                                            <a href="tivi?g=android-tivi" data-smooth="0" data-id="84816" class="c-btnbox ">Tivi Android</a>
                                            <a href="tivi-mini-led" data-smooth="1" data-id="192630" class="c-btnbox ">Tivi Mini LED</a>
                                            <a href="tivi-nanocell" data-smooth="1" data-id="168548" class="c-btnbox ">Tivi NanoCell</a>
                                            <a href="tivi-co-thiet-ke-dac-biet" data-smooth="1" data-id="170704" class="c-btnbox ">Tivi thi&#x1EBF;t k&#x1EBF; &#x111;&#x1EB7;c bi&#x1EC7;t</a>
                                            <a href="tivi?g=smart-tivi" data-smooth="0" data-id="45849" class="c-btnbox ">Smart Tivi</a>
                                        </div>
                                    </div>
                                    <div class="show-total-item  count-item">
                                        <p class="show-total-txt">Ti&#x1EC7;n &#xED;ch</p>
                                        <div class="filter-list filter-list--tien-ich  props">
                                            <a href="tivi-tim-kiem-bang-giong-noi-tieng-viet-ho-tro-3-mien-bac-trung-nam" data-smooth="1" data-id="56087" class="c-btnbox ">T&#xEC;m ki&#x1EBF;m b&#x1EB1;ng gi&#x1ECD;ng n&#xF3;i ti&#x1EBF;ng Vi&#x1EC7;t</a>
                                            <a href="tivi-tro-ly-ao-google-assistant" data-smooth="1" data-id="147716" class="c-btnbox ">Tr&#x1EE3; l&#xFD; &#x1EA3;o Google Assistant</a>
                                            <a href="tivi-co-dieu-khien-bang-giong-noi-khong-can-remote" data-smooth="1" data-id="168616" class="c-btnbox ">&#x110;.khi&#x1EC3;n gi&#x1ECD;ng n&#xF3;i kh&#xF4;ng Remote</a>
                                            <a href="tivi-chieu-man-hinh-qua-airplay-2" data-smooth="1" data-id="149366" class="c-btnbox ">Chi&#x1EBF;u m&#xE0;n h&#xEC;nh qua AirPlay 2</a>
                                            <a href="tivi-chieu-dien-thoai-len-tivi-khong-day" data-smooth="1" data-id="56086" class="c-btnbox ">Chi&#x1EBF;u &#x111;i&#x1EC7;n tho&#x1EA1;i l&#xEA;n TV (kh&#xF4;ng d&#xE2;y)</a>
                                            <a href="tivi?g=dieu-khien-bang-dien-thoai" data-smooth="0" data-id="56084" class="c-btnbox ">&#x110;i&#x1EC1;u khi&#x1EC3;n b&#x1EB1;ng &#x111;i&#x1EC7;n tho&#x1EA1;i</a>
                                            <a href="tivi-ket-noi-loa-qua-bluetooth" data-smooth="1" data-id="149367" class="c-btnbox ">K&#x1EBF;t n&#x1ED1;i loa qua Bluetooth</a>
                                            <a href="tivi-choi-game" data-smooth="1" data-id="56085" class="c-btnbox ">Ch&#x1A1;i game tr&#xEA;n tivi</a>
                                        </div>
                                    </div>
                                    <div class="show-total-item  hide">
                                        <p class="show-total-txt">N&#x103;m ra m&#x1EAF;t</p>
                                        <div class="filter-list filter-list--nam-ra-mat newyearFilter props">
                                            <a href="tivi-2022" data-smooth="1" data-id="215104" class="c-btnbox ">2022</a>
                                        </div>
                                    </div>
                                    <div class="show-total-item child-filter hide">
                                        <p class="show-total-txt">D&#xF2;ng tivi</p>
                                        <div class="filter-list filter-list--dong-tivi  props">
                                            <a href="tivi-neo-qled" data-smooth="1" data-id="191320" class="c-btnbox ">Neo QLED</a>
                                            <a href="tivi-bravia-xr-oled" data-smooth="1" data-id="191325" class="c-btnbox ">Bravia XR OLED</a>
                                            <a href="tivi-oled-evo" data-smooth="1" data-id="196793" class="c-btnbox ">OLED evo</a>
                                            <a href="tivi-qled" data-smooth="1" data-id="191321" class="c-btnbox ">QLED</a>
                                            <a href="tivi-bravia-xr-led" data-smooth="1" data-id="191326" class="c-btnbox ">Bravia XR LED</a>
                                            <a href="tivi-oled" data-smooth="1" data-id="196792" class="c-btnbox ">OLED</a>
                                            <a href="tivi-crystal-uhd" data-smooth="1" data-id="191322" class="c-btnbox ">Crystal UHD</a>
                                            <a href="tivi-qned" data-smooth="1" data-id="196791" class="c-btnbox ">QNED MiniLED</a>
                                            <a href="tivi-nanocell" data-smooth="1" data-id="191319" class="c-btnbox ">NanoCell</a>
                                            <a href="tivi-lifestyle" data-smooth="1" data-id="191324" class="c-btnbox ">Lifestyle</a>
                                            <a href="tivi-the-wall" data-smooth="1" data-id="191323" class="c-btnbox ">The Wall</a>
                                            <a href="tivi-uhd" data-smooth="1" data-id="196823" class="c-btnbox ">UHD</a>
                                        </div>
                                    </div>
                                    <div class="bg-whitefix"></div>
                                    <div class="filter-button filter-button--total">
                                        <a href="javascript:void(0)" class="btn-filter-close">Bỏ chọn</a>
                                        <a href="javascript:;" class="btn-filter-readmore">Xem <b class="total-reloading"></b> kết quả</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item block-manu ">
                            <div class="filter-item__title jsTitle">
                                <div class="arrow-filter"></div>
                                <span>Hãng</span>
                            </div>
                            <div class="filter-show">
                                <div class="filter-list filter-list--hang manu">
                                    <a href="tivi-sony" class="c-btnbox   filter-manu" data-href="sony" data-id="722" data-name="Sony">
                                    <img src="https://cdn.tgdd.vn/Brand/2/Sony1942-b_57.png" width="68" height="30" alt="Sony">
                                    </a>
                                    <a href="tivi-samsung" class="c-btnbox   filter-manu" data-href="samsung" data-id="2002" data-name="Samsung">
                                    <img src="https://cdn.tgdd.vn/Brand/2/Samsung1942-b_51.png" width="68" height="30" alt="Samsung">
                                    </a>
                                    <a href="tivi-lg" class="c-btnbox   filter-manu" data-href="lg" data-id="2003" data-name="LG">
                                    <img src="https://cdn.tgdd.vn/Brand/2/LG1942-b_16.png" width="68" height="30" alt="LG">
                                    </a>
                                    <a href="tivi-tcl" class="c-btnbox   filter-manu" data-href="tcl" data-id="2005" data-name="TCL">
                                    <img src="https://cdn.tgdd.vn/Brand/2/TCL1942-b_57.png" width="68" height="30" alt="TCL">
                                    </a>
                                    <a href="tivi-casper" class="c-btnbox   filter-manu" data-href="casper" data-id="19376" data-name="Casper">
                                    <img src="https://cdn.tgdd.vn/Brand/2/Casper1942-b_5.png" width="68" height="30" alt="Casper">
                                    </a>
                                    <a href="tivi-ffalcon" class="c-btnbox   filter-manu" data-href="ffalcon" data-id="19692" data-name="FFALCON">
                                    <img src="https://cdn.tgdd.vn/Brand/2/FFALCON1942-b_25.png" width="68" height="30" alt="FFALCON">
                                    </a>
                                    <a href="tivi-aqua" class="c-btnbox   filter-manu" data-href="aqua" data-id="24750" data-name="AQUA">
                                    <img src="https://cdn.tgdd.vn/Brand/2/Aqua1943-s34-135x80-1.png" width="68" height="30" alt="AQUA">
                                    </a>
                                </div>
                                <div class="filter-button ">
                                    <a href="javascript:void(0)" class="btn-filter-close">Bỏ chọn</a>
                                    <a href="#" class="btn-filter-readmore">Xem <b class="total-reloading"></b> kết quả</a>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item warpper-price-outside">
                            <div class="filter-item__title jsTitle">
                                <div class="arrow-filter"></div>
                                <span>Giá</span>
                            </div>
                            <div class="filter-show">
                                <div class="filter-list price">
                                    <a href="tivi?p=duoi-5-trieu" data-href="duoi-5-trieu" class="c-btnbox " data-id="333">D&#x1B0;&#x1EDB;i 5 tri&#x1EC7;u</a>
                                    <a href="tivi?p=tu-5tr-7tr" data-href="tu-5tr-7tr" class="c-btnbox " data-id="335">T&#x1EEB; 5tr - 7tr</a>
                                    <a href="tivi?p=tu-7tr-10tr" data-href="tu-7tr-10tr" class="c-btnbox " data-id="336">T&#x1EEB; 7tr - 10tr</a>
                                    <a href="tivi?p=tu-10tr-12tr" data-href="tu-10tr-12tr" class="c-btnbox " data-id="575">T&#x1EEB; 10tr - 12tr</a>
                                    <a href="tivi?p=tu-12tr-15tr" data-href="tu-12tr-15tr" class="c-btnbox " data-id="337">T&#x1EEB; 12tr - 15tr</a>
                                    <a href="tivi?p=tu-15tr-20tr" data-href="tu-15tr-20tr" class="c-btnbox " data-id="338">T&#x1EEB; 15tr - 20tr</a>
                                    <a href="tivi?p=tu-20tr-30tr" data-href="tu-20tr-30tr" class="c-btnbox " data-id="574">T&#x1EEB; 20tr - 30tr</a>
                                    <a href="tivi?p=tu-30tr-50tr" data-href="tu-30tr-50tr" class="c-btnbox " data-id="710">T&#x1EEB; 30tr - 50tr</a>
                                    <a href="tivi?p=tu-50tr-85tr" data-href="tu-50tr-85tr" class="c-btnbox " data-id="711">T&#x1EEB; 50tr - 85tr</a>
                                    <a href="tivi?p=tren-85-trieu" data-href="tren-85-trieu" class="c-btnbox " data-id="576">Tr&#xEA;n 85 tri&#x1EC7;u</a>
                                </div>
                                <div class="price-slider text-active" data-activetxt="">
                                    <p class="range-toggle">
                                        <a href="javascript:;" onclick="loadPriceRangeSlider(this)">
                                        <i class="iconcate-range"></i>
                                        <span class="down">Hoặc chọn mức giá phù hợp với bạn</span>  
                                        </a>
                                    </p>
                                    <div class="container">
                                        <div class="row-input">
                                            <form class="range-price">
                                                <span class="range-left">
                                                <input type="tel" maxlength="8" name="price-min-value" data-minvalue="5400000" value="5400">
                                                <label class="place-holder">.000đ</label>
                                                </span>
                                                <span class="range-right">
                                                <input type="tel" maxlength="8" name="price-max-value" data-maxvalue="900000000" value="900000">
                                                <label class="place-holder">.000đ</label>
                                                </span>
                                            </form>
                                        </div>
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                                <div class="filter-button">
                                    <a href="javascript:void(0)" class="btn-filter-close">Bỏ chọn</a>
                                    <a href="javascript:filterPros();" class="btn-filter-readmore">Xem <b class="total-reloading"></b> kết quả</a>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item " propertyID="6540">
                            <div class="filter-item__title jsTitle noselecttext" data-textorg="K&#xED;ch c&#x1EE1; m&#xE0;n h&#xEC;nh">
                                <div class="arrow-filter"></div>
                                <span>K&#xED;ch c&#x1EE1; m&#xE0;n h&#xEC;nh</span>
                            </div>
                            <div class="filter-show">
                                <div class="filter-list  props">
                                    <a href="tivi?g=32-inch" data-order="32" data-tooltip="" data-smooth="0" data-href="32-inch" data-id="43170" class="c-btnbox ">32 inch</a>
                                    <a href="tivi?g=40-inch" data-order="40" data-tooltip="" data-smooth="0" data-href="40-inch" data-id="43356" class="c-btnbox ">40 inch</a>
                                    <a href="tivi?g=43-inch" data-order="43" data-tooltip="" data-smooth="0" data-href="43-inch" data-id="43358" class="c-btnbox ">43 inch</a>
                                    <a href="tivi?g=48-inch" data-order="48" data-tooltip="" data-smooth="0" data-href="48-inch" data-id="44869" class="c-btnbox ">48 inch</a>
                                    <a href="tivi?g=49-inch" data-order="49" data-tooltip="" data-smooth="0" data-href="49-inch" data-id="45198" class="c-btnbox ">49 inch</a>
                                    <a href="tivi?g=50-inch" data-order="50" data-tooltip="" data-smooth="0" data-href="50-inch" data-id="43361" class="c-btnbox ">50 inch</a>
                                    <a href="tivi?g=55-inch" data-order="55" data-tooltip="" data-smooth="0" data-href="55-inch" data-id="43364" class="c-btnbox ">55 inch</a>
                                    <a href="tivi?g=58-inch" data-order="58" data-tooltip="" data-smooth="0" data-href="58-inch" data-id="43365" class="c-btnbox ">58 inch</a>
                                    <a href="tivi?g=60-inch" data-order="60" data-tooltip="" data-smooth="0" data-href="60-inch" data-id="43366" class="c-btnbox ">60 inch</a>
                                    <a href="tivi?g=65-inch" data-order="65" data-tooltip="" data-smooth="0" data-href="65-inch" data-id="43367" class="c-btnbox ">65 inch</a>
                                    <a href="tivi?g=70-inch" data-order="70" data-tooltip="" data-smooth="0" data-href="70-inch" data-id="43368" class="c-btnbox ">70 inch</a>
                                    <a href="tivi?g=75-inch" data-order="75" data-tooltip="" data-smooth="0" data-href="75-inch" data-id="43369" class="c-btnbox ">75 inch</a>
                                    <a href="tivi?g=82-inch" data-order="82" data-tooltip="" data-smooth="0" data-href="82-inch" data-id="70557" class="c-btnbox ">82 inch</a>
                                    <a href="tivi?g=85-inch" data-order="85" data-tooltip="" data-smooth="0" data-href="85-inch" data-id="43372" class="c-btnbox ">85 inch</a>
                                    <a href="tivi?g=86-inch" data-order="86" data-tooltip="" data-smooth="0" data-href="86-inch" data-id="56089" class="c-btnbox ">86 inch</a>
                                    <a href="tivi?g=99-inch" data-order="99" data-tooltip="" data-smooth="0" data-href="99-inch" data-id="186269" class="c-btnbox ">99 inch</a>
                                    <a href="tivi?g=110-inch" data-order="110" data-tooltip="" data-smooth="0" data-href="110-inch" data-id="186268" class="c-btnbox ">110 inch</a>
                                </div>
                                <div class="filter-button">
                                    <a href="javascript:void(0)" class="btn-filter-close">Bỏ chọn</a>
                                    <a href="javascript:filterPros();" class="btn-filter-readmore">Xem <b class="total-reloading"></b> kết quả</a>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item " propertyID="6541">
                            <div class="filter-item__title jsTitle noselecttext" data-textorg="&#x110;&#x1ED9; ph&#xE2;n gi&#x1EA3;i">
                                <div class="arrow-filter"></div>
                                <span>&#x110;&#x1ED9; ph&#xE2;n gi&#x1EA3;i</span>
                            </div>
                            <div class="filter-show">
                                <div class="filter-list  props">
                                    <a href="tivi?g=ultra-hd-4k" data-order="2" data-tooltip="" data-smooth="0" data-href="ultra-hd-4k" data-id="43376" class="c-btnbox ">4K</a>
                                    <a href="tivi?g=full-hd" data-order="3" data-tooltip="" data-smooth="0" data-href="full-hd" data-id="43171" class="c-btnbox ">Full HD</a>
                                    <a href="tivi?g=hd" data-order="4" data-tooltip="" data-smooth="0" data-href="hd" data-id="43374" class="c-btnbox ">HD</a>
                                    <a href="tivi?g=8k" data-order="6" data-tooltip="" data-smooth="0" data-href="8k" data-id="138328" class="c-btnbox ">8K</a>
                                </div>
                                <div class="filter-button">
                                    <a href="javascript:void(0)" class="btn-filter-close">Bỏ chọn</a>
                                    <a href="javascript:filterPros();" class="btn-filter-readmore">Xem <b class="total-reloading"></b> kết quả</a>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item " propertyID="7320">
                            <div class="filter-item__title jsTitle noselecttext" data-textorg="Lo&#x1EA1;i Tivi">
                                <div class="arrow-filter"></div>
                                <span>Lo&#x1EA1;i Tivi</span>
                            </div>
                            <div class="filter-show">
                                <div class="filter-list  props">
                                    <a href="tivi?g=tivi-oled" data-order="2" data-tooltip="" data-smooth="0" data-href="tivi-oled" data-id="45855" class="c-btnbox ">Tivi OLED</a>
                                    <a href="tivi?g=tivi-qled" data-order="3" data-tooltip="" data-smooth="0" data-href="tivi-qled" data-id="63136" class="c-btnbox ">Tivi QLED</a>
                                    <a href="tivi?g=android-tivi" data-order="4" data-tooltip="" data-smooth="0" data-href="android-tivi" data-id="84816" class="c-btnbox ">Tivi Android</a>
                                    <a href="tivi-mini-led" data-order="6" data-tooltip="" data-smooth="1" data-href="mini-led" data-id="192630" class="c-btnbox ">Tivi Mini LED</a>
                                    <a href="tivi-nanocell" data-order="11" data-tooltip="" data-smooth="1" data-href="nanocell" data-id="168548" class="c-btnbox ">Tivi NanoCell</a>
                                    <a href="tivi-co-thiet-ke-dac-biet" data-order="13" data-tooltip="" data-smooth="1" data-href="co-thiet-ke-dac-biet" data-id="170704" class="c-btnbox ">Tivi thi&#x1EBF;t k&#x1EBF; &#x111;&#x1EB7;c bi&#x1EC7;t</a>
                                    <a href="tivi?g=smart-tivi" data-order="16" data-tooltip="" data-smooth="0" data-href="smart-tivi" data-id="45849" class="c-btnbox ">Smart Tivi</a>
                                </div>
                                <div class="filter-button">
                                    <a href="javascript:void(0)" class="btn-filter-close">Bỏ chọn</a>
                                    <a href="javascript:filterPros();" class="btn-filter-readmore">Xem <b class="total-reloading"></b> kết quả</a>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item " propertyID="9499">
                            <div class="filter-item__title jsTitle noselecttext" data-textorg="Ti&#x1EC7;n &#xED;ch">
                                <div class="arrow-filter"></div>
                                <span>Ti&#x1EC7;n &#xED;ch</span>
                            </div>
                            <div class="filter-show">
                                <div class="filter-list  props">
                                    <a href="tivi-tim-kiem-bang-giong-noi-tieng-viet-ho-tro-3-mien-bac-trung-nam" data-order="1" data-tooltip="9499" data-smooth="1" data-href="tim-kiem-bang-giong-noi-tieng-viet-ho-tro-3-mien-bac-trung-nam" data-id="56087" class="c-btnbox ">T&#xEC;m ki&#x1EBF;m b&#x1EB1;ng gi&#x1ECD;ng n&#xF3;i ti&#x1EBF;ng Vi&#x1EC7;t</a>
                                    <a href="tivi-tro-ly-ao-google-assistant" data-order="2" data-tooltip="" data-smooth="1" data-href="tro-ly-ao-google-assistant" data-id="147716" class="c-btnbox ">Tr&#x1EE3; l&#xFD; &#x1EA3;o Google Assistant</a>
                                    <a href="tivi-co-dieu-khien-bang-giong-noi-khong-can-remote" data-order="3" data-tooltip="" data-smooth="1" data-href="co-dieu-khien-bang-giong-noi-khong-can-remote" data-id="168616" class="c-btnbox ">&#x110;.khi&#x1EC3;n gi&#x1ECD;ng n&#xF3;i kh&#xF4;ng Remote</a>
                                    <a href="tivi-chieu-man-hinh-qua-airplay-2" data-order="4" data-tooltip="" data-smooth="1" data-href="chieu-man-hinh-qua-airplay-2" data-id="149366" class="c-btnbox ">Chi&#x1EBF;u m&#xE0;n h&#xEC;nh qua AirPlay 2</a>
                                    <a href="tivi-chieu-dien-thoai-len-tivi-khong-day" data-order="5" data-tooltip="" data-smooth="1" data-href="chieu-dien-thoai-len-tivi-khong-day" data-id="56086" class="c-btnbox ">Chi&#x1EBF;u &#x111;i&#x1EC7;n tho&#x1EA1;i l&#xEA;n TV (kh&#xF4;ng d&#xE2;y)</a>
                                    <a href="tivi?g=dieu-khien-bang-dien-thoai" data-order="6" data-tooltip="" data-smooth="0" data-href="dieu-khien-bang-dien-thoai" data-id="56084" class="c-btnbox ">&#x110;i&#x1EC1;u khi&#x1EC3;n b&#x1EB1;ng &#x111;i&#x1EC7;n tho&#x1EA1;i</a>
                                    <a href="tivi-ket-noi-loa-qua-bluetooth" data-order="6" data-tooltip="" data-smooth="1" data-href="ket-noi-loa-qua-bluetooth" data-id="149367" class="c-btnbox ">K&#x1EBF;t n&#x1ED1;i loa qua Bluetooth</a>
                                    <a href="tivi-choi-game" data-order="7" data-tooltip="" data-smooth="1" data-href="choi-game" data-id="56085" class="c-btnbox ">Ch&#x1A1;i game tr&#xEA;n tivi</a>
                                </div>
                                <div class="filter-button">
                                    <a href="javascript:void(0)" class="btn-filter-close">Bỏ chọn</a>
                                    <a href="javascript:filterPros();" class="btn-filter-readmore">Xem <b class="total-reloading"></b> kết quả</a>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item  hide" propertyID="6989">
                            <div class="filter-item__title jsTitle noselecttext" data-textorg="N&#x103;m ra m&#x1EAF;t">
                                <div class="arrow-filter"></div>
                                <span>N&#x103;m ra m&#x1EAF;t</span>
                            </div>
                            <div class="filter-show">
                                <div class="filter-list newyearFilter props">
                                    <a href="tivi-2022" data-order="1" data-tooltip="" data-smooth="1" data-href="2022" data-id="215104" class="c-btnbox ">2022</a>
                                </div>
                                <div class="filter-button">
                                    <a href="javascript:void(0)" class="btn-filter-close">Bỏ chọn</a>
                                    <a href="javascript:filterPros();" class="btn-filter-readmore">Xem <b class="total-reloading"></b> kết quả</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-quicklink  block-scroll-main">
                    <div class="lst-quicklink ">
                        <p class="quick-link-title">Tìm kiếm nhiều: </p>
                        <a href="tivi-samsung" data-href="https://www.dienmayxanh.com/tivi-samsung" data-index="1" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="https://cdn.tgdd.vn/Category/Quicklink/1942/2\060521-035300.png" width="30" class=no-text>
                        </a>
                        <a href="tivi-sony" data-href="https://www.dienmayxanh.com/tivi-sony" data-index="2" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="https://cdn.tgdd.vn/Category/Quicklink/1942/2\060521-035255.png" width="30" class=no-text>
                        </a>
                        <a href="tivi-lg" data-href="https://www.dienmayxanh.com/tivi-lg" data-index="4" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="https://cdn.tgdd.vn/Category/Quicklink/1942/2\060521-061427.png" width="30" class=no-text>
                        </a>
                        <a href="tivi-tcl" data-href="https://www.dienmayxanh.com/tivi-tcl" data-index="5" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="https://cdn.tgdd.vn/Category/Quicklink/1942/2\310521-024603.png" width="30" class=no-text>
                        </a>
                        <a href="tivi-casper" data-href="https://www.dienmayxanh.com/tivi-casper" data-index="6" class="box-quicklink__item bd-radius quicklink-logo">
                        <img src="https://cdn.tgdd.vn/Category/Quicklink/1942/2\150621-044843.png" width="30" class=no-text>
                        </a>
                        <a href="tivi?p=duoi-5-trieu" data-href="https://www.dienmayxanh.com/tivi?p=duoi-5-trieu" data-index="7" class="box-quicklink__item bd-radius quicklink-logo">
                        D&#x1B0;&#x1EDB;i 5 tri&#x1EC7;u
                        </a>
                        <a href="tivi?g=43-inch" data-href="https://www.dienmayxanh.com/tivi?g=43-inch" data-index="8" class="box-quicklink__item bd-radius quicklink-logo">
                        TV 43 inch
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <section id="categoryPage" class="desktop" data-id="1942" data-name="Tivi" data-template="cate">
            <div class="box-sort ">
                <p class="sort-total"><b>153</b> Tivi <strong class="manu-sort"></strong></p>
                <div class="box-checkbox extend  ">
                    <a href="javascript:;" data-href="" data-type="sp2020" class="c-checkitem ">
                        <span class="tick-checkbox"></span>
                        <p>Giảm giá</p>
                    </a>
                    <a href="javascript:;" data-href="-tra-gop-0-phan-tram" data-type="installment0" class="c-checkitem ">
                        <span class="tick-checkbox"></span>
                        <p>Góp 0%</p>
                    </a>
                    <a href="javascript:;" data-href="" data-type="monopoly" class="c-checkitem">
                        <span class="tick-checkbox"></span>
                        <p>Độc quyền</p>
                    </a>
                    <a href="javascript:;" data-href="-moi" data-type="new" data-prop="6989" data-newv2="True" class="c-checkitem ">
                        <span class="tick-checkbox"></span>
                        <p>M&#x1EDB;i 2022</p>
                    </a>
                </div>
                <div class="sort-select ">
                    <p class="click-sort">Xếp theo: <span class="sort-show">N&#x1ED5;i b&#x1EAD;t</span></p>
                    <div class="sort-select-main sort ">
                        <p><a href="javascript:;" class="check" data-id="9"><i></i>Nổi bật</a></p>
                        <p><a href="javascript:;" class="" data-id="7"><i></i>Bán chạy</a></p>
                        <p><a href="javascript:;" class="" data-id="5"><i></i>% Giảm</a></p>
                        <p><a href="javascript:;" class="" data-id="3"><i></i>Giá cao đến thấp</a></p>
                        <p><a href="javascript:;" class="" data-id="2"><i></i>Giá thấp đến cao</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="container-productbox">
                <div id="preloader">
                    <div id="loader"></div>
                </div>
                <ul class="listproduct">
                    @if(count($data)>0)
                    @foreach($data as $value)
                    <li class=" item  __cate_1942" data-index="1" data-id="238784" data-issetup="1" data-maingroup="304" data-subgroup="1094" data-type="1" data-vehicle="2" data-productcode="3041094001252" data-price="20900000.0" data-ordertypeid="2" data-pos="1">
                        <a href='/{{ $value->Link }}' data-s="Nomal" data-site="2" data-pro="3" data-cache="True" data-sv="webdmx-26-94" data-name="Android Tivi Sony 4K 55 inch KD-55X80J" data-id="238784" data-price="20400000.0" data-brand="Sony" data-cate="Tivi" data-box="BoxCate" class="main-contain">
                            <div class="item-label">
                                <span class="lb-tragop">Trả góp 0%</span>
                            </div>
                            <div class="item-img item-img_1942">
                                <img class="lazyload thumb" data-src="{{ asset($value->Image) }}" alt="Sony Android TV KD-55X80J">
                            </div>
                            <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Giảm Sốc</span></p>
                            <h3 >
                                {{ $value->Name  }}
                            </h3>
                            <div class="item-compare ">
                                <span>55 inch</span>
                                <span>4K</span>
                            </div>
                            <!-- <div class="box-p">
                                <p class="price-old black">20.900.000&#x20AB;</p>
                            </div> -->
                            <strong class="price">{{ number_format($value->Price , 0, ',', '.')}}</strong>
                            <!-- <p class="item-gift">Quà <b>1.500.000₫</b></p> -->
                            <div class="item-rating">
                                <p>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </p>
                                <p class="item-rating-total">56</p>
                            </div>
                        </a>
                        <div class="item-bottom">
                            <a href="#" class="shiping"></a>
                        </div>
                        <a href="javascript:void(0)" class="item-ss">
                        <i></i>
                        So sánh
                        </a>
                    </li>
                    @endforeach
                    @endif
                </ul>
                <!-- <div class="view-more ">
                    <a href="javascript:;">Xem thêm <span class="remain">133</span> Tivi</a>
                </div> -->
            </div>
            <div class="popup-addsp">
                <div class="bg-popup"></div>
                <div class="close-popup" onclick="ClosePopup(this)">
                    <aside>
                        <i></i>
                        <span>Đóng</span>
                    </aside>
                </div>
                <div class="compare-popup">
                    <h4>Tivi đã xem gần nhất</h4>
                    <ul class="pro-compare pro-compare_viewed">
                    </ul>
                    <h4>Hoặc nhập tên để tìm</h4>
                    <form id="searchproductcompare" onsubmit="return false">
                        <div class="find-sp">
                            <input type="text" placeholder="Nhập tên tivi để tìm" onkeyup="SearchProductCompare(this)">
                            <i class="icon-findcp"></i>
                        </div>
                        <ul class="pro-compare pro-compare_search"></ul>
                    </form>
                </div>
            </div>
            <div class="errorcompare" style="display:none;"></div>
            <div class="block__banner banner__topzone">
                <a data-cate="0" data-place="1919" href="https://www.topzone.vn/" onclick="jQuery.ajax({ url: '/bannertracking?bid=48557&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2021/12/banner/Frame4879-1200x120.jpg" alt="Promote Topzone" width="1200" height="120"></a>
            </div>
            <div class="watched"></div>
            <div class="overlay"></div>
        </section>
        <div class="popup-button">
            <a href="javascript:;" onclick="showCompare()" id="ss-now">
            <i class="iconcate-ss"></i>
            <span>So sánh <label id="count-ss"></label></span>
            </a>
        </div>
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

        