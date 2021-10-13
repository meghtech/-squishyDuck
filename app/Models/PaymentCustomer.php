<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentCustomer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customer()
    {
    	return $this->hasOne(Customer::class, "id", "customer_id");
    }
    public function order()
    {
    	return $this->hasOne(Order::class, "id", "order_id");
    }
    public function gig()
    {
    	return $this->hasOne(Gig::class, "id", "gig_id");
    }
}
