<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Linhascontroller;

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

// Route::get('/', function () {
//     return view('caminho');
// });

Route::get('/', [Linhascontroller::class, 'read2']);

Route::get('/linhas',[Linhascontroller::class, 'read'])->name('linhas');

Route::get('/termos', function () {
    return view('termos');
})->name('termos');

Route::get('/linhasbd',[Linhascontroller::class, 'insertlinhas'])->name('linhasbd');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('carona');
    })->name('dashboard');

    // Route::get('/carona', function () {
    //     return view('carona');
    // })->name('carona');

    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');
});
