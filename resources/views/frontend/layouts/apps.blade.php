


<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Siêu thị Điện máy XANH - Mua bán điện tử, điện lạnh, gia dụng</title>
        <meta name="keywords" content="Siêu thị điện máy, điện tử, điện lạnh, gia dụng, đồ dùng nhà bếp, điện máy xanh" />
        <meta name="description" content="Siêu thị Điện máy Xanh mua sắm thiết bị điện tử điện lạnh, gia dụng, sản phẩm công nghệ. Mua online tại dienmayxanh.com giá tốt phục vụ chuyên nghiệp tận tâm." />
        <meta property="og:title" content="Siêu thị Điện máy XANH - Mua bán điện tử, điện lạnh, gia dụng" />
        <meta property="og:description" content="Siêu thị Điện máy Xanh mua sắm thiết bị điện tử điện lạnh, gia dụng, sản phẩm công nghệ. Mua online tại dienmayxanh.com giá tốt phục vụ chuyên nghiệp tận tâm." />
        <link rel="canonical" href="https://www.dienmayxanh.com/" />
        <meta content="INDEX,FOLLOW" name="robots" />
        <meta name="copyright" content="Công ty Cổ phần Thế Giới Di Động" />
        <meta name="author" content="Công ty Cổ phần Thế Giới Di Động" />
        <meta name="GENERATOR" content="Công ty Cổ phần Thế Giới Di Động" />
        <meta http-equiv="audience" content="General" />
        <meta name="resource-type" content="Document" />
        <meta name="distribution" content="Global" />
        <meta name="revisit-after" content="1 days" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta http-equiv="content-language" content="vi" />
        <link href="/favicon_DMX.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="/favicon_DMX.ico" rel="apple-touch-icon" />
        <link href="/favicon_DMX.ico" rel="apple-touch-icon-precomposed" />
        <meta property="fb:app_id" content="204398446292634" />
        <meta property="og:site_name" content="dienmayxanh.com" />
        <meta property="og:type" content="product" />
        <meta property="og:locale" content="vi_VN" />
        @stack('style')
        
    </head>
    <body class="dmx-site theme-lunar-new-year">
        <div class="banner-media">
            <div class="media-slider" data-size="1">
                <div class="item" data-background-color="#CF1F2F" data-order="1">
                    <a aria-label="slide" data-cate="0" data-place="1295" href="https://www.dienmayxanh.com/flashsale" onclick="jQuery.ajax({ url: '/bannertracking?bid=49608&r='+ (new Date).getTime(), async: true, cache: false });"><img  src="https://cdn.tgdd.vn/2022/01/banner/1200-44-1200x44.png" alt="BF"  ></a>
                </div>
            </div>
            <style>
                .banner-media{
                background-color: #CF1F2F;
                }
            </style>
        </div>
        <header class="header   theme-lunar-new-year" data-sub="0">
            <div class="header__top">
                <section>
                    <a href="/" class="header__logo">
                        <img src="{{ asset('images/template/logochuan.png') }}" style="height:40px; width: 180px;">   
                   
                    </a>
                    <div class="bordercol"></div>
                    <a href="javascript:void(0)" class="header__address" onclick="OpenLocation()">
                    Xem giá, tồn kho tại:
                    <span data-province="3" data-district="0" data-ward="0">H&#x1ED3; Ch&#xED; Minh</span>
                    </a>
                    <form onsubmit="return suggestSearch(event);" class="header__search">
                        <input id="skw" type="text" class="input-search" onkeyup="suggestSearch(event);" placeholder="Bạn tìm gì..." name="key" autocomplete="off" maxlength="100">
                        <button type="submit">
                        <i class="icon-search"></i>
                        </button>
                        <div id="search-result"></div>
                    </form>

                    <?php
                        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();

                        $number_cart = count($cart)>0?count($cart):'';

                        $active_cart =  count($cart)>0?'active':'';
                     ?>   
                    <a id="cart-box" href="/cart" class="header__cart {{ $active_cart }}">

                    
                    <i class="icon-cart">{{ $number_cart }}</i>
                    <span>Giỏ hàng</span>
                    </a>
                    <a href="/lich-su-mua-hang" class="header__history">Lịch sử đơn hàng</a>
                    <div class="bordercol"></div>
                    <a href="/sim-so-dep" class="header__hot">
                        <p class="dotnew"><span class="animation"></span></p>
                        Mobifone trả sau đến hạn thanh toán. Mua thẻ nạp ngay!
                    </a>
                    <div class="header__listtop">
                        <div class="bordercol"></div>
                        <div class="divitem">
                            <a href="/kinh-nghiem-hay">Tư vấn<br>chọn mua</a>
                        </div>
                        <div class="bordercol"></div>
                        <div class="divitem">
                            <a href="/khuyen-mai">Khuyến mãi</a>
                        </div>
                        <div class="bordercol"></div>
                        <div class="divitem">
                            <a href="/vao-bep">Vào bếp</a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="header__main">
                <section>
                    <div class="category">
                        <p class="category__txt"><span>Danh mục</span></p>
                        <a href="/danh-muc-nhom-hang" class="category__all">Tất cả nhóm hàng</a>
                        <div class="bar-top-left">
                            <ul class="main-menu">
                                <li data-submenu-id="submenu-1">
                                    <div class="dropdown">
                                        <span>
                                        <img src="https://cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/DMX/Global/Desktop/LabelHOT.png" alt="label hot" width="26" />
                                        </span>
                                        <a href="/tivi">Tivi</a>, <a href="/dan-loa-dvd">Loa, Dàn Karaoke</a>
                                    </div>
                                    <div id="submenu-1" class="submenu">
                                        <aside>
                                            <p class="menuitem__title">TIVI <a href="/tivi">Xem tất cả</a></p>
                                            <a href="/tivi-tra-gop-0-phan-tram">Tivi trả góp 0 - 1%</a>
                                            <a href="/tivi-sony">Sony</a>
                                            <a href="/tivi-samsung">Samsung</a>
                                            <a href="/tivi-lg">LG</a>
                                            <a href="/tivi-tcl">TCL</a>
                                            <a href="/tivi-casper">Casper</a>
                                            <a href="/tivi#c=1942&p=43170,43356,43358&pi=0">Từ 32 - 43 inch</a>
                                            <a href="/tivi#c=1942&p=43358,44869,45198,43361,43364&pi=0 ">Từ 43 - 55 inch</a>
                                            <a href="/tivi#c=1942&r=335,333&pi=0">Dưới 7 triệu</a>
                                            <a href="/tivi#c=1942&r=711,576&pi=0">Tivi cao cấp</a>
                                            <a href="/may-chieu">Máy chiếu</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">LOA, ÂM THANH <a href="/dan-loa-dvd?g=loa-keo#c=2162&p=90016,90017,90018&pi=0">Xem tất cả</a></p>
                                            <a href="/dan-loa-dvd?g=loa-keo">Loa kéo</a>
                                            <a href="/dan-loa-dvd-loa-bluetooth">Loa Bluetooth</a>
                                            <a href="/dan-loa-dvd-loa-thanh">Loa thanh (Soundbar)</a>
                                            <a href="/dan-loa-dvd?g=dan-am-thanh">Dàn âm thanh</a>
                                            <a href="/dan-loa-dvd-dan-karaoke-amply">Dàn Karaoke, Amply</a>
                                            <a href="/micro">Micro</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">PHỤ KIỆN TIVI</p>
                                            <a href="/cap-hdmi-cap-tivi">Cáp HDMI, cáp Tivi</a>
                                            <a href="/khung-treo-tivi">Khung treo Tivi</a>
                                            <a href="/dieu-khien-tivi">Điều khiển TV</a>
                                            <a href="/android-tv-box">Android TV Box</a>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-2">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-tulanh"></i>
                                        </span>
                                        <a href="/tu-lanh">Tủ lạnh</a>, <a href="/tu-dong">Tủ đông, Tủ mát</a>
                                    </div>
                                    <div id="submenu-2" class="submenu">
                                        <aside>
                                            <p class="menuitem__title">TỦ LẠNH<a href="/tu-lanh">Xem tất cả</a></p>
                                            <a href="/tu-lanh-tra-gop-0-phan-tram">Trả góp 0 - 0.5%</a>
                                            <a href="/tu-lanh?g=tu-150-300-lit">Tủ lạnh từ 150 - 300 lít</a>
                                            <a href="/tu-lanh?g=tu-301-400-lit">Tủ lạnh từ 301 - 400 lít</a>
                                            <a href="/tu-lanh?g=tu-lon-side-by-side">Tủ lạnh Side by side</a>
                                            <a href="/tu-lanh?g=mini">Tủ lạnh Mini</a>
                                            <a href="/tu-lanh-panasonic">Panasonic</a>
                                            <a href="/tu-lanh-samsung">Samsung</a>
                                            <a href="/tu-lanh-toshiba">Toshiba</a>
                                            <a href="/tu-lanh-aqua-sanyo">Aqua</a>
                                            <a href="/tu-lanh-lg">LG</a>
                                            <a href="/tu-lanh?p=tu-8tr-12tr">Từ 8 - 12 triệu</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">TỦ ĐÔNG, TỦ MÁT<a href="/tu-dong">Xem tất cả</a></p>
                                            <a href="/tu-dong-kangaroo">Kangaroo</a>
                                            <a href="/tu-dong-sanaky">Sanaky</a>
                                            <a href="/tu-dong-sunhouse">Sunhouse</a>
                                            <a href="/tu-dong-lg">LG</a>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-3">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-maygiat"></i>
                                        </span>
                                        <a href="/may-giat">Máy giặt</a>,
                                        <a href="/may-say-quan-ao">Sấy quần áo</a>
                                    </div>
                                    <div id="submenu-3" class="submenu">
                                        <aside>
                                            <p class="menuitem__title">MÁY GIẶT<a href="/may-giat">Xem tất cả</a></p>
                                            <a href="/may-giat-moi">Đời mới 2021</a>
                                            <a href="/may-giat-toshiba">Toshiba</a>
                                            <a href="/may-giat-lg">LG</a>
                                            <a href="/may-giat-panasonic">Panasonic</a>
                                            <a href="/may-giat-samsung">Samsung</a>
                                            <a href="/may-giat-electrolux">Electrolux</a>
                                            <a href="/may-giat-aqua-sanyo">Aqua</a>
                                            <a href="/may-giat?g=cua-truoc">Máy giặt cửa ngang (cửa trước)</a>
                                            <a href="/may-giat-co-say">Máy giặt sấy</a>
                                            <a href="/may-giat?p=duoi-5-trieu">Giá dưới 5 triệu</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">MÁY SẤY QUẦN ÁO<a href="/may-say-quan-ao">Xem tất cả</a></p>
                                            <a href="/may-say-quan-ao?p=tu-5tr-10tr">Giá từ 5 - 10 triệu</a>
                                            <a href="/may-say-quan-ao-electrolux">Electrolux</a>
                                            <a href="/may-say-quan-ao-beko">Beko</a>
                                            <a href="/may-say-quan-ao-candy">Candy</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">PHỤ KIỆN MÁY GIẶT</p>
                                            <a href="/ao-trum-may-giat">Áo trùm máy giặt</a>
                                            <a href="/gia-do-may-giat">Giá đỡ máy giặt</a>
                                            <a href="/tui-giat">Túi giặt</a>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-4">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-maylanh"></i>
                                        </span>
                                        <a href="/may-lanh">M&#xE1;y l&#x1EA1;nh</a>, <a href="/may-nuoc-nong">Máy nước nóng</a>
                                    </div>
                                    <div id="submenu-4" class="submenu">
                                        <aside>
                                            <p class="menuitem__title">M&#xC1;Y L&#x1EA0;NH<a href="/may-lanh">Xem tất cả</a></p>
                                            <a href="/may-lanh-tra-gop-0-phan-tram">Trả góp 0 - 0.5%</a>
                                            <a href="/may-lanh-moi">Đời mới 2021</a>
                                            <a href="/may-lanh-panasonic">Panasonic</a>
                                            <a href="/may-lanh-daikin">Daikin</a>
                                            <a href="/may-lanh-samsung">Samsung</a>
                                            <a href="/may-lanh?g=1-hp">M&#xE1;y l&#x1EA1;nh 1 HP</a>
                                            <a href="/may-lanh?g=15-hp">M&#xE1;y l&#x1EA1;nh 1.5 HP</a>
                                            <a href="/may-lanh?g=may-lanh-inverter">M&#xE1;y l&#x1EA1;nh Inverter ti&#x1EBF;t ki&#x1EC7;m &#x111;i&#x1EC7;n</a>
                                            <a href="/may-lanh?p=duoi-7-trieu">M&#xE1;y l&#x1EA1;nh d&#x1B0;&#x1EDB;i 7 tri&#x1EC7;u</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">QUẠT ĐIỀU HÒA<a href="/quat-dieu-hoa">Xem tất cả</a></p>
                                            <a href="/quat-dieu-hoa-kangaroo">Kangaroo</a>
                                            <a href="/quat-dieu-hoa-daikiosan">Daikiosan</a>
                                            <a href="/quat-dieu-hoa-sunhouse">Sunhouse</a>
                                            <a href="/quat-dieu-hoa-midea">Midea</a>
                                            <a href="/quat-dieu-hoa-delites">Delites</a>
                                            <a href="/quat-dieu-hoa?p=tu-1-3-trieu">Từ 1 đến 3 triệu</a>
                                            <a href="/quat-dieu-hoa?p=tu-3-5-trieu">Từ 3 đến 5 triệu</a>
                                            <a href="/quat-dieu-hoa?g=duoi-20-m">Quạt mát dưới 20 m²</a>
                                            <a href="/quat-dieu-hoa?g=tu-20-34-m">Quạt mát từ 20 - 34 m²</a>
                                            <a href="/quat-dieu-hoa?g=tu-35-50-m">Quạt mát từ 35 - 50 m²</a>
                                            <a href="/quat-dieu-hoa?g=tren-50-m">Quạt mát trên 50 m²</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">QUẠT<a href="/quat">Xem tất cả</a></p>
                                            <a href="/quat?g=quat-treo-tuong">Quạt treo tường</a>
                                            <a href="/quat?g=quat-sac-dien">Quạt sạc điện</a>
                                            <a href="/quat?g=quat-dung">Quạt đứng</a>
                                            <a href="/quat?g=quat-hop">Quạt hộp</a>
                                            <a href="/quat?g=quat-lung">Quạt lửng</a>
                                            <a href="/quat-ban">Quạt bàn</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">M&#xC1;Y N&#x1AF;&#x1EDA;C N&#xD3;NG </p>
                                            <a href="/may-nuoc-nong?g=lam-nong-truc-tiep">M&#xE1;y n&#x1B0;&#x1EDB;c n&#xF3;ng trực tiếp</a>
                                            <a href="/may-nuoc-nong-nang-luong-mat-troi">M&#xE1;y n&#x1B0;&#x1EDB;c n&#xF3;ng năng lượng mặt trời</a>
                                            <a href="/may-nuoc-nong-lam-nong-gian-tiep">M&#xE1;y n&#x1B0;&#x1EDB;c n&#xF3;ng gián tiếp</a>
                                            <a href="/may-nuoc-nong-bom-tro-luc">Máy có bơm trợ lực</a>
                                            <a href="/may-nuoc-nong-ariston">Ariston</a>
                                            <a href="/may-nuoc-nong-panasonic">Panasonic</a>
                                            <a href="/may-nuoc-nong-ferroli">Ferroli</a>
                                            <a href="/may-nuoc-nong-electrolux">Electrolux</a>
                                            <a href="/may-nuoc-nong-kangaroo">Kangaroo</a>
                                            <a href="/may-nuoc-nong-beko">Beko</a>
                                            <a href="/may-nuoc-nong-rossi">Rossi</a>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-5">
                                    <div class="dropdown">
                                        <span><i class="icon-diengiadung"></i></span>
                                        <a href="/gia-dung">Điện gia dụng</a>,
                                        <a href="/dung-cu-cam-tay">Dụng cụ</a>
                                    </div>
                                    <div id="submenu-5" class="submenu">
                                        <aside class="w140">
                                            <div class="menuitem">
                                                <p class="menuitem__title">NỒI CÁC LOẠI</p>
                                                <a href="/noi-com-dien">Nồi cơm điện</a>
                                                <a href="/noi-ap-suat">Nồi áp suất</a>
                                                <a href="/lau-dien">Nồi lẩu điện</a>
                                                <a href="/noi-chien-khong-dau">Nồi chiên không dầu</a>
                                            </div>
                                            <div class="menuitem">
                                                <p class="menuitem__title">MÁY XAY - VẮT - ÉP</p>
                                                <a href="/may-xay-sinh-to">Máy xay sinh tố</a>
                                                <a href="/may-xay-sinh-to-may-xay-thit">Máy xay thịt</a>
                                                <a href="/may-lam-sua-hat">Máy làm sữa hạt</a>
                                                <a href="/may-ep-trai-cay">M&#xE1;y &#xE9;p tr&#xE1;i c&#xE2;y</a>
                                                <a href="/may-ep-trai-cay?g=may-ep-cham">Máy ép chậm</a>
                                                <a href="/may-vat-cam">Máy vắt cam</a>
                                                <a href="/may-danh-trung">Máy đánh trứng</a>
                                            </div>
                                        </aside>
                                        <aside class="w160">
                                            <div class="menuitem">
                                                <p class="menuitem__title">BẾP - LÒ</p>
                                                <a href="/bep-ga">Bếp ga</a>
                                                <a href="/bep-tu">Bếp từ</a>
                                                <a href="/bep-hong-ngoai">Bếp hồng ngoại</a>
                                                <a href="/lo-nuong?g=bep-nuong-dien">Bếp nướng điện</a>
                                                <a href="/lo-nuong">Lò nướng</a>
                                                <a href="/lo-vi-song">Lò vi sóng</a>
                                            </div>
                                            <div class="menuitem">
                                                <p class="menuitem__title">THIẾT BỊ NHÀ BẾP</p>
                                                <p class="many-cate">
                                                    <a href="/binh-dun-sieu-toc">B&#xEC;nh &#x111;un, </a>
                                                    <a href="/binh-thuy-dien">Bình thủy điện</a>
                                                </p>
                                                <a href="/may-pha-ca-phe">Máy pha cà phê</a>
                                                <a href="/may-hut-mui">Máy hút mùi</a>
                                                <a href="/may-rua-chen">M&#xE1;y r&#x1EED;a ch&#xE9;n</a>
                                            </div>
                                        </aside>
                                        <aside class="w175">
                                            <div class="menuitem">
                                                <p class="menuitem__title">ĐIỆN GIA DỤNG</p>
                                                <a href="/ban-ui">B&#xE0;n &#x1EE7;i</a>
                                                <a href="/quat">Quạt</a>
                                                <a href="/quat-dieu-hoa">Quạt điều hòa</a>
                                                <a href="/may-loc-khong-khi">Máy lọc không khí</a>
                                                <p class="many-cate">
                                                    <a href="/may-hut-bui">Máy hút bụi, </a>
                                                    <a href="/robot-hut-bui"> Robot hút bụi</a>
                                                </p>
                                                <p class="many-cate">
                                                    <a href="/den-dien-den-sac-den-ban-hoc">Đèn bàn, </a>
                                                    <a href="/den-dien-den-sac-den-pin">Đèn pin, </a>
                                                    <a href="/den-dien-den-sac-den-sac"> Đèn sạc</a>
                                                </p>
                                                <a href="/den-dien-den-sac-den-bat-muoi">Đèn bắt muỗi</a>
                                                <a href="/vot-muoi">Vợt muỗi</a>
                                                <a href="/o-cam-phich-cam">Ổ cắm điện</a>
                                                <p class="menuitem__title">THIẾT BỊ SƯỞI ẤM</p>
                                                <a href="/quat-suoi">Quạt sưởi</a>
                                                <a href="/den-suoi">Đèn sưởi</a>
                                            </div>
                                        </aside>
                                        <aside class="w190">
                                            <div class="menuitem">
                                                <p class="menuitem__title">CHĂM SÓC SỨC KHỎE</p>
                                                <a href="/may-khi-dung">Máy khí dung</a>
                                                <p class="many-cate">
                                                    <a href="/may-do-huyet-ap">Máy đo huyết áp</a>
                                                    <a href="/nhiet-ke">Nhiệt kế</a>
                                                </p>
                                                <a href="/can-suc-khoe">Cân sức khỏe</a>
                                                <a href="/may-chay-bo">Máy chạy bộ </a>
                                                <a href="/xe-dap-tap-the-duc">Xe đạp tập thể dục</a>
                                                <a href="/ghe-massage">Ghế massage</a>
                                            </div>
                                        </aside>
                                        <aside>
                                            <div class="menuitem">
                                                <p class="menuitem__title">DỤNG CỤ SỬA CHỮA</p>
                                                <p class="many-cate">
                                                    <a href="/may-khoan">Máy khoan, </a>
                                                    <a href="/mui-khoan">Mũi khoan</a>
                                                </p>
                                                <p class="many-cate">
                                                    <a href="/may-mai-goc">Máy cắt, </a>
                                                    <a href="/may-mai">Máy mài</a>
                                                </p>
                                                <a href="/bo-dung-cu-da-nang">Bộ dụng cụ đa năng</a>
                                                <p class="many-cate">
                                                    <a href="/co-le-mo-let">Cờ lê - mỏ lết, </a>
                                                    <a href="/tua-vit">Tua vít</a>
                                                </p>
                                                <p class="many-cate">
                                                    <a href="/kim">Kìm, </a>
                                                    <a href="/bua">Búa, </a>
                                                    <a href="/thuoc-do">Thước đo - cân cầm tay</a>
                                                </p>
                                                <a href="/may-do-khoang-cach">Máy đo khoảng cách</a>
                                                <p class="many-cate">
                                                    <a href="/o-khoa">Ổ khóa,</a>
                                                    <a href="/khoa-dien-tu">Khoá điện tử</a>
                                                </p>
                                            </div>
                                            <div class="menuitem">
                                                <p class="menuitem__title">THIẾT BỊ ĐIỆN NƯỚC</p>
                                                <a href="/may-bom-nuoc">Máy bơm nước</a>
                                                <a href="/may-rua-xe">Máy rửa xe</a>
                                                <a href="/on-ap">Ổn áp</a>
                                            </div>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-6">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-nhabep"></i>
                                        </span>
                                        <a href="/do-dung-gia-dinh">Đồ dùng nhà bếp</a>,
                                        <a href="/bep-dien">Bếp điện</a>
                                    </div>
                                    <div id="submenu-6" class="submenu">
                                        <aside>
                                            <div class="menuitem">
                                                <p class="menuitem__title">PHÒNG ĂN</p>
                                                <a href="/binh-dung-nuoc">Bình đựng nước</a>
                                                <a href="/binh-ly-giu-nhiet">Bình, ly giữ nhiệt</a>
                                                <a href="/chen-bat">Tô, chén, dĩa</a>
                                                <a href="/muong-dua">Đũa - Muỗng</a>
                                                <a href="/ly-bo-ly">Ly, bộ ly</a>
                                                <a href="/bo-am-tra">Bộ ấm trà</a>
                                            </div>
                                            <div class="menuitem">
                                                <p class="menuitem__title">VỆ SINH NHÀ CỬA</p>
                                                <a href="/bo-lau-nha">Bộ lau nhà</a>
                                                <a href="/moc-kep-quan-ao">Kẹp, móc quần áo</a>
                                                <a href="/phu-kien-may-giat">Phụ kiện máy giặt</a>
                                                <a href="/ve-sinh-nha-cua">Vệ sinh nhà cửa</a>
                                            </div>
                                        </aside>
                                        <aside class="w355">
                                            <div class="menuitem">
                                                <p class="menuitem__title">NHÀ BẾP</p>
                                                <div class="menuitem__wrap">
                                                    <div class="item-small">
                                                        <a href="/noi">Nồi, bộ nồi</a>
                                                        <a href="/chao-chong-dinh">Chảo chống dính</a>
                                                        <a href="/dao-keo-thot">Dao, kéo, thớt</a>
                                                        <p class="many-cate">
                                                            <a href="/hop-dung-thuc-pham">Hộp, </a>
                                                            <a href="/hu-dung-thuc-pham">Hũ đựng thực phẩm</a>
                                                        </p>
                                                        <a href="/hop-ham-com">Hộp hâm cơm</a>
                                                        <a href="/thau-ro-gao-nuoc">Thau, rổ</a>
                                                        <a href="/va-san">Vá, Sạn</a>
                                                        <a href="/thung-da-ca-da">Thùng đá, ca đá</a>
                                                    </div>
                                                    <div class="item-small">
                                                        <a href="/dung-cu-kep-gap">Dụng cụ kẹp gắp</a>
                                                        <a href="/dung-cu-lam-banh">Dụng cụ làm bánh</a>
                                                        <a href="/vi-thung-nuong">Vỉ, thùng nướng</a>
                                                        <a href="/khay-da-ly-lam-da">Khay, ly làm đá</a>
                                                        <a href="/phu-kien-nha-bep">Phụ kiện nhà bếp</a>
                                                        <a href="/ke">Khay, kệ đựng đồ</a>
                                                        <a href="/voi-rua-chen">Vòi rửa chén</a>
                                                        <a href="/chau-rua-chen">Chậu rửa chén</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menuitem">
                                                <div class="menuitem__wrap">
                                                    <div class="item-small">
                                                        <p class="menuitem__title">THIẾT BỊ KHÁC</p>
                                                        <a href="/mu-bao-hiem">Mũ bảo hiểm</a>
                                                        <a href="/ket-sat">Két sắt</a>
                                                    </div>
                                                    <div class="item-small">
                                                        <p class="menuitem__title">THIẾT BỊ PHÒNG TẮM</p>
                                                        <a href="/nap-bon-cau">Nắp bồn cầu</a>
                                                        <a href="/voi-xit-ve-sinh">Vòi xịt vệ sinh</a>
                                                        <a href="/voi-sen">Vòi sen</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
                                        <aside>
                                            <div class="menuitem">
                                                <p class="menuitem__title">CHĂM SÓC MẸ VÀ BÉ <a href="/cham-soc-me-va-be">Xem tất cả</a></p>
                                                <a href="/may-hut-sua">Máy hút sữa</a>
                                                <a href="/may-ham-sua">Máy hâm sữa</a>
                                                <a href="/may-tiet-trung-binh-sua">Máy tiệt trùng</a>
                                                <a href="/num-ti">Núm ti</a>
                                                <a href="/ti-gia">Ti giả</a>
                                                <a href="/num-tro-ti">Núm trợ ti</a>
                                            </div>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-7">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-locnuoc"></i>
                                        </span>
                                        <a href="/may-loc-nuoc-ldp">Lọc nước</a>, <a href="/thiet-bi-lam-dep">Thi&#x1EBF;t b&#x1ECB; l&#xE0;m &#x111;&#x1EB9;p</a>
                                    </div>
                                    <div id="submenu-7" class="submenu">
                                        <aside>
                                            <p class="menuitem__title">LỌC NƯỚC</p>
                                            <a href="/may-loc-nuoc?g=tu-dung">Máy lọc nước RO tủ đứng</a>
                                            <a href="/may-loc-nuoc?g=lap-am">Máy lọc nước RO âm tủ</a>
                                            <a href="/may-loc-nuoc?g=de-ban">Máy lọc nước RO để bàn</a>
                                            <a href="/may-loc-nuoc?g=ion-am-tao-kiem">Máy lọc nước ion kiềm</a>
                                            <a href="/loc-nuoc-khong-dien">Lọc nước không điện</a>
                                            <a href="/loi-may-loc-nuoc">Lõi máy lọc nước</a>
                                            <a href="/coc-loc-nuoc">Cốc lọc đầu nguồn</a>
                                            <a href="/but-thu-nuoc">Bút thử nước</a>
                                            <a href="/cay-nuoc-nong-lanh">Cây nước nóng lạnh</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">THIẾT BỊ LÀM ĐẸP <a href="/thiet-bi-lam-dep">Xem tất cả</a></p>
                                            <a href="/may-say-toc">Máy sấy tóc</a>
                                            <a href="/may-tao-kieu-toc">Máy tạo kiểu tóc</a>
                                            <a href="/may-cao-rau">Máy cạo râu</a>
                                            <p class="many-cate">
                                                <a href="/may-massage">Máy massage, </a>
                                                <a href="/may-rua-mat"> Máy rửa mặt</a>
                                            </p>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-8">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-dienthoai"></i>
                                        </span>
                                        <a href="/dien-thoai">Điện thoại</a>,
                                        <a href="/laptop-ldp">Laptop</a>,
                                        <a href="/may-tinh-bang">Tablet</a>
                                    </div>
                                    <div id="submenu-8" class="submenu">
                                        <aside class="w160">
                                            <p class="menuitem__title">ĐIỆN THOẠI<a href="/dien-thoai">Xem tất cả</a></p>
                                            <a href="/dien-thoai-apple-iphone">iPhone</a>
                                            <a href="/dien-thoai-samsung">Samsung</a>
                                            <a href="/dien-thoai-oppo">Oppo</a>
                                            <a href="/dien-thoai-xiaomi">Xiaomi</a>
                                            <a href="/dien-thoai?p=tu-2-4-trieu">Điện thoại từ 2 - 4 triệu</a>
                                            <a href="/dien-thoai?p=tu-4-7-trieu">Điện thoại từ 4 - 7 triệu</a>
                                            <a href="/dien-thoai#c=42&r=252,253&pi=0">Điện thoại trên 13 triệu</a>
                                            <a href="/may-doi-tra/dien-thoai">Điện thoại cũ giá rẻ</a>
                                            <a href="/dien-thoai-tra-gop-0-phan-tram">Điện thoại trả góp 0-1%</a>
                                        </aside>
                                        <aside class="w160">
                                            <p class="menuitem__title">LAPTOP<a href="/laptop-ldp">Xem tất cả</a></p>
                                            <a href="/laptop-apple-macbook">MacBook</a>
                                            <a href="/laptop-asus">Asus</a>
                                            <a href="/laptop-hp-compaq">HP</a>
                                            <a href="/laptop-lenovo">Lenovo</a>
                                            <a href="/laptop-acer">Acer</a>
                                            <a href="/laptop-dell">Dell</a>
                                            <a href="/laptop-msi">MSI</a>
                                            <a href="/laptop-lg">LG</a>
                                            <a href="/laptop-gigabyte">Gigabyte</a>
                                            <a href="/laptop?p=duoi-15-trieu">Laptop dưới 15 triệu</a>
                                            <a href="/may-doi-tra/laptop">Laptop cũ giá rẻ</a>
                                            <a href="/laptop-tra-gop-0-phan-tram">Laptop trả góp 0-1%</a>
                                        </aside>
                                        <aside class="w175">
                                            <p class="menuitem__title">TABLET<a href="/may-tinh-bang">Xem tất cả</a></p>
                                            <a href="/may-tinh-bang-apple-ipad">iPad</a>
                                            <a href="/may-tinh-bang-samsung">Samsung</a>
                                            <a href="/may-tinh-bang-xiaomi">Xiaomi</a>
                                            <a href="/may-tinh-bang-nokia">Nokia</a>
                                            <a href="/may-tinh-bang-realme">Realme</a>
                                            <a href="/may-tinh-bang-huawei">Huawei</a>
                                            <a href="/may-tinh-bang-lenovo">Lenovo</a>
                                            <a href="/may-tinh-bang-masstel">Masstel</a>
                                            <a href="/may-tinh-bang#c=522&r=294,295&pi=0">Máy tính bảng từ 3 - 15 triệu</a>
                                            <a href="/may-tinh-bang?p=tren-15-trieu">Máy tính bảng trên 15tr</a>
                                            <a href="/may-doi-tra/may-tinh-bang">Máy tính bảng cũ giá rẻ</a>
                                            <a href="/may-tinh-bang-tra-gop-0-phan-tram">Máy tính bảng trả góp 0-1%</a>
                                        </aside>
                                        <aside class="w160">
                                            <p class="menuitem__title">MÀN HÌNH<a href="/man-hinh-may-tinh">Xem tất cả</a></p>
                                            <a href="/man-hinh-may-tinh-asus">Màn hình Asus</a>
                                            <a href="/man-hinh-may-tinh-lenovo">Màn hình Lenovo</a>
                                            <a href="/man-hinh-may-tinh-viewsonic">Màn hình Viewsonic</a>
                                            <a href="/man-hinh-may-tinh-samsung">Màn hình Samsung</a>
                                            <a href="/man-hinh-may-tinh-lg">Màn hình LG</a>
                                            <br />
                                            <p class="menuitem__title">MÁY TÍNH<a href="/may-tinh-nguyen-bo">Xem tất cả</a></p>
                                            <a href="/may-tinh-nguyen-bo-apple">Apple iMac | Mac Mini</a>
                                            <a href="/may-tinh-nguyen-bo-hp">Máy tính để bàn HP</a>
                                            <a href="/may-tinh-nguyen-bo-asus">Máy tính  để bàn Asus</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">MÁY IN<a href="/may-in">Xem tất cả</a></p>
                                            <a href="/may-in-hp">Máy in HP</a>
                                            <a href="/may-in-brother">Máy in Brother</a>
                                            <a href="/may-in-canon">Máy in Canon</a>
                                            <a href="/muc-in">Mực in</a>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-10">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-phukien"></i>
                                        </span>
                                        <a href="/phu-kien">Phụ kiện</a>,
                                        <a href="/dong-ho"> Đồng hồ</a>
                                    </div>
                                    <div id="submenu-10" class="submenu">
                                        <aside>
                                            <p class="menuitem__title">ĐỒNG HỒ THỜI TRANG<a href="/dong-ho">Xem tất cả</a></p>
                                            <a href="/dong-ho-deo-tay-nam">Đồng hồ nam</a>
                                            <a href="/dong-ho-deo-tay-nu">Đồng hồ nữ</a>
                                            <a href="/dong-ho-deo-tay-casio">Đồng hồ Casio</a>
                                            <a href="/dong-ho-deo-tay-orient">Đồng hồ Orient</a>
                                            <a href="/dong-ho-deo-tay-citizen">Đồng hồ Citizen</a>
                                            <br />
                                            <p class="menuitem__title">ĐỒNG HỒ THÔNG MINH<a href="/dong-ho-thong-minh-ldp">Xem tất cả</a> </p>
                                            <a href="/dong-ho-thong-minh-apple">Apple Watch</a>
                                            <a href="/dong-ho-thong-minh-samsung">Samsung</a>
                                            <a href="/dong-ho-thong-minh-huawei">Huawei</a>
                                            <a href="/dong-ho-thong-minh-xiaomi">Xiaomi</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">PHỤ KIỆN ĐIỆN THOẠI<a href="/phu-kien">Xem tất cả</a></p>
                                            <a href="/sac-dtdd">Pin sạc dự phòng</a>
                                            <a href="/cap-dien-thoai">Cáp sạc</a>
                                            <a href="/tai-nghe">Tai nghe</a>
                                            <a href="/dan-loa-dvd-loa-bluetooth">Loa nghe nhạc</a>
                                            <a href="/the-nho-dien-thoai">Thẻ nhớ</a>
                                            <br />
                                            <p class="menuitem__title">PHỤ KIỆN LAPTOP<a href="/phu-kien">Xem tất cả</a></p>
                                            <a href="/usb">USB</a>
                                            <a href="/o-cung-di-dong">Ổ cứng</a>
                                            <a href="/chuot-may-tinh">Chuột</a>
                                            <a href="/ban-phim">Bàn phím</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">PHỤ KIỆN ĐIỆN MÁY</p>
                                            <a href="/cap-hdmi-cap-tivi">Cáp HDMI, Cáp tivi</a>
                                            <a href="/khung-treo-tivi">Khung treo Tivi</a>
                                            <a href="/dieu-khien-tivi">Điều khiển Tivi</a>
                                            <a href="/gia-do-may-giat">Giá đỡ máy giặt</a>
                                            <a href="/dan-loa-dvd-loa-thanh">Loa soundbar</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">THIẾT BỊ MẠNG<a href="/thiet-bi-mang">Xem tất cả</a></p>
                                            <a href="/thiet-bi-mang-tp-link">Thiết bị mạng TP-LINK</a>
                                            <a href="/thiet-bi-mang-totolink ">Thiết bị mạng TotoLink</a>
                                            <a href="/thiet-bi-mang-asus">Thiết bị mạng Asus</a>
                                            <a href="/thiet-bi-mang-xiaomi">Thiết bị mạng Xiaomi</a>
                                            <a href="/thiet-bi-mang-tenda">Thiết bị mạng Tenda</a>
                                            <a href="/thiet-bi-mang-linksys">Thiết bị mạng LINKSYS</a>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-11">
                                    <div class="dropdown">
                                        <span>
                                        <span>
                                        <i class="icon-maycu"></i>
                                        </span>
                                        </span>
                                        <a href="/may-doi-tra">Máy cũ, trưng bày</a>
                                    </div>
                                    <div id="submenu-11" class="submenu gd-menu menu-new">
                                        <aside class="autow">
                                            <p class="menuitem__title">Tivi, dàn loa âm thanh</p>
                                            <div>
                                                <a href="/may-doi-tra/tivi">Tivi</a>
                                                <a href="/may-doi-tra/dan-loa-dvd">Loa Karaoke</a>
                                                <a href="/may-doi-tra/micro">Micro</a>
                                            </div>
                                            <p class="menuitem__title">Điện gia dụng<a href="/may-doi-tra/dien-gia-dung">Xem tất cả</a></p>
                                            <div>
                                                <a href="/may-doi-tra/quat">Quạt</a>
                                                <a href="/may-doi-tra/noi-com-dien">Nồi cơm</a>
                                                <a href="/may-doi-tra/may-xay-sinh-to">Sinh tố/ Xay ép</a>
                                                <a href="/may-doi-tra/bep-tu">Bếp điện</a>
                                                <a href="/may-doi-tra/bep-gas">Bếp gas</a>
                                                <a href="/may-doi-tra/ban-ui">Bàn ủi</a>
                                            </div>
                                        </aside>
                                        <aside class="autow">
                                            <p class="menuitem__title">Tủ lạnh, tủ đông</p>
                                            <div>
                                                <a href="/may-doi-tra/tu-lanh">Tủ lạnh</a>
                                                <a href="/may-doi-tra/tu-dong">Tủ đông</a>
                                            </div>
                                            <p class="menuitem__title">Máy lạnh, quạt điều hòa</p>
                                            <div>
                                                <a href="/may-doi-tra/may-lanh">Máy lạnh</a>
                                                <a href="/may-doi-tra/quat-dieu-hoa">Quạt điều hòa</a>
                                            </div>
                                        </aside>
                                        <aside class="autow">
                                            <p class="menuitem__title">Máy giặt, máy sấy</p>
                                            <div>
                                                <a href="/may-doi-tra/may-giat">Máy giặt</a>
                                                <a href="/may-doi-tra/may-say-quan-ao">Máy sấy</a>
                                            </div>
                                            <p class="menuitem__title">Máy lọc nước, nước nóng</p>
                                            <div>
                                                <a href="/may-doi-tra/may-loc-nuoc">Máy lọc nước</a>
                                                <a href="/may-doi-tra/may-nuoc-nong">Máy nước nóng</a>
                                                <a href="/may-doi-tra/cay-nuoc-nong-lanh">Cây nước nóng lạnh</a>
                                            </div>
                                        </aside>
                                        <aside class="autow">
                                            <p class="menuitem__title">Phụ kiện, loa<a href="/may-doi-tra/phu-kien">Xem tất cả</a></p>
                                            <div>
                                                <a href="/may-doi-tra/pin-sac-du-phong">Pin sạc dự phòng</a>
                                                <a href="/may-doi-tra/chuot-may-tinh">Chuột</a>
                                                <a href="/may-doi-tra/cap-dien-thoai">Cáp sạc/ Adapter</a>
                                                <a href="/may-doi-tra/tai-nghe-day">Tai nghe</a>
                                                <a href="/may-doi-tra/phu-kien-dien-may">Phụ kiện điện máy</a>
                                                <a href="/may-doi-tra/loa-laptop">Loa laptop</a>
                                            </div>
                                            <p class="menuitem__title">Viễn thông</p>
                                            <div>
                                                <a href="/may-doi-tra/dien-thoai">Điện thoại</a>
                                                <a href="/may-doi-tra/may-tinh-bang">Máy tính bảng</a>
                                                <a href="/may-doi-tra/laptop">Laptop</a>
                                                <a href="/may-doi-tra/dong-ho-thong-minh">Đồng hồ thông minh</a>
                                            </div>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-12">
                                    <div class="dropdown">
                                        <span>
                                        <i class="icon-xedap"></i>
                                        </span>
                                        <a href="/xe-dap?v=ldp">Xe đạp</a>,
                                        <a href="/phu-kien-xe-dap"> Phụ kiện xe đạp</a>
                                    </div>
                                    <div id="submenu-12" class="submenu">
                                        <aside>
                                            <p class="menuitem__title">XE ĐẠP<a href="/xe-dap?v=ldp">Xem tất cả</a></p>
                                            <a href="/xe-dap-giant">Giant</a>
                                            <a href="/xe-dap-fornix">Fornix</a>
                                            <a href="/xe-dap-sava">Sava</a>
                                            <a href="/xe-dap-fascino">Fascino</a>
                                            <a href="/xe-dap-life">Life</a>
                                            <a href="/xe-dap-royalbaby">RoyalBaby</a>
                                            <a href="/xe-dap-tap-the-thao">Xe đạp thể thao</a>
                                            <a href="/xe-dap-dia-hinh-mountain-bike-mtb">Xe đạp địa hình</a>
                                            <a href="/xe-dap-tre-em">Xe đạp trẻ em</a>
                                            <a href="/xe-dap-dua-road-bike">Xe đạp đua</a>
                                            <a href="/xe-dap-duong-pho-city-bike">Xe đạp thành phố</a>
                                            <a href="/xe-dap-tra-gop-0-phan-tram ">Xe đạp trả góp 0%</a>
                                        </aside>
                                        <aside>
                                            <p class="menuitem__title">PHỤ KIỆN XE ĐẠP<a href="/phu-kien-xe-dap">Xem tất cả</a></p>
                                            <a href="/phu-kien-xe-dap-mu-bao-hiem-xe-dap">Mũ bảo hiểm</a>
                                            <a href="/phu-kien-xe-dap-binh-nuoc">Bình nước</a>
                                            <a href="/phu-kien-xe-dap-bo-den">Bộ đèn</a>
                                            <a href="/phu-kien-xe-dap-tui-deo">Túi đeo</a>
                                            <a href="/phu-kien-xe-dap-chan-chong">Chân chống</a>
                                            <a href="/phu-kien-xe-dap-khoa-day">Khoá dây</a>
                                            <a href="/phu-kien-xe-dap-gong-nuoc">Gọng nước</a>
                                            <a href="/phu-kien-xe-dap-gang-tay">Găng tay</a>
                                        </aside>
                                    </div>
                                </li>
                                <li data-submenu-id="submenu-13">
                                    <div class="dropdown">
                                        <span>
                                        <span>
                                        <i class="icon-dichvu"></i>
                                        </span>
                                        </span>
                                        <p class="submenu__name">Dịch vụ hữu ích</a>
                                    </div>
                                    <div id="submenu-13" class="submenu gd-menu menu-new">
                                        <aside class="w220">
                                            <p class="menuitem__title">DỊCH VỤ HỮU ÍCH</p>
                                            <div>
                                                <a href="/sim-so-dep">Sim số, thẻ cào<span class="menuitem__label">Giảm 5%</span></a>
                                                <a href="https://www.thegioididong.com/tien-ich/thanh-toan-tra-gop">Thu hộ</a>
                                                <a href="/ve-sinh-may-lanh">Vệ sinh Máy lạnh - Máy giặt - Quạt</a>
                                                <a href="https://www.dichvutantam.com/#suachuadiennuoc">Sửa chữa Điện - Nước<span class="menuitem__label">Mới</span></a>
                                                <a href="https://www.bachhoaxanh.com/">Đi chợ online</a>
                                            </div>
                                        </aside>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="txt-list" data-id="706">
                        <li><a data-cate="0" data-place="706" href="https://www.dienmayxanh.com/may-giat" onclick="jQuery.ajax({ url: '/bannertracking?bid=46706&r='+ (new Date).getTime(), async: true, cache: false });">Máy giặt giảm sốc đến 31%</a></li>
                        <li><a data-cate="0" data-place="706" href="https://www.dienmayxanh.com/xe-dap?v=ldp" onclick="jQuery.ajax({ url: '/bannertracking?bid=46742&r='+ (new Date).getTime(), async: true, cache: false });">Xe đạp giảm sốc 20% + Quà Hot</a></li>
                        <li><a data-cate="75,55,2002,1882,2402,822,2528,1987,56,1990,2222,2064,1922,2428,2062,1962,1943,522,54,1983,86,44,462,1944,1991,2023,2342,42,2302,346,2262,0,85,58,2102,1988,2065,1363,443,60,2322,2403,1982,1985,1986,2063,1662,1942,57,1992,1989,166,2162,2529,1742,2182,1984,2142,482,2202" data-place="706" href="https://www.dienmayxanh.com/gia-dung-online-only" onclick="jQuery.ajax({ url: '/bannertracking?bid=27911&r='+ (new Date).getTime(), async: true, cache: false });">Gia dụng Online giảm sốc đến 45%</a></li>
                    </ul>
                </section>
            </div>
        </header>

        @yield('content')

        <footer class="footer">
            <section class="clearfix footer__top">
                <div class="footer__col">
                    <ul class="f-listmenu">
                        <li><a rel="nofollow" href="/ve-sinh-may-lanh">DV vệ sinh máy lạnh, máy giặt, quạt</a></li>
                        <li>
                            <a rel="nofollow" href="https://www.dichvutantam.com#suachuadiennuoc" class="txt-nowrap"><b>Dịch vụ Sửa Điện - Nước</b></a>
                            <span class="link-item__label__new">Mới</span>
                            <br /> Dành cho Gia đình, Doanh nghiệp
                        </li>
                        <li><a rel="nofollow" href="/lich-su-mua-hang">Lịch sử mua hàng</a></li>
                        <li><a rel="nofollow" href="/daily">Cộng tác bán hàng cùng TGDĐ</a></li>
                        <li><a rel="nofollow" href="/tra-gop">Tìm hiểu về mua trả góp</a></li>
                        <li><a href="javascript:void(0)" class="arrow showtaga">Xem thêm</a></li>
                        <li class="hidden"><a rel="nofollow" href="/bao-hanh">Chính sách bảo hành</a></li>
                        <li class="hidden"><a rel="nofollow" href="/bao-hanh-doi-tra">Chính sách đổi trả</a></li>
                        <li class="hidden"><a rel="nofollow" href="/kinh-nghiem-hay/chinh-sach-giao-hang-lap-dat-1261528">Giao hàng, lắp đặt</a></li>
                        <li class="hidden"><a rel="nofollow" href="/huong-dan-mua-hang">Hướng dẫn mua online</a></li>
                        <li class="hidden"><a rel="nofollow" href="/b2b">Bán hàng doanh nghiệp</a></li>
                        <li class="hidden"><a rel="nofollow" href="/phieu-mua-hang">Phiếu mua hàng</a></li>
                        <li class="hidden"><a rel="nofollow" href="http://hddt.thegioididong.com">In hóa đơn điện tử</a></li>
                        <li class="hidden"><a rel="nofollow" href="/dieu-khoan-su-dung">Quy chế hoạt động</a></li>
                        <li class="hidden"><a rel="nofollow" href="/noi-quy-cua-hang">Nội quy cửa hàng</a></li>
                        <li class="hidden"><a rel="nofollow" href="/chat-luong-phuc-vu">Chất lượng phục vụ</a></li>
                        <li class="hidden"><a rel="nofollow" href="/kinh-nghiem-hay/canh-bao-gia-mao-dien-may-xanh-1123837">Cảnh báo giả mạo</a></li>
                        <li class="hidden"><a rel="nofollow" href="/chinh-sach-khui-hop-apple">Chính sách khui hộp sản phẩm Apple</a></li>
                    </ul>
                </div>
                <div class="footer__col">
                    <ul class="f-listmenu">
                        <li><a rel="nofollow" href="/gioi-thieu">Giới thiệu công ty (MWG.vn)</a></li>
                        <li><a rel="nofollow" href="http://vieclam.thegioididong.com">Tuyển dụng</a></li>
                        <li><a rel="nofollow" href="/lien-he">Gửi góp ý, khiếu nại</a></li>
                        <li><a rel="nofollow" href="/he-thong-sieu-thi-dien-may">Tìm siêu thị (2036 shop)</a></li>
                        <li><a rel="nofollow" class="linkversion" href="http://www.dienmayxanh.com/?sclient=mobile">Xem bản mobile</a></li>
                    </ul>
                </div>
                <div class="footer__col">
                    <div class="f-listtel">
                        <p class="f-listtel__title">
                            <strong>Tổng đài hỗ trợ</strong> (Miễn phí gọi)
                        </p>
                        <p class="f-listtel__content"><span>Gọi mua:</span> <a href="tel:18001061">1800.1061</a> (7:30 - 22:00)</p>
                        <p class="f-listtel__content"><span>Kỹ thuật:</span> <a href="tel:18001764">1800.1764</a> (7:30 - 22:00)</p>
                        <p class="f-listtel__content"><span>Khiếu nại:</span> <a href="tel:18001063">1800.1063</a> (8:00 - 21:30)</p>
                        <p class="f-listtel__content"><span>Bảo hành:</span> <a href="tel:18001065">1800.1065</a> (8:00 - 21:00)</p>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="f-social">
                        <a rel="nofollow" href="https://facebook.com/dienmayxanhcom" target="_blank">
                        <i class="icon-facebook"></i>
                        1849.2k Fan
                        </a>
                        <a rel="nofollow" href="https://www.youtube.com/user/dienmaycom" target="_blank">
                        <i class="icon-youtube"></i>
                        587k Đăng ký
                        </a>
                    </div>
                    <div class="f-certify">
                        <a rel="nofollow" href="http://online.gov.vn/Home/WebDetails/20782" target="_blank">
                        <i class="icon-congthuong"></i>
                        </a>
                        <a rel="nofollow" href="/dieu-khoan-su-dung#giai-quyet-khieu-nai" target="_blank">
                        <i class="icon-khieunai"></i>
                        </a>
                        <a rel="nofollow" class="dmca-badge" href="https://www.dmca.com/Protection/Status.aspx?ID=69bc7638-1181-4a0f-ab78-247bea1eab81" target="_blank">
                        <i class="icon-protected"></i>
                        </a>
                        <a rel="nofollow" class="" href="https://tinnhiemmang.vn/danh-ba-tin-nhiem/dienmayxanhcom-1632835471" target="_blank">
                        <i class="icon-ncsc"></i>
                        </a>
                    </div>
                    <div class="f-website">
                        <p class="f-website-title">Website cùng tập đoàn</p>
                        <a rel="nofollow" href="https://www.thegioididong.com/">
                        <i class="icon-tgdd"></i>
                        </a>
                        <a rel="nofollow" href="https://www.bachhoaxanh.com/">
                        <i class="icon-bhx"></i>
                        </a>
                        <a rel="nofollow" href="https://www.maiamtgdd.vn/">
                        <i class="icon-maiam"></i>
                        </a>
                    </div>
                </div>
            </section>
            <div class="copyright">
                <section>
                    <!-- <p>
                        © 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.<br>
                        Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. <a rel="nofollow" href="/thoa-thuan-su-dung-trang-mxh">Xem chính sách sử dụng</a>
                    </p> -->
                </section>
            </div>
        </footer>
        <script src="https://cdn.tgdd.vn/mwgcart/mwgcore/js/bundle/globalDMX.min.v202201141000.js" type="text/javascript"></script>

        @stack('script')
         <script src="https://cdn.tgdd.vn/mwgcart/mwgcore/js/bundle/globalDMX.min.v202201240310.js" type="text/javascript"></script>
        <script async="async" defer="defer" src="https://cdn.tgdd.vn/mwgcart/mwgcore/js/bundle/homeDMX.min.v202201141000.js" type="text/javascript"></script>
        <script async="async" defer="defer" src="https://cdn.tgdd.vn/mwgcart/mwgcore/js/bundle/homeGTM.min.v202111271240.js" type="text/javascript"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            
            dataLayer.push({ 'pageType':'Home','pagePlatform':'Web','pageStatus':'Kinh doanh'})
            
        </script>
      
    </body>
</html>