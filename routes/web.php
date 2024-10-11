<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('/about', function()
{
    return View::make('pages.contact');
});

require __DIR__.'/auth.php';
