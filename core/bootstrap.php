<?php
/*
* This file responsible for
* Get and Start application with
* Required fiels.
*/
//strong config into app fatory
App::bind('config', require 'config.php');

/*call querybuilder with pdo instance
and get querybuilder instance and strore in
app container.
*/
App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));

//Helper function to load the view
function view($name, $data)
{
  extract($data);
  return require "views/{$name}.php";
}
