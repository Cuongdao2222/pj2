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
    
}
