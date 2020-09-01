<?php

use Illuminate\Support\Facades\Route;

/**
 * WARNING !!!
 * Frontend routes won't be managed by Laravel's router. They'll be managed by the Vue 
 * Router library.
 */

Route::get('/', function () {
    return view('home');
});
