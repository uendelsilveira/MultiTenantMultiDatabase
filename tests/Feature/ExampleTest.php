<?php

/*
By Uendel Silveira
Full Stack Developer
IDE: PHPStorm
Created: 08/05/2026
*/

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
