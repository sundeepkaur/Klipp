<?php


namespace App;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    protected $table = 'contact';
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'comment'
    ];
}
