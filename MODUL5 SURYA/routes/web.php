<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;

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
Route::get('/Home', function () {
    return view('home');
});
// Route::get('/Products', function () {
//     return view('/Products/index');
// });
// Route::get('/Orders', function () {
//     return view('/Orders/index');
// });
Route::get('/History', function () {
    return view('/Orders/history');
});


Route::get('/Products', [ProductsController::class, 'index']);
Route::post('/doProducts', [ProductsController::class, 'store']);
Route::get('/Products/insert', [ProductsController::class, 'insert']);
Route::get('/Products/{{product}}', [ProductsController::class, 'update']);

Route::get('/Orders', [OrdersController::class, 'index']);
Route::post('/doOrder', [OrdersController::class, 'store']);
Route::get('/Orders/{{order}}', [OrdersController::class, 'show']);
// @csrf

?>