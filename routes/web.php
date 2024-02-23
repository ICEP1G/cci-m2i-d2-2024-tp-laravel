<?php

use App\Http\Controllers\MembersController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');

Route::prefix('/members')
    ->as('members.')
    ->group(function () {

    Route::get('/', [MembersController::class, 'index'])->name('index');
    Route::get('/create', [MembersController::class, 'create'])->name('create');
    Route::post('/store', [MembersController::class, 'store'])->name('store');
    Route::get('/show/{id}', [MembersController::class, 'show'])->name('show');
    Route::delete('/delete', [MembersController::class, 'delete'])->name('delete');
});