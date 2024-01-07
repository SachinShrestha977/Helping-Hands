<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('/create/{id}', [CandidateController::class, 'create'])->name('candidates-add');
Route::post('/create', [CandidateController::class, 'store'])->name('candidates-store');