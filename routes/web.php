<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;

Route::get('/', [ChatbotController::class, 'index']);
Route::post('/analyze', [ChatbotController::class, 'analyze']);
