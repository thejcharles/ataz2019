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
// $router->map('GET', '/staff', 'App\Controllers\StaffController@show', 'staff');
// $router->map('GET', '/staff-profile/[i:id]', 'App\Controllers\StaffController@profile', 'staff_profile');

// locations
$router->map('GET', '/wioa-locations', 'App\Controllers\LocationsController@show', 'wioa-locations');
$router->map('GET', '/wioa-center/[i:id]', 'App\Controllers\LocationsController@location', 'wioa-center');

// donate page
$router->map('GET', '/donate', 'App\Controllers\DonateController@show', 'donate');
// services
$router->map('GET', '/services', 'App\Controllers\ServicesController@show', 'services');
//events

// resources
$router->map('GET', '/resources', 'App\Controllers\ResourcesController@show', 'resources');

// resources
$router->map('GET', '/events', 'App\Controllers\EventsController@show', 'events');

// admin routes

// admin home
$router->map('GET', '/admin', 'App\Controllers\Admin\AdminController@show', 'admin-home');

// admin events
$router->map('GET', '/admin/events', 'App\Controllers\Admin\AdminEventsController@show', 'admin-events');
$router->map('POST', '/admin/events', 'App\Controllers\Admin\AdminEventsController@add', 'admin-event');


require_once __DIR__ . '/auth.php';
