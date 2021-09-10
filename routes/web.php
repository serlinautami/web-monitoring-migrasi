<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PackageController;


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

Route::get('/', [DashboardController::class, 'dashboard'])->middleware('auth');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/setup', [SetupController::class, 'page'])->name('setup');
Route::post('/setup', [SetupController::class, 'post']);

Route::get('/user', [UserController::class, 'page'])->name('user')->middleware('auth');
Route::get('/user/add', [UserController::class, 'add_user_page'])->name('add_user')->middleware('auth');
Route::post('/user/add', [UserController::class, 'add_user']);
Route::get('/user/edit/{id}', [UserController::class, 'edit_user_page'])->name('edit_user');
Route::post('/user/edit/{id}', [UserController::class, 'edit_user']);
Route::delete('/user/delete/{id}', [UserController::class, 'delete_user']);
Route::get('/user/{id}', [UserController::class, 'get_user']);

Route::get('/package', [PackageController::class, 'page'])->name('package');
Route::get('/package/add', [PackageController::class, 'add_package_page'])->name('add_package');
Route::get('/package/edit/{id}', [PackageController::class, 'edit_package_page'])->name('edit_package');
Route::post('/package/add', [PackageController::class, 'add_package']);
Route::post('/package/edit/{id}', [PackageController::class, 'edit_package']);
Route::get('/package/delete/{id}', [PackageController::class, 'delete_package']);
Route::get('/package/{id}', [PackageController::class, 'detail_package_page']);