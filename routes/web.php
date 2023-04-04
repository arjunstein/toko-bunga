<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Livewire\Admin\Users\Index;
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

Route::group(['middleware'=>['auth']], function(){

    Route::get('dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);

    // Kelola user
    Route::resource('/admin/users', UserController::class);

    // Route::get('admin/users', Index::class); => livewire route
});

Auth::routes();

Route::get('logout', function (){
    \Auth::logout();
    return redirect('login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
