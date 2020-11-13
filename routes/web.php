<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeformationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/batiment', [BatimentController::class, "index"])->name("batiment");

Route::get('/formation', [FormationController::class, "index"])->name("formation");

Route::get('/typesformation', [TypeformationController::class, "index"])->name("typesformation");

Route::get('/eleve', [EleveController::class, "index"])->name("eleve");
