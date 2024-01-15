<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\C_titles;

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

Route::resource('titles', C_titles::class);
