<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])-> name('welcome');

Route::get('/book',[BookController::class, 'index']);
Route::get('/book/create',[BookController::class, 'create']);
Route::post('/book',[BookController::class, 'store']);
Route::get('/book/{id}',[BookController::class, 'show']);
Route::get('/book/{id}/edit',[BookController::class, 'edit']);
Route::get('/book/{id}',[BookController::class, 'update']);
Route::delete('/book/{id}',[BookController::class, 'destroy']);
