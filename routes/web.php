<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\libraryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('book', [BookController::class, 'index']);

Route::get('library/create', [libraryController::class, 'create'])->name('addpage');

Route::post('library/create', [libraryController::class, 'store']);



Route::get('library', [libraryController::class, 'index'])->name('showpage');
Route::get('/', function () {
    return view('main.dashboard', [
        'header' => 'Dashboard',
    ]);
});
