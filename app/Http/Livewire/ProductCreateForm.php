<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductCreateForm extends Component
{
    public $name, $brand, $description, $price, $usage;

    public $category;
    

    protected $rules =[
        'name' => 'required|min:2',
        'brand' => 'required|min:2',
        'description' => 'required',
        'price' => 'required|numeric',
        'usage' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Il campo nome non puo essere vuoto.',
        'name.min' => 'Il tuo nome deve essere almeno di due caratteri.',
        'brand.required' => 'Il campo marchio non puo essere vuoto.',
        'brand.min' => 'Il tuo marchio deve essere almeno di due caratteri.',
        'description.required' => 'Il campo descrizione non puo essere vuoto.',
        'price.required' => 'Inserisci il prezzo del tuo prodotto',
        'price.numeric' => 'Il prezzo deve essere numerico',
        'usage.required' => 'Inserisci in che condizione è il tuo prodotto',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

   

    public function store(){
        $this->validate();


        $product = Product::create([
            'name' => $this->name,
            'brand' => $this->brand,
            'description' => $this->description,
            'price' => $this->price,
            'usage' => $this->usage,
            'user_id' => Auth::id(),
            // user_id' => Auth::user()->id,
            'category_id' => Category::id(),
        ]);

        

        session()->flash('productCreated', 'Il tuo prodotto è stato inserito correttamente');
        $this->reset();


    }
    
    public function render()
    {
        return view('livewire.product-create-form');
    }
}
