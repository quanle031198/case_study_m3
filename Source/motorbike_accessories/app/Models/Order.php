<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    public function product ()
    {
        return $this->belongsToMany(Product::class);
    }

    public function customer ()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
