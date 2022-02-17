<ul class="listproduct">

    @foreach($product_search as $value)
    @if($value->active==1)
    <li class=" item  __cate_1942" data-index="1" data-id="238784" data-issetup="1" data-maingroup="304" data-subgroup="1094" data-type="1" data-vehicle="2" data-productcode="3041094001252" data-price="20900000.0" data-ordertypeid="2" data-pos="1">
        <a href="/{{ $value->Link  }}" data-s="Nomal" data-site="2" data-pro="3" data-cache="True" data-sv="webdmx-26-94" data-name="Android Tivi Sony 4K 55 inch KD-55X80J" data-id="238784" data-price="20400000.0" data-brand="Sony" data-cate="Tivi" data-box="BoxCate" class="main-contain">
            <div class="item-label">
                <span class="lb-tragop">Trả góp 0%</span>
            </div>
            <div class="item-img item-img_1942">
                <img class="thumb lazyloaded" data-src="{{ asset($value->Image) }}" alt="{{ $value->Name }}" src="{{ asset($value->Image) }}">
            </div>
            <p class="result-label temp1"><img width="20" height="20" class=" lazyloaded" alt="Giảm Sốc" data-src="https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png" src="https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png"><span>Giảm Sốc</span></p>
            <h3>
                {{ $value->Name }}
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
    
</ul>