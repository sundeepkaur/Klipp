<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $count = array();
//        $count[] = Product::all()->where('product_category','=','1')->count('id');
//        $count[] = Product::all()->where('product_category','=','2')->count('id');
//        $count[] = Product::all()->where('product_category','=','3')->count('id');
//        $count[] = Product::all()->where('product_category','=','4')->count('id');
//        $count[] = Product::all()->where('product_category','=','5')->count('id');
//        $count[] = Product::all()->where('product_category','=','6')->count('id');
//        $count[] = Product::all()->where('product_category','=','7')->count('id');
////        DB::table('users')->count();
//        return view('public-interface.public-shopping-list',['count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

    public function makeShoppingList(){
        $searchItem = $_GET['item-name'];
//        dd($searchItem);
        $results= Product::where('product_name',$searchItem)->get();

        return($results);
        return view('public-interface.public-shopping-list',['results'=>$results]);
    }
}
