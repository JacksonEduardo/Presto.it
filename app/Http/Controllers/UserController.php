<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // PARAMETRO OPZIONALE
    public function index(User $user = NULL)
    {
        if(!$user){
            $myId = Auth::user()->id; //Forse si puo sostituire direttamente con Auth::id() nel "where"
            $products = Product::where('user_id', $myId)->orderBy('created_at', 'DESC')->get();
        }else{
            $products = Product::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        }

        return view('user.index', compact('products'));
    }
    
     // GESTISCI IL REQUIRED DEL CAMPO UPDATE NEL FORMA DENTRO L'index.blade
     public function changeAvatar(User $user, Request $request){
        $user->update([
            'profilePicture' => $request->file('profilePicture')->store('public/avatar')
        ]);
        return redirect()->back()->with('avatarUpdated', 'Complimenti hai aggiornato il tuo avatar');
    }
}

