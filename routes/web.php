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
    return view('pages.trangchu');
});
Route::get('/lienhe', function () {
    return view('pages.lienhe');
});

Route::get('/tintuc', function () {
    return view('pages.tintuc');
});


Route::prefix('san-pham')->group(function () {

    Route::get('/', function () {
        return view('pages.sanPham');
    })->name('san-pham');



});
Route::get('trang-chu', [
	'as' =>'trang-chu',
	'uses' => 'Controller_1@get_trangchu'
]);
