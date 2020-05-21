<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authentication extends Model
{
    protected $table = "user";
    protected $primaryKey="id";
    public $timestamps = false;
    protected $fillable =['first_name','last_name', 'email', 'password', 'phone'];
}
