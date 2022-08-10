<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('back-end.product.index');
    }

    public function createform(){
        return view('back-end.product.create');
    }
}
