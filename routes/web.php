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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pharma-shop','AdminProductCategoryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::resource('/admin/products', 'AdminProductController');

Route::get('/admin/companies','AdminCompanyController@index');
Route::post('/admin/companies','AdminCompanyController@store');
Route::get('/admin/companies/{company}','AdminCompanyController@destroy');

Route::get('/admin/categories','AdminCategoryController@index');
Route::post('/admin/categories','AdminCategoryController@store');
Route::get('/admin/categories/{category}','AdminCategoryController@destroy');

Route::get('/admin/orders', function () {
    return view('admin.orders');
});

//Customer's Routes

Route::resource('/categories','ProductController');

Route::get('/wishlist',function(){
    return view('customer.services.wishlist');
});

Route::get('/cart/{cart}','CartController@add');
Route::get('/cart','CartController@cart');
Route::get('/cart/remove/{cart}','CartController@remove');
Route::post('/cart/update','CartController@update');


Route::get('/checkout','CheckoutController@index');
Route::post('/checkout','CheckoutController@store');

Route::get('/dashboard',function(){
    return view('customer.account.dashboard');
});

Route::get('/signout',function(){
    return view('customer.login');
});

Route::get('/signin',function(){
    return view('customer.login');
});

Route::get('/signup',function(){
    return view('customer.register');
});

Route::get('/order-confirm',function(){
    return view('customer.services.order-confirm');
});

