<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang', [AboutController::class, 'index']);
Route::get('/produk', [ProductController::class, 'index']);
Route::get('/produk/{slug}', [ProductController::class, 'show']);
Route::get('/galeri', [GalleryController::class, 'index']);
Route::get('/kontak', [ContactController::class, 'index']);
