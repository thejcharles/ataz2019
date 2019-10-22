<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use Illuminate\Database\Capsule\Manager as Capsule;

require_once __DIR__ . '/../bootstrap/init.php';

$app_name = getenv('APP_NAME');

