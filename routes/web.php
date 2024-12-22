<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportsController;


use function Pest\Laravel\post;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/front/deportes',SportsController::class);