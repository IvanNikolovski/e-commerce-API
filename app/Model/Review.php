<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
  //  protected $guarded = [];
    protected $fillable = ['customer', 'star', 'review', 'product_id'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product() {

        return $this->belongsTo(Product::class);
    }
}
