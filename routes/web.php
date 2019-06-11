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
Route::get('/', 'PagesController@root')->name('root');

Auth::routes();


// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth']], function() {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
});




//Route::get('/', function () {
//    return view('home.Index');
//});
//
//Route::get('/index', function () {
//    return view('home.Index');
//});
//
////Route::get('Suppliers/', function () {
////    return view('Suppliers.index');
////});
//
//Route::get('Suppliers/', 'SupplierController@index');
//
////Route::get('Suppliers/Create', function () {
////    return view('Suppliers.Create');
////});
//
//Route::get('Suppliers/Create', 'SupplierController@Create');
//
//Route::Post('Suppliers/Create', 'SupplierController@CreatePost');





//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('/main', 'MainController@index');
//Route::post('/main/checklogin', 'MainController@checklogin');
//Route::get('main/successlogin', 'MainController@successlogin');
//Route::get('main/logout', 'MainController@logout');
//Route::get('logout','LoginController@logout');
//
Route::get('/home/about', function () {
    return view('home.about');
});
//
Route::get('/home/contact', function () {
    return view('home.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
