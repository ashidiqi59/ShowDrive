<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inventory/detail', function () {
    return view('detail');
})->name('inventory.detail');
