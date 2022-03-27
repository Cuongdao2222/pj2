<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\banners;



class indexController extends Controller
{
    public function index()
    {

        $banners = banners::get();
        return view('frontend.index', compact('banners'));
    }
   
}
