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
    return redirect('index5');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/buycart', function () {
    return view('buycart');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/contactus', function () {
    return view('contactus');
});
 


route::post('/form-save','App\Http\Controllers\dcontroller@form_save');
route::post('/form-submit','App\Http\Controllers\dcontroller@form_submit');
route::get('/logout-user','App\Http\Controllers\dcontroller@logout');
route::get('/home-page','App\Http\Controllers\dcontroller@home');
route::get('contactus','App\Http\Controllers\dcontroller@display');
route::get('/contact-head','App\Http\Controllers\dcontroller@contact');
route::post('/form-last','App\Http\Controllers\dcontroller@contacts');
route::get('index5','App\Http\Controllers\dcontroller@show');
route::get('products','App\Http\Controllers\dcontroller@display2');
route::get('products{id}','App\Http\Controllers\dcontroller@pro');
route::get('buycart','App\Http\Controllers\dcontroller@display3');
route::get('buycart{id}','App\Http\Controllers\dcontroller@production');



