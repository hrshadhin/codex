<?php
/*
* Task Page Controller
*/

$title="Task";
//get tasks from database where table name is tasks
$tasks= $app['database']->selectAll('tasks');
require 'views/task.php';
