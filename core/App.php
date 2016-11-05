<?php
/*
* App class
* responsible for Application Config
* OR Fatory for settings
*/

class App
{
  protected static $registry = [];


  public static function bind($key, $value)
  {
    static::$registry[$key]=$value;
  }

  /*
  * @param $key string
  * @return value
  */
  public static function get($key)
  {
    if(! array_key_exists($key, static::$registry)){
      throw new Exception("No {$key} is bound in the container.");
    }
    return static::$registry[$key];
  }
}
