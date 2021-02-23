<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeFormationController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view('home');
});

Route::get("/eleve",[EleveController::class,'index'])->name('eleve');
Route::get("/batiment",[BatimentController::class,'index'])->name('batiment');
Route::get("/typeform",[TypeFormationController::class,'index'])->name('typeform');
Route::get("/formation",[FormationController::class,'index'])->name('formation');

