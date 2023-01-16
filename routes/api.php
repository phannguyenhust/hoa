<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\API\LoaiSPController;
Route::resource('loaisanpham',LoaiSPController::class);
use App\Http\Controllers\API\SanPhamController;
Route::resource('Sanpham',SanPhamController::class);
use App\Http\Controllers\API\NhanVienController;
Route::resource('Nhanvien',NhanVienController::class);
use App\Http\Controllers\API\NhaCungCapController;
Route::resource('nhacc',NhaCungCapController::class);
use App\Http\Controllers\API\KhachHangController;
Route::resource('KhachHang',KhachHangController::class);
use App\Http\Controllers\API\HoaDonController;
Route::resource('HoaDon',HoaDonController::class);
use App\Http\Controllers\API\DonHangController;
Route::resource('DonHang',DonHangController::class);
use App\Http\Controllers\API\CTHoaDonController;
Route::resource('CTHoaDon',CTHoaDonController::class);
use App\Http\Controllers\API\CTDonHangController;
Route::resource('CTDonHang',CTDonHangController::class);

