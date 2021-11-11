<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Seller;
use App\Models\Listings;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function listing()
    {
    	return $this->belongsTo(Listings::class, "gig_id");
    }
    public function seller()
    {
    	return $this->belongsTo(Seller::class, "seller_id");
    }
    public function customer()
    {
    	return $this->belongsTo(Customer::class, "customer_id");
    }
}
