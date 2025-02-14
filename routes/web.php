<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TwitterAnalyzerController;

Route::get('/', [TwitterAnalyzerController::class, 'index']);
Route::post('/analyze', [TwitterAnalyzerController::class, 'analyze']);