<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserManageController;
use App\Http\Controllers\KelasManageController;
use App\Http\Controllers\MateriManageController;

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
Route::get('dashboard', [LoginController::class, 'index']);
Route::post('dashboard', [LoginController::class, 'subscribe']);

Route::get('kelas/{id}', [UserController::class, 'index']);

Route::get('admin/usermanage', [UserManageController::class, 'index']);
Route::get('admin/usermanage/{user}', [UserManageController::class, 'show']);
Route::put('admin/usermanage', [UserManageController::class, 'edit']);
Route::delete('admin/usermanage/{user}', [UserManageController::class, 'destroy']);

Route::get('admin/kelasmanage', [KelasManageController::class, 'index']);
Route::get('admin/kelasmanage/tambah', [KelasManageController::class, 'create']);
Route::get('admin/kelasmanage/{kelas}', [KelasManageController::class, 'show']);
Route::get('admin/kelasmanage/siswa/{id}', [KelasManageController::class, 'siswa']);
Route::post('admin/kelasmanage', [KelasManageController::class, 'store']);
Route::put('admin/kelasmanage', [KelasManageController::class, 'edit']);
Route::delete('admin/kelasmanage/{kelas}', [KelasManageController::class, 'destroy']);

Route::get('admin/materimanage', [MateriManageController::class, 'index']);
Route::get('admin/materimanage/tambah', [MateriManageController::class, 'create']);
Route::get('admin/materimanage/{materi}', [MateriManageController::class, 'show']);
Route::post('admin/materimanage', [MateriManageController::class, 'store']);
Route::put('admin/materimanage', [MateriManageController::class, 'edit']);
Route::delete('admin/materimanage/{materi}', [MateriManageController::class, 'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/redirect', function () {
    return redirect('dashboard');
})->name('redirect');
