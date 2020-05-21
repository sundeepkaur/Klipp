<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFavouriteItems extends Model
{
    protected $table = "user_favourite_items";
    protected $primaryKey="user_id";
    public $timestamps = false;
}
