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
Auth::routes();
Route::get('/','IndexController@index');

Route::get('pharma-shop','AdminProductCategoryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('admin');

Route::resource('/admin/products', 'AdminProductController')->middleware('admin');

Route::get('/admin/companies','AdminCompanyController@index')->middleware('admin');
Route::post('/admin/companies','AdminCompanyController@store')->middleware('admin');
Route::get('/admin/companies/{company}','AdminCompanyController@destroy')->middleware('admin');

Route::get('/admin/categories','AdminCategoryController@index')->middleware('admin');
Route::post('/admin/categories','AdminCategoryController@store')->middleware('admin');
Route::get('/admin/categories/{category}','AdminCategoryController@destroy')->middleware('admin');;

Route::get('/admin/orders', function () {
    return view('admin.orders');
})->middleware('admin');

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

Route::get('/log',function(){
    return view('customer.login');
});

Route::get('/signup',function(){
    return view('customer.register');
});

Route::get('/order-confirm','ConfirmationController@index');
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('/index', 'IndexController@index');
