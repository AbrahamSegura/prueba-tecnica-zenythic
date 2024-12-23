<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportsController;


use function Pest\Laravel\post;

Route::get('/', function () {
    return view('welcome');
})->name('games');
Route::get('/front/deportes',SportsController::class)->name('sport');