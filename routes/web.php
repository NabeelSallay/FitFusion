<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CoachesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\WorkoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoachCategoryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', HomeController::class)->name('home');

Route::resource('categories', CategoryController::class)
    ->name('index', 'categories');

Route::resource('coachCategories', CoachCategoryController::class)
    ->name('index', 'coachCategories');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::resource('Nutrition', NutritionController::class)
->name('index', 'Nutrition');

Route::resource('workout', workoutController::class);

Route::resource('clients', clientsController::class);

Route::resource('coaches', coachesController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


