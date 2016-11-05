<?php
/*
* Router class
* responsible for routes request
* to correct resource
*/

class Router
{
  protected $routes = [
    'GET' => [],
    'POST' => []
  ];

  public function get($uri, $controller){
    $this->routes['GET'][$uri] = $controller;
  }
  public function post($uri, $controller){
    $this->routes['POST'][$uri] = $controller;
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
  public function direct($uri, $requestType)
  {
    //check if uri exits or not
    if (array_key_exists($uri, $this->routes[$requestType])){
      return $this->routes[$requestType][$uri];
    }
    //not found view
    return "views/404.php";

  }
}
