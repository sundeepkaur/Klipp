<?php


namespace App\Http\Controllers;


class FaqController extends  Controller
{
    public function index(){
        return view('public-interface.public-FAQ');
    }
}
