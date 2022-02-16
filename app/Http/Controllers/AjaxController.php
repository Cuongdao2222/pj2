<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hotProduct;

use App\Models\saleProduct;

use App\Models\product;

use App\Models\Order;

use App\Models\filter;




use Illuminate\Support\Facades\Auth;


use Gloudemans\Shoppingcart\Facades\Cart;

use DB;

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

            return response('thêm thành công code');

        }


    }


}


