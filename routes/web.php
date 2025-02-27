<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name}', function ($name) { 
    return 'Nama saya Muhammad '.$name;
});