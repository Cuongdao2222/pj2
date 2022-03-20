<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\product;

use App\Models\image;

use App\Models\groupProduct;

use App\Models\filter;
use App\Models\post;

use App\Models\category;

use App\Models\metaSeo;


use Gloudemans\Shoppingcart\Facades\Cart;

class categoryController extends Controller
{


    public function categoryView($slug)
    {
        $link = trim($slug);

        $findID = groupProduct::where('link', $link)->first();

        if(empty($findID)){
            return $this->blogDetailView($slug);
        }

        $id_cate = $findID->id;
        
        $data = DB::table('group_product')->join('products', 'group_product.id', '=', 'products.Group_id')->select('products.Name', 'products.id','products.Image', 'products.ProductSku', 'products.Price', 'products.Link','products.active','group_product.link')->where('group_product.id', $id_cate)->get();

        // $filter = DB::table('properties')->join('filters', 'properties.filterId', '=', 'filters.id')->where('filters.group_product_id', $id_cate)->select()->get();

        $filter = filter::where('group_product_id', $id_cate)->select('name', 'id')->get();

        return view('frontend.category', compact('data', 'filter', 'id_cate'));
    }

    public function blogDetailView($slug)
    {
        $link = trim($slug);

        $data = post::where('link', $link)->first();



        if(empty($data)){
            abort('404');
        }

        $category = category::find($data->category);

        $related_news = post::where('category', $data->category)->select('title', 'link', 'id')->get();

        $name_cate = $category->namecategory;

        $meta = metaSeo::find($data->Meta_id);



       
        return view('frontend.blogdetail',compact('data', 'name_cate', 'related_news', 'meta'));
    }
    public function index($slug)
    {
        
       return redirect(route('details', $slug));
    }

    public function details($slug)
    {
        $link = trim($slug);

        $findID = product::where('link', $link)->first();

        // chuyển sang category check

        if(empty($findID)){

            return($this->categoryView($slug));

        }

        $images = image::where('product_id', $findID->id)->get();

        $data =  product::findOrFail($findID->id);

        $other_product = product::where('Group_id',  $data->Group_id)->get();

        $meta = metaSeo::find($data->Meta_id);

        return view('frontend.details', compact('data', 'images', 'other_product', 'meta'));
    }

    public function addProductToCart()
    {

        Cart::add(['id' => '294ad', 'name' => 'Smart tivi Samsung UA50AU9000 50 inch 4K', 'qty' => 1, 'price' => '5000.000', 'weight' => '500', 'options' => ['size' => 'large']]);
        $cart =  Cart::content();

    }

}
