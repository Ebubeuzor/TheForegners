<?php

use App\Http\Controllers\CreateArtistController;
use App\Http\Controllers\CreateEventController;
use App\Http\Controllers\CreateNewsController;
use App\Models\CreateArtist;
use Illuminate\Support\Facades\Route;

Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');

Route::get('/about', function(){
    return view('pages.about');
})->name('about');

Route::get('/artiste', function(){
    return view('pages.artiste');
})->name('artiste');

Route::get('/music', [CreateArtistController::class, 'index'])->name('music');
Route::get('/music/search', [CreateArtistController::class, 'search'])->name('music.search');

Route::get('/news', [CreateNewsController::class, 'index'])->name('news');

Route::get('/newspaper', function(){
    return view('pages.newspaper');
})->name('newspaper');

Route::get('/register', function(){
    return view('pages.register');
})->name('register');

Route::get('/event', [CreateEventController::class, 'index'])->name('event');

// ----------------------------------------- 

