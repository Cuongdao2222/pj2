<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;

class orderController extends Controller
{




    public function orderProduct(Request $request)
    {
        $cart  = Cart::content();

        $carts = [];

        $key  = -1;

        foreach($cart as $data){
            $key++;
            $carts[$key]['id'] = $data->id;
            $carts[$key]['price'] = $data->price;
            $carts[$key]['name'] = $data->name;
            $carts[$key]['qty'] = $data->qty;
        }

        
        $input = $request->all();

        dd($input);

        
       
    }
   
}
