<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationUser extends Model
{
    protected $table = "user";
    protected $primaryKey="id";
    public $timestamps = false;
}
