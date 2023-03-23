<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        
        $products = Product::where('is_accepted', true)->take(6)->orderBy('created_at', 'DESC')->get();
        return view('welcome' , compact('products'));
        
    }

    public function categoryShow(Category $category) {
        return view('category.show', compact('category'));
        
    }

    public function searchProducts(Request $request){
         $products = Product::search($request->searched)->where('is_accepted', true); //paginate(10)

         return view ('product.index' , compact('products'));
    }

}
