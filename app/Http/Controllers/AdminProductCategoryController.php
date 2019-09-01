<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductCategoryController extends Controller
{
    //

    public function index(){
    return view('frontView.home.productCategory');
}
}
