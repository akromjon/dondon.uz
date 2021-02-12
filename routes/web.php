<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GameCategoryController as AdminGameCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameCategoryController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\GameController as AdminGameController;
use App\Http\Controllers\GameController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);


Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});
Route::group(['prefix' => 'phone'], function () {
    Route::get('/verification', [VerificationController::class, 'show'])->name('phone.verification.show');
    Route::post('/verification', [VerificationController::class, 'verify'])->name('phone.verification.verify');
});
Route::group(['prefix' => 'user'], function () {
    Route::get('/{phone_number}', [UserController::class, 'show'])->name('user.show');
    Route::post('/', [UserController::class, 'update'])->name('user.update');
});
Route::post('/subscribe', [ContactController::class, 'subscribe'])->name('contact.subscribe');

Route::group(['prefix' => 'game/categories'], function () {
    Route::get('/', [GameCategoryController::class, 'index'])->name('game.categories.index');
    Route::get('/{GameCategorySlug}', [GameCategoryController::class, 'show'])->name('game.categories.show');
});
Route::group(['prefix' => 'game'], function () {
    Route::get('/', [GameController::class, 'index'])->name('game.index');
    Route::get('/{slug}', [GameController::class, 'show'])->middleware(['auth','isVerifiedUser'])->name('game.show');
});
Route::group(['prefix' => 'administrator'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/user/{id}', [AdminUserController::class, 'destroy'])->name('user.delete');
    Route::group(['prefix' => 'game/category'], function () {
        Route::get('create', [AdminGameCategoryController::class, 'create'])->name('game.category.create');
        Route::post('create', [AdminGameCategoryController::class, 'store'])->name('game.category.store');
        Route::get('{slug}', [AdminGameCategoryController::class, 'edit'])->name('game.category.edit');
        Route::put('{slug}', [AdminGameCategoryController::class, 'update'])->name('game.category.update');
        Route::delete('{slug}', [AdminGameCategoryController::class, 'destroy'])->name('game.category.destroy');
    });
    Route::group(['prefix' => 'game'], function () {
        Route::get('create', [AdminGameController::class, 'create'])->name('game.create');
        Route::post('create', [AdminGameController::class, 'store'])->name('game.store');
        Route::get('{slug}', [AdminGameController::class, 'edit'])->name('game.edit');
        Route::put('{slug}', [AdminGameController::class, 'update'])->name('game.update');
        Route::delete('{slug}', [AdminGameController::class, 'destroy'])->name('game.destroy');
    });
});
