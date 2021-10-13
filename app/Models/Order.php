<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gig()
    {
    	return $this->hasOne(Gig::class, "id", "gig_id");
    } 
    public function seller()
    {
    	return $this->hasOne(Seller::class, "id", "seller_id");
    }
    public function customer()
    {
    	return $this->hasOne(Customer::class, "id", "customer_id");
    }
}
