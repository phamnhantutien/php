<?php

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
    return view('form');
});

Route::post('/dem', function (Illuminate\Http\Request $request) {
    $description = $request->description;
    $price = $request->price;
    $rate = $request->rate;
    $discount = $price * $rate * 0.01;
    return view('display', compact(['description', 'price', 'rate', 'discount']));
});
