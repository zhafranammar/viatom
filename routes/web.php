<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\SceneFormController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);

// Make route to discussion
Route::resource('discussions', DiscussionController::class);
Route::post('/discussions/{discussion}/replies', [DiscussionController::class, 'storeReply']);

// Make route to levels
Route::get('/game', [App\Http\Controllers\LevelController::class, 'play'])
    ->middleware(['auth', 'verified'])
    ->name('play');

Route::get('/next-level', [App\Http\Controllers\LevelController::class, 'nextLevel'])
    ->middleware(['auth', 'verified'])
    ->name('next-level');

// Make route for CMS (Content Management System) where user is_admin is 1
Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/cms', function () {
            return view('cms.dashboard');
        })->name('cms');
        Route::resource('/cms/levels', SceneFormController::class);
        Route::resource('/cms/materi', SceneFormController::class);
        Route::resource('/cms/videos', SceneFormController::class);
        Route::resource('/cms/quiz', SceneFormController::class);
        Route::resource('/cms/exams', SceneFormController::class);
        Route::resource('/cms/build-the-atom', SceneFormController::class);
        Route::resource('/cms/see-the-atom', SceneFormController::class);
        Route::resource('/cms/atom-experiment', SceneFormController::class);
    });
});


require __DIR__ . '/auth.php';
