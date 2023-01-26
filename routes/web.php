<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\CategoryController;

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


//halaman awal
Route::get('/', [AuthController::class, 'index'])->name('index');

Route::middleware('isGuest')->group(function () {

    //login
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('login.auth');

    // register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/store', [AuthController::class, 'store'])->name('store');
});

// logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//halaman setelah login admin
Route::middleware('isLogin', 'CekRole:admin')->group(function() {
    Route::get('/admin', [PerpusController::class, 'admin'])->name('admin');
    Route::get('/admin/datauser', [PerpusController::class, 'datauser'])->name('datauser');
    Route::get('/admin/printuser', [PerpusController::class, 'printuser'])->name('printuser');
    Route::get('/admin/edit_datauser/{id}', [AuthController::class, 'edit'])->name('edit_datauser');
    Route::patch('/admin/update_datauser/{id}', [AuthController::class, 'update'])->name('update_datauser');
    Route::delete('/admin/delete_datauser/{id}', [AuthController::class, 'destroy'])->name('delete_datauser');
    Route::get('/admin/books', [PerpusController::class, 'books'])->name('books');
    Route::get('/admin/printbooks', [PerpusController::class, 'printbooks'])->name('printbooks');
    Route::post('/admin/create-books', [PerpusController::class, 'store'])->name('create_books');
    Route::get('/admin/edit_books/{id}', [PerpusController::class, 'edit'])->name('edit_books');
    Route::patch('/admin/update_books/{id}', [PerpusController::class, 'update'])->name('update_books');
    Route::delete('/admin/delete_books/{id}', [PerpusController::class, 'destroy'])->name('delete_books');
    Route::get('/admin/category', [CategoryController::class, 'create'])->name('category');
    Route::post('/admin/create-category', [CategoryController::class, 'store'])->name('create_category');
    Route::delete('/admin/delete_category/{id}', [CategoryController::class, 'destroy'])->name('delete_category');
    // Route::get('/admin/sampul', [PerpusController::class, 'sampul'])->name('sampul');
});  

//halaman setelah login user
Route::middleware('isLogin', 'CekRole:user')->prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::get('/users', [PerpusController::class, 'users'])->name('users');
}); 

// halaman setelah login admin dan user
Route::middleware(['isLogin', 'CekRole:admin,user'])->group(function() {
    Route::get('/error', [PerpusController::class, 'error'])->name('error');
});