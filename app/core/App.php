<?php

class App
{
  protected $controller = 'home';
  protected $method = 'index';
  protected $param = [];

  public function __construct()
  {
    // parsing

    //controller
    $url = $this->URL();
    if (file_exists('app/controllers/' . $url[0] . '.php')) {
      $this->controller = $url[0];
      unset($url[0]);
    }

    require_once 'app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    // method
    if (isset($url[0])) {
      if (method_exists($this->controller, $url[0])) {
        $this->method = $url[0];
        unset($url[0]);
      }
    }
    //param
    if (!empty($url)) {
      $this->param = array_values($url);
    }

    call_user_func_array([$this->controller, $this->method], $this->param);
  }
  public function URL()
  {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
}
