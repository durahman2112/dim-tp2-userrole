<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;

Route::get('/', [UserController::class, 'home'])->name('/')->middleware('auth');

// User
Route::get('user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::get('user/add', [UserController::class, 'addUser'])->name('addUser')->middleware('auth');
Route::post('user/save', [UserController::class, 'saveUser'])->name('saveUser')->middleware('auth');
Route::get('user/{id}', [UserController::class, 'getUserId'])->name('user/{id}')->middleware('auth');
Route::get('user/edit/{id}', [UserController::class, 'editUser'])->name('editUser')->middleware('auth');
Route::post('user/update', [UserController::class, 'updateUser'])->name('updateUser')->middleware('auth');
Route::get('user/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser')->middleware('auth');

// Role
Route::get('role', [RoleController::class, 'index'])->name('role')->middleware('auth');
Route::get('role/add', [RoleController::class, 'addRole'])->name('addRole')->middleware('auth');
Route::post('role/save', [RoleController::class, 'saveRole'])->name('saveRole')->middleware('auth');
Route::get('role/{id}', [RoleController::class, 'getRoleId'])->name('role/{id}')->middleware('auth');
Route::get('role/edit/{id}', [RoleController::class, 'editRole'])->name('editRole')->middleware('auth');
Route::post('role/update', [RoleController::class, 'updateRole'])->name('updateRole')->middleware('auth');
Route::get('role/delete/{id}', [RoleController::class, 'deleteRole'])->name('deleteRole')->middleware('auth');
Route::get('role/getall', [RoleController::class, 'getAllRole'])->name('getAllRole')->middleware('auth');

// Login
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// Register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
