<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;

// Welcome page - today's tasks
Route::get('/', [TaskController::class, 'today'])
    ->name('home');

// Task List page - all tasks
Route::get('/tasks', [TaskController::class, 'index'])
    ->name('tasks');

// Profile page
Route::get('/profile', [ProfileController::class, 'index'])
    ->name('profile');

// About page
Route::get('/about', [PageController::class, 'about'])
    ->name('about');