<?php

namespace App\Model;

use app\Model\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
