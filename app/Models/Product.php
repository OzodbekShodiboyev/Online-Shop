<?php

namespace App\Models;

use App\Models\productImage;
use App\Models\productColor;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'featured',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];


    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function productImages() {
        return $this->hasMany(productImage::class, 'product_id', 'id');
    }

    public function productColors() {
        return $this->hasMany(productColor::class, 'product_id', 'id');
    }
}


