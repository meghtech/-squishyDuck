<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessagePerson extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function buyer()
    {
    	return $this->hasMany(Customer::class, "id", "customer_id");
    } 
    public function seller()
    {
    	return $this->hasMany(Seller::class, "id", "seller_id");
    }
}
