<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'card_name',
        'card_number',
        'card_expiry',
        'card_cvc',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
