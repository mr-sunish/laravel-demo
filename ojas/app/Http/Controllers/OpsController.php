<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\make;
use Illuminate\Support\Facades\DB;


class OpsController extends Controller
{
   public function index(){
   	return view('products')->with('makeArr', make::all());
   }


   public function store(Request $request){
   	$res  = array('msg' =>'something went wrong' );
   

   	$data= $request->all();

   	$save= Product::insert($data);
   	if($save){
   			$res  = array('msg' =>'inserted successfully' );
   	}
   	return response()->json($res);
   }
   public function getAllProducts(){
      

      $productsArray = DB::table('products')
            ->join('makes', 'products.make_id', '=', 'makes.id')
            ->join('product_models', 'products.model_id', '=', 'product_models.id')
            ->join('processors', 'products.processor_id', '=', 'processors.id')
            ->select('products.id', 'makes.make_name', 'product_models.model_name','processors.processor_name')
            ->get();

            return view('product-list')->with('products', $productsArray);
   }
   public function deleteProd(Request $request, $id){
      Product::destroy(array('id',$id));
      $request->session()->flash('msg', 'deleted Successfully');
      return redirect('product-list');
   }
}