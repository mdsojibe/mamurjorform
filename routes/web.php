<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodayWorkFormController;

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
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});


Route::get('today/login',function(){
    return view('auth.login');
});

Route::get('home/main',[TodayWorkFormController::class, 'mainhome'])->name('today.mainhome');
Route::get('todayform/',[TodayWorkFormController::class, 'index'])->name('today.index');
Route::get('todayform/create',[TodayWorkFormController::class, 'create'])->name('today.create');
Route::post('todayform/store',[TodayWorkFormController::class, 'store'])->name('today.store');
Route::get('todayform/edit/{id}',[TodayWorkFormController::class, 'edit'])->name('today.edit');
Route::put('todayform/update/{id}',[TodayWorkFormController::class, 'update'])->name('today.update');
Route::delete('todayform/delete/{id}',[TodayWorkFormController::class, 'delete'])->name('today.delete');

