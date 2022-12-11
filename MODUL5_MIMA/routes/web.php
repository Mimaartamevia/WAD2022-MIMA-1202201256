<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowroomsController;

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
    return view('Home-Mima');
});
Route::get('/login',[LoginController::class, 'index']);
// Route::get('/login', function () {
//     return view('Login-Mima');
// });
Route::get('/register',[RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'kirim']);

Route::get('/registrasi', function () {
    return view('Registrasi-Mima');
});

Route::get('/listcar', function () {
    return view('ListCar-Mima');
});
Route::get('/register', function () {
    return view('Home-Mima');
});
Route::get('/addcar', function () {
    return view('Add-Mima');
});
Route::resource('/showroom',ShowroomsController::class );