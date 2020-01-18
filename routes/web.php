<?php

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
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');
Route::resource('/product','ProductController');
Route::view('/about','about');

// Route::view('/registration','registration');
// Route::resource('product', 'ProductController');
// Route::post('/submit-product', function (Request $request) {
//     $data = array('product_name'=>$request->product_name, 'product_price'=>$request->product_price);
//     return view('/show_product_details',['data'=>$data]);
// });
Route::view('/contact_us','contact_us');
Route::resource('product', 'ProductController');
Route::post('product/submitRating','ProductCOntroller@submitRating');
Route::post('/submit-contact', function (Request $request) {
    $data = array('name'=>$request->user_name, 'email'=>$request->email, 'message'=>$request->message);
    return view('/show_details',['data'=>$data]);
});


