<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSeller extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function seller()
    {
    	return $this->hasOne(Seller::class, "id", "seller_id");
    }
    public function order()
    {
    	return $this->hasOne(Order::class, "id", "order_id");
    }



}
