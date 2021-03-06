<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/products',[OpsController::class,'index']);
Route::post('/save',[OpsController::class,'store']);
//Route::get('/getMakes',[OpsController::class,'showMake']);
//Route::get('/product-list',[OpsController::class,'getAllProducts']);
//`Route::get('/product-delete/{id}',[OpsController::class,'deleteProd']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/products', [OpsController::class,'index'] )->name('products');

Route::middleware(['auth:sanctum', 'verified'])->get('/product-list', [OpsController::class,'getAllProducts'] )->name('product-list');

Route::middleware(['auth:sanctum', 'verified'])->get('/product-delete/{id}', [OpsController::class,'deleteProd'] )->name('products-delete');

