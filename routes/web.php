<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HistorieController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[WelcomeController::class,'index']);
Route::resource('/history', HistorieController::class);
Route::get('/historyaz',[HistorieController::class, 'az']);
Route::get('/historyza',[HistorieController::class, 'za']);
Route::get('/historyasc',[HistorieController::class, 'asc']);
Route::get('/historydesc',[HistorieController::class, 'desc']);

Route::post('/sniffres',[WelcomeController::class,'sniffres']);
Route::view('/sniff', 'sniff.index');

