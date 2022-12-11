<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


	protected $fillable = ['offer_price','regular_price','priceStatus','name','des','image','category_id','sub_category_id','child_category_id'];

    use HasFactory;
       public function subcategory()
    {
       return $this->belongsTo('App\Models\SubCategory');
   
    }
     public function category()
    {
       return $this->belongsTo('App\Models\Category');
   
    }
}
