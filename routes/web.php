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

Route::get('master', 'PageController@index');//Main shop
Route::get('shop', 'PageController@shop')->name('shop');//show Products
Route::get('shop/dataAjax', 'PageController@dataAjax')->name('getData');//Pagination
Route::get('shop/Filter', 'PageController@fetchData')->name('fetchData'); //Fetch Data
Route::get('shop/cart', 'PageController@cart')->name('cart');//Cart
Route::get('add-to-cart', 'PageController@getAddToCart')->name('product.addtoCart');
Route::get('add_many_cart', 'PageController@AddManyCart')->name('product.addManyCart');
Route::get('removeOne', 'PageController@removeOne')->name('product.removeOne');
Route::get('checkout', 'PageController@getCheckout')->name('getCheckout');
Route::post('checkout', 'PageController@postCheckout')->name('postCheckout');
Route::get('productDetail/{id}', 'PageController@productDetail')->name('productDetail');
Route::get('addComment', 'PageController@addComment')->name('addComment');
Route::get('fetch_comment', 'PageController@fetchComment')->name('fetchComment');


use App\Jobs\SendEmailJob;
use App\Mail\SendEmailMailable;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
Route::prefix('admin')->group(function(){
	Route::get('index', 'AdminController@dashboard')->name('dashboard')->middleware('authLogin');
	//Product
	Route::post('load_data', 'AdminController@load_data')->name('load_data');
	Route::get('products','AdminController@getProducts')->name('products');
	Route::get('AddProduct', 'AdminController@addProduct')->name('products.add');
	Route::post('AddProduct', 'AdminController@storeProduct');
	Route::get('EditProduct/{id}', 'AdminController@editProduct')->name('products.edit');
	Route::post('EditProduct/{id}', 'AdminController@updateProduct');
	Route::get('DeleteProduct/{id}', 'AdminController@deleteProduct')->name('products.delete');
	Route::get('pdf', 'AdminController@pdf');
	Route::get('excel', 'AdminController@excel');
	//End Product
	//SLide
	Route::get('slides', 'AdminController@getSlide')->name('slides');
	Route::get('addSildes', 'AdminController@addSlide')->name('slides.add');
	Route::post('addSildes', 'AdminController@storeSlide');
	Route::get('EditSlide/{id}', 'AdminController@editSlide')->name('slides.edit');
	Route::post('EditSlide/{id}', 'AdminController@updateSlide');
	Route::get('DeleteSlide/{id}', 'AdminController@deleteSlide');
	//End Slide

	Route::get('AuthLogin', 'AdminController@login')->name('AuthLogin');
	Route::post('AuthLogin', 'AdminController@actionLogin');
	Route::get('AuthLogout', 'AdminController@logout');

	//Admin
	Route::resource('ajaxAdmin', 'AdminController');
	Route::post('ajaxAdmin/update', 'AdminController@update')->name('ajaxAdmin.update');
	Route::get('ajaxAdmin/destroy/{id}', 'AdminController@destroy');

	//Chart
	Route::get('ChartBill', 'AdminController@chartBill');
	//End Chart
});
Auth::routes();

use App\Customer;
