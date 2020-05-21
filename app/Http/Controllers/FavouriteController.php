<?php

namespace App\Http\Controllers;



use App\UserFavouriteItems;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class FavouriteController extends Controller
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


        $user_favourite_items = UserFavouriteItems::all();

        return view('public-interface.favourites', ['user_favourite_items' => $user_favourite_items]);

    }

    public function products()
    {
        return $this->hasMany('App\Product', 'product_id');
    }

    public function search(Request $request){
        $search = $request->input('search_favourites');
        //$item_exists =  UserFavouriteItems::where('product_name', $product_id->product_name ,$search);
        $item_exists = UserFavouriteItems::whereHas('product_id', function($q) use($search) {
            $q->where('product_name', 'like', '%' . $search . '%');
        })->get();
        return view('public-interface.favourites', ['user_favourite_items' => $item_exists]);



    }
}
