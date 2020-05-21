<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultiDiscount extends Model
{
    protected $table = "multi_discounts";
    protected $primaryKey="id";
    public $timestamps = false;
}
