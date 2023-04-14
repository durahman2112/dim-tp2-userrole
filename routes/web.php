<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [UserController::class, 'home'])->name('/')->middleware('auth');
Route::get('user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::get('user/add', [UserController::class, 'addUser'])->name('addUser')->middleware('auth');
Route::post('user/save', [UserController::class, 'saveUser'])->name('saveUser')->middleware('auth');
Route::get('user/{id}', [UserController::class, 'getUserId'])->name('user/{id}')->middleware('auth');
Route::get('user/edit/{id}', [UserController::class, 'editUser'])->name('editUser')->middleware('auth');
Route::post('user/update', [UserController::class, 'updateUser'])->name('updateUser')->middleware('auth');
Route::get('user/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser')->middleware('auth');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
