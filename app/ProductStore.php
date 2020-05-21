<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{
    protected $table = "product_store";
    protected $primaryKey="id";
    public $timestamps = false;

    /**
     * Modified By Sundeep
     */
    protected $fillable = [
        'store_id', 'product_id','current_price','previous_price','is_deleted'
    ];
}

