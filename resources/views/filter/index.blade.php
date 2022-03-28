@extends('layouts.app')

@section('content')


<div style="background-color:#FFF">
    <div id="action-links">
       
    </div>
    <?php 

        $product_id = $_GET['productId'];
        if(!empty($product_id)){ 
            $infoProduct = App\Models\product::find($product_id);
        }    

    ?>

    <h3 align="center">{{ @$infoProduct->Name }} </h3>
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
    <div>
        <input type="hidden" name="current_pro_id" id="current_pro_id" value="4444">
        <p><a href="{{ route('filters.create') }}?groupid={{ $_GET['group-product'] }}&productId={{ $product_id }}">Thêm thuộc tính sản phẩm</a></p>
       <!--  <p>Hoặc <a href="sell_product.php?id=4444&amp;view=spec&amp;noattr=1&amp;l=vn&amp;popup=1">Cập nhật thông số kỹ thuật không cần thuộc tính</a></p> -->
        <br>
        <table id="tb_padding" border="1" bordercolor="#CCCCCC" style="width:100%">
            <tbody> 

                <?php
                   
                    $filter = App\Models\filter::where('group_product_id', $product_id)->get();
                ?>
                @if(count($filter)>0)
                @foreach($filter as $filters)
                <tr>
                    <?php  
                        $arr_value = json_decode($filters->value,true);

        
                        $property = App\Models\property::where('filterId', $filters->id)->get();
                    ?>
                    <td width="120px"><b>{{ $filters->name }}</b><br><span style="color:red">Dùng là bộ lọc</span></td>
                    <td>
                        <div style="max-height:250px; overflow:auto">
                            <table>
                                <tbody>
                                    <tr>
                                        @if(count($property)>0)

                                        <?php  
                                            $product_id = $_GET['productId'];


                                        ?>

                                        @foreach($property as $propertys)

                                        <?php

                                            $search_arr = $filters->value;

                                        ?>
                                        <td valign="top"><span><input type="checkbox" id="attributeValue_{{ $propertys->id }}" onclick="useThis('{{ $product_id }}',  '{{$filters->id}}', '{{ $propertys->id }}')" {{ isset($arr_value[$propertys->id])&& in_array($product_id  ,$arr_value[$propertys->id])?'checked':'' }}> <label for="code">{{ $propertys->name }}</label></span><br></td>
                                        @endforeach
                                        @endif
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <b>Bổ sung giá trị :</b> (mỗi giá trị 1 dòng) <!-- - <a href="{{ route('add-property-filter') }}?">sửa thuộc tính</a> --><br>
                            <form method="post" action="{{ !empty($_SERVER['HTTPS'])?'https':'http'}}://{{ $_SERVER['HTTP_HOST'] }}/admins/properties">
                                @csrf

                                <textarea id="add_value_to_attr_94" name="name" style="width:400px; height:60px" ></textarea>
                                <input type="hidden" name="filterId" value="{{ $filters->id }}">
                                <div><input type="submit" value="Cập nhật >>"></div>
                            </form>
                            
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
                
            </tbody>
        </table>
        <br>
        
        <br>
        <!-- <input type="hidden" id="use_att_value" name="use_att_value" value="506;511">
        <input type="hidden" name="old_att_value" value="506;511">
        <input type="hidden" id="use_att_value_filter" name="use_att_value_filter" value=";">
        <input type="hidden" name="old_att_value_filter" value=";">
        <input type="hidden" name="list_att_add_value" id="list_att_add_value" value=";">
        <input type="hidden" name="noattr" value="">
        <input type="hidden" name="update" value="yes"> -->
        
    </div>

    <script type="text/javascript">
        function useThis(product_id, filterId, property_id) {

            const checked = $('#attributeValue_'+property_id).is(':checked'); 

             $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            check = 0;

            if(checked == true){
                check  = 1;
            } 
            
            $.ajax({
       
                type: 'POST',
                url: "{{ route('add-value-selected-filter') }}",
                data: {
                    check:check,
                    product_id: product_id,
                    filter_id: filterId,
                    property_id:property_id,
                       
                },
                success: function(result){
                    console.log(result);
                }
            });
                
        }

    </script>
    
</div>

@endsection