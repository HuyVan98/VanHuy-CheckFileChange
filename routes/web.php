<?php

use App\Http\Controllers\FilePhotoController;
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

Route::get('', [FilePhotoController::class, 'index']);
Route::post('/coconut-photo', [FilePhotoController::class, 'imgResize'])->name('img-resize');

Route::get('so-sanh', [FilePhotoController::class, 'sosanh']);
Route::get('so-sanh-file-vue', [FilePhotoController::class, 'sosanh_filevue']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');