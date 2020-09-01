<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'category', 'main_image', 'sub_image_1', 'sub_image_2'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category', 'id');
    }
}