<?php
session_start();
error_reporting();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'atarizona',
		'password' => 'Acbvi3100!',
		'db' => 'atarizona'
		),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800

		),
	'session' => array(
		'session_name' => 'user',
		'token_name' => 'token'
		)
);



try {

$pdo = new PDO('mysql:host=localhost;dbname=atarizona', 'atarizona', 'Acbvi3100!' );
} catch (PDOException $e) {
	exit('Database error');
}

spl_autoload_register(function($class) {
	require_once '../classes/' . $class . '.php';

});	
function escape($string) {
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}


if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))) {
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

	if($hashCheck->count()) {
		$user = new User($hashCheck->first()->user_id);
		$user->login();
	}
}







