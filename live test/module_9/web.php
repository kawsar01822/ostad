<?php

// Task 1

Route::GET('/singleAction',SingleActionController::class);


// Task 2

Route::middleware(['isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/users', [AdminController::class, 'users']);
});

Route::middleware(['isUser'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard']);
    Route::get('/user/profile', [UserController::class, 'profile']);
});