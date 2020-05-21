<?php

namespace App\Http\Controllers;

use App\ProductStore;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ClientProductActivitiesController extends Controller
{
    public function index(){
        return view('admin.admin-activities');
    }

    public function modify(Request $request){
        $this->validate($request, [
            'sid' => 'required|numeric',
            'pname' => 'required|string|max:255',
            'category' => 'required|numeric',
            'cprice' => 'required|numeric|between:0,999.99',
            'pprice' => 'required|numeric|between:0,999.99',
            'isD' => 'required|numeric'
        ]);
        $product = DB::table('products')->where('products.product_name', $request->pname)->limit(1);
        $id = DB::table('products')->where('product_name', $request->pname)->first();

        $product->update([
            'product_name' => $request->pname,
            'product_category' => $request->category
        ]);

        $productStore = DB::table('product_store')->where('product_store.product_id', $id->id)->limit(1);
        $productStore->update([
            'store_id' => $request->sid,
            'product_id' => $id->id,
            'current_price' => $request->cprice,
            'previous_price' => $request->pprice,
            'is_deleted' => $request->isD
        ]);
        return redirect('clientsActivities');

    }

    public function delete(Request $request){
        $product = DB::table('products')->where('products.product_name', $request->pname)->limit(1);
        $id = DB::table('products')->where('product_name', $request->pname)->first();

        $productStore = DB::table('product_store')->where('product_store.product_id', $id->id)->limit(1);
        $productStore->delete();
        $product->delete();
        return redirect('clientsActivities');
    }
    public function add(Request $request){

        $this->validate($request, [
            'sid' => 'required|numeric',
            'pname' => 'required|string|max:255',
            'category' => 'required|numeric',
            'cprice' => 'required|numeric|between:0,999.99',
            'pprice' => 'required|numeric|between:0,999.99',
            'isD' => 'required|numeric'
        ]);
        $product = new Product();
        $product -> product_name = $request->pname;
        $product ->product_category = $request->category;
        $product ->save();

        $id = DB::table('products')->where('product_name', $request->pname)->first();

        $productStore = new ProductStore();
        $productStore->store_id = $request->sid;
        $productStore->product_id = $id->id;
        $productStore->current_price = $request->cprice;
        $productStore->previous_price = $request->pprice;
        $productStore->is_deleted = $request->isD;
        $productStore->save();

        return redirect('clientsActivities');
    }
}
