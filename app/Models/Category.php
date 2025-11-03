<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
    ];
    
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(ProductModel::class, 'product_categories', 'category_id', 'product_id');
    }
}
