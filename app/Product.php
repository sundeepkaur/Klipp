<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey="id";
    public $timestamps = false;

    public function store(){
        return $this->belongsToMany(Store::class);
    }

    /**
     * Modified By Sundeep
     */
    protected $fillable = [
        'product_name', 'product_category'
    ];
}
