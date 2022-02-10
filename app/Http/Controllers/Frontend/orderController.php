<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

use Mail;
use Session;


use Gloudemans\Shoppingcart\Facades\Cart;

class orderController extends Controller
{

    public function orderProduct(Request $request)
    {
        $cart  = Cart::content();

        $carts = [];

        $totalPrice = [];

        $key  = -1;

        foreach($cart as $data){
            $key++;
            $carts[$key]['orderId'] = $data->rowId;
            $carts[$key]['id'] = $data->id;
            $carts[$key]['price'] = $data->price;
            $carts[$key]['name'] = $data->name;
            $carts[$key]['image'] = $data->image;
            $carts[$key]['qty'] = $data->qty;
            $price = (int)$data->price*(int)$data->qty;
            array_push($totalPrice, $price);
        }


        $input = $request->all();

        $input['orderId'] = $carts[0]['orderId'];

        $carts = json_encode($carts);

        $input['product'] = $carts;

        $input['total_price'] = array_sum($totalPrice);

        $mail =  $input["mail"];

        $order = new Order();

        $order::create($input);

        $GLOBALS['mail'] = $input["mail"];

        $success = Mail::send('frontend.mail', array('name'=>$input["name"],'email'=>$input["mail"]), function($message){
            $message->to($GLOBALS['mail'], 'Visitor')->subject('Visitor Feedback!');
        });

        unset($GLOBALS['mail']);

        // khi mua thành công thì xóa giỏ hàng
        Cart::destroy();

        Session::flash('success', 'Mua thành công sản phẩm!'); 

        return redirect('/');
    

    }

    public function orderList()
    {
        $order = Order::orderBy('id','desc')->paginate(10);

        return view('order.index', compact('order')); 

    }
    public function orderListView($id)
    {
        $order = Order::find($id);

        $data_product = $order->product;

        // print_r()

        // return view('order.list-order');
    }
   
}
