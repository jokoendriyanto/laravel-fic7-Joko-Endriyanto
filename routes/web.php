<?php

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
    return view('auth.login', ['type_menu' => '']);
});

Route::middleware(['auth'])->group(function () {
Route::get('home',function(){
    return view('pages.blank-page', ['type_menu' => '']);
})->name('home');
});

// Auth Page
// Route::get('/login', function () {
//     return view('auth.login', ['type_menu' => '']);
// });
// Route::get('/register', function () {
//     return view(php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"'auth.register', ['type_menu' => '']);
// });
// Route::get('/forgot', function () {
//     return view('auth.forgot', ['type_menu' => '']);
// });
// Route::get('/reset', function () {
//     return view('auth.reset', ['type_menu' => '']);
// });
// Route::get('/verify', function () {
//     return view('auth.verify', ['type_menu' => '']);
// });
