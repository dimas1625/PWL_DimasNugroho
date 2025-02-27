<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts/{post}/comments/{comments}', function ($postId, $commentId) { 
    return 'Pos ke-'.$postId."Komentar ke-: ".$commentId;
});