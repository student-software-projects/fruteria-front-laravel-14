<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
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
});

Route::get('/inicio',[LandingController::class,'index'])->name('landing.index');
Route::get('/acercade',[LandingController::class,'acercade'])->name('landing.acercade');
Route::get('/domicilio',[LandingController::class,'domicilio'])->name('landing.domicilio');
Route::get('/contactos',[LandingController::class,'contacto'])->name('landing.contacto');

