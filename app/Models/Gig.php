<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    public function order()
    {
    	// return $this->belongsTo(Seller::class);
     return $this->belongsTo(Order::class);
    }

}
