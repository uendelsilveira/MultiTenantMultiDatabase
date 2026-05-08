<?php

/*
By Uendel Silveira
Full Stack Developer
IDE: PHPStorm
Created: 08/05/2026
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
