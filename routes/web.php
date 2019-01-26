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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/dashboard', function(){
//     return view('admin.dashboard');
// });


Route::get('/login2', function(){
    return view('login');
});

Route::get('/dashboard2', function(){
    return view('layouts.app2');
});



Route::group(['middleware' => 'auth'], function(){
    Route::get('logout','Auth\AuthController@logout')->name('logout');
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('dashboard','DashboardController');
    
    Route::resource('/customers','CustomerController');
    Route::get('/customers','CustomerController@index')->name('customer');
    Route::get('/customers/{customer}/confirm','CustomerController@confirm')->name('customers.confirm');
    
    Route::resource('/suppliers','SupplierController');
    Route::get('/suppliers/{supplier}/confirm','SupplierController@confirm')->name('suppliers.confirm');

    /**
     * Profile
     */
    Route::get('/profile','ProfileController@index')->name('profile');

    /**
     * Category
     */
    // Route::resource('category','CategoryController');


    /**
     * Receive Category
     */
    Route::get('/receive/category','ReceiveCategoryController@index')->name('receiveItem');

    /**
     * Catogries
     */

    /**
     * Items as catogry
     */
    Route::resource('/items','ItemController');
    Route::get('/items/{item}/edit','ItemController@edit')->name('items.edit');
    Route::put('/items/{item}/edit','ItemController@update')->name('items.update');
    Route::post('/items/store','ItemController@store')->name('item.store');
    Route::delete('/items/{item}/delete','ItemController@destroy')->name('items.destroy');
    Route::get('/items/{item}/confirm','ItemController@confirm')->name('items.confirm');
    
    /* =======   Insert catogry ====== */
    Route::resource('catogries', 'CategoryController');

    /* ======= Store Resroureces ===== */
    Route::resource('store', 'StoreController');
});

