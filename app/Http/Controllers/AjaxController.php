<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hotProduct;

use App\Models\saleProduct;

use App\Models\product;

use App\Models\Order;

use App\Models\filter;

use App\Models\promotion;




use Illuminate\Support\Facades\Auth;


use Gloudemans\Shoppingcart\Facades\Cart;

use DB;
use App\Models\rate;

class AjaxController extends Controller
{

  
    public function addHotProduct(Request $request)
    {

        if($request->ajax())
        {

            $addProduct = new hotProduct();

            $addProduct->product_id = $request->product_id;

            $addProduct->group_id = $request->group_id;

            $addProduct->save();

            return "thêm thành công sản phẩm có product_id ".$request->product_id;

        }
    }

    public function removeHotProduct(Request $request)
    {
        $product_id = $request->product_id;

        $product = hotProduct::select('id')->where('product_id', $product_id)->first();

        $id = $product->id;

        if(!empty($id)){

            $product->find($id);
            $product->delete();

            echo "xóa thành công sản phẩm có product_id ".$id;
        }


    }

    public function addSaleProduct(Request $request)
    {

        if($request->ajax())
        {


            $addProduct = new saleProduct();

            $addProduct->product_id = $request->product_id;

            $addProduct->group_id = $request->group_id;

            $addProduct->save();

            return "thêm thành công sản phẩm có product_id ".$request->product_id;

        }
    }

    public function rateForm(Request $request)
    {
        if($request->ajax()){
            $rate =  new rate();
            $input['star'] = $request->star;
            $input['email'] = $request->email;
            $input['name'] = $request->name;
            $input['content'] = $request->content;
            $input['product_id'] = $request->product_id;
            $input['active'] = 0;
            $rate::create($input);

            return response('Đánh giá sản phẩm thành công! đánh giá của bạn đang chờ được kiểm duyệt xin cảm ơn');
           
        }
        
    }

    public function removeSaleProduct(Request $request)
    {
        $product_id = $request->product_id;

        $product = saleProduct::select('id')->where('product_id', $product_id)->first();

        $id = $product->id;

        if(!empty($id)){

            $product->find($id);
            $product->delete();

            echo "xóa thành công sản phẩm có product_id ".$id;
        }


    }

    protected function checkActive(Request $request)
    {
        $id = $request->product_id;

        $active = $request->active;

        $product = product::find($id);

        $product->active = $active;

        $product->save();

        echo "thanh cong";

    }

    public function addProductToCart(Request $request)
    {
        $id = $request->product_id;

        $data_Product = product::find($id);
             
        Cart::add(['id' => $id, 'name' => $data_Product->Name,  'qty' => 1, 'price' => $data_Product->Price, 'weight' => '500', 'options' => ['link' => $data_Product->Link]]);

        $data_cart = Cart::content();

        return view('frontend.ajax.cart', compact('data_cart'));
       
    }

    public function removeProductCart(Request $request)
    {

        $id = $request->product_id;
       
        Cart::remove($id);

        $data_cart = Cart::content();

        return view('frontend.ajax.cart', compact('data_cart'));
    }

    public function showProductCart(Request $request)
    {
        $data_cart = Cart::content();

        return view('frontend.ajax.cart', compact('data_cart'));
    }

    public function addProductToCartByNumber(Request $request)
    {
        $rowId = $request->rowId;

        $qualtity = $request->number;

        Cart::update($rowId, $qualtity);

        $data_cart = Cart::content();

        return view('frontend.ajax.cart', compact('data_cart'));
       
    }

    public function addConfirm(Request $request)
    {
        $id = $request->id;

        $value = $request->value;

        $order = Order::find($id);

        $order->active = $value;

        $order->user_active = Auth::user()->id;

        $order->save();

        return Response('thanh cong');

    }

    public function addValueSelectFilter(Request $request)
    {

        $product_id = $request->product_id;

        $filterId = $request->filter_id;

        $propertyId = $request->property_id;

        $checked  = $request->check;

        $filter   = filter::find($filterId);

        $value   =  $filter->value;

        $arr     = [];


        if(!empty($value)){

            if($checked ==1){

                $arr  = json_decode($value, true);

                if(isset($arr[$propertyId])){

                    $arr[$propertyId][] =   $product_id;
                }
                else{
                    $arr[$propertyId]  = array($product_id);
                }

                
                json_encode($arr);

                $filter->value = $arr;

                $filter->save();

                return response('Thêm thành công');

            }

            // trường hợp xóa 

            else{

                $arr  = json_decode($value, true);

                unset($arr[$propertyId]);

                if(isset($arr[$propertyId])){

                    $index_value = array_search($arr[$propertyId], $product_id);

                    if((int)$index_value>-1){

                        unset($arr[$propertyId][$index_value]);

                        $filter->value = json_encode($arr);

                        $filter->save();

                        return response('xóa thành công');

                    }

                }

            }
            
        }
        // trường hợp chưa có dữ liệu
        else{
            
            
            $arr[$propertyId] = array($product_id);

            $filter->value = json_encode($arr);

            $filter->save();

            return response('thêm thành công');

        }


    }

     protected function filterByValue(Request $request)
    {
        $list_id = json_decode($request->json_id_product);
        $action  = $request->action;

       
        if($action =='id'){
            $product_search   = product::whereIn('id', $list_id)->orderBy('id', 'asc')->get();
        }
        else{
           $product_search   = product::whereIn('id', $list_id)->orderBy('price', $action)->get();
        }
        return view('frontend.ajax.product', compact('product_search', 'action'));
        
    }

    public function accept_rate(Request $request)
    {
        if($request->ajax()){

            $id = $request->id;
            $active =  $request->active;
            $rate =  rate::find($id);
            $rate->active = ($active==1)?0:1;
            $rate->save();

            return response([$id,  $rate->active]);
           
        }
    }

    public function add_promotion(Request $request)
    {
        if($request->ajax()){

            $id_product = $request->product_id;

            $id_gift    = $request->gift_id;

            $time       = $request->time;

            $promotion  = new promotion();

            $promotion->id_product = $id_product;

            $promotion->id_gift = $id_gift;

            $promotion->time = $time;

            $promotion->save();

            return response('thanh cong');


        }    
    }




}


