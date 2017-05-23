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

//Inyección de dependencias para coger el slug de la BD
Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});


Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

// Carrito -------------

Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);

// Se ha creado al ejecutar el comando php artisan make:auth
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// // Paypal

// Enviamos nuestro pedido a PayPal
Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));

// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));



// // Authentication routes...
// Route::get('auth/login', [
// 	'as' => 'login-get',
// 	'uses' => 'Auth\AuthController@getLogin'
// ]);

// Route::post('auth/login', [
// 	'as' => 'login-post',
// 	'uses' => 'Auth\HomeController@postLogin'
// ]);

// Route::get('auth/logout', [
// 	'as' => 'logout',
// 	'uses' => 'Auth\HomeController@getLogout'
// ]);

// // Registration routes...
// Route::get('auth/register', [
// 	'as' => 'register-get',
// 	'uses' => 'Auth\AuthController@getRegister'
// ]);

// Route::post('auth/register', [
// 	'as' => 'register-post',
// 	'uses' => 'Auth\AuthController@postRegister'
// ]);


