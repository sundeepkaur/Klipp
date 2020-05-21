<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $table = "flyers";
    protected $primaryKey="id";
    public $timestamps = false;
}
