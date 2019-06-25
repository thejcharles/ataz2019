<?php

$router = new AltoRouter;

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');
$router->map('POST', '/', 'App\Controllers\IndexController@get', 'home_form');

// about page
$router->map('GET', '/about', 'App\Controllers\AboutController@show', 'about');

// products page
$router->map('GET', '/products', 'App\Controllers\ProductsController@show', 'products');

// contact page
$router->map('GET', '/contact', 'App\Controllers\ContactController@show', 'contact');
// contact page
$router->map('GET', '/staff', 'App\Controllers\StaffController@show', 'staff');
$router->map('GET', '/staff-profile/[i:id]', 'App\Controllers\StaffController@profile', 'staff_profile');
// leadership
$router->map('GET', '/leadership', 'App\Controllers\LeadershipController@show', 'leadership');
// donate page
$router->map('GET', '/donate', 'App\Controllers\DonateController@show', 'donate');
// services
$router->map('GET', '/services', 'App\Controllers\ServicesController@show', 'services');
//events
$router->map('GET', '/events', 'App\Controllers\EventsController@show', 'events');



require_once __DIR__ . '/auth.php';



