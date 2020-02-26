<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function() {
    echo 'oi';
});

Route::prefix('admin')->group(function() {

    Route::get('home', function() {
        return view('admin.home');
    });

});
