<?php

use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);

Route::get('/test', [PublicController::class, 'test']);

Route::get('/technology', fn() => view('technology'));

Route::get('/form', fn() => view('form'));

Route::post('/form', [PublicController::class, 'answer']);

Route::get('/admin/posts', [PostsController::class, 'index']);

Route::get('/admin/posts/create', [PostsController::class, 'create']);

Route::post('/admin/posts', [PostsController::class, 'store']);
