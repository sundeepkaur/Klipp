<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Location;
use Illuminate\Support\Facades\DB;
use Torann\GeoIP\GeoIP;

class LocationController extends Controller
{
    public function index(Request $request){
        $request->session()->push('ProductCategories', ['Category' => 'Produce','Count' =>Product::all()->where('product_category','=','1')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Dairy','Count' =>Product::all()->where('product_category','=','2')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Meat','Count' =>Product::all()->where('product_category','=','3')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Dry food','Count' =>Product::all()->where('product_category','=','4')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Electronics','Count' =>Product::all()->where('product_category','=','5')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Pet','Count' =>Product::all()->where('product_category','=','6')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Pharmacy','Count' =>Product::all()->where('product_category','=','7')->count('id')]);
        $value = $request->session()->get('ProductCategories');

        //get all locations
        $location = Location::all();

        //static latitude and longitude
        $latitude = 34.731820;
        $longitude = -79.436930;

        //sort latitide and longitude within 5 KM radius
        $location = Location::selectRaw('*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( latitude ) ) ) ) AS distance', [$latitude, $longitude, $latitude])
            ->having('distance', '<', 5000)
            ->orderBy('distance')
            ->get();

        //return the view
        return view('public-interface.location', ['location' => $location]);

    }




}
