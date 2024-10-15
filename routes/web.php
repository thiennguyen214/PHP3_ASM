<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Middleware\CheckAuth;
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
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'home'])->name('page.home');
Route::get('/menu', [MenuController::class, 'menu'])->name('page.menu');
Route::get('/shop', [HomeController::class, 'shop'])->name('page.shop');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('page.detail');


Route::middleware(['auth', CheckAuth::class])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::get('/pro/index', [MenuController::class, 'index'])->name('pro.index');
    Route::get('/pro/create', [MenuController::class, 'create'])->name('pro.create');
    Route::post('/pro/create', [MenuController::class, 'store'])->name('pro.store');
    Route::get('/pro/edit/{id}', [MenuController::class, 'edit'])->name('pro.edit');
    Route::put('/pro/edit/{id}', [MenuController::class, 'update'])->name('pro.update');
    Route::get('/pro/delete/{id}', [MenuController::class, 'delete'])->name('pro.delete');

    Route::get('/cate/index', [CategoriesController::class, 'index'])->name('cate.index');
    Route::post('/cate/create', [CategoriesController::class, 'store'])->name('cate.store');
    Route::get('/cate/edit/{id}', [CategoriesController::class, 'edit'])->name('cate.edit');
    Route::put('/cate/edit/{id}', [CategoriesController::class, 'update'])->name('cate.update');
    Route::get('/cate/delete/{id}', [CategoriesController::class, 'delete'])->name('cate.delete');

    Route::get('/user/index', [AdminController::class, 'show'])->name('user.index');
    Route::get('/user/create', [AdminController::class, 'create'])->name('user.create');
    Route::post('/user/create', [AdminController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [AdminController::class, 'edit'])->name('user.edit');
    Route::put('/user/edit/{id}', [AdminController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [AdminController::class, 'delete'])->name('user.delete');
});


