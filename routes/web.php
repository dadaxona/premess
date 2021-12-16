<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| here is wherein you may register web routes for your application. these
| routes are loaded with the aid of the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something tremendous!
|
*/

Route::get('/', function () {
    return view('welcome');
});
  
Route::group(['middleware' => 'role:web-developer'], function() {
    Route::get('/dashboard', function() {
       return 'Добро пожаловать, Веб-разработчик';
    });
 });

 
Auth::routes();
  
Route::resource('/home', UserController::class);
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

Route::get('ruxsat', [HomeController::class, 'ruxsat'])->name('ruxsat');
Route::post('aktive', [HomeController::class, 'aktive'])->name('aktive');
Route::post('neaktiv', [HomeController::class, 'neaktiv'])->name('neaktiv');
Route::get('a', [HomeController::class, 'index'])->name('a');
Route::post('b', [HomeController::class, 'store'])->name('b');
Route::get('c/{id}', [HomeController::class, 'show'])->name('c');
Route::get('ce/{id}/edit', [HomeController::class, 'edit'])->name('ce');
Route::post('d/{id}', [HomeController::class, 'update'])->name('d');
