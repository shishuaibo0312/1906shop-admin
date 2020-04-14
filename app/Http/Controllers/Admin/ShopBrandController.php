<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopBrandController extends Controller
{
    //商品品牌的添加
    function add(){
        return view('admin.brand.add');
    }

    //商品品牌的添加执行
    function add_do(){

    }
}
