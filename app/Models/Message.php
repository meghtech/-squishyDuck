<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user1()
    {
    	return $this->belongsTo(Seller::class, "user_id");
    }
    public function user2()
    {
    	return $this->belongsTo(Customer::class, "user_id");
    }
    public function receiver1()
    {
    	return $this->belongsTo(Seller::class, "receiver_id");
    }
    public function receiver2()
    {
    	return $this->belongsTo(Customer::class, "receiver_id");
    }
}
