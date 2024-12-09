<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.welcome');
});

Route::get('/homepage', function () {
    return view('user.homepage');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/products', function () {
    return view('user.products');
});

// Hapus rute ini jika sudah ada di dalam grup admin
// Route::get('/dashboard', function () {
//     return view('admind.dashboard');
// });

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/category', function () {
        return view('admin.category');
    })->name('admin.category');

    Route::get('/product', function () {
        return view('admin.product');
    })->name('admin.product');
});