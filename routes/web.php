<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('superheroes.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/superheroes', 'SuperheroeController@index')->name('superheroes.index');
    Route::get('/superheroes/create', 'SuperheroeController@create')->name('superheroes.create');
    Route::post('/superheroes', 'SuperheroeController@store')->name('superheroes.store');
    Route::get('/superheroes/{id}', 'SuperheroeController@show')->name('superheroes.show');
    Route::get('/superheroes/{id}/edit', 'SuperheroeController@edit')->name('superheroes.edit');
    Route::put('/superheroes/{id}', 'SuperheroeController@update')->name('superheroes.update');
    Route::delete('/superheroes/{id}', 'SuperheroeController@destroy')->name('superheroes.destroy');



});

require __DIR__.'/auth.php';
