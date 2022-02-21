<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\product;

use App\Models\image;

use App\Models\groupProduct;

use App\Models\filter;


use Gloudemans\Shoppingcart\Facades\Cart;

class categoryController extends Controller
{
    public function index($slug)
    {

        $link = trim($slug);

        $findID = groupProduct::where('link', $link)->first();



        if(empty($findID)){
            abort('404');
        }

        $id_cate = $findID->id;
        
        $data = DB::table('group_product')->join('products', 'group_product.id', '=', 'products.Group_id')->select('products.Name', 'products.id','products.Image', 'products.ProductSku', 'products.Price', 'products.Link','products.active','group_product.link')->where('group_product.id', $id_cate)->get();

        // $filter = DB::table('properties')->join('filters', 'properties.filterId', '=', 'filters.id')->where('filters.group_product_id', $id_cate)->select()->get();

        $filter = filter::where('group_product_id', $id_cate)->select('name', 'id')->get();

        return view('frontend.category', compact('data', 'filter', 'id_cate'));
    }

    public function details($slug)
    {
        $link = trim($slug);

        $findID = product::where('link', $link)->first();

        if(empty($findID)){
            abort('404');
        }

        $images = image::where('product_id', $findID->id)->get();

        $data =  product::findOrFail($findID->id);

        return view('frontend.details', compact('data', 'images'));
    }

    public function addProductToCart()
    {

        Cart::add(['id' => '294ad', 'name' => 'Smart tivi Samsung UA50AU9000 50 inch 4K', 'qty' => 1, 'price' => '5000.000', 'weight' => '500', 'options' => ['size' => 'large']]);
        $cart =  Cart::content();

    }

}
