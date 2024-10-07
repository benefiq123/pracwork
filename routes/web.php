<?php

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

Route::get('/', [App\Http\Controllers\Controller::class, 'home'])->name('home');

Route::get('/registration', [App\Http\Controllers\Controller::class, 'registration'])->name('registration');
Route::post('/registration', [App\Http\Controllers\Controller::class, 'registrationPost'])->name('registrationPost');


Route::get('/login', [App\Http\Controllers\Controller::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Controller::class, 'loginPost'])->name('loginPost');
Route::get('/logout', function() {
    auth()->logout();
    return redirect()->route('home')->with('success', 'Вы успешно вышли из аккаунта');
})->name('logout');

Route::get('/makeOrder', [App\Http\Controllers\Controller::class, 'makeOrder'])->name('makeOrder');
Route::post('/makeOrder', [App\Http\Controllers\Controller::class, 'makeOrderPost'])->name('makeOrderPost');

Route::get('/myOrders', [App\Http\Controllers\Controller::class, 'myOrders'])->name('myOrders');

Route::get('/admin', [App\Http\Controllers\Controller::class, 'admin'])->name('admin');
Route::post('/adminPost/{id}', [App\Http\Controllers\Controller::class, 'adminPost'])->name('adminPost');

Route::get('/about', [App\Http\Controllers\Controller::class, 'about'])->name('about');
