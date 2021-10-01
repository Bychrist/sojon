<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model
{
    use HasFactory;
    protected $table ='brand_products';
    protected $fillable = ['product_name','product_detail','product_image','brand_id'];

    public function Brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
