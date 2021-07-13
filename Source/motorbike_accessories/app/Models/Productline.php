<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productline extends Model
{
    use HasFactory;
    protected $table = 'productlines';

    public function product ()
    {
        return $this->hasMany(Product::class);
    }
}
