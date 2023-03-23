<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'brand',
        'description',
        'price',
        'usage',
        'user_id',
        'category_id',
    ];

    
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
