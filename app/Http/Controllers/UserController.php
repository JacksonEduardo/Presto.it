<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $myId = Auth::user()->id;
        $products = Product::where('user_id', $myId)->orderBy('created_at', 'DESC')->get();
        return view('user.index', compact('products'));
    }
    // public function index($id){
    //     $user = User::where('id', $id)->first();
    // if (!$user) {
    //     return redirect('product.index');
    // }
    // return view('users.show', compact('user'));
    // }
}

