<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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
}) ->name('home');
/*
Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('register');
});
*/

// Call from Controller
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

// Create a profile page, have to login before go to profile page
Route::group(['middleware' => 'auth'], function (){
    Route::get('/profile', function (){
        return view('profile');
    })->name('profile');

    Route::get('/dashboard', function (){
        return view('dashboard');
    })->name('dashboard');
});