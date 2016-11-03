<?php
/*
* Request Class For get URI
*/
class Request
{
  /*
  * @return string
  */
  public static function uri(){
    //get URI from super global $_SERVER array and trim '/'
    return trim($_SERVER['REQUEST_URI'],'/');
  }
}
