<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home') ;
});

Route::get('/Contato', function () {
    return view('Contato') ;
});

Route::get('/produtos', function () {
    return view('produtos') ;
});