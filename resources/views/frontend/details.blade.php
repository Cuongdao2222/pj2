


@extends('frontend.layouts.apps')

@section('content') 
        @push('style')
        <style type="text/css">
            
            @media screen and (max-width: 776px){
                section.detail {
                    width: 100% !important;
                     min-width: 100% !important;
                }  
                .box_left {
                    width: 100% !important;

                }  
                .prod-info.fix{
                    display: none !important;
                } 
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
        <section data-id="235791" data-cate-id="1942" class="detail ">
            <ul class="breadcrumb">
                <li>
                    <a href="/tivi">Tivi</a>
                    <meta property="position" content="1">
                </li>
                <li>
                    <span>›</span>
                    <a href="/tivi?g=smart-tivi">Smart Tivi</a>
                    <meta property="position" content="2">
                </li>
                <li>
                    <span>›</span>
                    <a href="/tivi-samsung?g=smart-tivi">Smart Tivi Samsung</a>
                    <meta property="position" content="3">
                </li>
            </ul>
            <h1>{{ $data->Name }}</h1>
            <div class="box02">
                <div class="box02__left">
                    
                    <div class="detail-rate">
                        <p>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star"></i>
                            <i class="icondetail-star-dark"></i>
                        </p>
                        <p class="detail-rate-total">72 <span>đánh giá</span></p>
                    </div>
                </div>
                <div class="box02__right" data-id="235791" data-href="/tivi/led-4k-samsung-ua50au8100" data-img="https://cdn.tgdd.vn/Products/Images/1942/235791/TimerThumb/led-4k-samsung-ua50au8100-(20).jpeg" data-name="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100">
                    <i class="icondetail-sosanh"></i>
                    So sánh
                </div>
            </div>
            <div class="like-fanpage" data-url="http://www.dienmayxanh.com/tivi/led-4k-samsung-ua50au8100"></div>
            <div class="box_main">
                <div class="box_left">
                    <div class="box01">
                        <div class="box01__show">
                            <div class="show-tab loading" data-gallery-id="featured-images-gallery" data-color-id="0">
                                <div class="detail-slider owl-carousel">
                                    <a href="javascript:void(0)" class="slider-item video-item" data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="211563" data-video-id="3TJP5iciTYg" data-index="0" data-time="0">
                                    <img src="https://cdn.tgdd.vn/Products/Images/1942/235791/Slider/led-4k-samsung-ua50au8100637733467923495830.jpg" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100" width="710" height="394" />
                                    <i class="icondetail-videoop iconvideo"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item " data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="174521" data-video-id="" data-index="1" data-time="0">
                                    <img class="owl-lazy" data-src="https://cdn.tgdd.vn/Products/Images/1942/235791/Slider/1-1020x571.jpg" width="710" height="394" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100" style="opacity:0;" />
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item video-item" data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="190193" data-video-id="" data-index="2" data-time="0">
                                        <video autoplay muted loop>
                                            <source src="https://cdn.tgdd.vn/Products/Images/235791/SAMSUNG - dynamic crystal color.mp4" type="video/mp4">
                                            Your browser does not support HTML video.
                                        </video>
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item " data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="190192" data-video-id="" data-index="3" data-time="0">
                                    <img class="owl-lazy" data-src="https://cdn.tgdd.vn/Products/Images/1942/235791/Slider/led-4k-samsung-ua50au8100-280721-0501480.png" width="710" height="394" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100" style="opacity:0;" />
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item video-item" data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="190194" data-video-id="" data-index="4" data-time="0">
                                        <video autoplay muted loop>
                                            <source src="https://cdn.tgdd.vn/Products/Images/235791/SAMSUNG - Crystal 4K.mp4" type="video/mp4">
                                            Your browser does not support HTML video.
                                        </video>
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item " data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="190196" data-video-id="" data-index="5" data-time="0">
                                    <img class="owl-lazy" data-src="https://cdn.tgdd.vn/Products/Images/1942/235791/Slider/led-4k-samsung-ua50au8100-280721-0502440.png" width="710" height="394" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100" style="opacity:0;" />
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item video-item" data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="190197" data-video-id="" data-index="6" data-time="0">
                                        <video autoplay muted loop>
                                            <source src="https://cdn.tgdd.vn/Products/Images/235791/Samsung - Q Symphony.mp4" type="video/mp4">
                                            Your browser does not support HTML video.
                                        </video>
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item " data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="190198" data-video-id="" data-index="7" data-time="0">
                                    <img class="owl-lazy" data-src="https://cdn.tgdd.vn/Products/Images/1942/235791/Slider/led-4k-samsung-ua50au8100-280721-0503180.png" width="710" height="394" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100" style="opacity:0;" />
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item " data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="174525" data-video-id="" data-index="8" data-time="0">
                                    <img class="owl-lazy" data-src="https://cdn.tgdd.vn/Products/Images/1942/235791/Slider/led-4k-samsung-ua50au8100-220521-1112062.png" width="710" height="394" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100" style="opacity:0;" />
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item " data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="174527" data-video-id="" data-index="9" data-time="0">
                                    <img class="owl-lazy" data-src="https://cdn.tgdd.vn/Products/Images/1942/235791/Slider/led-4k-samsung-ua50au8100-220521-1112064.png" width="710" height="394" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100" style="opacity:0;" />
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item " data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="196220" data-video-id="" data-index="10" data-time="0">
                                    <img class="owl-lazy" data-src="https://cdn.tgdd.vn/Products/Images/1942/235791/Slider/2-1020x571.jpg" width="710" height="394" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100" style="opacity:0;" />
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item " data-gallery-id="featured-images-gallery" data-color-id="0" data-picture-id="196221" data-video-id="" data-index="11" data-time="0">
                                    <img class="owl-lazy" data-src="https://cdn.tgdd.vn/Products/Images/1942/235791/Slider/led-4k-samsung-ua50au8100-130821-0942221.jpeg" width="710" height="394" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100" style="opacity:0;" />
                                    </a>
                                    <a href="javascript:void(0)" class="slider-item slider-policy" data-gallery-id="featured-images-gallery" data-color-id="0" data-index="12">
                                        <img class="owl-lazy" data-src="//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/bg_csmh_dmx-min.png?v=11" width="710" height="394" alt="Chính sách đổi trả" style="opacity:0;" />
                                        <img class="si-ghtn hide" data-src="//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/img_giaohang_dmx-min.png" alt="Giao hàng tận nhà nhanh chóng">
                                        <div></div>
                                    </a>
                                </div>
                                <div class="total-imgslider">
                                    <a id="show-popup-featured-images-gallery" style="display: block" href="javascript:void(0)" data-is-360-gallery="False" class="read-full" data-gallery-id="featured-images-gallery" data-color-id="0">Xem tất cả điểm nổi bật</a>
                                    
                                    <a class="note s7 hide" href="https://www.dienmayxanh.com/kinh-nghiem-hay/cac-cong-nghe-noi-bat-cua-tivi-samsung-20-1339340?src=slider#q-symphony" target="_blank"><span>Tìm hiểu:</span> Q-Symphony</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="scrolling_inner">
                            <div class="box01__tab scrolling">
                                <div id="thumb-featured-images-gallery-0"
                                    class="item itemTab active "
                                    data-gallery-id="featured-images-gallery"
                                    data-color-id="0"
                                    data-is-full-spec="False"
                                    data-color-order-id="0"
                                    data-isfeatureimage="True">
                                    <div class="item-border">
                                        <i class="icondetail-noibat"></i>
                                    </div>
                                    <p>&#x110;i&#x1EC3;m n&#x1ED5;i b&#x1EAD;t</p>
                                </div>
                                <div id="thumb-color-images-gallery-11"
                                    class="item itemTab  "
                                    data-gallery-id="color-images-gallery"
                                    data-color-id="11"
                                    data-is-full-spec="False"
                                    data-color-order-id="0"
                                    data-isfeatureimage="True">
                                    <div class="item-border">
                                        <img data-src="//cdn.tgdd.vn/Products/Images/1942/235791/led-4k-samsung-ua50au8100-1-180x120.jpg" alt="&#x110;en" width="41" height="41" loading="lazy" class="lazyload" />
                                    </div>
                                    <p>&#x110;en</p>
                                </div>
                                <div id="thumb-specification-gallery-0"
                                    class="item itemTab  is-show-popup"
                                    data-gallery-id="specification-gallery"
                                    data-color-id="0"
                                    data-is-full-spec="True"
                                    data-color-order-id="0"
                                    data-isfeatureimage="True">
                                    <div class="item-border">
                                        <i class="icondetail-thongso"></i>
                                    </div>
                                    <p>Th&#xF4;ng s&#x1ED1; k&#x1EF9; thu&#x1EAD;t</p>
                                </div>
                                <div id="thumb-article-gallery-0"
                                    class="item itemTab  is-show-popup"
                                    data-gallery-id="article-gallery"
                                    data-color-id="0"
                                    data-is-full-spec="False"
                                    data-color-order-id="0"
                                    data-isfeatureimage="True">
                                    <div class="item-border">
                                        <i class="icondetail-danhgia"></i>
                                    </div>
                                    <p>Th&#xF4;ng tin s&#x1EA3;n ph&#x1EA9;m</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="block-tab">
                        <div class="bt-overlay"></div>
                        <ul class="block-tab-top">
                            <li id="tab-featured-images-gallery-0"
                                class="tab-item active"
                                data-is-360-gallery="False"
                                data-gallery-id="featured-images-gallery"
                                data-color-id="0"
                                data-thump-name="&#x110;i&#x1EC3;m n&#x1ED5;i b&#x1EAD;t">
                                &#x110;i&#x1EC3;m n&#x1ED5;i b&#x1EAD;t
                            </li>
                            <li id="tab-color-images-gallery-11"
                                class="tab-item "
                                data-is-360-gallery="False"
                                data-gallery-id="color-images-gallery"
                                data-color-id="11"
                                data-thump-name="&#x110;en">
                                &#x110;en
                            </li>
                            <li id="tab-specification-gallery-0"
                                class="tab-item "
                                data-is-360-gallery="False"
                                data-gallery-id="specification-gallery"
                                data-color-id="0"
                                data-thump-name="Th&#xF4;ng s&#x1ED1; k&#x1EF9; thu&#x1EAD;t">
                                Th&#xF4;ng s&#x1ED1; k&#x1EF9; thu&#x1EAD;t
                            </li>
                            <li id="tab-article-gallery-0"
                                class="tab-item "
                                data-is-360-gallery="False"
                                data-gallery-id="article-gallery"
                                data-color-id="0"
                                data-thump-name="Th&#xF4;ng tin s&#x1EA3;n ph&#x1EA9;m">
                                Th&#xF4;ng tin s&#x1EA3;n ph&#x1EA9;m
                            </li>
                        </ul>
                        <div class="btn-closemenu close-tab">Đóng</div>
                        <div class="block-tab-content">
                            <div class="content-t active not-load-content" id="tab-content-featured-images-gallery-0">
                            </div>
                            <div class="content-t  not-load-content" id="tab-content-color-images-gallery-11">
                            </div>
                            <div class="content-t  not-load-content" id="tab-content-specification-gallery-0">
                            </div>
                            <div class="content-t  not-load-content" id="tab-content-article-gallery-0">
                            </div>
                        </div>
                    </div>
                    <div class="popup-overlay">
                        <div class="popup-overlay__popup-video-gallery">
                            <div class="close-popup"><i></i></div>
                            <div id="video-player"></div>
                        </div>
                    </div>
                    <span style="display: none;" id="show-popup-unbox-gallery" data-is-360-gallery="false" class="read-full" data-gallery-id="unbox-gallery" data-color-id="0"></span>
                    <span style="display: none;" id="show-popup-360-degree-gallery" data-is-360-gallery="true" class="read-full" data-gallery-id="360-degree-gallery" data-color-id="0"></span>
                    <span style="display: none;" id="show-popup-specification-gallery" data-is-360-gallery="false" class="read-full" data-gallery-id="specification-gallery" data-color-id="0"></span>
                    <span style="display: none;" id="show-popup-article-gallery" data-is-360-gallery="false" data-is-article-gallery="true" class="read-full" data-gallery-id="article-gallery" data-color-id="0"></span>
                    <div class="popup-video-rating">
                        <div class="popup-video-rating__content active">
                            <b class="popup-video-rating__content__title">Video có hữu ích cho việc mua hàng của bạn không?</b>
                            <span class="popup-video-rating__content_like-container popup-video-rating__content__action"><i class="iconvideorating-likeGlr"></i>Hữu ích</span>
                            <span class="popup-video-rating__content_dislike-container popup-video-rating__content__action"><i class="iconvideorating-unlikeGlr"></i>Không hữu ích</span>
                        </div>
                        <b class="popup-video-rating__thank-you">Cảm ơn bạn đã đánh giá video</b>
                    </div>
                    <div class="manu-info-popup">
                        <div class="manu-info-popup__content">
                            <span class="manu-info-popup__content__btn-close"></span>
                            <p class="manu-info-popup__content__title">
                                Giới thiệu về hãng
                                <img width="70" height="30" data-src="//cdn.tgdd.vn/Brand/2/Samsung1942-b_51.png" alt="Samsung" class="lazyload" />
                            </p>
                            <div class="manu-info-popup__content__desc">
                                <p>- Công ty TNHH Samsung Electronics Việt Nam được thành lập vào năm 2007.</p>
                                <p>- Samsung Electronics là một công ty công nghệ thông tin và điện tử đa quốc gia có trụ sở tại Suwon - Hàn Quốc.</p>
                                <p>- Các sản phẩm của Samsung đa dạng từ điện thoại đến các thiết bị gia dụng, điện tử như tivi, dàn âm thanh và còn có cả máy lạnh,...</p>
                                <p>- Tại Samsung, mọi hoạt động đều xuất phát từ lòng đam mê và cam kết không ngừng nghỉ đạt chất lượng hoàn hảo trong mọi sản phẩm và dịch vụ.</p>
                                <p>- Với thế mạnh là thương hiệu của tập đoàn toàn cầu, chất lượng của sản phẩm luôn đạt mức hoàn thiện cao nhất, chế độ bảo hành tốt nên được khách hàng tin tưởng trên toàn thế giới.<br />
                                    <a href="https://www.dienmayxanh.com/kinh-nghiem-hay/tivi-samsung-cua-nuoc-nao-co-tot-khong-1092599">Tìm hiểu thêm</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <script>
                        setTimeout(function () {
                            var tag = document.createElement('script');
                            tag.src = "https://www.youtube.com/iframe_api";
                            var firstScriptTag = document.getElementsByTagName('script')[0];
                            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                        }, 100);
                    </script>
                   <!--  <div class="policy_intuitive cate1942 scenarioNomal">
                        <div class="policy">
                            <ul class="policy__list">
                                <li>
                                    <div class="iconl">
                                        <i class="icondetail-doimoi"></i>
                                    </div>
                                    <p>
                                        Hư gì đổi nấy <b>12 tháng</b>  tận nhà (miễn phí tháng đầu) <a href="https://www.dienmayxanh.com/bao-hanh-doi-tra"></a>
                                        <a href="javascript:;" onclick="showPopupPolicy()" title="Chính sách đổi trả">
                                        Xem chi tiết
                                        </a>
                                    </p>
                                </li>
                                <li data-field="IsSameBHAndDT">
                                    <div class="iconl">
                                        <i class="icondetail-baohanh"></i>
                                    </div>
                                    <p>
                                        Bảo hành <b>chính hãng tivi 1 năm</b>, có người đến tận nhà
                                    </p>
                                </li>
                                <li>
                                    <div class="iconl"><i class="icondetail-sachhd"></i></div>
                                    <p>Thùng tivi có: Sách hướng dẫn, Remote, Chân đế</p>
                                </li>
                                <li>
                                    <div class='iconl'><i class='icondetail-baohanh'></i></div>
                                    <p>  Bảo hành Remote 1 năm</p>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    


                    <div class="wrap_wrtp hide" id="popup-materialsfee">
                        <div class="pop">
                        </div>
                    </div>
                    <div class="box-available"></div>
                    <div class="border7"></div>
                   
                    <div class="border7"></div>
                    <div class="border7"></div>
                   
                    <div class="content">
                        {!! $data->Detail !!}
                    </div>

                   
                    <div class="show-more">
                        <span>Đọc thêm</span>
                    </div>

                   

                    <div class="border7"></div>
                    
                </div>
                <div class="box_right">
                    
                    <div class="col-12 pdetail-des">
                        <div class="clearfix"></div>
                        <div>
                            <div class="pdetail-info">
                                <p>Model: <b>{{ @$data->ProductSku  }}</b></p>
                                <p>Bảo hành: <b>24 Tháng, 1 đổi 1 trong vòng 1 tháng</b></p>
                            </div>

                            <div class="scroll-box">
                                <div class="boxbanner-32">
                                    <div class="banner-list">
                                        <div class="item banner-item banner-item-1">
                                            <a target="&quot;_blank&quot;" href="https://mediamart.vn/khuyen-mai-tet" data-id="1022">
                                                <picture>
                                                   
                                                    <img src="https://thegioidohoacom.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2019/01/10040348/X4iNCOp-1024x454.jpg" alt="Tết Lớn Khuyến Mại Lớn" width="&quot;640&quot;" height="&quot;150&quot;">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="pdetail-price">
                                    <div class="pdetail-price-box">
                                        <h3>{{  str_replace(',' ,'.', number_format($data->Price))  }}₫</h3>
                                       
                                    </div>
                                    <!-- <div class="pdetail-promotion">
                                        
                                        <div class="pdetail-promotion-body">
                                            <ul>
                                                Tặng máy đánh trứng đa năng Roler RHM-1002 trị giá 790,000đ
                                                <li>Tặng eVoucher trị giá 200,000đ mua phụ kiện IT, phụ kiện Mobile (có giá trị sử dụng trong 07 ngày). Chi tiết xem <a href="https://mediamart.vn/tin-khuyen-mai/tang-voucher-tri-gia-200-000vnd-mua-cac-san-pham-phu-kien" target="_blank">tại đây</a>.</li>
                                                <li>TÀI TRỢ TRẢ GÓP 0% LÃI SUẤT (*)</li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="pdetail-status">
                                    <div class="pdetail-stockavailable">
                                        <span>CÒN HÀNG </span>
                                    </div>
                                    <div class="pdetail-add-to-cart add-to-cart">
                                        <form class="inline">
                                            <input type="hidden" name="productId" value="19439">
                                            <!-- <div class="product-quantity">
                                                <input type="text" class="quantity-field" readonly="readonly" name="qty" value="1">
                                            </div> -->
                                            <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart" onclick="addToCart({{ $data->id }})">MUA NGAY <br>(Giao hàng tận nơi - Giá tốt - An toàn)</button>
                                        </form>
                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Launch demo modal
                                        </button> -->
                                    </div>

                                    
                                    

                                    <div class="clearfix"></div>
                                    <div class="installment-purchase pdetail-installment">
                                        <a target="_blank" href="/tin-khuyen-mai/mua-hang-tra-gop-lai-suat-0-chi-co-tai-media-mart" admicro-data-event="101725" admicro-data-auto="1" admicro-data-order="false">
                                        <strong>TRẢ GÓP</strong>
                                        <br>
                                        (Công ty tài chính)
                                        </a>
                                        <a target="_blank" href="/cart/add-item/19439/?redirecturl=/installment-alepay" admicro-data-event="101725" admicro-data-auto="1" admicro-data-order="false">
                                        <strong>TRẢ GÓP QUA THẺ</strong>
                                        <br>
                                        (Visa, Master, JCB)
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                            </div>
                           
                        </div>
                    </div>
                    
                </div>
                
                <div class="border7"></div>
                <div class="related view-more-related">
                    <p class="related__ttl">Xem thêm tivi khác</p>
                    <div class="scrolling_inner">
                        <div class="box03 box03--nopadd scrolling">
                            <a href="/tivi-samsung" class="box03__item addradius">
                            <img class="lazyload" data-src="//cdn.tgdd.vn/Brand/2/Samsung1942-b_51.png" />
                            </a>
                            <a href="/tivi?p=tu-15tr-20tr" class="box03__item addradius">
                            T&#x1EEB; 15tr - 20tr                        </a>
                            <a href="/tivi-crystal-uhd" class="box03__item addradius">
                            Crystal UHD                        </a>
                            <a href="/tivi?g=smart-tivi" class="box03__item addradius">
                            Smart Tivi                        </a>
                            <a href="/tivi?g=50-inch" class="box03__item addradius">
                            50 inch                        </a>
                            <a href="/tivi?g=ultra-hd-4k" class="box03__item addradius">
                            4K                        </a>
                            <a href="/tivi-tro-ly-ao-google-assistant" class="box03__item addradius">
                            Tr&#x1EE3; l&#xFD; &#x1EA3;o Google Assistant                        </a>
                            <a href="/tivi-choi-game" class="box03__item addradius">
                            Ch&#x1A1;i game tr&#xEA;n tivi                        </a>
                        </div>
                    </div>
                    <div class="box-scroll p-slide">
                        <div class="listproduct owl-carousel" data-item="5">
                            <div class="item" data-id="235791">
                                <a href='/tivi/led-4k-samsung-ua50au8100?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/235791/TimerThumb/led-4k-samsung-ua50au8100-(20).jpeg" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100">
                                        <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-05.png" loading="lazy" class="lbliconimg lbliconimg_1942" />
                                    </div>
                                    <p class="txt01">Bạn đang xem:</p>
                                    <p class='result-label temp5'><img width='20' height='20' class='lazyload' alt='Tết 2022 Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Tết 2022 Giảm Sốc</span></p>
                                    <h3  title="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100">
                                        Samsung Smart TV Crystal UHD UA50AU8100
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <p class="item-txt-online">Online gia&#x301; re&#x309;</p>
                                    <div class="box-p">
                                        <p class="price-old black">18.900.000&#x20AB;</p>
                                        <span class="percent">-16%</span>
                                    </div>
                                    <strong class="price">15.690.000&#x20AB;</strong>
                                    <p class="item-gift">Quà <b>90.000₫</b></p>
                                    <div class="item-rating">
                                        <p>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                        </p>
                                        <p class="item-rating-total">72</p>
                                    </div>
                                </a>
                                <div class="item-bottom">
                                    <a href="#" class="shiping"></a>
                                </div>
                                <a href="javascript:void(0)" class="item-ss">
                                <i></i>
                                So sánh
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
                <div class="border7"></div>
                <div class="watched"></div>
              
            </div>
           
            <div class="errorcompare" style="display:none;"></div>
            
            <!--#endregion-->
            <!--#region BreadcrumbList-->
            
            <!--#endregion-->
            <!--#region Organization-->
           
            <!--#endregion-->
            <input type="hidden" id="DisPriceScenrioGTM" value="0.0" />
            <input type="hidden" id="PercentScenrioGTM" value="0" />
            <input type="hidden" id="PriceOriginGTM" value="18900000.0" />
            <input type="hidden" id="DisPriceGTM" value="15690000.0" />
            <input type="hidden" id="PercentGTM" value="16" />
            <input type="hidden" id="productReviewVideoGTM" value="Yes" />
            <input type="hidden" id="productAvailabilityGTM" value="Yes" />
            <input type="hidden" id="productCategoryGTM" value="Tivi" />
            <input type="hidden" id="productIsOLOLGTM" value="False" />
            <input type="hidden" id="productSiteGTM" value="2" />
            <script>
                window.dataLayer = window.dataLayer || [];
                dataLayer.push({ 'pageType':'Product','pagePlatform':'Web','pageCategoryLv1':'Tivi','pageCategoryLv2':'Smart Tivi','pageCategoryLv3':'Smart Tivi Samsung','pageStatus':'Kinh doanh'})
            </script>
        </section>
        <div class="loadingcover" id="dlding">
            <p class="csslder">
                <span class="csswrap">
                <span class="cssdot"></span>
                <span class="cssdot"></span>
                <span class="cssdot"></span>
                </span>
            </p>
        </div>
        <div class="overlay"></div>
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


        <!-- block show when  scroll -->

        <style type="text/css">
            .prod-info{
                position: fixed;
                top: 0;
                right: 0;
            }

            .txt_green {
                color: #ff0000;
            }

            .prod-info.fix {
                background: #fff;
                padding: 15px;
                border: 1px solid #ddd;
                width: 400px;
                z-index: 66;
            }

            .prod-info .promo {
                padding: 10px;
                border: 1px solid #ddd;
                position: relative;
            }

            .prod-info .promo .txt_b {
                position: absolute;
                left: 0;
                top: -15px;
                background: #fff;
                padding: 0 5px;
            }
            .txt_b {
                font-weight: bold;
            }
            .price{
                margin-bottom: 15px;
            }

            .name-scroll{
                font-size: 25px;
                font-weight: bold;
            }

            

        </style>

        <div class="prod-info txt_555 fix">

            <span class="name-scroll"> {{ $data->Name }} </span>

            <div class="vote" id="vote_avg">
              
              
                <div class="fl" style="padding:0 5px 0 0;">
                  Model: <span class="value txt_blue">{{ $data->ProductSku }}</span> | 
                  
                  Tình trạng: <span class="value txt_blue">Còn hàng</span> | 
                   </div>
              
              <a id="btn-vote" class="txt_555 fl" href="javascript:;" onclick="go_comm()"> Đánh giá: </a>
              
           
                <div class=" totalRate " id="js-total-rating" style="    display: inline-block;"><i class="icons icon-star star"><span></span></i></div>
                (<span class="reviewCount">0</span>)
            </div>
            <script src="/template/default/script/jquery.rating.js"></script>
                  
        <div class="prod-info-left fl">          
                
        <div class="space3px txt_555">Giá thị trường: <span class="txt_d">3.055.000đ</span></div>
                  
        <div class="price">Giá: 
            <span class="robot txt_green txt_b txt_20">2.350.000 ₫</span>
        </div>
          
        <div class="clear space3px"></div>
        
        <div class="clear space10px"></div>
              
        <div class="promo line_h19">
            <div class="txt_b">Khuyến mại</div>
            <p>-&nbsp;Cam kết sản phẩm mới 100%, nguyên đai nguyên kiện
            <br>-&nbsp;Bảo hành chính hãng&nbsp;1 năm
            <br>-&nbsp;Thùng có: Đĩa thủy tinh, Giá nướng
            <br>-&nbsp;Giao hàng miễn phí trong 30km
            <br>-&nbsp;Đền gấp 10 lần nếu không phải hàng chính hãng</p>
            
        </div>
          
         
  <div class="buy-group">
    
    
    <div class="clear space10px in">
     
        <a class="btn-buy txt_center cor5px" onclick="addToShoppingCart('pro','3036',document.getElementById('s_quantity').value,'2350000');" href="javascript:;">
            <i class="fa fa-shopping-cart"></i> <span class="txt_15">Thêm Vào Giỏ Hàng</span>
        </a>
        
    </div>
    
      Gọi đặt mua:  <span class="txt_b txt_red"><a href="tel:0967025111">0967 025 111</a></span> (7:30-22:00)<br>
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="txt_b txt_red"> <a href="tel:02438615111">02438 615 111</a></span> (7:30-17:30)
   </div>
    
    
        <div class="clear"></div>
    </div><!--//prod-info-left -->
  
  <div class="prod-info-right fr">
    <h4 class="format txt_13"><p class="format txt_b">Cam kết đặc biệt:</p></h4>
  
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Đền gấp 10 lần nếu không phải hàng chính hãng.</p></h5>
    <h5 class="format txt_13 txt_n">
      <p><i class="fa fa-check"></i> Gọi đặt mua: <span class="txt_b txt_red">0967 025 111</span> (cả dịp Lễ, Tết)</p></h5>
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Giao hàng miễn phí 30km</p></h5>
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Bảo hành chính hãng</p></h5>
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Đổi trả trong 3 ngày</p></h5>
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Bán &amp; giao hàng bởi điện máy ABC</p></h5>
  
    <div class="clear"></div>
</div><!--right-->
        
    <div class="clear"></div>
</div>

@push('style')

<style type="text/css">
            .fixed-button-buy{
                position: fixed;
                width: 23%;
                top: 0;
                z-index: 999;
            }

        </style>
<style type="text/css">
    .show-more span {
    width: 240px;
    display: block;
    overflow: hidden;
    position: relative;
    line-height: 40px;
    font-size: 14px;
    color: #288ad6;
    margin: 10px auto;
    cursor: pointer;
    border: 1px solid #288ad6;
    border-radius: 4px;
    text-align: center;
    transition: 0.6s ease-out;
    }
    .content img{
    width: 100%;
    }
    .content{
    height: 800px;
    overflow: hidden;
    }

    /*box right*/

    .pdetail-price h3 {
    float: left;
    font-size: 30px;
    font-weight: 600;
    color: #c5232b;
    margin: 0;
    padding-right: 15px;
    line-height: 36px;
    }

    .pdetail-price .product-price-saving {
    float: left;
    color: #b12704;
    line-height: 36px;
    margin-bottom: 0;
    }
    p {
    margin-top: 0;
    margin-bottom: 1rem;
    }

    .pdetail-promotion-title {
    background-color: #fef200;
    border-bottom: 1px solid #e8e9ea;
    padding: 10px 0 10px 15px;
    margin: 0;
    text-transform: uppercase;
    font-weight: bold;
    }

    .pdetail-promotion-body {
    padding: 15px 10px 8px 10px;
    }
    .pdetail-promotion-body>ul {
    padding: 0 0 0 15px;
    }
    .pdetail-stockavailable {
    margin: 10px 0;
    height: 21px;
    }

    .pdetail-stockavailable span {
    color: #218838;
    font-weight: bold;
    }
    .banner-item img {
    width: 100%;
    }

    


    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/details.css?v=1') }}">

    <style type="text/css">
            
        .bar-top-left{
            display: none !important;
        }

        
    </style>

@endpush



@push('script')
<!-- <script src="//cdn.tgdd.vn/mwgcart/mwgcore/js/bundle/globalDMX.min.v202201240310.js" type="text/javascript"></script> -->

       
        <script type="text/javascript">
            button_buy_height = $('.scroll-box').offset().top;
            view_more_height  = ($('.view-more-related').offset().top);

             $(".prod-info").hide();
                        
            $(".show-more span").bind("click", function(){
                $('.content').css({'height':'auto', 'overflow':'auto' });
                $(this).hide();
                view_more_height  = $('.view-more-related').offset().top-100;
            });

            $(function(){
                $(window).scroll(function(){
                    const scroll_result = $('.total-imgslider').offset().top
                    const scroll_browser = $(this).scrollTop();

                    if(scroll_browser>= scroll_result &&scroll_browser <= view_more_height){

                        $(".prod-info").show();
                        
                    }
                    else{
                        $(".prod-info").hide();
                    }

                });
            });

        </script>

      
        

        <script type="text/javascript">
            
            function addToCart(id) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "{{ route('cart') }}",
                    data: {
                        product_id: id,
                           
                    },
                    success: function(result){
                      
                       // numberCart = result.find("#number-product-cart").text();

                        $('#tbl_list_carts').append(result);

                        const numberCart = $('#number-product-cart').text();

                        $('.number-cart').text(numberCart);

                        $('#exampleModal').modal('show'); 
                        
                    }
                });
                
            }

           
        </script>

@endpush

@endsection  