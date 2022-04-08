<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title>Trả góp online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Trả góp online">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style type="text/css">
            .require {
            color: red;
            }
            .form-group.col-sm-5{margin: 5px;}
            #header {
            background: #0083d1;
            overflow: hidden;
            padding: 8px 10px;
            }
            .btn-info {
            color: #fff;
            background-color: #333 !important;
            border-color: #333;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <a href="/" style="float: left;"><img src="/uploads/product/1642667048_5767_77c1ptb_501.jpg" alt="" style="height:34px;"></a>
            <h1 style="color: #fff;text-transform: uppercase;font-weight: bold;font-size: 22px;margin: 5px 20px;float: left;">Trả góp online</h1>
        </div>
        <div id="container" class="container">
            <div class="col-sm-5 col-xs-12">
                <h3 id="titleItem">
                    Smart tivi LG 65UP7720PTC 65 inch 4K
                </h3>
                <br>
                <p><img src="/uploads/product/1642667048_5767_77c1ptb_501.jpg" width="250" alt="Smart tivi LG 65UP7720PTC 65 inch 4K"></p>
                <p class="txt_u txt_red txt_18"><strong>Giá</strong>: <span class="price_info price_config" data-price="18960000" style="color:#e00; font-weight:bold;">18.960.000VND</span></p>
                <p id="config-info"></p>
                <p><strong>Bảo hành</strong>: 24 Tháng
                </p>
                <p><b>Tình trạng: </b> Còn hàng</p>
                <p>&nbsp;</p>
            </div>
            <!--col-->
            <div class="col-sm-7">
                <h3>Thông tin khách hàng</h3>
                <form class="form-" role="form" method="POST" id="formSubmit" action="{{ route('alepay') }}">

                    @csrf
                    <div class="form-group col-sm-5">

                        <label class="control-label">Tổng Tiền <span class="require">(*)</span></label>

                        <input type="text" class="form-control"name="amount" id="amount" required  readonly>

                    </div>
                    <div class="form-group col-sm-5">     
                        <label class="control-label">Số Lượng <span class="require">(*)</span></label>

                        <input type="text" placeholder="Số Lượng" class="form-control"
                               name="totalItem"
                               id="totalItem" required value="1" readonly>

                    </div>

                    <!-- Text input-->
                   <!--  <div class="form-group col-sm-5">
                        <label class="control-label">Tiền Tệ <span
                                class="require">(*)</span></label>

                        <select name="currency" id="currency" class="form-control">
                            <option value="VND" selected>VND</option>
                            <option value="USD">USD</option>
                        </select>

                    </div> -->
                    <div class="form-group col-sm-5">     
                        <label class="control-label">Email <span
                                class="require">(*)</span></label>

                        <input type="text" placeholder="Email" class="form-control"
                               name="buyerEmail"
                               id="buyerEmail" required>

                    </div>
                    <!-- Text input-->
                    <div class="form-group col-sm-5">
                        <label class="control-label">Họ Tên <span  class="require">(*)</span></label>

                        <input type="text" placeholder="Tên" class="form-control"
                               name="buyerName"
                               id="buyerName" required>
                    </div>
                    <div class="form-group col-sm-5">     
                        <label class="control-label">Số Điện Thoại <span
                                class="require">(*)</span></label>

                        <input type="text" placeholder="Số Điện Thoại" class="form-control"
                               name="phoneNumber"
                               id="phoneNumber" required>
                    </div>
                    <!-- Text input-->
                    <div class="form-group col-sm-5">
                        <label class="control-label">Địa Chỉ <span
                                class="require">(*)</span></label>

                        <input type="text" placeholder="Địa Chỉ" class="form-control"
                               name="buyerAddress"
                               id="buyerAddress" required>

                    </div>
                 
                    <!-- Text input-->
                   <!--  <div class="form-group col-sm-5">
                        <label class="control-label" for="orderDescription">Mô Tả Hóa
                            Đơn<span class="require">(*)</span></label>

                        <textarea placeholder="Thông Tin Mô Tả Hóa Đơn" id="orderDescription"
                                  name="orderDescription"
                                  class="form-control" required=""></textarea>
                    </div> -->
                    <div class="form-group col-sm-5">     
                        <label class="control-label">Thành Phố <span
                                class="require">(*)</span></label>

                        <input type="text" placeholder="Thành Phố" class="form-control"
                               name="buyerCity"
                               id="buyerCity" required value="Hà Nội">


                    </div>
                    <div class="row"></div>
                    <div class="col-sm-12" id="alert"></div>
                    <div class="form-group col-sm-5">
                        <p>&nbsp;</p>
                        <button id="sendInstallment" type="submit" class="btn btn-info btn-lg" name="sendInstallment">
                            Thanh Toán Trả Góp
                        </button>

                    </div>
                </form>
            </div>
        </div>
        <!--    Start sendOrderToAlepayInstallment    -->
        <!--    End sendOrderToAlepayInstallment    -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            function GetURLParameter(sParam)
            {
              var sPageURL = window.location.search.substring(1);
              var sURLVariables = sPageURL.split('&');
              for (var i = 0; i < sURLVariables.length; i++)
              {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam)
              {
                return sParameterName[1];
              }
              }
            }
            
            
            function isNumberKey(evt){
              var charCode = (evt.which) ? evt.which : event.keyCode
              if (charCode > 31 && (charCode < 48 || charCode > 57))
              return false;
              return true;
            }    
            function formatCurrency(a) {
                var b = parseFloat(a).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1.").toString();
                var len = b.length;
                b = b.substring(0, len - 3);
                return b;
            }
            function writeStringToPrice(str){
                str = (str+'').replace(/\./g, "");
                var first_group = str.substr(0,str.length % 3);
                var remain_group = str.replace(first_group,"");
                var num_group = remain_group.length/3;
                var result = "";
                for(var i=0;i < num_group;i++){
                    group_of_three = remain_group.substr(i*3,3);
                    result += group_of_three;
                    if(i != (num_group-1)) result += ".";
                }
                if(first_group.length > 0) {
                    if(result != "") return first_group + "." + result ;
                    else return first_group;
                }else{
                    if(result != "") return result;
                    else return "";
                }
            }
            
            $('#product-price,#amount').val(writeStringToPrice(18960000));
            $(".price_info").html(writeStringToPrice(18960000) + "VND");
            
            $('#totalItem').bind('keyup change', function () {
                if (typeof $('#product-price').val() != 'undefined') {
                    $('#product-price').val((parseInt(18960000) * parseInt($('#totalItem').val())).toLocaleString('vi'));
            
                    //Tính lại giá trả góp
                    var productPrice = $("#product-price").val().split('.').join('');
                    var prepay = $("#prepay").val();
                    var numberPrepay = prepay.split('.').join('');
                    
                    if($("#prepay").val()=='') numberPrepay = 0;
                    $("#amount").val(writeStringToPrice(parseInt(productPrice) - parseInt(numberPrepay)));
                }
            });
            
            $("#prepay").keyup(function(){
                
                var productPrice = $("#product-price").val().split('.').join('');
                var prepay = $(this).val();
                var numberPrepay = prepay.split('.').join('');
            
                if($(this).val()=='') numberPrepay = 0;
                $("#amount").val(writeStringToPrice(parseInt(productPrice) - parseInt(numberPrepay)));
            });
            
            function validateEmail(sEmail) {
                var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                if (filter.test(sEmail)) {
                    return true;
                }
                else {
                    return false;
                }
            }
            function check_field() {
                var number_regex1 = /^[0]\d{9}$/i;
                var number_regex2 = /^[0]\d{10}$/i;
                var error = "";
            
                var check_email = $('#buyerEmail').val();
                if(check_email.length < 4) {
                    error += "- Bạn chưa nhập email\n";
                }
                if(check_email.length > 4){
                    if(validateEmail(check_email)==false) error += "- Email không hợp lệ\n";
                }
            
                var check_tel = $('#phoneNumber').val();
                if(check_tel.length < 4) error += "- Bạn chưa nhập SĐT\n";
                else{
                    if(number_regex1.test(check_tel) == false && number_regex2.test(check_tel) == false) error += "- Số điện thoại chưa chính xác\n";
                }
            
                var check_name = $("#buyerName").val();
                if(check_name.trim().indexOf(' ') == -1) error += "- Tên người mua cần bao gồm cả họ và tên\n";
            
                var check_add = $('#buyerAddress').val();
                if(check_add.length < 4) error += "- Bạn chưa nhập địa chỉ\n";
            
                var check_city = $("#buyerCity").val();
                if(check_city.length < 4) error += "- Bạn chưa nhập thành phố\n";
            
                if(error=='') return true;
                else $("#alert").html(error);
                return false;
            }
            
        </script>
        <style>
            div#alert {
            white-space: pre-line;
            color: #d00;
            margin-left: 10px;
            }
            .form-control2 select {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            }
            .tbl-common td{padding:5px 5px 5px 0; font-size:13px;}
            .price{font-weight:bold; color:#e00; font-size:16px;}
        </style>
        <!-- Load time: 0.139 seconds  / 8 mb-->
        <!-- Powered by HuraStore 7.4.4, Released: 12-Aug-2018 / Website: www.hurasoft.vn -->
    </body>
</html>