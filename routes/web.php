<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyAuth;

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

Route::get('/login',[MyAuth::class, 'login_view'])->name('login');
Route::get('/register',[MyAuth::class, 'register_view']);
Route::get('/logout',[MyAuth::class, 'logout_process']);
Route::post('/login',[MyAuth::class, 'login_process']);
Route::post('/register',[MyAuth::class, 'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');
Route::middleware('auth')->group(function() {
    // auth first
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/multi', function () {
    return view('multi');
});

Route::post('/multi', function (Request $req) {
    $data['num'] = $req -> input('num');
    return view('result',$data);
});


Route::get('/admin', [adminController::class,'index']);


