<?php

use App\Http\Controllers\Website\AttractionController;
use App\Http\Controllers\Website\WebsiteController;
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



Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('attractions', [AttractionController::class, 'index'])->name('website.attractions.index');

