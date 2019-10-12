<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $primaryKey = 'brand_id';
    protected $fillable = ['brand_id','brand_name', 'brand_slug', 'brand_image','brand_description'];
    protected $guarded = ['brand_id'];

    public function products()
    {
        return $this->hasMany(Product::class,'brand_id');
    }

    // take asset of the owned image
    public function getSrcAttribute()
    {
        return asset(env('IMAGE_PATH') . $this->attributes['brand_image']);
    }
}
