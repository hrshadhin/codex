<?php

/*
* This File is responsible
* register various routes
*/

$router->get('', 'controllers/home.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->get('task', 'controllers/task.php');
$router->post('taskadd','controllers/taskadd.php');
