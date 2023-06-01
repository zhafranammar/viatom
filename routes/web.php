<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiscussionController;
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

Route::get('/discussion/create', function () {
    return view('discussion.create');
})->middleware(['auth', 'verified'])->name('discussion');
Route::get('/discussions', [DiscussionController::class, 'index']);
Route::get('/discussions/{discussion}', [DiscussionController::class, 'show']);
Route::post('/discussions', [DiscussionController::class, 'store']);
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
    Route::get('/cms', function () {
        if (auth()->user()->is_admin) {
            return view('cms.dashboard');
        } else {
            abort(403, 'Unauthorized');
        }
    })->name('cms');
    Route::get('/cms/materi', function () {
        if (auth()->user()->is_admin) {
            return view('cms.materi.index');
        } else {
            abort(403, 'Unauthorized');
        }
    })->name('cms');
});


require __DIR__ . '/auth.php';
