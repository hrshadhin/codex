<?php
/*
* Application Startup file
*/
//call autoloader
require 'vendor/autoload.php';
//get boostrap file
require 'core/bootstrap.php';

//load routes and redirect to request uri
Router::load('routes.php')
  ->direct(Request::uri(),Request::method());
