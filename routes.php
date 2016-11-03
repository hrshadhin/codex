<?php

/*
* This File is responsible
* register various routes
*/
$router->register([
	'' => 'controllers/home.php',
	'about' => 'controllers/about.php',
	'contact' => 'controllers/contact.php',
	'task' => 'controllers/task.php',
]);
