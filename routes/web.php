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

Auth::routes();


Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');

Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
Route::post('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');
Route::get('/admin/users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('users.create');
Route::get('/admin/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('users.show');
Route::get('/admin/users/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
Route::put('/admin/users/', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
Route::delete('/admin/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');