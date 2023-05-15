<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;
class Brand extends Model
{
    // use HasFactory;
    protected $table = 'brands';

    protected $fillable = [
        'name',
        'slug',
        'status',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
