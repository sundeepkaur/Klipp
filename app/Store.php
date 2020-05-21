<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = "store";
    protected $primaryKey="id";
    public $timestamps = false;

    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
