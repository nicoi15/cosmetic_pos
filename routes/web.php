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
use App\Customer;

// Route::get('/', function () {
//     return view('pages.index');
// });
Route::get('/a', function () {
    echo Customer::all();
});

Route::get('/','PagesController@index');
Route::get('/dashboard','PagesController@dashboard');
Route::get('/login','PagesController@login');
Route::get('/customer','PagesController@customer');
Route::get('/product','PagesController@product');
Route::get('/sales','PagesController@sales');
<<<<<<< HEAD

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UsersController');
=======
Route::get('/home','PagesController@list');
>>>>>>> 279d0134dd7dcd9ebae5eb401aac4abe69edca5a
