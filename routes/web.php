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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/notes', function () {
    return view('notes');
})->middleware(['auth'])->name('notes');

Route::get('/viewdata', function () {
    return view('viewdata');
})->middleware(['auth'])->name('viewdata');

require __DIR__.'/auth.php';
