<?php

namespace App\Http\Controllers;

// C'è UN ALTERNATIVA SULL'IMPORT DI USER
use App\Models\User;
use App\Models\Product;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    
    public function index(){
        // PRENDE TUTTI GLI ANNUNCI 'DOVE' IS_ACCEPTED è NULL
        $product_to_check = Product::where('is_accepted', null)->get();
        $product_checked = Product::latest('updated_at')->first();

        return view('revisor.index', compact('product_to_check', 'product_checked'));
    }
    
    public function acceptProduct(Product $product){
        $product->setAccepted(true);
        return redirect()->back()->with('productAccepted', 'Complimenti,hai accettato l\'annuncio');
    }
    
    public function rejectProduct(Product $product){
        $product->setAccepted(false);
        return redirect()->back()->with('productRejected', 'Complimenti,hai rifiutato l\'annuncio');
    }

    // GESTISCI LA PARAMETRICA CON 'ULTIMO ARTICOLO DIVERS DA NULL = NULL
    // public function undoProduct(Product $product){
    //     $last_product = Product::sortByDesc('updated_at')->first();
    //     $last_product->setAccepted(null);
    //     return view('revisor.index', compact('product'));

    //     // $product->setAccepted(null);
    //     // return redirect()->back()->with('message', 'Complimenti, sei tornato indietro');
    // }

    public function undoProduct(Product $product){
        

        $product_checked = Product::latest('updated_at')->first();

        $product_checked->setAccepted(null);

        return redirect()->back()->with('productUndo', 'Attenzione, hai annullato l\'ultima operazione');

    }
    


    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect('/')->with('messageBecome', 'Grazie per averci contattato, le faremo sapere');
    }

    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor', ["email"=>$user->email]);
        return redirect('/')->with('messageMake', 'Complimenti, l\'utente è diventato un revisore');
    }

    public function deleteRevisor(User $user){
        Artisan::call('app:delete-revisor-role', ["email"=>$user->email]);
        return redirect('/')->with('messageDelete', 'Complimenti, l\'utente non è più un revisore');
    }
}
