<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function seller()
    {
    	return $this->hasOne(Seller::class, "id", "user_id");
    }
    public function customer()
    {
    	return $this->hasOne(Customer::class, "id", "user_id");
    }

}
