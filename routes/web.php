<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('careers.careers');
});

Route::get('/career-info', function () {
    return view('careers.career-info');
});

Route::get('/career-info/application-form', function () {
    return view('careers.application-form');
});
