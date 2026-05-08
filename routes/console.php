<?php

/*
By Uendel Silveira
Full Stack Developer
IDE: PHPStorm
Created: 08/05/2026
*/

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
