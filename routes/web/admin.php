<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreateAboutController;
use App\Http\Controllers\CreateArtistController;
use App\Http\Controllers\CreateEventController;
use App\Http\Controllers\CreateNewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/artistList', function(){
    return view('admin.artistList');
})->name('artistList');

Route::get('/artiste', function(){
    return view('admin.artiste');
})->name('artiste');

Route::get('/create-about', function(){
    return view('admin.create-about');
})->name('create-about');

Route::get('/create-artist', function(){
    return view('admin.create-artist');
})->name('create-artist');

Route::get('/create-Events', function(){
    return view('admin.create-Events');
})->name('create-Events');

Route::get('/create-news', function(){
    return view('admin.create-news');
})->name('create-news');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/login', [AdminController::class, 'login'])->name('lodin');

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::post('/create-artist/create', [CreateArtistController::class, 'store'])->name('create-artist.store');


// about section

Route::post('/create-about/create', [CreateAboutController::class, 'store'])->name('create-about.store');

Route::get('/create-about/{about}/edit', [CreateAboutController::class, 'edit'])->name('create-about.edit');

Route::put('/create-about/{about}/update', [CreateAboutController::class, 'update'])->name('create-about.update');

Route::delete('/create-about/{about}/delete', [CreateAboutController::class, 'delete'])->name('create-about.delete');


// event section
Route::post('/create-event/create', [CreateEventController::class, 'store'])->name('create-event.store');

Route::get('/create-event/{event}/edit', [CreateEventController::class, 'edit'])->name('create-event.edit');

Route::put('/create-event/{event}/update', [CreateEventController::class, 'update'])->name('create-event.update');

Route::delete('/create-event/{event}/delete', [CreateEventController::class, 'delete'])->name('create-event.delete');


// news section
Route::post('/create-news/create', [CreateNewsController::class, 'store'])->name('create-news.store');

Route::get('/create-news/{cnews}/edit', [CreateNewsController::class, 'edit'])->name('create-news.edit');

Route::put('/create-news/{cnews}/update', [CreateNewsController::class, 'update'])->name('create-news.update');

Route::delete('/create-news/{cnews}/delete', [CreateNewsController::class, 'delete'])->name('create-news.delete');

