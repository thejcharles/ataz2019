<?php

/**
 * start session if not already started

**/
if(!isset($_SESSION)) session_start();

// Load environment variables
require_once __DIR__ . '/../app/config/_env.php';

// set custom error handler
new App\classes\Database();
//set_error_handler([new App\classes\ErrorHandler(), 'handleErrors']);

require_once __DIR__ . '/../app/routing/routes.php';

new App\RouteDispatcher($router);

// instantiate database class
new App\classes\Database();