<?php

use App\Http\Controllers\AtomExperimentForm;
use App\Http\Controllers\BuildTheAtomForm;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\MateriForm;
use App\Http\Controllers\SceneFormController;
use App\Http\Controllers\SeeTheAtomController;
use App\Http\Controllers\SeeTheAtomFormController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adventure', [App\Http\Controllers\HomeController::class, 'adventure'])->name('adventure');
Route::get('/adventure/{id}', [App\Http\Controllers\HomeController::class, 'adventurePlay'])->name('adventure.play');
Route::get('/atom-experiment', [App\Http\Controllers\HomeController::class, 'atomExperiment'])->name('atom-experiment');
Route::get('/atom-experiment/{id}', [App\Http\Controllers\HomeController::class, 'atomExperimentPlay'])->name('atom-experiment.play');
Route::get('/build-the-atom', [App\Http\Controllers\HomeController::class, 'buildTheAtom'])->name('build-the-atom');
Route::get('/build-the-atom/{id}', [App\Http\Controllers\HomeController::class, 'buildTheAtomPlay'])->name('build-the-atom.play');
Route::get('/see-the-atom', [App\Http\Controllers\HomeController::class, 'seeTheAtom'])->name('see-the-atom');
Route::get('/see-the-atom/{id}', [App\Http\Controllers\HomeController::class, 'seeTheAtomPlay'])->name('see-the-atom.play');
Route::get('/learning-materials', [App\Http\Controllers\HomeController::class, 'learningMaterials'])->name('learning-materials');
Route::get('/learning-materials/{id}', [App\Http\Controllers\HomeController::class, 'learningMaterialsPlay'])->name('learning-materials.play');
Route::get('/quiz', [App\Http\Controllers\HomeController::class, 'quiz'])->name('quiz');
Route::get('/quiz/{id}', [App\Http\Controllers\HomeController::class, 'quizPlay'])->name('quiz.play');


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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/exams', [App\Http\Controllers\ExamController::class, 'index'])->name('exams');
    Route::get('/exams/start', [App\Http\Controllers\ExamController::class, 'start'])->name('exams.start');
    Route::post('/exams/next-question', [App\Http\Controllers\ExamController::class, 'nextQuestion'])->name('exams.next-question');
    Route::get('/exams/result/{$exam}', [App\Http\Controllers\ExamController::class, 'result'])->name('exams.result');
    Route::get('/exams/history', [App\Http\Controllers\ExamController::class, 'history'])->name('exams.history');
});

Route::get('/users', function () {
    return view('profile');
})->middleware(['auth', 'verified'])->name('users');
// Make route to levels
Route::get('/game', [App\Http\Controllers\LevelController::class, 'play'])
    ->middleware(['auth', 'verified'])
    ->name('play');

Route::get('/next-level', [App\Http\Controllers\LevelController::class, 'nextLevel'])
    ->middleware(['auth', 'verified'])
    ->name('next-level');
// make route for finish page
Route::get('/finish', function () {
    return view('finish');
})->middleware(['auth', 'verified'])->name('finish');

// Make route for CMS (Content Management System) where user is_admin is 1
Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/cms', function () {
            return view('cms.dashboard');
        })->name('cms');
        Route::resource('/cms/levels', SceneFormController::class);
        Route::resource('/cms/materi', MateriForm::class);
        Route::post('cms/materi/store', [MateriForm::class, 'store'])->name('cms.materi.store');
        Route::put('cms/materi/{id}', [MateriForm::class, 'update'])->name('cms.materi.update');
        Route::resource('/cms/videos', VideoFormController::class);
        Route::post('cms/videos/store', [VideoFormController::class, 'store'])->name('cms.videos.store');
        Route::put('cms/videos/{id}', [VideoFormController::class, 'update'])->name('cms.videos.update');
        Route::resource('/cms/quiz', SceneFormController::class);
        Route::resource('/cms/exams', SceneFormController::class);
        Route::resource('/cms/build-the-atoms', BuildTheAtomForm::class);
        Route::post('cms/build-the-atoms/store', [BuildTheAtomForm::class, 'store'])->name('cms.build-the-atoms.store');
        Route::put('cms/build-the-atoms/{id}', [BuildTheAtomForm::class, 'update'])->name('cms.build-the-atoms.update');
        Route::resource('/cms/see-the-atoms', SeeTheAtomFormController::class);
        Route::post('cms/see-the-atoms/store', [SeeTheAtomFormController::class, 'store'])->name('cms.see-the-atoms.store');
        Route::put('cms/see-the-atoms/{id}', [SeeTheAtomFormController::class, 'update'])->name('cms.see-the-atoms.update');
        Route::resource('/cms/atom-experiments', AtomExperimentForm::class);
        Route::post('cms/atom-experiments/store', [AtomExperimentForm::class, 'store'])->name('cms.atom-experiments.store');
        Route::put('cms/atom-experiments/{id}', [AtomExperimentForm::class, 'update'])->name('cms.atom-experiments.update');
    });
});


require __DIR__ . '/auth.php';
