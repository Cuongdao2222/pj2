<?php
   
    foreach ($data_cart as $key => $value) {
         print_r($value);
    }
    die();
?>
<div id="tbl_list_cart">
    <div style="width:100%;">
        @foreach($data_cart as $data)
        <div class="js-item-row product_list_cart" data-variant_id="0" data-item_id="5804" data-item_type="product">
            <div class="cart_col_1">
                <a href="/smart-tivi-lg-43lm5750ptc-43-inch-full-hd/"><img src="https://dienmaynguoiviet.vn/media/product/75_5804_43lm5750ptc_bng.jpg"></a>
               <!--  <a href="javascript:void(0)" class="delete-from-cart"><i class="far fa-times-circle"></i> Xóa</a> -->
            </div>
            <div class="cart_col_2">
                <a href="/smart-tivi-lg-43lm5750ptc-43-inch-full-hd/"><span class="name">{{ $data['name'] }}</span></a>
                <!--//Kiem tra khuyen mai co lua chon-->
                <ul style="list-style-type: disc;color: #888888;margin-left: 15px;">
                </ul>
                //Kiem tra add-on co lua chon1
            </div>
            <div class="cart_col_3">
                <div class="col_price code1">
                    
                    <span class="total-item-price">{{ number_format($data['price'] , 0, ',', '.')}} </span> đ
                </div>
                <div class="col_input">
                    <a href="javascript:void(0);location.reload();" class="quantity-change" data-value="-1" title="tru">-</a>
                    <input class="buy-quantity quantity-change" value="1" size="5" disabled="">
                    <a href="javascript:void(0);location.reload();" class="quantity-change" data-value="1" title="them">+</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>


    
    <div class="cart-foot">
        <b>Tổng tiền:</b>
        <span style="float: right;"><span class="sub1 total-cart-price">15.480.000</span> đ</span>
    </div>
</div>