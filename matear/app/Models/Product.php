<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function favoritesProducts(){
        return $this->hasMany(FavoritesProducts::class, 'product_id');
    }
}
