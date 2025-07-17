<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/community',CommunityController::class)->except([
        'index',
        'show',
    ]);
    Route::post('/community/subscribe/{community}/{user}', [CommunityController::class, 'subscribe'])->name('community.subscribe');
    Route::post('/community/unsubscribe/{community}/{user}', [CommunityController::class, 'unSubscribe'])->name('community.unsubscribe');
    Route::resource('/post', PostController::class)->except([
        'index',
        'show'
    ]);
    Route::post('/post/create/{user}', [PostController::class, 'store'])->name('post.store');
});

Route::resource('/community', CommunityController::class)->only('show');
Route::resource('/post', PostController::class)->only('show');

require __DIR__.'/auth.php';
