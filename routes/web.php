<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FilterController;

Route::get('/', [MovieController::class, 'index']);

Route::get('/movies', [MovieController::class, 'index'])
    ->name('movies.index');

Route::get('/movies/create', [MovieController::class, 'create'])
    ->name('movies.create');

Route::post('/movies', [MovieController::class, 'store'])
    ->name('movies.store');

Route::get('/movies/featured', [MovieController::class, 'featured'])
    ->name('movies.featured');

Route::get('/movies/{id}', [MovieController::class, 'show'])
    ->whereNumber('id')
    ->name('movies.show');

Route::get('/filter', [FilterController::class, 'index'])
    ->name('filter.index');

Route::get('/filter/genre/{genre?}', [FilterController::class, 'filter'])
    ->name('filter.genre');

Route::get('/filter/featured', [FilterController::class, 'featured'])
    ->name('filter.featured');

Route::get('/filter/movie/{id}', [FilterController::class, 'show'])
    ->whereNumber('id')
    ->name('filter.show');
