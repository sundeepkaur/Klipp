<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\Product;
use App\ProductStore;
use App\Store;
use App\Todo;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class ShoppingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->push('ProductCategories', ['Category' => 'Produce','Count' =>Product::all()->where('product_category','=','1')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Dairy','Count' =>Product::all()->where('product_category','=','2')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Meat','Count' =>Product::all()->where('product_category','=','3')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Dry food','Count' =>Product::all()->where('product_category','=','4')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Electronics','Count' =>Product::all()->where('product_category','=','5')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Pet','Count' =>Product::all()->where('product_category','=','6')->count('id')]);
        $request->session()->push('ProductCategories', ['Category' => 'Pharmacy','Count' =>Product::all()->where('product_category','=','7')->count('id')]);
        $value = $request->session()->get('ProductCategories');
        return view('public-interface.public-shopping-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $searchItem = $_GET['item-name'];
        $results = Product::where('product_name', $searchItem)->first();
        $store = Store::where('name','Walmart')->first();
        $currentPrice = ProductStore::where('store_id',$store->id)->where('product_id',$results->id)->first();
        $flyer = Flyer::whereIn('store_id',[1,2,3])->where('product_id',$results->id)->get();
        $request->session()->forget('Flyers');
        $res=array();
        foreach ($flyer as $f){
            $res[]=$f->image_dir;
        }
//        return $currentPrice;
//        $ans=array();
//        foreach ($request->session()->get('ShoppingListItem') as $value ){
//            $ans[]=$value['flyer'];
//        }
        if($request->session()->has('ShoppingListItem')){
            foreach ($request->session()->get('ShoppingListItem') as $a) {
                if (strtolower($a['Product Name']) == strtolower($searchItem)) {
                    $this->index($request);
                    return view('public-interface.public-shopping-list');
                }else{
                    $request->session()->push('ShoppingListItem', ['Product Name' => $results->product_name,'Current Price' => $currentPrice->current_price]);
                    $request->session()->push('Flyers',['Flyer Images'=> $res]);
//                return $res;
                    $this->index($request);
                    return view('public-interface.public-shopping-list');
                }
            }
        }else{
            $request->session()->push('ShoppingListItem', ['Product Name' => $results->product_name,'Current Price' => $currentPrice->current_price]);
            $request->session()->push('Flyers',['Flyer Images'=> $res]);
//            return $res;
            $this->index($request);
            return view('public-interface.public-shopping-list');
        }
    }

    //POST REQUEST
    public function calculateCost(Request $request){
        $sum = 0;
        $this->index($request);
//        return(dd($_POST['miscellaneous-cost']));
        $request->session()->forget('ShoppingListTotal');
        if(is_numeric($_POST['miscellaneous-cost'])) {
            if($request->session()->has('ShoppingListItem')) {
                foreach ($request->session()->get('ShoppingListItem') as $list) {
                    $sum += $list['Current Price'];
                }
            }
            $sum += $_POST['miscellaneous-cost'];
            $_POST['miscellaneous-cost']=0;
        }else{
            $_POST['miscellaneous-cost-error']="Please enter a numeric value for miscellaneous cost.";
            $_POST['miscellaneous-cost']=0;
        }
        $request->session()->push('ShoppingListTotal', ['Total' => $sum]);

        return view('public-interface.public-shopping-list');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

    public function addToClipping(Request $request)
    {
        if($request->ajax()){
            $id = $request->input('flyerID');
            return $id;
            //echo view('public-interface.public-shopping-list');
        }
    }

//    public function removeItem(Request $request)
//    {
//        if($request->ajax()){
//            $product = $request->input('product');
//            $found=null;
//            return dd($product);
//            if($request->session()->has('ShoppingListItem')){
//
//                foreach ($request->session()->get('ShoppingListItem') as $key=>$value) {
////                    return $value['Product Name'];
//                    if($value['Product Name'] == $product){
////                        $found = $key;
//                        return dd($key);
//                    }
//                }
//                $request->session()->pull('ShoppingListItem'.'.$found');
//            }
////            return $product;
//            return view('public-interface.public-shopping-list');
//        }
//    }
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

    }
}
