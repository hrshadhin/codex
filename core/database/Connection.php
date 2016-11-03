<?php
/*
* Database connector class
*/
class Connection
{
  /*
  * @param $config array
  *@return instance
  */
  public static function make($config)
  {
    try {
      //connect db with config and return pdo instance
      return new PDO(
        $config['connection'].';dbname='.$config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (PDOException $e) {
      //die with exception
      die($e->getMessage());
    }
  }

}
