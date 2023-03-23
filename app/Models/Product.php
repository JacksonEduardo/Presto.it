<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'brand',
        'description',
        'price',
        'usage',
        'user_id',
        'category_id',
    ];



    /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
     */


    public function toSearchableArray(){
        $category = $this->category;
        $array = [
            'id' => $this->id, // da cancellare in evenienza
            'name' => $this->name,
            'brand' => $this->brand,
            'price' => $this->price,
            'usage' => $this->usage,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'category' => $category,
            
        ];
        return $array;
        }

    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // SUL PRODOTTO SUL QUALE CHIAMIAMO IL METODO setAccepted IMPOSTI CHE IL VALORE DELLA COLONNA is_accepted E' QUELLO CHE GLI DIAMO NELLA FUNZIONE setAccepted FATTA NEL Product.php (questo valore può essere true o false in base a quale button premiamo) 
    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
// RITORNA IL NUMERO DI ANNUNCI IL CUI VALORE IS_ACCEPTED è NULL, E LI CONTA
    public static function toBeRevisionedCount(){
        return Product::where('is_accepted', null)->count();
    }
}
