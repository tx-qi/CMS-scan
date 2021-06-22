<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('/scanHistory', function () {
    return view('scanHistory');

})->middleware(['auth'])->name('scanHistory');


/* Route::get('/scanHistory_admin', function () {
    return view('scanHistory_admin');

})->middleware(['auth'])->name('scanHistory_admin');

Route::get('/userList_admin', function () {
    return view('userList_admin');

})->middleware(['auth'])->name('userList_admin');
 */
Route::group(['middleware' => ['auth', 'role:admin']], function() {

    Route::get('scanHistory_admin', 'App\Http\Controllers\DashboardController@scanHistory_admin')->name('scanHistory_admin');
    Route::get('userList_admin', 'App\Http\Controllers\DashboardController@userList_admin')->name('userList_admin');
});

require __DIR__.'/auth.php';
