<?php
/*
* Router class
* responsible for routes request
* to correct resource
*/

class Router
{
  protected $routes = [];

  //register or define routes
  public function register($routes)
  {
    $this->routes = $routes;
  }


  /*
  * @param $file string
  * @return instance
  */
  public static function load($file)
  {
    //create this class new instance
    $router = new self;
    //load request URI file
    require $file;
    return $router;
  }

  /*
  * @param $uri string
  * @return string
  */
  public function direct($uri)
  {
    //check if uri exits or not
    if (array_key_exists($uri, $this->routes)){
      return $this->routes[$uri];
    }
    //not found view 
    return "views/404.php";

  }
}
