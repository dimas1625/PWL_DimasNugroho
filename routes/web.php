<?php

use Illuminate\Support\Facades\Route;

Route::get('/articles/{id}', function ($Id) { 
    return 'Halaman Artikel dengan ID '.$Id;
});