<?php

use App\Models\destination;
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


Route::get('/', 'DestinationController@home')->name('home');
Route::get('/detail/{destination}', 'DestinationController@detail')->name('detail');

Route::get('/destination/search','DestinationController@search');
Route::get('/destination/cari','DestinationController@cari');

Route::get('/login', 'UserController@login')->name('login');
Route::post('/postlogin', 'UserController@postlogin')->name('postlogin');

Route::get('/admin', 'AdminController@admin')->name('admin');

Route::get('/add', 'AdminController@add')->name('add');
Route::post('/postadd', 'AdminController@postadd')->name('postadd');

Route::get('/edit/{destination}', 'AdminController@edit')->name('edit');
Route::post('/postedit/{destination}', 'AdminController@postedit')->name('postedit');

Route::middleware('auth')->group(function () {
    Route::get('/logout', 'UserController@logout')->name('logout');
    Route::get('/delete/{destination}',function(destination $destination){
        $destination->delete();
        return back()->with('status','Delete Successfully');
    })->name('delete');
});
