<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/products', [ProductsController::class, 'products']);
Route::get('/show', [ProductsController::class, 'show']);
Route::get('/edit', [ProductsController::class, 'edit'])->middleware('is.auth');
Route::post('/save', [ProductsController::class, 'save']);
Route::any('/add', [ProductsController::class, 'add']);
Route::get('/delete', [ProductsController::class, 'delete'])->middleware('is.admin');

