<?php

/*
* This File is responsible
* register various routes
*/

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('task', 'TaskController@index');
$router->post('taskadd','TaskController@store');
