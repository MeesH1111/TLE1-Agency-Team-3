<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacanciesController;
use App\Models\WaitList;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('test');
});

Route::resource('/companies', CompaniesController::class);
Route::resource('/vacancies', VacanciesController::class);
Route::resource('/waitlist', WaitList::class);

require __DIR__.'/auth.php';
