<?php
/*
* This file responsible for
* Get and Start application with
* Required fiels.
*/
//app Golobal Variable
$app = [];

//get config for app
$app['config'] = require 'config.php';

//get request,router,connection,querybuilder files
require 'core/Request.php';
require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

/*call querybuilder with pdo instance
and get querybuilder instance and strore in
golobal app database container.
*/
$app['database'] = new QueryBuilder(
  Connection::make($app['config']['database'])
);
