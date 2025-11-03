<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductModel extends Model
{
    use SoftDeletes;
    
    protected $id = 'id';
    protected $table = 'products';
    
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image_path',
        'comment',
    ];
    
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }
}
