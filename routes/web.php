<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;

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

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/register', function () {
    //     return view('auth.register');
    // });
    

Route::get('/', [App\Http\Controllers\FilmController::class, 'list'])->name('home');
Route::get('/detail/{id}', [App\Http\Controllers\FilmController::class, 'detail']);
Route::get('/paket', function () {
    return view('php.subscribe');
});

Route::post('login', [App\Http\Controllers\UserController::class, 'login']);
Route::get('/login', function() {
    if(session()->has('user')) {
        return redirect('/');
    }
    else {
        return view('auth.login');
    }
});

Route::view('register', '/auth/register');
Route::post('register', [App\Http\Controllers\UserController::class, 'addData']);

Route::get('/profile', function() {
    return view('profile');
});



