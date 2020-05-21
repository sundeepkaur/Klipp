<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = "user_role";
    protected $primaryKey=["user_id","role_id"];
    public $timestamps = false;

    /**
     * Modified By Sundeep
     */
    protected $fillable = [
        'user_id', 'role_id'
    ];
}
