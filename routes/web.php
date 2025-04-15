<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddItem;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login', "App\Http\Controllers\LoginController@auth");
Route::get('/inventory', "App\Http\Controllers\inventory@index");
Route::post('/items', [AddItem::class, 'store'])->name('items.store');
Route::put('/items/{id}', [AddItem::class, 'update'])->name('items.update');