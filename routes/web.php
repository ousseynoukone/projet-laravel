<?php

use App\Http\Controllers\PhaseController;
use App\Http\Controllers\ProjetController;
use App\Models\Projet;
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
    return view('listerprojet');
});

Route::get('/basic', function () {
    return view('basic');
});
Route::get('/projets', function () {
    return view('lister');
});



Route::get('/projetsajout', function () {
    return view('ajouterprojet');
});
Route::get('/phasesajout', function () {
    return view('phaseajout');
});

Route::get('/projets',[ProjetController::class,"show"] );
Route::post('/projetsajout',[ProjetController::class,"create"] )->name("ajout");

Route::get('/details',[PhaseController::class,"show"] );
Route::post('/phasesajout',[PhaseController::class,"create"] )->name("ajoutPhase");

