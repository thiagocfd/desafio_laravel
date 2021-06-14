<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
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
    return redirect()->route('cliente.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::any('/register', function() {
//     return redirect()->route('cliente.index');
// });

Route::middleware(['auth'])->group(function() {
    Route::get('/user', [UserController::class, 'index']);
    Route::resource('cliente', ClienteController::class);
});

Route::get('/search', [ClienteController::class, 'search'])->name('cliente.search');
