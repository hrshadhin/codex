<?php
/*
* This File is responsible
* for App various configurations
*/
return [
  'database' => [
    'name' => 'task',
    'username' => 'root',
    'password' => 'toor',
    'connection' => 'mysql:host=localhost',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ],
];
