<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SceneController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\BuildTheAtomController;
use App\Http\Controllers\SeeTheAtomController;
use App\Http\Controllers\AtomExperimentController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MiniGameController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('features', FeatureController::class);
Route::apiResource('scenes', SceneController::class);
Route::apiResource('videos', VideoController::class);
Route::apiResource('materis', MateriController::class);
Route::apiResource('build-the-atoms', BuildTheAtomController::class);
Route::apiResource('see-the-atoms', SeeTheAtomController::class);
Route::apiResource('atom-experiments', AtomExperimentController::class);
Route::apiResource('quizzes', QuizController::class);
Route::apiResource('mini-games', MiniGameController::class);
