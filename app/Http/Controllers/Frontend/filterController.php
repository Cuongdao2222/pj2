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

        if(isset($list_data_group)){

            foreach ($list_data_group as $key => $value) {

                foreach($value as $values){

                    $arr = json_decode($values, true);

                    $keys[] = array_keys($arr);

                   
                }
               
               
            }
        }
          print_r(array_values($keys));

        // $result = array_merge($fill[0][7], $fill[1][8]);

        // print_r($list_data_group);
        

        // if(isset($list_data_group)){

        //     $result_arr = [];

        //     foreach ($list_data_group as $key => $value) {

        //         array_push( $result_arr,json_decode($value['value'], true));
        //     }
        //     print_r($result_arr);
           
        // }


    }
    
}
