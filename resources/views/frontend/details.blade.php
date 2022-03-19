

@extends('frontend.layouts.apps')

@section('content') 


        @push('style')
        <style type="text/css">

           /* block show when  scroll*/

           /*form đánh giá */

           div.stars {
              width: 270px;
              display: inline-block;
              

            }
            .rate-text{
                height: 50px;
            }

            .inputText {
                display: block;
                width: 100%;
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555;
                background-color: #fff;
                background-image: none;
                border: 1px solid #ddd;
            }

            .form-input .btn-red {
                background: #288ad6;
                color: #fff;
                padding: 11px 20px;
                font-size: 15px;
                border-radius: 0;
                -moz-border-radius: 0px;
                border: solid 1px #288ad6;
            }    
             
            input.star { display: none; }
             
            label.star {
              float: right;
              padding: 10px;
              font-size: 36px;
              color: #444;
              transition: all .2s;
              cursor: pointer;

            }
             
            input.star:checked ~ label.star:before {
              content: '\f005';
              color: #FD4;
              transition: all .25s;
            }
             
            input.star-5:checked ~ label.star:before {
              color: #FE7;
              text-shadow: 0 0 20px #952;
            }
             
            input.star-1:checked ~ label.star:before { color: #F62; }
             
            label.star:hover { transform: rotate(-15deg) scale(1.3); }
             
            label.star:before {
              content: '\f006';
              font-family: FontAwesome;
            }

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
            .rate_view {
                margin-bottom: 10px;
            }
            
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
                .banner-item-1{
                    display: none;
                }
                .pdetail-price-box{

                    text-align: right;
                    height: 40px;
    
                }
                .pdetail-price h3 {
                    float: none !important;
                 }   
                 .pdetail-info, .pdetail-stockavailable{
                    text-align: right;
                 }
                 .box_right{
                    width: 100% !important;
                 }
                 .box_left{
                    padding: 15px;
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
       
        <section data-id="235791" data-cate-id="1942" class="detail ">
            <ul class="breadcrumb">
                <?php  
                    $groupProduct = App\Models\groupProduct::find($data->Maker);

                    
                ?>
                <li>
                    <a href="/tivi">Trang chủ</a>
                    <meta property="position" content="1">
                </li>
                <li>
                    <span>›</span>
                    <a href="/{{ $groupProduct->link }}">{{ $groupProduct->name }}</a>
                    <meta property="position" content="2">
                </li>
                <!-- <li>
                    <span>›</span>
                    <a href="/tivi?g=smart-tivi">Smart Tivi</a>
                    <meta property="position" content="3">
                </li> -->
                <li>
                    <span>›</span>
                    <a href="{{ route('details',$data->Link) }}">{{ $data->Name }}</a>
                    <meta property="position" content="4">
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
                        <p class="detail-rate-total"> <span>Đánh giá</span></p>
                    </div>
                </div>
                
            </div>
            <div class="like-fanpage" data-url="http://www.dienmayxanh.com/tivi/led-4k-samsung-ua50au8100"></div>
            <div class="box_main">
                <div class="box_left">
                    <div class="box01">
                        <div class="box01__show">
                            <div class="owl-carousel detail-slider" id="carousel">
                                 <div class="item">
                                    <img src="{{ asset($data->Image) }}">
                                </div>
                                @isset($images)
                                @foreach($images as $image)
                                <div class="item">
                                    <img src="{{ asset($image->image) }}">
                                </div>
                                @endforeach
                                @endisset
                               
                            </div>
                        </div>
                       
                    </div>


                    <div class="pay mobile">
                        <div class="col-12 pdetail-des">
                            <div class="clearfix"></div>
                            <div>
                                <div class="pdetail-info">
                                    <p>Model: <b>{{ @$data->ProductSku  }}</b></p>
                                    <!-- <p>Bảo hành: <b>24 Tháng, 1 đổi 1 trong vòng 1 tháng</b></p> -->
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
                                            <div class="inline">
                                                <input type="hidden" name="productId" value="{{ $data->id }}">
                                                <!-- <div class="product-quantity">
                                                    <input type="text" class="quantity-field" readonly="readonly" name="qty" value="1">
                                                </div> -->
                                                <button type="button" class="btn btn-lg btn-add-cart btn-add-cart redirectCart" onclick="addToCart({{ $data->id }})">MUA NGAY <br>(Giao hàng tận nơi - Giá tốt - An toàn)</button>
                                            </div>
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

                    <div class="total-imgslider">
                        <a id="show-popup-featured-images-gallery" style="display: block" href="javascript:void(0)" data-is-360-gallery="False" class="read-full" data-gallery-id="featured-images-gallery" data-color-id="0">Xem tất cả điểm nổi bật</a>
                       
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
                <div class="box_right desktop">
                    
                    <div class="col-12 pdetail-des">
                        <div class="clearfix"></div>
                        <div>
                            <div class="pdetail-info">
                                <p>Model: <b>{{ @$data->ProductSku  }}</b></p>
                                <!-- <p>Bảo hành: <b>24 Tháng, 1 đổi 1 trong vòng 1 tháng</b></p> -->
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

                <div class="clearfix"></div>

                <div class="col-md-8 clearfix" id="comment_pro">
                    <div class="rate-text">
                        <!-- <h3 style="margin-bottom: 0;margin-top: 40px;"> Đánh giá  {{ $data->Name }}</h3> -->
                        <p style="background: #f3f3f3;padding: 10px;border-radius: 3px;margin: 10px 0;">Đánh giá sản phẩm nhận Coupon 20.000đ dành cho khách mua hàng tại Điện máy người việt.</p>
                    </div>
                    <div class="p-comment">
                        <form class="comment-form" name="rate-form" id="rate-form" role="form">
                            <div class="rate_view">
                                Chọn đánh giá của bạn:
                                <div class="stars">
                                    <div>
                                        <input class="star star-click star-5" id="star-5" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5"></label>
                                        <input class="star star-click star-4" id="star-4" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4"></label>
                                        <input class="star star-click star-3" id="star-3" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3"></label>
                                        <input class="star star-click star-2" id="star-2" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2"></label>
                                        <input class="star star-click star-1" id="star-1" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1"></label>
                                    </div>
                                </div>
                            </div>


                            <div class="relative">
                                <div class="left">
                                    <textarea style="padding: 10px;border-radius: 3px; width: 100%;" name="content" placeholder="Nhập đánh giá về sản phẩm " id="content0"></textarea>
                                </div>
                                <div class="left">
                                    <div class="form-input">
                                        
                                        <table style="width:100%;" class="tbl-common">
                                            <tbody>
                                                <tr>
                                                    <td style="padding-right: 5px;">
                                                        <input style="border-radius: 3px;height: 43px;" type="text" id="name0" name="name" class="inputText" placeholder="Họ tên" value="">
                                                    </td>
                                                    <td style="padding-left: 5px;">
                                                        <input style="border-radius: 3px;height: 43px;" type="text" id="email0" name="email" class="inputText" placeholder="Email" value="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input style="margin-top: 15px;width: calc(100% - 6px);border-radius: 3px;" type="submit" value="Gửi bình luận" class="btn btn-red" onclick="postComment()"></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--form-input-->
                                </div>
                            </div>

                            
                            
                        </form>
                        <input type="hidden" name="star" id="star_number" value="5">
                        <!--comment-form-->
                    </div>
                </div>

                <!-- end đánh giá -->
                <div class="related view-more-related">
                    <p class="related__ttl">Xem thêm tivi khác</p>

                    @if(isset($other_product))
           
                    <div class="listproduct slider-promo owl-carousel banner-sales">

                        @foreach($other_product as  $value)
                        @if($value->active==1)
                        <div class="item">
                            <a href='{{ route('details', $value->Link) }}' class=" main-contain">
                                <div class="item-label">
                                </div>
                                <div class="item-img">
                                    <img data-src="{{ asset($value->Image) }}" class="lazyload" alt="{{ $value->Name }}" width=210 height=210>
                                </div>
                               <!--  <p class='result-label temp1'><img width='20' height='20' class='lazyload' alt='Giảm Sốc' data-src='https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png'><span>Giảm Sốc</span></p> -->
                                <h3>{{ $value->Name }}</h3>
                               
                                <strong class="price">{{  str_replace(',' ,'.', number_format($value->Price))  }}&#x20AB;</strong>
                            
                            </a>
                        </div>
                        @endif

                        @endforeach
                        
                    </div>
                    @endif
            <!-- <a class="readmore-btn" href="https://www.dienmayxanh.com/flashsale#game"><span>Xem tất cả</span></a> -->
                </div>
                    <!-- <div class="scrolling_inner">
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
                    </div> -->
                    
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
         
        
        </section>
    
        
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
           
                  
        <div class="prod-info-left fl">          
                
        <!-- <div class="space3px txt_555">Giá thị trường: <span class="txt_d">3.055.000đ</span></div> -->
                  
        <div class="price">Giá: 
            <span class="robot txt_green txt_b txt_20">{{  str_replace(',' ,'.', number_format($value->Price))  }} &#x20AB;</span>
        </div>
          
        <div class="clear space3px"></div>
        
        <div class="clear space10px"></div>
              
        <div class="promo line_h19">
            <div class="txt_b">Khuyến mại</div>
           <!--  <p>-&nbsp;Cam kết sản phẩm mới 100%, nguyên đai nguyên kiện
            <br>-&nbsp;Bảo hành chính hãng&nbsp;1 năm
            <br>-&nbsp;Thùng có: Đĩa thủy tinh, Giá nướng
            <br>-&nbsp;Giao hàng miễn phí trong 30km
            <br>-&nbsp;Đền gấp 10 lần nếu không phải hàng chính hãng</p> -->
            
        </div>
          
         
  <div class="buy-group">
    
    
    <div class="clear space10px in">
     
        <a class="btn-buy txt_center cor5px" onclick="addToShoppingCart('pro','3036',document.getElementById('s_quantity').value,'2350000');" href="javascript:;">
            <i class="fa fa-shopping-cart"></i> <span class="txt_15" onclick="addToCart({{ $data->id }})">Thêm Vào Giỏ Hàng</span>
        </a>
        
    </div>
    
      Gọi đặt mua:  <span class="txt_b txt_red"><a href="tel:0967025111">098 361 2828</a></span> (sau 17h)<br>
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="txt_b txt_red"> <a href="tel:02438615111">091 301 1888</a></span> (sau 17h)
   </div>
    
    
        <div class="clear"></div>
    </div><!--//prod-info-left -->
  
  <div class="prod-info-right fr">
    <h4 class="format txt_13"><p class="format txt_b">Yên tâm mua sắm:</p></h4>
  
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Bảo hành tại nhà</p></h5>
    <h5 class="format txt_13 txt_n">
      <p><i class="fa fa-check"></i> Gọi đặt mua: <span class="txt_b txt_red">02473036336</span> (cả dịp Lễ, Tết)</p></h5>
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Giao hàng miễn phí 20km</p></h5>
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Lắp đặt miễn phí
(Trừ điều hòa, bình nước nóng)</p></h5>
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Thanh toán tại nhà</p></h5>
    <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Giá cạnh tranh nhất thị trường</p></h5>
     <h5 class="format txt_13 txt_n"><p><i class="fa fa-check"></i> Đổi mới 100% trong 7 ngày đầu
( Trừ Sanaky, Sony chỉ bảo hành tại nhà )</p></h5>
  
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
    .error{
        opacity: 1 !important;
        text-align: left !important;
    }

    


    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/details.css?v=1') }}">

    

@endpush

    @push('script')
    

        <script type="text/javascript">


            $( document ).ready(function() {


                

                $('.star-click').bind('click',function(){
                    id_star = $(this).attr('id');    
                    number_star = id_star.substr(5, 6);
                    $('#star_number').val(number_star);
                    // console.log(number_star);
                   
                });

                $("#rate-form").validate({
                    rules: {
                        name: "required",
                        content: "required",
                        email: {
                            required: true,
                            email: true
                        },
                       
                    },
                     messages: {
                        name: "vui lòng nhập tên",
                        content: "vui lòng nhập đánh giá",
                       
                        email: {
                            required: "vui lòng nhập địa chỉ email",
                            email: "vui lòng nhập đúng định dạng email"
                        },
                      
                    },
                    submitHandler: function(form) {
                       return false;

                    }
                   

                }); 

            });  


            function postComment() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "{{ route('rate-form') }}",
                    data: {
                        product_id: {{ $data->id }},
                        email:$('#email0').val(),
                        name:$('#name0').val(),
                        content:$('#content0').val(),
                        star:$('#star_number').val(),
                           
                    },
                    success: function(result){
                      
                      alert(result);
                    }
                });

            }  


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

            $('.bar-top-left').hide();
            
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

            $('#carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                autoplay:true,
                responsive:{
                    0:{
                        items:1

                    },
                    600:{
                        items:4
                    },
                    
                    1000:{
                        items:1
                    }
                }
            });

            $('.listproduct').owlCarousel({
                loop:false,

                margin:10,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:5
                    }
                }
            });

        </script>




    @endpush

@endsection  