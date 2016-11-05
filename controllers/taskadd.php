<?php
$data = [
  'title' => $_POST['title'],
  'completed' => 0  
];
$task=$app['database']->insertOne('tasks',$data);
($task) ?
  Request::redirect('task')
  :
   Request::response('Something went wrong! Debug it.');
