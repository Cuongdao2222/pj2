@extends('layouts.app')

@section('content')


<div style="background-color:#FFF">
    <div id="action-links">
       
    </div>
    <h3 align="center">Tủ mát đứng Sanaky VH-1209HP2 2 cửa lùa (ID: 4444)</h3>
    <!-- <ul id="tabnav">
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=basic&amp;l=vn&amp;popup=1')">Cơ bản</a></li>
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=product-category&amp;l=vn&amp;popup=1')">Danh mục</a></li>
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=seo&amp;l=vn&amp;popup=1')">SEO</a></li>
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=info&amp;l=vn&amp;popup=1')">Mô tả</a></li>
        <li class="tab-select"><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=spec&amp;l=vn&amp;popup=1')">Thông số</a></li>
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=image&amp;l=vn&amp;popup=1')">Ảnh</a></li>
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=config-new&amp;l=vn&amp;popup=1')">Cấu hình</a></li>
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=accessory&amp;l=vn&amp;popup=1')">Phụ kiện</a></li>
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=video&amp;l=vn&amp;popup=1')">Youtube</a></li>
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=tags&amp;l=vn&amp;popup=1')">Tags</a></li>
        <li><a href="javascript:void(0)" onclick="switchTab('sell_product.php?id=4444&amp;view=relation&amp;l=vn&amp;popup=1')">Nội dung liên quan</a></li>
    </ul> -->
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="current_pro_id" id="current_pro_id" value="4444">
        <p>Cập nhật thuộc tính cho Sản phẩm</p>
        <p>Hoặc <a href="sell_product.php?id=4444&amp;view=spec&amp;noattr=1&amp;l=vn&amp;popup=1">Cập nhật thông số kỹ thuật không cần thuộc tính</a></p>
        <br>
        <table id="tb_padding" border="1" bordercolor="#CCCCCC" style="width:100%">
            <tbody>
                <tr>
                    <td width="120px"><b>HÃNG SẢN XUẤT</b><br>Tu_Mat_01<br><span style="color:red">Dùng là bộ lọc</span></td>
                    <td>
                        <div style="max-height:250px; overflow:auto">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="top"><span style="background-color:#FFCC00"><input type="checkbox" id="attributeValue_94_506" onclick="useThis(94,506, '1')" checked=""> <label for="attributeValue_94_506">Tủ mát Sanaky</label></span><br><span><input type="checkbox" id="attributeValue_94_507" onclick="useThis(94,507, '1')"> <label for="attributeValue_94_507">Tủ mát  Panasonic</label></span><br></td>
                                        <td valign="top"><span><input type="checkbox" id="attributeValue_94_508" onclick="useThis(94,508, '1')"> <label for="attributeValue_94_508">Tủ mát Nagakawa</label></span><br><span><input type="checkbox" id="attributeValue_94_671" onclick="useThis(94,671, '1')"> <label for="attributeValue_94_671">Tủ mát Hòa Phát</label></span><br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <b>Bổ sung giá trị :</b> (mỗi giá trị 1 dòng) - <a href="/admin/?opt=product&amp;view=attribute-add&amp;id=94#attr_value" onclick="parent.location=this.href">sửa thuộc tính</a><br>
                            <textarea id="add_value_to_attr_94" name="add_value_to_attr_94" style="width:400px; height:60px" onchange="alert_value_add(94)"></textarea>
                            <input type="hidden" name="is_filter_94" value="1">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="120px"><b>GIÁ BÁN</b><br>Tu_Mat_02<br><span style="color:red">Dùng là bộ lọc</span></td>
                    <td>
                        <div style="max-height:250px; overflow:auto">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="top"><span><input type="checkbox" id="attributeValue_95_509" onclick="useThis(95,509, '1')"> <label for="attributeValue_95_509">Tủ mát dưới 5 triệu</label></span><br></td>
                                        <td valign="top"><span><input type="checkbox" id="attributeValue_95_510" onclick="useThis(95,510, '1')"> <label for="attributeValue_95_510">Tủ mát từ 5 - 10 triệu</label></span><br></td>
                                        <td valign="top"><span style="background-color:#FFCC00"><input type="checkbox" id="attributeValue_95_511" onclick="useThis(95,511, '1')" checked=""> <label for="attributeValue_95_511">Tủ mát trên 10 triệu</label></span><br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <b>Bổ sung giá trị :</b> (mỗi giá trị 1 dòng) - <a href="/admin/?opt=product&amp;view=attribute-add&amp;id=95#attr_value" onclick="parent.location=this.href">sửa thuộc tính</a><br>
                            <textarea id="add_value_to_attr_95" name="add_value_to_attr_95" style="width:400px; height:60px" onchange="alert_value_add(95)"></textarea>
                            <input type="hidden" name="is_filter_95" value="1">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="120px"><b>Dung tích</b><br>dung_tich_tu_dong_tu_mat<br><span style="color:red">Dùng là bộ lọc</span></td>
                    <td>
                        <div style="max-height:250px; overflow:auto">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="top"><span><input type="checkbox" id="attributeValue_45_201" onclick="useThis(45,201, '1')"> <label for="attributeValue_45_201">Từ 100 lít - 200 lít</label></span><br><span><input type="checkbox" id="attributeValue_45_202" onclick="useThis(45,202, '1')"> <label for="attributeValue_45_202">Từ 200 lít - 300 lít</label></span><br><span><input type="checkbox" id="attributeValue_45_203" onclick="useThis(45,203, '1')"> <label for="attributeValue_45_203">Từ 300 lít - 400 lít</label></span><br></td>
                                        <td valign="top"><span><input type="checkbox" id="attributeValue_45_204" onclick="useThis(45,204, '1')"> <label for="attributeValue_45_204">Từ 400 lít - 500 lít</label></span><br><span><input type="checkbox" id="attributeValue_45_205" onclick="useThis(45,205, '1')"> <label for="attributeValue_45_205">Từ 500 lít - 600 lít</label></span><br><span><input type="checkbox" id="attributeValue_45_209" onclick="useThis(45,209, '1')"> <label for="attributeValue_45_209">Từ 600 lít - 700 lít</label></span><br></td>
                                        <td valign="top"><span><input type="checkbox" id="attributeValue_45_206" onclick="useThis(45,206, '1')"> <label for="attributeValue_45_206">Từ 700 lít - 800 lít</label></span><br><span><input type="checkbox" id="attributeValue_45_207" onclick="useThis(45,207, '1')"> <label for="attributeValue_45_207">Từ 800 lít - 900 lít</label></span><br><span><input type="checkbox" id="attributeValue_45_208" onclick="useThis(45,208, '1')"> <label for="attributeValue_45_208">Từ 1000 lít - 1500 lít</label></span><br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <b>Bổ sung giá trị :</b> (mỗi giá trị 1 dòng) - <a href="/admin/?opt=product&amp;view=attribute-add&amp;id=45#attr_value" onclick="parent.location=this.href">sửa thuộc tính</a><br>
                            <textarea id="add_value_to_attr_45" name="add_value_to_attr_45" style="width:400px; height:60px" onchange="alert_value_add(45)"></textarea>
                            <input type="hidden" name="is_filter_45" value="1">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <div><input type="submit" value="Cập nhật >>"></div>
        <br>
        <input type="hidden" id="use_att_value" name="use_att_value" value="506;511">
        <input type="hidden" name="old_att_value" value="506;511">
        <input type="hidden" id="use_att_value_filter" name="use_att_value_filter" value=";">
        <input type="hidden" name="old_att_value_filter" value=";">
        <input type="hidden" name="list_att_add_value" id="list_att_add_value" value=";">
        <input type="hidden" name="noattr" value="">
        <input type="hidden" name="update" value="yes">
        <script type="text/javascript">
            var $use_att_value = $('#use_att_value');
            var $use_att_value_filter = $('#use_att_value_filter');
            console.log("use_att_value = " + $use_att_value.val());
            console.log("use_att_value_filter = " + $use_att_value_filter.val());
            
            function useThis(attId, attVaId, is_filter){
            
            	var attr_list 			= $use_att_value.val().split(";");
            	var attr_filter_list 	= $use_att_value_filter.val().split(";");
            	var check = document.getElementById('attributeValue_'+ attId + "_" + attVaId).checked;
            
            	console.log("attr_list = " + attr_list);
            
            	if(check){
            		attr_list.push(attVaId);
            		if(is_filter == 1) attr_filter_list.push(attVaId);
            	}else{
            		console.log("remove = " + attVaId);
            		removeValue(attr_list, attVaId);
            		if(is_filter == 1) removeValue(attr_filter_list, attVaId);
            	}
            
            	console.log("attr_list = " + attr_list);
            
            	$use_att_value.val(attr_list.join(";"));
            	$use_att_value_filter.val(attr_filter_list.join(";"));
            
            	//console.log("use_att_value = " + $use_att_value.val());
            	//console.log("use_att_value_filter = " + $use_att_value_filter.val());
            	//alert($('#use_att_value').val() + " = " + $('#use_att_value_filter').val());
            
            	function removeValue(arr, item) {
            		var index = -1;
            		arr.forEach(function (v, i) {
            			if(v == item) index = i
            		})
            		console.log("index = " + index);
            
            		if (index !== -1) arr.splice(index, 1);
            	}
            
            	function hasValue(arr, item) {
            		return arr.includes(item)
            	}
            }
            
            
            
            function alert_value_add(att_id){
            	var attr_list = $('#list_att_add_value').val();
            	var check_content = $('#add_value_to_attr_'+att_id).val();
            	if(check_content.length > 1){
            		if(attr_list.indexOf(';' + att_id + ';') < 0) {
            			document.getElementById('list_att_add_value').value = attr_list + att_id + ';';
            		}
            	}else{
            		document.getElementById('list_att_add_value').value = attr_list.replace(';' + att_id + ';',';');	
            	}
            	//alert($('#list_att_add_value').val());
            }
        </script>
    </form>
    
</div>

@endsection