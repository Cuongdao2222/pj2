
@extends('frontend.layouts.apps')

@section('content') 

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
                                    <a id="show-popup-featured-images-gallery" style="display: block" href="javascript:void(0)" data-is-360-gallery="False" class="read-full" data-gallery-id="featured-images-gallery" data-color-id="0">Xem t&#x1EA5;t c&#x1EA3; &#x111;i&#x1EC3;m n&#x1ED5;i b&#x1EAD;t</a>
                                    <div class="counter"></div>
                                    <a class="note s7 hide" href="https://www.dienmayxanh.com/kinh-nghiem-hay/cac-cong-nghe-noi-bat-cua-tivi-samsung-20-1339340?src=slider#q-symphony" target="_blank"><span>Tìm hiểu:</span> Q-Symphony</a>
                                </div>
                            </div>
                        </div>
                        <div class="scrolling_inner">
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
                        </div>
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
                    <div class="policy_intuitive cate1942 scenarioNomal">
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
                    </div>
                    <div class="wrap_wrtp dmx-popup" id="popup-baohanh">
                        <div class="pop">
                            <div class="hdpop dmx">
                                CH&#xCD;NH S&#xC1;CH B&#x1EA2;O H&#xC0;NH, &#x110;&#x1ED4;I TR&#x1EA2;
                                <a href="javascript:closePopWrt()" class="closehd">
                                <span>✖</span>
                                </a>
                            </div>
                            <div class="overscroll">
                                <div class="warranty-box">
                                    <h2 class="title">BẢO HÀNH CHÍNH HÃNG</h2>
                                    <span>
                                    Tivi 1 năm,  Bảo hành Remote 1 năm
                                    </span>
                                    <p><a target="_blank" href="/bao-hanh/samsung">Xem điểm bảo hành Samsung</a></p>
                                </div>
                                <div class="change-box">
                                    <h2 class="title">Chính sách đổi trả <span>Chỉ cần số điện thoại mua hàng, không cần giấy tờ.</span></h2>
                                    <div class="block-change">
                                        <h3 class="down" onclick="toggleBlock(this)">L&#x1ED7;i do nh&#xE0; s&#x1EA3;n xu&#x1EA5;t, Kh&#xE1;ch h&#xE0;ng ch&#x1ECD;n 1 trong 3 h&#xEC;nh th&#x1EE9;c</h3>
                                        <div class="content-insider show">
                                            <div>
                                                <p><strong>Bảo hành có cam kết trong 12 tháng (chỉ áp dụng cho sản phẩm chính, KHÔNG áp dụng cho phụ kiện kèm theo)</strong></p>
                                                <ul>
                                                    <li>Bảo hành trong vòng 15 ngày (từ lúc Khách hàng mang sản phẩm đến bảo hành đến lúc nhận lại sản phẩm tối đa 15 ngày).</li>
                                                    <li>Sản phẩm không bảo hành lại lần 2 trong 30 ngày kể từ ngày máy được bảo hành xong.</li>
                                                    <li>Nếu TGDD/ĐMX vi phạm cam kết (bảo hành quá 15 ngày hoặc phải bảo hành lại sản phẩm lần nữa trong 30 ngày kể từ lần bảo hành trước), Khách hàng được áp dụng phương thức <strong>Hư gì đổi nấy ngay và luôn</strong> hoặc <strong>Hoàn tiền</strong> với mức phí giảm 50%.</li>
                                                    <li>Từ tháng thứ 13 trở đi, không áp dụng bảo hành có cam kết, chỉ áp dụng bảo hành hãng nếu có.</li>
                                                </ul>
                                                <p><strong>Hư gì đổi nấy ngay & luôn </strong></p>
                                                <ul>
                                                    <li>Hư sản phẩm chính: Đổi sản phẩm mới (cùng model, cùng dung lượng, cùng màu sắc) miễn phí tháng đầu tiên, tháng thứ 2 đến tháng 12 chịu phí 10% hoá đơn/tháng. Nếu sản phẩm chính hết hàng thì áp dụng <strong>Bảo hành có cam kết</strong> hoặc <strong>Hoàn tiền</strong> với mức phí giảm 50%.</li>
                                                    <li>Hư phụ kiện đi kèm: Đổi miễn phí trong vòng 12 tháng kể từ ngày mua sản phẩm chính bằng hàng phụ kiện TGDĐ/ĐMX đang kinh doanh mới với công năng tương đương. Nếu không có phụ kiện tương đương hoặc Khách hàng không thích thì áp dụng bảo hành hãng</li>
                                                    <li>Lỗi phần mềm không áp dụng, mà chỉ khắc phục lỗi phần mềm.</li>
                                                    <li>Trường hợp Khách hàng muốn đổi full box (nguyên thùng, nguyên hộp): ngoài việc áp dụng mức phí đổi trả thì Khách hàng sẽ trả thêm phí lấy full box tương đương 20% giá trị hóa đơn.</li>
                                                </ul>
                                                <p><strong>Hoàn tiền</strong></p>
                                                <ul>
                                                    <li>Tháng đầu tiên kể từ ngày mua: phí 20% giá trị hóa đơn.</li>
                                                    <li>Tháng thứ 2 đến tháng thứ 12: phí 10% giá trị hóa đơn/tháng.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-change">
                                        <h3 class="" onclick="toggleBlock(this)">S&#x1EA3;n ph&#x1EA9;m kh&#xF4;ng l&#x1ED7;i</h3>
                                        <div class="content-insider ">
                                            <div>
                                                <p><strong>Khách hàng có thể trả hàng hoàn tiền:</strong></p>
                                                <ul>
                                                    <li>Tháng đầu tiên kể từ ngày mua: phí 20% giá trị hóa đơn.</li>
                                                    <li>Tháng thứ 2 đến tháng thứ 12: phí 10% giá trị hóa đơn/tháng.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-change">
                                        <h3 class="" onclick="toggleBlock(this)">S&#x1EA3;n ph&#x1EA9;m l&#x1ED7;i do ng&#x1B0;&#x1EDD;i d&#xF9;ng</h3>
                                        <div class="content-insider ">
                                            <div>
                                                <p>Không bảo hành, đổi trả. TGDD/ĐMX hỗ trợ gửi hãng bảo hành, Khách hàng trả phí sửa chữa.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="view-full">
                                        Xem đầy đủ: <a href="https://www.dienmayxanh.com/bao-hanh-doi-tra" target="_blank">Chính sách bảo hành đổi trả</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    
                    <div class="col-12 col-md-5 pdetail-des">
                        <div class="clearfix"></div>
                        <div>
                            <div class="pdetail-info">
                                <p>Model: <b>32F4000X</b> - Mã hàng: <b>702332</b></p>
                                <p>Bảo hành: <b>24 Tháng, 1 đổi 1 trong vòng 1 tháng</b> - Xuất xứ: <b>Indonesia</b></p>
                            </div>

                            <div class="scroll-box">
                                <div class="boxbanner-32">
                                    <div class="banner-list">
                                        <div class="item banner-item banner-item-1">
                                            <a target="&quot;_blank&quot;" href="https://mediamart.vn/khuyen-mai-tet" data-id="1022">
                                                <picture>
                                                    <source srcset="https://cdn.mediamart.vn/thumb/images/banner/tt-ln-khuyn-mi-ln_1e76d35a.webp" type="image/webp" media="(max-width: 420px)">
                                                    <source srcset="https://cdn.mediamart.vn/images/banner/tt-ln-khuyn-mi-ln_1e76d35a.webp" type="image/webp" media="(min-width: 420px)">
                                                    <source srcset="https://cdn.mediamart.vn/thumb/images/banner/tt-ln-khuyn-mi-ln_1e76d35a.jpg" type="image/jpeg" media="(max-width: 420px)">
                                                    <source srcset="https://cdn.mediamart.vn/images/banner/tt-ln-khuyn-mi-ln_1e76d35a.jpg" type="image/jpeg" media="(min-width: 420px)">
                                                    <img src="https://cdn.mediamart.vn/images/banner/tt-ln-khuyn-mi-ln_1e76d35a.jpg" alt="Tết Lớn Khuyến Mại Lớn" width="&quot;640&quot;" height="&quot;150&quot;">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="pdetail-price">
                                    <div class="pdetail-price-box">
                                        <h3>3.990.000 ₫</h3>
                                       
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
                                            <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart" admicro-data-event="101724" admicro-data-auto="1" admicro-data-order="false">MUA NGAY <br>(Giao hàng tận nơi - Giá tốt - An toàn)</button>
                                        </form>
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
                            <div class="item" data-id="235830">
                                <a href='/tivi/led-4k-samsung-ua50au9000?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/235830/TimerThumb/led-4k-samsung-ua50au9000-(12).jpg" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU9000">
                                    </div>
                                    <p class='result-label temp5'><img width='20' height='20' class='lazyload' alt='Tết 2022 Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Tết 2022 Giảm Sốc</span></p>
                                    <h3  title="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU9000">
                                        Samsung Smart TV Crystal UHD UA50AU9000
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <p class="item-txt-online">Online gia&#x301; re&#x309;</p>
                                    <div class="box-p">
                                        <p class="price-old black">19.400.000&#x20AB;</p>
                                        <span class="percent">-14%</span>
                                    </div>
                                    <strong class="price">16.600.000&#x20AB;</strong>
                                </a>
                                <div class="item-bottom">
                                    <a href="#" class="shiping"></a>
                                </div>
                                <a href="javascript:void(0)" class="item-ss">
                                <i></i>
                                So sánh
                                </a>
                            </div>
                            <div class="item" data-id="251859">
                                <a href='/tivi/smart-samsung-4k-50-inch-ua50au7700?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/251859/TimerThumb/smart-samsung-4k-50-inch-ua50au7700.jpg" alt="Smart Tivi Samsung 4K 50 inch UA50AU7700">
                                    </div>
                                    <p class='result-label temp5'><img width='20' height='20' class='lazyload' alt='Tết 2022 Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Tết 2022 Giảm Sốc</span></p>
                                    <h3  title="Smart Tivi Samsung 4K 50 inch UA50AU7700">
                                        Samsung Smart TV UA50AU7700
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <div class="box-p">
                                        <p class="price-old black">17.900.000&#x20AB;</p>
                                        <span class="percent">-13%</span>
                                    </div>
                                    <strong class="price">15.400.000&#x20AB;</strong>
                                </a>
                                <div class="item-bottom">
                                    <a href="#" class="shiping"></a>
                                </div>
                                <a href="javascript:void(0)" class="item-ss">
                                <i></i>
                                So sánh
                                </a>
                            </div>
                            <div class="item" data-id="235800">
                                <a href='/tivi/led-4k-samsung-ua50au7200?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/235800/TimerThumb/led-4k-samsung-ua50au7200-(12).jpg" alt="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU7200">
                                        <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-05.png" loading="lazy" class="lbliconimg lbliconimg_1942" />
                                    </div>
                                    <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Tết 2022 Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Tết 2022 Giảm Sốc</span></p>
                                    <h3  title="Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU7200">
                                        Samsung Smart TV Crystal UHD UA50AU7200
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <div class="box-p">
                                        <p class="price-old black">17.400.000&#x20AB;</p>
                                        <span class="percent">-14%</span>
                                    </div>
                                    <strong class="price">14.900.000&#x20AB;</strong>
                                </a>
                                <div class="item-bottom">
                                    <a href="#" class="shiping"></a>
                                </div>
                                <a href="javascript:void(0)" class="item-ss">
                                <i></i>
                                So sánh
                                </a>
                            </div>
                            <div class="item" data-id="235641">
                                <a href='/tivi/qled-4k-samsung-qa50q65a?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/235641/TimerThumb/qled-4k-samsung-qa50q65a-(19).jpg" alt="Smart Tivi QLED 4K 50 inch Samsung QA50Q65A">
                                        <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-05.png" loading="lazy" class="lbliconimg lbliconimg_1942" />
                                    </div>
                                    <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Tết 2022 Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Tết 2022 Giảm Sốc</span></p>
                                    <h3  title="Smart Tivi QLED 4K 50 inch Samsung QA50Q65A">
                                        Samsung Smart TV QLED QA50Q65A
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <p class="item-txt-online">Online gia&#x301; re&#x309;</p>
                                    <div class="box-p">
                                        <p class="price-old black">21.900.000&#x20AB;</p>
                                        <span class="percent">-21%</span>
                                    </div>
                                    <strong class="price">17.100.000&#x20AB;</strong>
                                    <div class="item-rating">
                                        <p>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                        </p>
                                        <p class="item-rating-total">81</p>
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
                            <div class="item" data-id="236887">
                                <a href='/tivi/led-lg-50up7750ptb?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/236887/TimerThumb/236887-(10).jpeg" alt="Smart Tivi LG 4K 50 inch 50UP7750PTB">
                                        <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-05.png" loading="lazy" class="lbliconimg lbliconimg_1942" />
                                    </div>
                                    <p class='result-label temp5'><img width='20' height='20' class='lazyload' alt='Tết 2022 Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Tết 2022 Giảm Sốc</span></p>
                                    <h3  title="Smart Tivi LG 4K 50 inch 50UP7750PTB">
                                        LG Smart TV 50UP7750PTB
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <div class="box-p">
                                        <p class="price-old black">18.900.000&#x20AB;</p>
                                        <span class="percent">-10%</span>
                                    </div>
                                    <strong class="price">16.900.000&#x20AB;</strong>
                                    <p class="item-gift">Quà <b>1.500.000₫</b></p>
                                    <div class="item-rating">
                                        <p>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                        </p>
                                        <p class="item-rating-total">23</p>
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
                            <div class="item" data-id="238782">
                                <a href='/tivi/led-sony-kd-50x80j?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/238782/TimerThumb/led-sony-kd-50x80j-(16).jpg" alt="Android Tivi Sony 4K 50 inch KD-50X80J">
                                    </div>
                                    <h3  title="Android Tivi Sony 4K 50 inch KD-50X80J">
                                        Sony Android TV KD-50X80J
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <div class="box-p">
                                        <p class="price-old black">18.400.000&#x20AB;</p>
                                        <span class="percent">-5%</span>
                                    </div>
                                    <strong class="price">17.400.000&#x20AB;</strong>
                                    <div class="item-rating">
                                        <p>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                        </p>
                                        <p class="item-rating-total">29</p>
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
                            <div class="item" data-id="236936">
                                <a href='/tivi/led-lg-50up7800ptb?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/236936/TimerThumb/led-lg-50up7800ptb.jpg" alt="Smart Tivi LG 4K 50 inch 50UP7800PTB">
                                        <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-05.png" loading="lazy" class="lbliconimg lbliconimg_1942" />
                                    </div>
                                    <p class='result-label temp5'><img width='20' height='20' class='lazyload' alt='Tết 2022 Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Tết 2022 Giảm Sốc</span></p>
                                    <h3  title="Smart Tivi LG 4K 50 inch 50UP7800PTB">
                                        LG Smart TV 50UP7800PTB
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <div class="box-p">
                                        <p class="price-old black">19.400.000&#x20AB;</p>
                                        <span class="percent">-10%</span>
                                    </div>
                                    <strong class="price">17.400.000&#x20AB;</strong>
                                    <p class="item-gift">Quà <b>1.500.000₫</b></p>
                                    <div class="item-rating">
                                        <p>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                        </p>
                                        <p class="item-rating-total">23</p>
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
                            <div class="item" data-id="235884">
                                <a href='/tivi/qled-4k-tcl-50q726?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/235884/TimerThumb/qled-4k-tcl-50q726-(15).jpg" alt="Android Tivi QLED TCL 4K 50 inch 50Q726">
                                        <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-05.png" loading="lazy" class="lbliconimg lbliconimg_1942" />
                                    </div>
                                    <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Tết 2022 Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Tết 2022 Giảm Sốc</span></p>
                                    <h3  title="Android Tivi QLED TCL 4K 50 inch 50Q726">
                                        TCL Android TV QLED 50Q726
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <div class="box-p">
                                        <p class="price-old black">17.990.000&#x20AB;</p>
                                        <span class="percent">-16%</span>
                                    </div>
                                    <strong class="price">14.990.000&#x20AB;</strong>
                                    <div class="item-rating">
                                        <p>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                        </p>
                                        <p class="item-rating-total">7</p>
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
                            <div class="item" data-id="236883">
                                <a href='/tivi/tv-led-lg-50up7550ptc?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/236883/TimerThumb/tv-led-lg-50up7550ptc-(14).jpg" alt="Smart Tivi LG 4K 50 inch 50UP7550PTC">
                                    </div>
                                    <p class='result-label temp5'><img width='20' height='20' class='lazyload' alt='Tết 2022 Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Tết 2022 Giảm Sốc</span></p>
                                    <h3  title="Smart Tivi LG 4K 50 inch 50UP7550PTC">
                                        LG Smart TV 50UP7550PTC
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <div class="box-p">
                                        <p class="price-old black">17.900.000&#x20AB;</p>
                                        <span class="percent">-5%</span>
                                    </div>
                                    <strong class="price">16.900.000&#x20AB;</strong>
                                    <p class="item-gift">Quà <b>2.000.000₫</b></p>
                                    <div class="item-rating">
                                        <p>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-dark"></i>
                                        </p>
                                        <p class="item-rating-total">23</p>
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
                            <div class="item" data-id="238721">
                                <a href='/tivi/led-sony-kd-50x75?src=osp&amp;itm_source=detail&amp;itm_medium=product_card&amp;itm_campaign=viewed' data-s="Nomal" data-site="2" data-pro="3" data-cache="True">
                                    <div class="item-label">
                                        <span class="lb-tragop">Tra&#x309; go&#x301;p 0%</span>
                                    </div>
                                    <div class="item-img 12321312312">
                                        <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/1942/238721/TimerThumb/led-sony-kd-50x75-(12).jpg" alt="Android Tivi Sony 4K 50 inch KD-50X75">
                                    </div>
                                    <h3  title="Android Tivi Sony 4K 50 inch KD-50X75">
                                        Sony Android TV KD-50X75
                                    </h3>
                                    <div class="item-compare">
                                        <span>50 inch</span>
                                        <span>4K</span>
                                    </div>
                                    <strong class="price">16.400.000&#x20AB;</strong>
                                    <div class="item-rating">
                                        <p>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                        </p>
                                        <p class="item-rating-total">224</p>
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
            <!--#region FAQComment-->
            <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","@id":"https://www.dienmayxanh.com/tivi/led-4k-samsung-ua50au8100#comment","url":"https://www.dienmayxanh.com/tivi/led-4k-samsung-ua50au8100","commentCount":10,"mainEntity":[{"@type":"Question","upvoteCount":0,"name":"Mua về treo tường có phát sinh phí gì thêm không bạn?","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào anh.Dạ khi mua sảm phẩm Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100 bên em hỗ trợ miễn phí công lắp đặt ạ. Nếu anh chưa có sẵn khung treo, anh có thể tham khảo thêm các sản phẩm Khung treo tivi hiện bên em đang hỗ trợ kinh doanh tại đây ạ. Nếu anh quan tâm tới sản phẩm anh có thể chọn “MUA NGAY” tại web sau đó điền đầy đủ các thông tin đặt hàng ạ.Thông tin đến anh. "}},{"@type":"Question","upvoteCount":0,"name":"E mới đặt hàng Hnay mai bên mình giao dịch đúng hẹn chứ ạ","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào chị. Dạ, chị vui lòng cho bên em xin thông tin số điện thoại đặt hàng bên em sẽ hỗ trợ kiểm tra giúp chị tốt hơn ạ.Mong phản hồi của chị. "}},{"@type":"Question","upvoteCount":0,"name":"Mình xài Mytv mà giờ muốn chuyển sang sử dụng ứng dụng truyền hình của tv thì bên mình có hỗ trợ chuyển đổi ko ạ","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào chị, Dạ em chưa hiểu ý chị lắm chị có thể nói rõ hơn để em hỗ trợ chị chính xác hơn chị nhéMong phản hồi từ chị"}},{"@type":"Question","upvoteCount":0,"name":"Samsung có gia hạn bảo hành khi hết thời gian bảo hành lần đầu không","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào anhDạ vấn đề này bên em chưa hỗ trợ ạ, anh có thể liên hệ hãng nhaThông tin đến anh! "}},{"@type":"Question","upvoteCount":0,"name":"Mua TV này về kết nối với mạng Wi-Fi là sử dụng được đúng ạ?","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào anhDạ mình cần kết nối wifi và cài một số ứng dụng ạ, nếu anh mua thì kĩ thuật viên bên em hỗ trợ anh vấn đề này anh nhéThông tin đến anh! "}},{"@type":"Question","upvoteCount":0,"name":"Ad ơi sao remod tìm bằng giọng nói mà nó bảo tìm k ra hoài vậy ad","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào anh! Dạ không biết khi anh tìm không được thì tivi có báo hay hiện gì lên không ạMong phản hồi từ anh! "}},{"@type":"Question","upvoteCount":0,"name":"Tại sao remod tivi lại nói tiếng việt nhưng lai ra tieng anh","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào anh !  Dạ anh có thể vào Youtube  ➜ chọn ô tìm kiếm ➜ để hiển thị bàn phím ➜ có biểu tượng hình \"quả địa cầu\" (phía dưới phím &123) ➜ chọn Tiếng Việt  là được anh nhé.Thông tin đến anh ! "}},{"@type":"Question","upvoteCount":0,"name":"Tivi lỗi wifi, gọi đt số kỹ thuật thì bảo mang đến hãng, gọi tổng đài hẹn có người liên hệ lại, liên hệ lại thì xin lỗi do bên kỹ thuật xử lý ko đúng và kêu cho kỹ thuật xuống, nay cũng nửa tháng rồi vẫn im ru ko thấy ai liên hệ. Ứa dễ sợ. Lần lần dịch vụ tệ ko thể chấp nhận đc","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào anh Dạ anh vui lòng cho em xin số điện thoại của mình bên em sẽ chuyển số điện thoại đến bộ phận khiếu nại sẽ có nhân viên hỗ trợ mình ạ Thông tin đến anh "}},{"@type":"Question","upvoteCount":0,"name":"Giờ e muốn trả góp mà e kg có cmnn nhưng e có cavet cmnn pho to được kg vậy qtv","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào anhDạ bên em trả góp sẽ cần tối thiểu CMND hoặc CCCD anh nhéThông tin đến anh! "}},{"@type":"Question","upvoteCount":0,"name":"Tivi của tôi bị lỗi cần bảo hành có báo bên điện máy xanh và tổng dài nói là đã tiếp nhận thông tin và cũng báo về bên bảo hành samsung. Bên đó cũng có điện nói là sẽ cử nhân viên kỹ thuật xuống bảo hành mà sao chưa thấy, 3 - 4 ngày nay rồi mà chưa thấy gì hết. Nản quá..","acceptedAnswer":{"@type":"Answer","upvoteCount":0,"text":"Chào anh \nBên em thành thật xin lỗi về vấn đề anh gặp phải, anh cho em xin số điện thoại (bảo mật, không hiện web) để hỗ trợ chuyển bộ phận chăm sóc khách hàng hỗ trợ anh ạ.Mong anh thông cảm.\nMong phản hồi từ anh"}}]}</script>
            <!--#endregion-->
            <!--#region Product-->
            <script type="application/ld+json" id="productld">{"@context":"https://schema.org","@type":"Product","name":"Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100","image":["https://cdn.tgdd.vn/Products/Images/1942/235791/TimerThumb/led-4k-samsung-ua50au8100-(20).jpeg"],"description":"Smart Tivi Samsung 4K 50 inch UA50AU8100 giá tốt, chính hãng, giao hàng tận nơi, nhiều quà tặng hấp dẫn, bảo hành chu đáo. Click xem ngay!","sku":"235791","mpn":"235791","brand":{"@type":"Brand","name":["Samsung"]},"review":[{"@type":"Review","author":{"@type":"Person","name":"HUỲNH THỊ MỸ DUYÊN"},"datePublished":"1/13/2022 8:34:17 AM: dd/MM/yyyy","reviewBody":"Mới nhận được sản phẩm rất vừa ý,hình ảnh sắc nét,nhân viên tư vấn vui vẻ,nhân viên lắp đặt nhanh gọn,nhiệt tình","image":null,"reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":4.0}},{"@type":"Review","author":{"@type":"Person","name":"Nguyễn Phương"},"datePublished":"12/1/2021 11:13:15 AM: dd/MM/yyyy","reviewBody":"Mới mua về nhưng rmote không nhận âm thanh. Không nhận được phiếu tặng mua hàng 300k. Còn tất cả đều ổn","image":null,"reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":3.0}}],"aggregateRating":{"@type":"AggregateRating","bestRating":5,"worstRating":1,"ratingValue":4.4,"ratingCount":72},"additionalProperty":[{"@type":"PropertyValue","name":"Loại Tivi","value":"Smart Tivi"},{"@type":"PropertyValue","name":"Kích cỡ màn hình","value":"50 inch"},{"@type":"PropertyValue","name":"Độ phân giải","value":"4K"},{"@type":"PropertyValue","name":"Loại màn hình","value":"<a href='https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-den-nen-tren-tivi-1359234#edge-led' target='_blank'>LED viền (Edge LED)</a>, <a href='https://www.dienmayxanh.com/kinh-nghiem-hay/tam-nen-ips-va-va-tn-la-gi-uu-nhuoc-diem-1284622#tam-nen-va' target='_blank'>VA LCD</a>"},{"@type":"PropertyValue","name":"Công nghệ hình ảnh","value":"Ambient Mode"},{"@type":"PropertyValue","name":"Tần số quét thực","value":"60 Hz"},{"@type":"PropertyValue","name":"Công nghệ âm thanh","value":"Adaptive Sound"},{"@type":"PropertyValue","name":"Tổng công suất loa","value":"20W"},{"@type":"PropertyValue","name":"Hệ điều hành","value":"Tizen OS 6.0"},{"@type":"PropertyValue","name":"Ứng dụng phổ biến","value":"Clip TV"},{"@type":"PropertyValue","name":"Điều khiển bằng giọng nói","value":"Bixby (Chưa có tiếng Việt)"},{"@type":"PropertyValue","name":"Chiếu hình từ điện thoại lên TV","value":"AirPlay 2"},{"@type":"PropertyValue","name":"Remote thông minh","value":"One Remote"},{"@type":"PropertyValue","name":"Điều khiển tivi bằng điện thoại","value":"SmartThings"},{"@type":"PropertyValue","name":"Tiện ích thông minh khác","value":"Chế độ máy tính PC trên tivi"},{"@type":"PropertyValue","name":"Kết nối Internet","value":"Cổng mạng LAN"},{"@type":"PropertyValue","name":"Kết nối không dây","value":"Bluetooth (Kết nối loa, thiết bị di động)"},{"@type":"PropertyValue","name":"USB","value":"2 cổng USB A"},{"@type":"PropertyValue","name":"Cổng nhận hình ảnh, âm thanh","value":"1 cổng Composite"},{"@type":"PropertyValue","name":"HDMI","value":"3 cổng HDMI"},{"@type":"PropertyValue","name":"Cổng xuất âm thanh","value":"1 cổng Optical (Digital Audio), 1 cổng eARC (ARC)"},{"@type":"PropertyValue","name":"Kích thước có chân, đặt bàn","value":"Ngang 111.8 cm - Cao 70.2 cm - Dày 22.8 cm"},{"@type":"PropertyValue","name":"Khối lượng có chân","value":"12.2 kg"},{"@type":"PropertyValue","name":"Kích thước không chân, treo tường","value":"Ngang 111.8 cm - Cao 64.4 cm - Dày 2.5 cm"},{"@type":"PropertyValue","name":"Khối lượng không chân","value":"11.5 kg"},{"@type":"PropertyValue","name":"Nơi sản xuất","value":"Việt Nam"},{"@type":"PropertyValue","name":"Chất liệu viền tivi","value":"Nhựa"},{"@type":"PropertyValue","name":"Chất liệu chân đế","value":"Nhựa"},{"@type":"PropertyValue","name":"Năm ra mắt","value":"2021"},{"@type":"PropertyValue","name":"Hãng","value":"Samsung. <span class='parameter__manu'>Xem thông tin hãng</span>"}],"offers":{"@type":"Offer","url":"https://www.dienmayxanh.com/tivi/led-4k-samsung-ua50au8100","priceCurrency":"VND","price":15690000.0,"priceValidUntil":"03/02/2022","itemCondition":"https://schema.org/NewCondition","availability":"https://schema.org/InStock","seller":{"@id":"https://www.dienmayxanh.com/#Organization"}}}</script>
            <input type="hidden" id="jsonProductGTM" value="{&quot;@context&quot;:&quot;https://schema.org&quot;,&quot;@type&quot;:&quot;Product&quot;,&quot;name&quot;:&quot;Smart Tivi Samsung 4K Crystal UHD 50 inch UA50AU8100&quot;,&quot;image&quot;:[&quot;https://cdn.tgdd.vn/Products/Images/1942/235791/TimerThumb/led-4k-samsung-ua50au8100-(20).jpeg&quot;],&quot;description&quot;:&quot;Smart Tivi Samsung 4K 50 inch UA50AU8100 gi&#xE1; t&#x1ED1;t, ch&#xED;nh h&#xE3;ng, giao h&#xE0;ng t&#x1EAD;n n&#x1A1;i, nhi&#x1EC1;u qu&#xE0; t&#x1EB7;ng h&#x1EA5;p d&#x1EAB;n, b&#x1EA3;o h&#xE0;nh chu &#x111;&#xE1;o. Click xem ngay!&quot;,&quot;sku&quot;:&quot;235791&quot;,&quot;mpn&quot;:&quot;235791&quot;,&quot;brand&quot;:{&quot;@type&quot;:&quot;Brand&quot;,&quot;name&quot;:[&quot;Samsung&quot;]},&quot;review&quot;:[{&quot;@type&quot;:&quot;Review&quot;,&quot;author&quot;:{&quot;@type&quot;:&quot;Person&quot;,&quot;name&quot;:&quot;HU&#x1EF2;NH TH&#x1ECA; M&#x1EF8; DUY&#xCA;N&quot;},&quot;datePublished&quot;:&quot;1/13/2022 8:34:17 AM: dd/MM/yyyy&quot;,&quot;reviewBody&quot;:&quot;M&#x1EDB;i nh&#x1EAD;n &#x111;&#x1B0;&#x1EE3;c s&#x1EA3;n ph&#x1EA9;m r&#x1EA5;t v&#x1EEB;a &#xFD;,h&#xEC;nh &#x1EA3;nh s&#x1EAF;c n&#xE9;t,nh&#xE2;n vi&#xEA;n t&#x1B0; v&#x1EA5;n vui v&#x1EBB;,nh&#xE2;n vi&#xEA;n l&#x1EAF;p &#x111;&#x1EB7;t nhanh g&#x1ECD;n,nhi&#x1EC7;t t&#xEC;nh&quot;,&quot;image&quot;:null,&quot;reviewRating&quot;:{&quot;@type&quot;:&quot;Rating&quot;,&quot;bestRating&quot;:5,&quot;ratingValue&quot;:4.0}},{&quot;@type&quot;:&quot;Review&quot;,&quot;author&quot;:{&quot;@type&quot;:&quot;Person&quot;,&quot;name&quot;:&quot;Nguy&#x1EC5;n Ph&#x1B0;&#x1A1;ng&quot;},&quot;datePublished&quot;:&quot;12/1/2021 11:13:15 AM: dd/MM/yyyy&quot;,&quot;reviewBody&quot;:&quot;M&#x1EDB;i mua v&#x1EC1; nh&#x1B0;ng rmote kh&#xF4;ng nh&#x1EAD;n &#xE2;m thanh. Kh&#xF4;ng nh&#x1EAD;n &#x111;&#x1B0;&#x1EE3;c phi&#x1EBF;u t&#x1EB7;ng mua h&#xE0;ng 300k. C&#xF2;n t&#x1EA5;t c&#x1EA3; &#x111;&#x1EC1;u &#x1ED5;n&quot;,&quot;image&quot;:null,&quot;reviewRating&quot;:{&quot;@type&quot;:&quot;Rating&quot;,&quot;bestRating&quot;:5,&quot;ratingValue&quot;:3.0}}],&quot;aggregateRating&quot;:{&quot;@type&quot;:&quot;AggregateRating&quot;,&quot;bestRating&quot;:5,&quot;worstRating&quot;:1,&quot;ratingValue&quot;:4.4,&quot;ratingCount&quot;:72},&quot;additionalProperty&quot;:[{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;Lo&#x1EA1;i Tivi&quot;,&quot;value&quot;:&quot;Smart Tivi&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;K&#xED;ch c&#x1EE1; m&#xE0;n h&#xEC;nh&quot;,&quot;value&quot;:&quot;50 inch&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;&#x110;&#x1ED9; ph&#xE2;n gi&#x1EA3;i&quot;,&quot;value&quot;:&quot;4K&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;Lo&#x1EA1;i m&#xE0;n h&#xEC;nh&quot;,&quot;value&quot;:&quot;&lt;a href=&#x27;https://www.dienmayxanh.com/kinh-nghiem-hay/tong-hop-cac-cong-nghe-den-nen-tren-tivi-1359234#edge-led&#x27; target=&#x27;_blank&#x27;&gt;LED vi&#x1EC1;n (Edge LED)&lt;/a&gt;, &lt;a href=&#x27;https://www.dienmayxanh.com/kinh-nghiem-hay/tam-nen-ips-va-va-tn-la-gi-uu-nhuoc-diem-1284622#tam-nen-va&#x27; target=&#x27;_blank&#x27;&gt;VA LCD&lt;/a&gt;&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;C&#xF4;ng ngh&#x1EC7; h&#xEC;nh &#x1EA3;nh&quot;,&quot;value&quot;:&quot;Ambient Mode&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;T&#x1EA7;n s&#x1ED1; qu&#xE9;t th&#x1EF1;c&quot;,&quot;value&quot;:&quot;60 Hz&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;C&#xF4;ng ngh&#x1EC7; &#xE2;m thanh&quot;,&quot;value&quot;:&quot;Adaptive Sound&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;T&#x1ED5;ng c&#xF4;ng su&#x1EA5;t loa&quot;,&quot;value&quot;:&quot;20W&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;H&#x1EC7; &#x111;i&#x1EC1;u h&#xE0;nh&quot;,&quot;value&quot;:&quot;Tizen OS 6.0&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;&#x1EE8;ng d&#x1EE5;ng ph&#x1ED5; bi&#x1EBF;n&quot;,&quot;value&quot;:&quot;Clip TV&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;&#x110;i&#x1EC1;u khi&#x1EC3;n b&#x1EB1;ng gi&#x1ECD;ng n&#xF3;i&quot;,&quot;value&quot;:&quot;Bixby (Ch&#x1B0;a c&#xF3; ti&#x1EBF;ng Vi&#x1EC7;t)&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;Chi&#x1EBF;u h&#xEC;nh t&#x1EEB; &#x111;i&#x1EC7;n tho&#x1EA1;i l&#xEA;n TV&quot;,&quot;value&quot;:&quot;AirPlay 2&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;Remote th&#xF4;ng minh&quot;,&quot;value&quot;:&quot;One Remote&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;&#x110;i&#x1EC1;u khi&#x1EC3;n tivi b&#x1EB1;ng &#x111;i&#x1EC7;n tho&#x1EA1;i&quot;,&quot;value&quot;:&quot;SmartThings&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;Ti&#x1EC7;n &#xED;ch th&#xF4;ng minh kh&#xE1;c&quot;,&quot;value&quot;:&quot;Ch&#x1EBF; &#x111;&#x1ED9; m&#xE1;y t&#xED;nh PC tr&#xEA;n tivi&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;K&#x1EBF;t n&#x1ED1;i Internet&quot;,&quot;value&quot;:&quot;C&#x1ED5;ng m&#x1EA1;ng LAN&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;K&#x1EBF;t n&#x1ED1;i kh&#xF4;ng d&#xE2;y&quot;,&quot;value&quot;:&quot;Bluetooth (K&#x1EBF;t n&#x1ED1;i loa, thi&#x1EBF;t b&#x1ECB; di &#x111;&#x1ED9;ng)&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;USB&quot;,&quot;value&quot;:&quot;2 c&#x1ED5;ng USB A&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;C&#x1ED5;ng nh&#x1EAD;n h&#xEC;nh &#x1EA3;nh, &#xE2;m thanh&quot;,&quot;value&quot;:&quot;1 c&#x1ED5;ng Composite&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;HDMI&quot;,&quot;value&quot;:&quot;3 c&#x1ED5;ng HDMI&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;C&#x1ED5;ng xu&#x1EA5;t &#xE2;m thanh&quot;,&quot;value&quot;:&quot;1 c&#x1ED5;ng Optical (Digital Audio), 1 c&#x1ED5;ng eARC (ARC)&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;K&#xED;ch th&#x1B0;&#x1EDB;c c&#xF3; ch&#xE2;n, &#x111;&#x1EB7;t b&#xE0;n&quot;,&quot;value&quot;:&quot;Ngang 111.8 cm - Cao 70.2 cm - D&#xE0;y 22.8 cm&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;Kh&#x1ED1;i l&#x1B0;&#x1EE3;ng c&#xF3; ch&#xE2;n&quot;,&quot;value&quot;:&quot;12.2 kg&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;K&#xED;ch th&#x1B0;&#x1EDB;c kh&#xF4;ng ch&#xE2;n, treo t&#x1B0;&#x1EDD;ng&quot;,&quot;value&quot;:&quot;Ngang 111.8 cm - Cao 64.4 cm - D&#xE0;y 2.5 cm&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;Kh&#x1ED1;i l&#x1B0;&#x1EE3;ng kh&#xF4;ng ch&#xE2;n&quot;,&quot;value&quot;:&quot;11.5 kg&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;N&#x1A1;i s&#x1EA3;n xu&#x1EA5;t&quot;,&quot;value&quot;:&quot;Vi&#x1EC7;t Nam&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;Ch&#x1EA5;t li&#x1EC7;u vi&#x1EC1;n tivi&quot;,&quot;value&quot;:&quot;Nh&#x1EF1;a&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;Ch&#x1EA5;t li&#x1EC7;u ch&#xE2;n &#x111;&#x1EBF;&quot;,&quot;value&quot;:&quot;Nh&#x1EF1;a&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;N&#x103;m ra m&#x1EAF;t&quot;,&quot;value&quot;:&quot;2021&quot;},{&quot;@type&quot;:&quot;PropertyValue&quot;,&quot;name&quot;:&quot;H&#xE3;ng&quot;,&quot;value&quot;:&quot;Samsung. &lt;span class=&#x27;parameter__manu&#x27;&gt;Xem th&#xF4;ng tin h&#xE3;ng&lt;/span&gt;&quot;}],&quot;offers&quot;:{&quot;@type&quot;:&quot;Offer&quot;,&quot;url&quot;:&quot;https://www.dienmayxanh.com/tivi/led-4k-samsung-ua50au8100&quot;,&quot;priceCurrency&quot;:&quot;VND&quot;,&quot;price&quot;:15690000.0,&quot;priceValidUntil&quot;:&quot;03/02/2022&quot;,&quot;itemCondition&quot;:&quot;https://schema.org/NewCondition&quot;,&quot;availability&quot;:&quot;https://schema.org/InStock&quot;,&quot;seller&quot;:{&quot;@id&quot;:&quot;https://www.dienmayxanh.com/#Organization&quot;}}}" />
            <!--#endregion-->
            <!--#region BreadcrumbList-->
            <script type="application/ld+json" id="breadcrumb">{"@type":"BreadcrumbList","@context":"https://schema.org","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://www.dienmayxanh.com","name":"Điện Máy Xanh"}},{"@type":"ListItem","position":2,"item":{"@id":"https://www.dienmayxanh.com/tivi","name":"Tivi"}},{"@type":"ListItem","position":3,"item":{"@id":"https://www.dienmayxanh.com/tivi?g=smart-tivi","name":"Smart Tivi"}},{"@type":"ListItem","position":4,"item":{"@id":"https://www.dienmayxanh.com/tivi-samsung?g=smart-tivi","name":"Smart Tivi Samsung"}}]}</script>
            <!--#endregion-->
            <!--#region Video-->
            <script type="application/ld+json">{"@context":"http://schema.org","@type":"VideoObject","name":"Smart TV Samsung 4K 60 inch: Thiết kế siêu mỏng, xem sướng mắt (UA60AU8100) • Điện máy XANH","description":"GIÁ BÁN: 23.400.000 VND \n(Mua online giảm sốc cập nhật 03/12/2021)\n\nSmart Tivi Samsung 4K Crystal UHD 60 inch UA60AU8100 là dòng Tivi tầm trung mới được Samsung ra mắt trong năm 2021 sở hữu thiết kế siêu mỏng AirSlim. TV được trang bị nhiều công nghệ cao cấp như bộ xử lý Crystal 4K, Dynamic Crystal Color, HDR hỗ trợ các định dạng HDR10+ và HLG. TV còn hỗ trợ nhiều kết nối phổ biến như AirPlay 2, SmartView, Screen Mirroring nên hầu hết các thiết bị hiện nay như iPhone, điện thoại Android, laptop Windows, MacBook đều có thể chiếu hình ảnh lên TV.\n\n0:00 Hỗ trợ đa dạng các thiết bị chiếu hình ảnh\n0:15 Những đặc điểm nổi bật\n0:29 Vì sao là sản phẩm này?\n1:21 Các phiên bản kích thước\n1:34 Tổng quan về sản phẩm\n2:32 Công nghệ hỗ trợ\n3:50 Chất lượng hiển thị\n5:27 Chất lượng âm thanh\n6:28 Thiết kế\n8:27 Nhiệt độ\n8:50 One Remote\n9:19 SmartThings\n9:57 Cổng kết nối\n10:14 Các công nghệ kết nối\n10:35 Trợ lý ảo Google Assistant tiếng Việt\n11:27 Ambient Mode\n11:41 Điện năng tiêu thụ\n11:55 TizenOS 6\n13:00 Ai nên lựa chọn Tivi này\n13:34 Tổng hợp tính năng\n\nLink mua hàng:\nhttps://www.dienmayxanh.com/tivi/led-4k-samsung-ua60au8100\n\nXem video các Tivi khác\nhttps://youtu.be/SzGbYvSaeLU\n\n❤ Đăng ký theo dõi kênh để xem nhiều video hơn: \n👉 https://bit.ly/2yBZqQy\n\nCập nhật thông tin sản phẩm, khuyến mãi mới nhất, liên hệ tại:\n🖥 Website: https://www.dienmayxanh.com\n📱 Fanpage: https://facebook.com/dienmayxanhcom\n📞 Tổng đài: 18001061\n🎉 Cảm ơn các bạn đã xem video. Hãy luôn theo dõi và ủng hộ Điện Máy XANH nhé!\n\n#DienMayXanh #Samsung #Tivi #Review #SmartTV #TiviThongMinh #TizenOS","thumbnailUrl":"https://i.ytimg.com/vi/3TJP5iciTYg/default.jpg","uploadDate":"04/12/2021","duration":"PT13M51S","embedUrl":"https://www.youtube.com/embed/3TJP5iciTYg","contentUrl":null,"publisher":{"@type":"Organization","@id":"https://www.dienmayxanh.com#Organization"},"interactionStatistic":{"@type":"InteractionCounter","interactionType":{"@type":"http://schema.org/WatchAction"},"userInteractionCount":6683}}</script>
            <!--#endregion-->
            <!--#region Organization-->
            <script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","@id":"https://www.dienmayxanh.com/#Organization","name":"Điện Máy Xanh","url":"https://www.dienmayxanh.com/tivi","logo":{"@type":"ImageObject","url":"https://cdn.thegioididong.com/v2015/ContentMwg/logo/logo.png"},"contactPoint":[{"@type":"ContactPoint","telephone":"18001060","contactType":"sales","areaServed":"VN","availableLanguage":["EN","VN"]},{"@type":"ContactPoint","telephone":"18001763","contactType":"technical support","areaServed":"VN","availableLanguage":["EN","VN"]},{"@type":"ContactPoint","telephone":"18001062","contactType":"customer support","areaServed":"VN","availableLanguage":["EN","VN"]}],"sameAs":["https://www.facebook.com/thegioididongcom/","https://vn.linkedin.com/company/thegioidong-dienmayxanh","https://www.youtube.com/user/TGDDVideoReviews","https://www.instagram.com/watch.thegioididong/","https://vt.tiktok.com/RH9SSp/","https://vi.wikipedia.org/wiki/Thegioididong.com"]}</script>
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


    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/details.css') }}">

    <style type="text/css">
            
            .bar-top-left{
                display: none !important;
            }
        </style>

@endpush



@push('script')
<script src="//cdn.tgdd.vn/mwgcart/mwgcore/js/bundle/globalDMX.min.v202201240310.js" type="text/javascript"></script>
       
        <script type="text/javascript">
            button_buy_height = $('.scroll-box').offset().top;
            view_more_height  = $('.view-more-related').offset().top;
                        
            $(".show-more span").bind("click", function(){
                $('.content').css({'height':'auto', 'overflow':'auto' });
                $(this).hide();
                view_more_height  = $('.view-more-related').offset().top;
            });

            $(function(){

               
                $(window).scroll(function(){
                    
                    if($(this).scrollTop()>= button_buy_height&&$(this).scrollTop()<=view_more_height){
                       
   
                       $('.scroll-box').addClass('fixed-button-buy')
                        
                    }
                    else{
                        if($('.scroll-box').hasClass('fixed-button-buy')){
                            $('.scroll-box').removeClass('fixed-button-buy');
                        }

                    }
                });
            });

        </script>

      
        <script defer="defer" async="async" src="//cdn.tgdd.vn/mwgcart/mwgcore/js/bundle/detailTGDD.min.v202201240240.js"></script>
        <script type="text/javascript">
            document.productId = '235791';
            document.cateID = '1942';
            document.cateName = 'tivi';
            document.cateUrl = 'tivi';
            document.isDesktop = 1;
            document.minv = '202201251200';
            document.isCoupleWatch = 0;
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            
        </script>

@endpush

@endsection  