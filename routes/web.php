<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Auth\Login::class)->name('login');
Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');
Route::get('/forget-password', \App\Livewire\Auth\ForgetPassword::class)->name('forget-password');
