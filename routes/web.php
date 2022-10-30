<?php

use App\Http\Controllers\Dashboard\CarController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;

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
    return view('welcome');
});

Route::group(['middleware' => 'auth'],function (){

    Route::get('/dashboard',[HomeController::class,'home'])->name('dashboard');
    Route::resources([
        'roles' => RoleController::class,
        'users' => UserController::class,
        'cars' => CarController::class,
    ]);
});


require __DIR__.'/auth.php';
