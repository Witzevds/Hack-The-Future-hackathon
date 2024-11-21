<?php

use App\Http\Controllers\CelestialBodyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'Hello, World!';
});
Route::get('celestial-bodies', [CelestialBodyController::class, 'index']);
Route::get('celestial-bodies/{id}', [CelestialBodyController::class, 'show']);
Route::post('celestial-bodies', [CelestialBodyController::class, 'store']);
Route::put('celestial-bodies/{id}', [CelestialBodyController::class, 'update']);
Route::delete('celestial-bodies/{id}', [CelestialBodyController::class, 'destroy']);
