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
    return view('landing', [
        "navTitle" => "LaTahzan"
]);
});

Route::get('/login-admin', function () {
    return view('admin.login-admin');
});

Route::get('/login', function () {
    return view('customer.login');
});

Route::get('/register', function () {
    return view('customer.register');
});

// Route::get('/', function () {
//     return view('welcome');
// });
