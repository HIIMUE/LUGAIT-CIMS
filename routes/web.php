<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login_user', [LoginController::class, 'login'])->name('user.login');
Route::get('/login2', [LoginController::class, 'login2']);
Route::post('/login_user2', [LoginController::class, 'processLogin2'])->name('user.login2');
Route::get('/manager', [LoginController::class, 'manager_dashboard'])->name('managers.dashboard');

Route::get('/manager', function () {
    return view('manager_dashboard');
})->name('manager');

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/deceased', function () {
    return view('deceased');
})->name('deceased');

Route::get('/userlist', function () {
    return view('userlist');
})->name('userlist');
Route::get('/createuser', function () {
    return view('createuser');
})->name('createuser');
