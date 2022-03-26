@extends('layouts.app')

@section('content')

<div class="paddings">
    <div id="theme-edit-announcement" class="announcement box2 c">
        <p><b style="color:#F00">Chú ý</b>: Chức năng này chỉ áp dụng với các giao diện đã được cài đặt cho phép thay đổi 1 số thành phần của giao diện. Biến template sử dụng $settings (global)</p>
    </div>
    <style type="text/css">
        ul#tabnav {	text-align:left; margin:1em 0 1em 0;border-bottom:1px solid #999;list-style-type: none; padding: 4px 10px 5px 10px;	}
        ul#tabnav li {display:inline; margin:0}
        ul#tabnav li a {padding: 5px 6px; border:1px solid #999;background-color:#DDD;color:#000;margin-right:0px;text-decoration: none; border-bottom:none}
        ul#tabnav a:hover {background: #fff; color:#333}
        ul#tabnav li.tab-select {border-bottom: 1px solid #fff;	background-color:#fff;}
        ul#tabnav li.tab-select a {	background-color:#CF9;	color: #000;position:relative;top:1px; padding-top:6px;}
        .sub-section-header { font-weight:bold; margin-bottom:10px; padding:3px; background-color:#CFC}
        .tb-setup td{ padding:4px}
    </style>
    <!-- tabs -->
    <ul id="tabnav">
        <li id="tab_1"><a href="?opt=system&amp;view=store-design&amp;section=header">Phần header</a></li>
        <li id="tab_2" class="tab-select"><a href="?opt=system&amp;view=store-design&amp;section=popup">Banner Pop-Up</a></li>
        <li id="tab_3"><a href="#" onclick="imageCss()">Hình nền website</a></li>
        <li id="tab_4"><a href="?opt=system&amp;view=store-design&amp;section=other">Thông tin khác</a></li>
        <li id="tab_5"><a href="?opt=system&amp;view=store-design&amp;section=custom">Cài đặt khác</a></li>
    </ul>
    <form method="post" enctype="multipart/form-data">
        <table class="tb-setup">
            <tbody>
                <tr>
                    <td>Link nhảy đến</td>
                    <td>
                        <input type="text" size="50" name="popup_url" value="https://dienmaynguoiviet.vn/deal">
                    </td>
                </tr>
                <tr>
                    <td>File ảnh</td>
                    <td>
                        <div style="max-height:600px; overflow:auto"><img border="0" src="https://dienmaynguoiviet.vn/media/banner/popup_5913_popup-mua-he-xanh-2021.png"></div>
                        <br>
                        <input type="file" name="popup_file" size="50">
                        <input type="hidden" name="popup_file_old" value="/media/banner/popup_5913_popup-mua-he-xanh-2021.png">
                    </td>
                </tr>
                <tr>
                    <td>Lựa chọn hiển thị người dùng</td>
                    <td>
                        <label><input type="radio" name="popup_display" value="session"> Theo session </label> |
                        <label><input type="radio" name="popup_display" value="homepage" checked=""> Trang chủ website</label>
                    </td>
                </tr>
                <tr>
                    <td>Cho hiển thị</td>
                    <td>
                        <input type="checkbox" name="popup_activate" value="1"> Tích chọn để hiển thị hoặc dừng hiển thị
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="group-actions">
            <span id="status_menu"><input class="btn" id="submit-collection-btn" name="commit" type="submit" value="Cập nhật >>"> </span>
        </p>
        <input type="hidden" name="type" value="popup">
        <input type="hidden" name="process" value="yes">
    </form>
</div>

<div class="modal fade" id="cssimageModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <p class="sub-section-header">Thay Ảnh nền</p>
                    <p style="color:#F00; margin-bottom:20px">Bạn có thể thay nền website bằng màu hoặc hình ảnh. Với file ảnh, yêu cầu là  .jpg, .gif, hoặc .png và dung lượng tối đa 300KB.</p>
                    <table>
                        <tbody>
                            <tr>
                                <td>Dùng màu nền: </td>
                                <td>
                                    <script type="text/javascript" src="/includes/js/jscolor/jscolor.js"></script>
                                    <input type="text" class="color" name="background_color" value="FFFFFF"> (&lt;- click chuột vào ô để chọn màu)
                                </td>
                            </tr>
                            <tr>
                                <td>Dùng file ảnh</td>
                                <td>
                                    <input type="file" name="background_image" size="50">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</div>


<script type="text/javascript">

    function imageCss() {
        $('#cssimageModel').modal('show');
    }
   
    
</script>

@endsection