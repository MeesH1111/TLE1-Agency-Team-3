<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\WaitListController;
use App\Models\WaitList;
use Illuminate\Support\Facades\Route;


Route::get('/categorieen', [CategoryController::class, 'index'])->name('categories.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('home');
})->name('home');

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
Route::get('/vacatures/{category?}', [VacanciesController::class, 'index'])->name('vacancies.index');
Route::get('/vacatures/create', [VacanciesController::class, 'create'])->name('vacancies.create');
Route::post('/vacatures', [VacanciesController::class, 'store'])->name('vacancies.store');
Route::get('/search', [VacanciesController::class, 'search'])->name('vacancies.search');
Route::get('/vacatures/{vacancy}/edit', [VacanciesController::class, 'edit'])->name('vacancies.edit');
Route::put('/vacatures/{vacancy}', [VacanciesController::class, 'update'])->name('vacancies.update');
Route::delete('/vacatures/{vacancy}', [VacanciesController::class, 'destroy'])->name('vacancies.destroy');
Route::get('/vacature/details/{id}', [VacanciesController::class, 'show'])->name('vacancies.show');

Route::get('/bedrijven/details/{company}', [CompaniesController::class, 'show'])->name('companies.show');
Route::get('/bedrijven/create', [CompaniesController::class, 'create'])->name('companies.create');
Route::post('/bedrijven/store', [CompaniesController::class, 'store'])->name('companies.store');

Route::get('/werknemer', function () {
    return view('werknemer-uitleg');
})->name('werknemer-uitleg');

Route::get('/werkgever', function () {
    return view('werkgever-uitleg');
})->name('werkgever-uitleg');

Route::post('/wachtlijst/opslaan', [WaitListController::class, 'store'])->name('waitlist.store');
Route::get('/wachtlijst', [WaitListController::class, 'index'])->name('waitlist.index');
Route::get('/wachtlijst/succes', [waitListController::class, 'succes'])->name('waitlist.succes');
Route::get('/wachtlijst/login-vereist', [waitListController::class, 'login'])->name('waitlist.login');
Route::get('/wachtlijst/al-gesolliciteerd', [waitListController::class, 'alreadyregistered'])->name('waitlist.alreadyregistered');
Route::get('/test', function () {
    return view('test');
});

Route::get('/over-ons', function () {
    return view('over-ons');
})->name('over-ons');

require __DIR__ . '/auth.php';
