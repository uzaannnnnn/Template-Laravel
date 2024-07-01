<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\libraryController;
use App\Http\Controllers\penggunaController;
use Illuminate\Support\Facades\Route;

// ...

// Hilangkan salah satu dari rute '/' ini, sesuaikan dengan kebutuhan Anda.
// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('web')->group(function () {
    Route::get('/', function () {
        return view('main.dashboard', [
            'header' => 'Dashboard',
        ]);
    })->middleware('auth')->name('dashboard');

    Route::get('book', [BookController::class, 'index']);

    Route::prefix('book')->group(function () {
        Route::get('/', [libraryController::class, 'index'])->name('library.index');
        Route::get('create', [libraryController::class, 'create'])->name('addpage');
        Route::post('create', [libraryController::class, 'store']);
        Route::post('show/{id}', [libraryController::class, 'show'])->name('show');
        Route::get('edit/{id}', [libraryController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [libraryController::class, 'update'])->name('library.update');
        Route::delete('delete/{id}', [libraryController::class, 'destroy'])->name('library.destroy');
    });

    Route::get('library', [libraryController::class, 'search'])->name('showpage');
    Route::get('/export-pdf', [libraryController::class, 'exportPdf'])->name('exportPdf');


    Route::get('/register', [penggunaController::class, 'index'])->name('register');
    Route::post('/register', [penggunaController::class, 'simpanRegistrasi']);

    Route::get('/login', [PenggunaController::class, 'loginForm'])->name('login');
    Route::post('/login', [PenggunaController::class, 'login']);
    Route::post('/logout', [PenggunaController::class, 'logout'])->name('logout');
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('book', [BookController::class, 'index']);

// Route::get('library/create', [libraryController::class, 'create'])->name('addpage');

// Route::post('library/create', [libraryController::class, 'store']);



// Route::get('library', [libraryController::class, 'index'])->name('showpage');
// Route::get('/', function () {
//     return view('main.dashboard', [
//         'header' => 'Dashboard',
//     ]);
// });
