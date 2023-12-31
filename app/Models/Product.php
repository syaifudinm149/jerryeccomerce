<?php

namespace App\Models;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function productImages()
    {
        return $this->HasMany(ProductImage::class, 'product_id', 'id');
    }

    public function productColors()
    {
        return $this->HasMany(ProductColor::class, 'product_id', 'id');
    }
}
