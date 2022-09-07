<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('site.sobre');
Route::get('/contato', [SiteController::class, 'contato'])->name('site.contato');
