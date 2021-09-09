<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\UserController;


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
