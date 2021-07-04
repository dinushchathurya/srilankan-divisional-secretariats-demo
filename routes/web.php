<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/get/district/province/{name}' , [HomeController::class, 'getDistricts']);
Route::get('/get/authority/district/{name}' , [HomeController::class, 'getAuthority']);
Route::get('/documentation', [HomeController::class, 'documentation']);