<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

Route::get('/', [SiteController::class, 'home']);
Route::get('/sobre', [SiteController::class, 'sobre']);
Route::get('/contato', [SiteController::class, 'contato']);