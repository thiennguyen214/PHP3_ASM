<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Models\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('page.home');
Route::get('/menu', [MenuController::class, 'menu'])->name('page.menu');
Route::get('/shop', [HomeController::class, 'shop'])->name('page.shop');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('page.detail');

