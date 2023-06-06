<?php

use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\AdministratorController;
use App\Http\Controllers\Backend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\UserController;
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

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('backend.login.show');
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('backend.login.store');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('backend.login.destroy');

Route::middleware(['auth:backend'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('backend.index');

    Route::get('users', [UserController::class, 'index'])->name('backend.user.index');
    Route::get('users/create', [UserController::class, 'create'])->name('backend.user.create');
    Route::post('users', [UserController::class, 'store'])->name('backend.user.store');
    Route::get('users/{user}', [UserController::class, 'edit'])->name('backend.user.edit');
    Route::patch('users/{user}', [UserController::class, 'update'])->name('backend.user.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('backend.user.delete');

    Route::get('account/profile', [AccountController::class, 'profile'])->name('backend.account.profile');
    Route::patch('account/profile', [AccountController::class, 'update'])->name('backend.account.update');

    Route::get('administrators', [AdministratorController::class, 'index'])->name('backend.administrator.index');
    Route::get('administrators/create', [AdministratorController::class, 'create'])->name('backend.administrator.create');
    Route::post('administrators', [AdministratorController::class, 'store'])->name('backend.administrator.store');
    Route::get('administrators/{administrator}', [AdministratorController::class, 'edit'])->name('backend.administrator.edit');
    Route::patch('administrators/{administrator}', [AdministratorController::class, 'update'])->name('backend.administrator.update');
    Route::delete('administrators/{administrator}', [AdministratorController::class, 'destroy'])->name('backend.administrator.delete');
});
