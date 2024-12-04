<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacanciesController;
use App\Models\WaitList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorieën', [CategoryController::class, 'index'])->name('categories.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/success-Nico', function () {
    return view('success-story');
})->name('success-Nico');



Route::resource('/companies', CompaniesController::class);
Route::get('/vacatures/{category}', [VacanciesController::class, 'index'])->name('vacancies.index');
Route::get('/vacatures/create', [VacanciesController::class, 'create'])->name('vacancies.create');
Route::post('/vactures', [VacanciesController::class, 'store'])->name('vacancies.store');
Route::get('/vacatures/{vacancy}/edit', [VacanciesController::class, 'edit'])->name('vacancies.edit');
Route::put('/vacatures/{vacancy}', [VacanciesController::class, 'update'])->name('vacancies.update');
Route::delete('/vacatures/{vacancy}', [VacanciesController::class, 'destroy'])->name('vacancies.destroy');
Route::resource('/waitlist', WaitList::class);

require __DIR__ . '/auth.php';
