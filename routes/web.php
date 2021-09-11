<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProjectController;


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

// Dashboard
Route::get('/', [DashboardController::class, 'dashboard'])->middleware('auth');


// Login Page
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Setup Page
Route::get('/setup', [SetupController::class, 'page'])->name('setup');
Route::post('/setup', [SetupController::class, 'post']);

// User Page
Route::get('/user', [UserController::class, 'page'])->name('user')->middleware('auth');
Route::get('/user/add', [UserController::class, 'add_user_page'])->name('add_user')->middleware('auth');
Route::post('/user/add', [UserController::class, 'add_user']);
Route::get('/user/edit/{id}', [UserController::class, 'edit_user_page'])->name('edit_user')->middleware('auth');;
Route::post('/user/edit/{id}', [UserController::class, 'edit_user']);
Route::delete('/user/delete/{id}', [UserController::class, 'delete_user']);
Route::get('/user/{id}', [UserController::class, 'get_user']);


// Package Page
Route::get('/package', [PackageController::class, 'page'])->name('package')->middleware('auth');;
Route::get('/package/add', [PackageController::class, 'add_package_page'])->name('add_package')->middleware('auth');
Route::get('/package/edit/{id}', [PackageController::class, 'edit_package_page'])->name('edit_package')->middleware('auth');;
Route::post('/package/add', [PackageController::class, 'add_package']);
Route::post('/package/edit/{id}', [PackageController::class, 'edit_package']);
Route::get('/package/delete/{id}', [PackageController::class, 'delete_package']);

// Package Detail
Route::get('/package/{id}', [PackageController::class, 'detail_package_page'])->name('detail_package')->middleware('auth');
Route::get('/package/{packageId}/project/add', [ProjectController::class, 'add_project_page'])->name('add_project')->middleware('auth');
Route::get('/package/{packageId}/project/edit/{id}', [ProjectController::class, 'edit_project_page'])->name('edit_project')->middleware('auth');
Route::post('/package/{packageId}/project/add', [ProjectController::class, 'add_project']);
Route::post('/package/{packageId}/project/edit/{id}', [ProjectController::class, 'edit_project']);
Route::delete('/package/{packageId}/project/delete/{id}', [ProjectController::class, 'delete_project']);