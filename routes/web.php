<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Query;


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
    $nav = Product::all();
    $user = auth()->user();

    return view('index',[
        'nav' => $nav,
        'user' => $user
    ]);
});


Route::get('cart', function () {
    $nav = Product::all();
    return view('cart',[
        'nav' => $nav
    ]);
});

Route::get('olive-oil', function () {
    $category = Product::all()->where('category', 'olive-oil');
    $nav = Product::all();
    return view('olive-oil', [
        'category' => $category,
        'nav' => $nav 
    ]);
});

Route::get('honey', function () {
    $category = Product::all()->where('category', 'honey');
    $nav = Product::all();
    return view('honey', [
        'category' => $category,
        'nav' => $nav 
    ]);
});

Route::get('olive-oil/{product}', function ($productName) { 
    $product = Product::where('name', $productName)->first();
    $nav = Product::all();
    
    return view('product', [
        'product' => $product,
        'nav' => $nav 
    ]);
});

Route::get('honey/{product}', function ($productName) { 
    $product = Product::where('name', $productName)->first();
    $nav = Product::all();
    
    return view('product', [
        'product' => $product,
        'nav' => $nav 
    ]);
});

Auth::routes();

Route::get('account', function () {
    $user = auth()->user();
    $nav = Product::all();
    return view('auth.account',[
        'user' => $user,
        'nav' => $nav
    ]);
});

Route::get('auth.login', function ()  {
    $nav = Product::all();
    $user = auth()->user();

   return view('auth.login',[
        'user' => $user,
        'nav' => $nav 
   ]);
});
