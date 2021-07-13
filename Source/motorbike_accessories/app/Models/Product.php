<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    // protected $fillable = ['name', 'productline_id', 'image_id',]; 

    public function productline() {
        return $this->belongsTo(Productline::class);
    }

    public function image() {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function order ()
    {
        return $this->belongsToMany(Order::class);
    }

}
