<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\filter;

use App\Models\product;

class filterController extends Controller
{
    public function index()
    {
        return view('filter.index');
    }

    public function filter(Request $request)
    {
        $group_id = $request->group_id;
        $filter = $request->filter;

        $property = $request->property;
    
        $list_data_group = filter::where('group_product_id', $group_id)->whereIn('id', $filter)->select('value')->get()->toArray();

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
                }

                $product_search = product::whereIn('id', $result_product)->get();

                return view('frontend.ajax.product', compact('product_search'));

            }
            

        }    
            
    }
    
}
