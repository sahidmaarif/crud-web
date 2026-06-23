<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'stock',
        'price',
        'image',
        'clicks',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
