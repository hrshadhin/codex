<?php
/*
* This Class is responsible
* For All Task related events
*/
class TaskController
{
  public function index()
  {
    $data =[
      'title' => "My Task",
      //get tasks from database where table name is tasks
      'tasks' => App::get('database')->selectAll('tasks')
    ];
    return view('task',compact('data'));
  }

  public function store(){
    $data = [
      'title' => $_POST['title'],
      'completed' => 0
    ];
    $task=App::get('database')->insertOne('tasks',$data);
    ($task) ?
      Request::redirect('task')
      :
       Request::response('Something went wrong! Debug it.');

  }
}
