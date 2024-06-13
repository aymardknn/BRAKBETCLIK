<?php

use App\Http\Controllers\Control_apropos\aProposController;
use App\Http\Controllers\Control_apropos\politiqueConf;
use App\Http\Controllers\Control_menuPrediction\controlpre1X2;
use App\Http\Controllers\Control_menuPrediction\controlpre2_5;
use App\Http\Controllers\Control_menuPrediction\predictionDoubleChance;
use App\Http\Controllers\Control_menuPrediction\predictionLesDeuxEquipesMarquent;
use App\Http\Controllers\Control_menuPrediction\toutesPredictions;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('predictions', toutesPredictions::class)->only(['index'])->name('predictions');

Route::get('/predictions', [toutesPredictions::class, 'index'])->name('predictions');
Route::get('/apropos', [aProposController::class, 'aPropos'])->name('apropos');
Route::get('/politiquedeconfidentialite', [politiqueConf::class, 'politConf'])->name('politConf');

//les boutons de prédictions
Route::get('/predictions/1X2', [controlpre1X2::class, 'victoire'])->name("1X2");
Route::get('/predictions/+2.5', [controlpre2_5::class, 'pre2_5'])->name("+2.5");
Route::get('/predictions/doublechance', [predictionDoubleChance::class, 'doubleCh'])->name("doubleCh");
Route::get('/predictions/les2equipesmarquent', [predictionLesDeuxEquipesMarquent::class, 'preOui'])->name("preOui");

