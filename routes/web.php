<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\SidebarToggle;
use App\Livewire\Sidebar;

Route::get('/', \App\livewire\Home::class)->name('home');
Route::get('/about', \App\livewire\About::class)->name('about');
Route::get('/contact', \App\livewire\Contact::class)->name('contact');

Route::get('/posts', \App\livewire\Posts\Index::class)->name('posts.index');
Route::get('users/{user}', \App\livewire\Users\Show::class)->name('posts.show');

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
