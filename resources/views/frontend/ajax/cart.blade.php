
<div id="number-product-cart" style="display:none">{{ count($data_cart) }}</div>
<div style="width:100%;">
    <?php  

        $arrPrice = [];
    ?>
    @foreach($data_cart as $data)
        <?php    
         

            array_push($arrPrice, $data->price);

        ?>

    <div class="js-item-row product_list_cart" data-variant_id="0" data-item_id="5804" data-item_type="product">

        <div class="cart_col_1">
            <a href="/smart-tivi-lg-43lm5750ptc-43-inch-full-hd/"><img src="https://dienmaynguoiviet.vn/media/product/75_5804_43lm5750ptc_bng.jpg"></a>
           
        </div>
        <div class="cart_col_2">
            <a href="/smart-tivi-lg-43lm5750ptc-43-inch-full-hd/"><span class="name">{{ $data->name }}</span></a>
            <!--//Kiem tra khuyen mai co lua chon-->
            <ul style="list-style-type: disc;color: #888888;margin-left: 15px;">
            </ul>
            
        </div>
        <div class="cart_col_3">
            <div class="col_price code1">
                
                <span class="total-item-price">{{ number_format($data->price , 0, ',', '.')}} </span> đ


            </div>
            <div class="col_input">
                <a href="javascript:void(0);location.reload();" class="quantity-change" data-value="-1" title="tru">-</a>
                <input class="buy-quantity quantity-change" value="1" size="5" disabled="">
                <a href="javascript:void(0);location.reload();" class="quantity-change" data-value="1" title="them">+</a>
            </div>
        </div>

        <a href="javascript:void(0)" class="delete-from-cart" onclick="removeProductCart('{{ $data->rowId }}')"><i class="fa fa-times-circle"></i> Xóa</a>
    </div>
    @endforeach

    <?php 

        $totalPrice = array_sum($arrPrice);
    ?>

</div>



<div class="cart-foot">
    <b>Tổng tiền:</b>
    <span style="float: right;"><span class="sub1 total-cart-price">{{ number_format($totalPrice , 0, ',', '.')}}</span> đ</span>
</div>

<script type="text/javascript">
    
    function removeProductCart(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'POST',
            url: "{{ route('removeCart') }}",
            data: {
                product_id: id,
                   
            },
            success: function(result){
              
               // numberCart = result.find("#number-product-cart").text();

               $('#tbl_list_carts').html('');

                $('#tbl_list_carts').append(result);

                const numberCart = $('#number-product-cart').text();

                $('.number-cart').text(numberCart);

                $('#exampleModal').modal('show'); 
                
            }
        });


    }
</script>
