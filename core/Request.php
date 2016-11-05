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
    //return trim($_SERVER['REQUEST_URI'],'/');
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  }
  public static function method(){

    //return request medthod: get,post
    return $_SERVER['REQUEST_METHOD'];
  }

  public static function redirect($uri){
    //redirect to url
    header('Location: '.$uri);
  }
  public static function response($message){
    //print message
    echo $message;
    die();
  }
}
