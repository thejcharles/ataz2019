<?php
// login page
$router->map('GET', '/login', 'App\Controllers\AuthController@showLoginForm', 'login');
$router->map('POST', '/login', 'App\Controllers\AuthController@login', 'log_me_in');

// register page
$router->map('GET', '/register', 'App\Controllers\AuthController@showRegisterForm', 'register');

$router->map('POST', '/register', 'App\Controllers\AuthController@register', 'register_me');

// log out
$router->map('GET', '/logout', 'App\Controllers\AuthController@logout', 'logout');
