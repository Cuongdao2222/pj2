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
                        @if(isset($filter))
                        @foreach($filter as $filters)

                        <?php
                            $propertyId =  App\Models\property::where('filterId', $filters->id)->get();
                        ?>

                        <div class="filter-item block-manu ">
                            <select class="form-control" id="selectfilter{{ $filters->id }}" name="selectfilter" onchange='mySelectHandler("{{ $filters->id }}")'>
                                <option value="0">{{ $filters->name }}</option>
                                @if(isset($propertyId))
                                @foreach($propertyId as $property)
                                <option value="{{ $property->id}}"> {{ $property->name}}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        
                        @endforeach
                        @endif
                       
            </section>
        </div>
        <section id="categoryPage" class="desktop" data-id="1942" data-name="Tivi" data-template="cate">
            <div class="box-sort ">
                 @if(count($data)>0)
                <p class="sort-total"><b>153</b> Tivi <strong class="manu-sort"></strong></p>
                @endif
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
                    @if($value->active==1)
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
                    @endif
                    @endforeach

                    @else
                    <h2>Không tìm thấy sản phẩm</h2>
                    @endif
                </ul>
                <!-- <div class="view-more ">
                    <a href="javascript:;">Xem thêm <span class="remain">133</span> Tivi</a>
                </div> -->
            </div>
          
            <div class="errorcompare" style="display:none;"></div>
           <!--  <div class="block__banner banner__topzone">
                <a data-cate="0" data-place="1919" href="https://www.topzone.vn/" onclick="jQuery.ajax({ url: '/bannertracking?bid=48557&r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2021/12/banner/Frame4879-1200x120.jpg" alt="Promote Topzone" width="1200" height="120"></a>
            </div> -->
            <div class="watched"></div>
            <div class="overlay"></div>
        </section>
        @push('script')
        <script type="text/javascript">
            var filter = [];
            function mySelectHandler(filters){
                

                // filter.push($('#selectfilter'+filters).val());

                filter['filter'+String(filters)] = $('#selectfilter'+filters).val();

                console.log(filter);
                
            }

        </script>
        @endpush
@endsection 

        