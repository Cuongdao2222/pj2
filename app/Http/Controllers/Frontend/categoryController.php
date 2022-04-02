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

use App\Http\Controllers\Frontend\filterController;

class categoryController extends Controller
{


    public function categoryView($slug)
    {

        if(!empty($_GET['filter'])){

            $link     = strip_tags($_GET['link']);

            $group_id =  strip_tags($_GET['group_id']);

            $filter =   explode(',', $_GET['filter']) ;

            $property = explode(',', $_GET['property']);

            $link     = strip_tags($_GET['link']);

            $new_filter = [];

            $new_property = [];

            if(isset($filter)){
                foreach($filter as $value){
                    array_push($new_filter, strip_tags($value));
                }
            }

            if(isset($property)){
                foreach($property as $values){
                    array_push($new_property, strip_tags($values));
                }
            }

        
            $list_data_group = filter::where('group_product_id', $group_id)->whereIn('id', $filter)->select('value')->get()->toArray();


            $findID = groupProduct::where('link', $link)->first();

            $id_cate = $findID->id;

            $filter = filter::where('group_product_id', $id_cate)->select('name', 'id')->get();

            $fill = [];

            $keys =  [];

        
            if(!empty($list_data_group[0]['value'])){


                foreach ($list_data_group as $key => $value) {
                    foreach($value as $values){

                        $arr = json_decode($values, true);

                        if(isset($arr)){

                            array_push($fill, $arr);

                            $keys[] = array_keys($arr);
                        }
                    }

                }
                
                $result = [];
                $product = [];

                if(isset($keys)){
                    foreach($keys as $key1 => $vals){

                   
                        foreach($vals as $valu){

                            if(in_array($valu, $property)){

                                $result[] = $fill[$key1][$valu];
                            }
                        
                        }

                    }
                    
                    if(isset($result)){

                        foreach ($result as  $res) {
                            foreach($res as $res1){
                                $product[] = $res1;
                            }
                        }
                    }

                    $number_key = count($keys);

                    $number_product    = array_count_values($product);

                
                    if(isset($number_product)){
                        $result_product = [];
                        foreach ($number_product as $key => $value) {
                            if($value == $number_key){
                                array_push($result_product, $key);
                            }

                        }

                        $product_search = product::whereIn('id', $result_product)->get();

                        // return view('frontend.ajax.product', compact('product_search'));
                        
                    }

                    return view('frontend.filter', compact('product_search', 'link', 'filter', 'id_cate'));

                }
            }


        }
        else{
            $data = $this->getDataOfCate($slug);
            return view('frontend.category', with($data));
        }
       
    }



    public function getDataOfCate($slug)
    {

        $link = trim($slug);

        $findID = groupProduct::where('link', $link)->first();


        if(empty($findID)){
            return $this->blogDetailView($slug);
        }

        if(!empty($_GET['filter'])){
            $data = new filterController();


            $data = $data->filter();

        }
       
        $id_cate = $findID->id;

        $link   =  $findID->link;

        $data = DB::table('group_product')->join('products', 'group_product.id', '=', 'products.Group_id')->select('products.Name', 'products.id','products.Image', 'products.ProductSku', 'products.Price', 'products.Link','products.active','group_product.link')->where('group_product.id', $id_cate)->Orderby('id', 'desc')->paginate(10);


        $filter = filter::where('group_product_id', $id_cate)->select('name', 'id')->get();

        $data = [
            'data'=>$data,
            'filter'=>$filter,
            'id_cate'=>$id_cate,
            'link'=>$link,

        ];

        return $data;

    }    

    public function blogDetailView($slug)
    {
        $link = trim($slug);

        $data = post::where('link', $link)->first();



        if(empty($data)){
            abort('404');
        }

        $category = category::find($data->category);

        $related_news = post::where('category', $data->category)->select('title', 'link', 'id')->paginate(10);

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
