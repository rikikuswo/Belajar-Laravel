<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Models\User;
use Illuminate\Routing\RouteAction;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Menampilkan data
Route::get('/user', [UserController::class, 'index']);

//Menambahkan data
Route::get('/user/add', [UserController::class, 'adddata']);
Route::post('/user/saveData', [UserController::class, 'saveData']);

//Mengubah data
Route::get('/user/update/{id}', [UserController::class, 'updateData']);
Route::post('/user/saveUpdate', [UserController::class, 'saveUpdate']);

//Menghapus data
Route::get('/user/delete/{id}', [UserController::class, 'delete']);

//Pencarian data
Route::get('/user/search', [UserController::class, 'search']);

//Eloquent Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']); //Select
Route::get('/mahasiswa/add', [MahasiswaController::class, 'add']); //Form Input
Route::post('mahasiswa/save', [MahasiswaController::class, 'save_mahasiswa']); //Save Input
Route::get('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']); //Form Update
Route::put('/mahasiswa/saveupdate/{id}', [MahasiswaController::class, 'save_update']); //Save Update
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete']); //Delete
Route::get('/mahasiswa/trash', [MahasiswaController::class, 'trash']); //SoftDelete / Sampah
Route::get('/mahasiswa/restore/{id}', [MahasiswaController::class, 'restore']); //Restore Data
Route::get('/mahasiswa/restore_all', [MahasiswaController::class, 'restore_all']); //Restore All Data
Route::get('/mahasiswa/del_permanent/{id}', [MahasiswaController::class, 'del_permanent']); //Hapus Permanen
Route::get('/mahasiswa/del_permanent_all', [MahasiswaController::class, 'del_permanent_all']); //Hapus Permanen Semua Data
