<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\make;


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
}
