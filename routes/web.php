<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/ShrineChoose');
Route::get('/ShrineChoose', function () {
    return view('ShrineChoose');
})->name('ShrineChoose');

Route::get('/ShrineBernkastel', function () {
    return view('ShrineBernkastel');
})->name('ShrineBernkastel');

Route::get('/ShrineLambdadelta', function () {
    return view('ShrineLambdadelta');
})->name('ShrineLambdadelta');

Route::get('/ShrineBeatrice', function () {
    return view('ShrineBeatrice');
})->name('ShrineBeatrice');

Route::get('/ShrineVirgilia', function () {
    return view('ShrineVirgilia');
})->name('ShrineVirgilia');