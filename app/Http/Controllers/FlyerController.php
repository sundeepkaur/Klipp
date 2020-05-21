<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\Product;
use App\ProductCategory;

use App\UserFavouriteItems;
use Illuminate\Http\Request;

class FlyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
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
        $request->session()->forget('BrowseItems');
        $request->session()->forget('SideSearchNavResults');
        return view('public-interface.public-search-flyer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if(isset($_GET['item-name']) && $_GET['item-name']!=null){
            $searchItem = $_GET['item-name'];
            $results = Product::where('product_name', $searchItem)->first();
            $flyer = Flyer::where('product_id', $results->id)->get();
            $res = array();
            foreach ($flyer as $f) {
                $res[] = $f->image_dir;
            }
            if ($request->session()->has('BrowseItems')) {
                foreach ($request->session()->get('BrowseItems') as $a) {
                    if (strtolower($a['Product Name']) == strtolower($searchItem)) {
                        $this->index($request);
                        return view('public-interface.public-search-flyer');
                    }
                }
            }
            $request->session()->forget('BrowseItems');
            $request->session()->forget('SideSearchNavResults');
            $this->index($request);
            $request->session()->push('BrowseItems', ['Product Name' => $results->product_name, 'Flyers Images' => $res]);

        }else{
            $this->index($request);
            $_POST['item-entry-error']="Please enter an item to search.";
        }
        return view('public-interface.public-search-flyer');
    }

    public function sideNavSearch(Request $request,$category){
        $categoryId = ProductCategory::where('department_name', $category)->first();
        $products = Product::where('product_category', $categoryId->id)->get();
        $res = array();
        foreach ($products as $p) {
            $res[] = $p->id;
        }
        $flyer = array();
        foreach ($res as $id)
        {
            $flyer[] = Flyer::select('image_dir')->where('product_id',$id)->get();
        }
        $res = array();
        foreach ($flyer as $f){
            foreach ($f as $id){
                $res[] = $id->image_dir;
            }
        }
        $request->session()->forget('BrowseItems');
        $request->session()->forget('SideSearchNavResults');
        $this->index($request);
        $request->session()->push('SideSearchNavResults', ['Flyers Images' => $res]);
        return view('public-interface.public-search-flyer');
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

    public function store_favourites(Request $request)
    {
        $grocery = new UserFavouriteItems();
        $grocery->name = $request->name;
        $grocery->type = $request->type;
        $grocery->price = $request->price;

        $grocery->save();
        return response()->json(['success'=>'Data is successfully added']);
    }
}
