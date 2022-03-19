@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/colorbox') }}">
<style type="text/css">

    .div-box {
        border: 1px solid #a0a0a0;
    }

    #tabMenuDmPro {
        border-bottom: 0 solid #999;
        width: 100%;
    }

    .text_arrow {
        color: #000039;
        font-weight: 700;
        margin-bottom: 6px;
        margin-top: 6px;
    }

    #tabMenuDmPro a:hover span, #tabMenuDmPro .curent a span {
        background-position: 100% -29px;
        color: #000;
        text-decoration: none;
    }

    #tabMenuDmPro a:hover, #tabMenuDmPro .curent a {
        background-position: 0 -29px;
    }

    .div-box {
        border: 1px solid #a0a0a0;
    }

    #tabMenuDmPro .bgg {
        background: url(../images/bgg_tk.gif);
        height: 29px;
        width: 100%;
        border-left: 0 solid #b1b1b1;
        border-right: 0 solid #b1b1b1;
    }

    #tabMenuDmPro a span {
        background: url({{ asset('images/template/bgg_tk_right.jpg')  }}) right top no-repeat;
        display: block;
        color: #000;
        text-decoration: none;
        float: none;
        padding: 10px 7px 4px 6px;
    }

    #tabMenuDmPro a {
        float: left;
        background: url({{ asset('images/template/bgg_tk_left.jpg')  }}) left top no-repeat;
        text-decoration: none;
        padding: 0 0 0 8px;
    }

    td{
        font-size: 12px;
    }

    span{
        font-size: 12px;
    }

    ul, ol {
        list-style: none;
    }


</style>

<div class="paddings">
    <style type="text/css">
        .div-box table { width:100%;}
    </style>
    <table width="100%">
        <tbody>
            <tr>
                <!--start cot trai-->
                <td valign="top" width="55%">
                    <!--Start don hang-->
                    <div class="pic icon_arrow left"></div>
                    <div class="text_arrow left">Đơn hàng mới nhất:  (<a href="?opt=order">Xem toàn bộ danh sách</a>)</div>
                    <div class="clear"></div>
                    <div style="border:1px solid #6a8ab9 ">
                        <table width="100%" class="table_public" border="1" bordercolor="#e0e0e0">
                            <tbody>
                                <tr class="table_public_tr">
                                    <td width="40">STT</td>
                                    <td width="190">Tên khách hàng</td>
                                    <td width="130">Email</td>
                                    <td  width="130">Đánh giá (sao)</td>
                                    <td width="120">Sản phẩm</td>
                                    <td width="120">Active</td>
                                </tr>
                               
                                <tr>
                                   
                                    <td width="40">1</td>
                                    <td width="190">111</td>
                                    <td width="130">1111</td>
                                    <td>1111</td>
                                    <td>1111</td>
                                    <td width="120"><a href="#">Duyệt</a></td>
                                    
                                </tr>

                               
                            </tbody>
                        </table>
                    </div>
                    <!--End don hang-->
                    <!--Start don hang tra gop-->
                    <!--<div>&nbsp;</div>
                        <div class="pic icon_arrow left"></div>
                        <div class="text_arrow left">Đơn hàng trả góp:  (<a href="?opt=payinstall&view=order">Xem toàn bộ danh sách</a>)</div>
                        <div class="clear"></div>
                        <div style="border:1px solid #6a8ab9 ">
                        
                            <table width="100%" class="table_public" border="1" bordercolor="#e0e0e0">
                                <tr bgcolor=#EEEEEE>
                                    <td width=20px>STT</td>
                                    <td width=160px>Thời gian</td>
                                    <td width=160px>Loại hình</td>
                                    <td>Sản phẩm</td>
                                    <td width=100px>xem chi tiết</td>
                                </tr>
                        
                                
                            </table>
                        
                        </div>-->
                    <!--End don hang tra gop-->
                    <!--Start khach hang-->
                    <div>&nbsp;</div>
                    <div class="pic icon_arrow left"></div>
                    <div class="text_arrow left">Khách hàng liên hệ qua website (<a href="?opt=customer&amp;view=customer-contact">Xem toàn bộ danh sách</a>)</div>
                    <div class="clear"></div>
                   
                    <!--End khach hang-->
                    <!--Start khach hang đánh giá-->
                    <div>&nbsp;</div>
                    <div class="pic icon_arrow left"></div>
                    <div class="text_arrow left">Trao đổi chưa duyệt</div>
                    <div class="clear"></div>
                    
                    <!--End khach hang đánh giá-->
                </td>
                <!--end cot trai-->
                
            </tr>
        </tbody>
    </table>
    <script type="text/javascript">
        function home_report(w){
        	$.get("/admin/ajax/report_home.php", {
        	    action : w
        	}, function(data) {
        	    $("#home_report_"+w).html(data);
        	} );
        }
        
           function report_top_article(type, period, holder, limit, from_date, to_date){
               $('#'+holder).html('<img src=/includes/images/awaiting.gif> vui lòng chờ ...');
               $.get("/admin/ajax/report.php",{
                   action : "report-top-article",
                   type : type ,
                   period : period,
                   limit : limit,
                   from_date : from_date,
                   to_date : to_date
               },function(data){
                   $('#'+holder).html(data);
               });
           }
        
        $(function(){
        	$('.thickbox').colorbox({
        	    iframe: true,
                   fixed : true,
                   width:'70%',
                   height:'80%'
        	});
        });
    </script>   
    <input type="hidden" id="current_use1" value="1">
    <script>
        function ajax_cate(idmau) {
          var current_use = document.getElementById('current_use1').value;
          document.getElementById('select_'+current_use).className = '';
          document.getElementById('current_use1').value = idmau;
          document.getElementById('select_'+idmau).className = 'curent';
          document.getElementById('content_'+current_use).style.display = 'none';
          //document.getElementById('content_'+idmau).style.display = 'block';
          $("#content_"+idmau).fadeIn("slow");
        
          if(idmau == 6) {
             report_top_article('visit','mo', 'top_article_visit', 10);
          }
        }
    </script>
</div>
@endsection