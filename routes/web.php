<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\WaitlistControlleraaa;
use App\Models\WaitList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/categorieen', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/bedrijven/maken', [CompaniesController::class, 'create'])->name('companies.create')->middleware('auth');
Route::post('/bedrijven/store', [CompaniesController::class, 'store'])->name('companies.store')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/success-nico', function () {
    return view('success-story-werknemer');
})->name('success-nico');

Route::get('/success-tanja', function () {
    return view('success-story-werkgever');
})->name('success-tanja');


//Route::resource('/bedrijven', CompaniesController::class);
Route::get('/vacatures/overzicht/{category?}', [VacanciesController::class, 'index'])->name('vacancies.index');
Route::get('/vacatures/create/{companyId}', [VacanciesController::class, 'create'])->name('vacancies.create')->middleware('auth');
Route::post('/vacatures', [VacanciesController::class, 'store'])->name('vacancies.store')->middleware('auth');
Route::get('/search', [VacanciesController::class, 'search'])->name('vacancies.search')->middleware('auth');
Route::get('/vacatures/{vacancy}/edit', [VacanciesController::class, 'edit'])->name('vacancies.edit')->middleware('auth');
Route::put('/vacatures/{vacancy}', [VacanciesController::class, 'update'])->name('vacancies.update')->middleware('auth');
Route::delete('/vacatures/{vacancy}', [VacanciesController::class, 'destroy'])->name('vacancies.destroy')->middleware('auth');
Route::get('/vacature/details/{id}/{company?}', [VacanciesController::class, 'show'])->name('vacancies.show');


Route::get('/bedrijven/maken', [CompaniesController::class, 'create'])->name('companies.create')->middleware('auth');
Route::post('/bedrijven/store', [CompaniesController::class, 'store'])->name('companies.store')->middleware('auth');
Route::put('/bedrijven/update/{company}', [CompaniesController::class, 'update'])->name('companies.update')->middleware('auth');
Route::get('/bedrijven/{company}/edit', [CompaniesController::class, 'edit'])->name('companies.edit')->middleware('auth');
Route::get('/bedrijven/details/{company}/{offset?}', [CompaniesController::class, 'show'])
    ->name('bedrijven.next');


Route::get('/werknemer', function () {
    return view('werknemer-uitleg');
})->name('werknemer-uitleg');

Route::get('/werkgever', function () {
    return view('werkgever-uitleg');
})->name('werkgever-uitleg');

Route::post('/wachtlijst/opslaan', [WaitlistControlleraaa::class, 'store'])->name('waitlist.store')->middleware('auth');
Route::get('/wachtlijst', [WaitlistControlleraaa::class, 'index'])->name('waitlist.index')->middleware('auth');
Route::get('/wachtlijst/succes', [WaitlistControlleraaa::class, 'succes'])->name('waitlist.succes')->middleware('auth');
Route::get('/wachtlijst/login-vereist', [WaitlistControlleraaa::class, 'login'])->name('waitlist.login');
Route::get('/wachtlijst/al-gesolliciteerd', [WaitlistControlleraaa::class, 'alreadyregistered'])->name('waitlist.alreadyregistered')->middleware('auth');
Route::get('/test', function () {
    return view('test');
});

Route::get('/over-ons', function () {
    return view('over-ons');
})->name('over-ons');

require __DIR__ . '/auth.php';
