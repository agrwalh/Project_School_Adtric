<?php

use App\Http\Controllers\Api\NewsEventApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and assigned the "api"
| middleware group.
|
*/

// News & Events API for the school's mobile app
Route::get('/news-events', [NewsEventApiController::class, 'index'])->name('api.news-events.index');
Route::get('/news-events/{slug}', [NewsEventApiController::class, 'show'])->name('api.news-events.show');
