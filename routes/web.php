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
Route::get('/chitiet', function () {
    return view('pages.chitiet');
});
Route::get('/chitiettin', function () {
    return view('pages.chitiettintuc');
});
Route::get('/sanpham', function () {
    return view('pages.sanPham');

});

Route::get('/login', function () {
    return view('pages.login');

});

