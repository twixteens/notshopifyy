<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //return all products
    public function index()
    {
        //return all products
        return Product::with('categories:id,name')
            ->get();
    }
    
}