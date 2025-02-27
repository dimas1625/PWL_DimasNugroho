<?php

use Illuminate\Support\Facades\Route;

Route::get('/greeting', function () { 
    return view('hello', ['name' => 'Muhammad Dimas Ajie Nugroho']);
});