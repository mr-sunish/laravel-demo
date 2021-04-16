<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\productModel;
use App\Models\processor;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/getModel', function (Request $request){
	return ProductModel::where('make_id', $request->make_id)->get();
});
Route::post('/getProcessor', function (Request $request){
	return processor::where('model_id', $request->model_id)->get();
});
