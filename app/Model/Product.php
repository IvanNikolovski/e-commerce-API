<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Product extends Model
{
//    protected $fillable = ['name', 'detail', 'price', 'discount', 'stock'];
    protected $guarded = [];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
