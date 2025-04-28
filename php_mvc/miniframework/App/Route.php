<?php

namespace App;

class Route {
  private $routes;

  public function __construct() {
    $this->initRoutes();
  }

  public function getRoutes() {
    return $this->routes;
  }

  public function setRoutes(array $routes) {
    $this->routes = $routes;
  }

  public function initRoutes() {
    $routes['home'] = [
      'route' => '/',
      'controller' => 'indexController',
      'action' => 'index',
    ];

    $routes['about'] = [
      'route' => '/about',
      'controller' => 'indexController',
      'action' => 'about',
    ];

    $this->setRoutes($routes);
  }

  public function getUrl() {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
}
