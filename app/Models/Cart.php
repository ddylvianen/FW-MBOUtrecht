<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;
    
    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'comment',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(CartProduct::class, 'cart_id');
    }
}
