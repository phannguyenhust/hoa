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
//User
Route::get('/user/index', function () {
    return view('user/index');
});
Route::get('/user/gioithieu', function () {
    return view('user/gioithieu');
});
Route::get('/user/lienhe', function () {
    return view('user/lienhe');
});

Route::get('/user/chitiet', function () {
    return view('user/chitiet');
});
Route::get('/user/chitiet/{id}', function ($id) {
    return view('user/chitiet', ['id'=>$id]);
});
Route::get('/user/loaisp', function () {
    return view('/user/loaisp');
});

Route::get('/user/loaisp/{id}', function ($id) {
    return view('user/loaisp',['id'=>$id]);
});
Route::get('/user/giohang', function () {
    return view('/user/giohang');
});

//admin
Route::get('/admin/loaisp', function () {
    return view('admin/loaisp');
});

Route::get('/admin/sanpham', function () {
    return view('admin/sanpham');
});
Route::get('/admin/nhanvien', function () {
    return view('admin/nhanvien');
});
Route::get('/admin/nhacungcap', function () {
    return view('admin/nhacungcap');
});
Route::get('/admin/khachhang', function () {
    return view('admin/khachhang');
});
Route::get('/admin/hoadon', function () {
    return view('admin/hoadon');
});
Route::get('/admin/donhang', function () {
    return view('admin/donhang');
});
Route::get('/admin/cthoadon', function () {
    return view('admin/cthoadon');
});
Route::get('/admin/ctdonhang', function () {
    return view('admin/ctdonhang');
});

