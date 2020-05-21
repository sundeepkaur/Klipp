<?php

namespace App\Http\Controllers;

use App\Product;
use Couchbase\RegexpSearchQuery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public-interface.public-home');
    }

    public function show_about_us(Request $request)
    {
        $request->session()->push('ProductCategories', ['Category' => 'Produce','Count' =>Product::all()->where('product_category','=','1')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Dairy','Count' =>Product::all()->where('product_category','=','2')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Meat','Count' =>Product::all()->where('product_category','=','3')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Dry food','Count' =>Product::all()->where('product_category','=','4')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Electronics','Count' =>Product::all()->where('product_category','=','5')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Pet','Count' =>Product::all()->where('product_category','=','6')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Pharmacy','Count' =>Product::all()->where('product_category','=','7')->count('id')]);
        $value = $request->session()->get('ProductCategories');
        return view('public-interface.about_us');

    }

    public function show_video(Request $request)
    {
        $request->session()->push('ProductCategories', ['Category' => 'Produce','Count' =>Product::all()->where('product_category','=','1')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Dairy','Count' =>Product::all()->where('product_category','=','2')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Meat','Count' =>Product::all()->where('product_category','=','3')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Dry food','Count' =>Product::all()->where('product_category','=','4')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Electronics','Count' =>Product::all()->where('product_category','=','5')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Pet','Count' =>Product::all()->where('product_category','=','6')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Pharmacy','Count' =>Product::all()->where('product_category','=','7')->count('id')]);
        $value = $request->session()->get('ProductCategories');
        return view('public-interface.video');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//    public function makeShoppingList(){
//        $searchItem = Input::get('item-name');
//        $results= Product::all()->where('product_name',$searchItem);
//////        $user = DB::table('store_')->where('name', 'John')->first();
//        return view('public-shopping-list',['results'=>$results]);
//    }
}
