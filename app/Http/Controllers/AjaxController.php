<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hotProduct;

use App\Models\saleProduct;

use App\Models\product;

use App\Models\Order;


use Illuminate\Support\Facades\Auth;


use Gloudemans\Shoppingcart\Facades\Cart;

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

        return view('Frontend.ajax.cart', compact('data_cart'));
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

        return Response('thanh cong');

    }


}


