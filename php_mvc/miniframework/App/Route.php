<?php

namespace App;

class Route {
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
  }

  public function getUrl() {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
}
