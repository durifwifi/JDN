<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PopController;
// use App\Http\Controllers\Pesan\PesanController;

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
// Route::get('/pesan', PesanController::class);
Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('login','LoginAdminController@formLogin')->name('admin.login');
    Route::post('login','LoginAdminController@login');

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout','LoginAdminController@logout')->name('admin.logout');
        Route::view('/','content/dashboard')->name('dashboard');
        Route::view('/post','data-post')->name('post')->middleware('can:role,"admin","noc"');
        Route::view('/admin','data-admin')->name('admin')->middleware('can:role,"admin"');


        
 
        Route::resource('/pop', PopController::class)->middleware('can:role,"admin","noc"');
        Route::resource('/pelanggan', PelangganController::class)->middleware('can:role,"admin","noc"');
        







    });
});
