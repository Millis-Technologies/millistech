<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubmitContactFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');


Route::post('/submit-contact-form', SubmitContactFormController::class)
    ->name('submit-contact-form');
