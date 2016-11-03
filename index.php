<?php
/*
* Application Startup file
*/

//get boostrap file
require 'core/bootstrap.php';

//load routes and redirect to request uri
require Router::load('routes.php')
  ->direct(Request::uri());
