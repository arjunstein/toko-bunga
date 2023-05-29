<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\TokoController;
use App\Http\Controllers\admin\UserController;
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

Route::get('/', function () {
    return redirect('dashboard');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);

    // Kelola user
    Route::resource('/admin/users', UserController::class);

    // Kelola category
    Route::resource('/admin/categories', CategoryController::class);

    // Kelola Produk
    Route::resource('/admin/products', ProductController::class);

    // Kelola Toko
    Route::resource('/toko', TokoController::class);
});

Auth::routes();

Route::post('logout', function(){
	\Auth::logout();
	return redirect('login');
});
Route::get('logout', function(){
	return redirect('/dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
