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
use Illuminate\http\Request;
/*Route::get('/', function () {
 
    return view('welcome');
});*/

Route::get('/','HomeController@index');
Route::resource('/product','ProductController');

//cart
Route::get('/mycart','CartController@mycart');
Route::post('/add-to-cart','CartController@addToCart');
Route::post('/update-cart','CartController@updateCart');
Route::any('/cartItemDelete/{temp_order_row_id}','CartController@cartItemDelete');
Route::any('/cartItemDeleteAll','CartController@cartItemDeleteAll');


//end cart


Route::get ('/checkoutPage','CartController@checkoutItems');
Route::post ('/confirm-order','CartController@confirmOrder');
Route::post ('/checkout','CartController@checkout');
Route::post ('/checkoutwithregistration','CartController@checkoutwithregistration');

Route::get('/user-registration','Auth\CommonController@showRegistrationForm')->name('user.registration');
Route::post('/user-registration','Auth\CommonController@register')->name('user.registration.submit');

Route::view('/about', 'about');

Route::view('/contact_us', 'contact');

Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], function () {
    Route::view('/admin', 'admin.login');
    Route::post('/postAdminLogin', 'LoginController@postAdminLogin'); 
    Route::get('/admin/logout', 'LoginController@logout');
    Route::get('/admin/dashboard', 'DashboardController@index');

    //Route::post('/admin/testdatainsert', 'DashboardController@testdatainsert');
    Route::get('/admin/products', 'ProductController@index');
    //Route::get('/admin/product/create', 'ProductController@create');
    Route::get('/admin/categories', 'CategoryController@index');
    Route::get('/admin/category/create', 'CategoryController@create');
    Route::post('/admin/category/store', 'CategoryController@store');   
    Route::get('/admin/category/edit/{id}', 'CategoryController@edit');
    Route::post('/admin/category/update', 'CategoryController@update');
    Route::get('/admin/category/show/{id}', 'CategoryController@show');
    Route::get('/admin/category/deleteRecord/{id}', 'CategoryController@deleteRecord');

});
Route::post('/submit-contact', function (Request $request){
//	dd($request);
	$data = array('name'=>$request->username,'email' => $request->email, 'message' => $request->message);

	return view('/show_details',['data'=>$data]);
});
