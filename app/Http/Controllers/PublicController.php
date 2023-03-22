<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        
        $products = Product::take(6)->orderBy('created_at', 'DESC')->get();
        return view('welcome' , compact('products'));
        
    }

    public function categoryShow(Category $category) {

        return view('category.show', compact('category'));

    }

}
