<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Listings extends Model
{
    use HasFactory;

    public function order()
    {
    	return $this->belongsTo(Order::class, "gig_id");
    }

    public function user()
    {
        
    	return $this->belongsTo(User::class,'user_id');
    }
}
