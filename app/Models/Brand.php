<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected  $table = 'brands';
    protected $fillable = ['brand_name','brand_detail','brand_image','brand_detail'];

    public function BrandProducts()
    {
        return $this->hasMany(BrandProduct::class,'brand_id');
    }



}
