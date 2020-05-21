<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Location extends Model
{

        protected $table = "geolocationgoogleapls";
        protected $primaryKey="id";
        public $timestamps = false;

}
