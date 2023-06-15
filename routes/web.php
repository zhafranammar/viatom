<?php

use App\Http\Controllers\BuildTheAtomForm;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\SceneFormController;
use App\Http\Controllers\SeeTheAtomController;
use App\Models\BuildTheAtom;
use App\Http\Controllers\VideoFormController;
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
    Route::middleware(['admin'])->group(function () {
        Route::get('/cms', function () {
            return view('cms.dashboard');
        })->name('cms');
        Route::resource('/cms/levels', SceneFormController::class);
        Route::resource('/cms/materi', SceneFormController::class);
        Route::resource('/cms/videos', VideoFormController::class);
        Route::resource('/cms/quiz', SceneFormController::class);
        Route::resource('/cms/exams', SceneFormController::class);
        Route::resource('/cms/build-the-atoms', BuildTheAtomForm::class);
        Route::post('cms/build-the-atoms/store', [BuildTheAtomForm::class, 'store'])->name('cms.build-the-atoms.store');
        Route::put('cms/build-the-atoms/{id}', [BuildTheAtomForm::class, 'update'])->name('cms.build-the-atoms.update');
        Route::resource('/cms/see-the-atom', SeeTheAtomController::class);
        Route::resource('/cms/atom-experiment', SceneFormController::class);
    });
});


require __DIR__ . '/auth.php';
