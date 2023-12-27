<?php

namespace ifw;

class Router {
  protected static array $routes = [];
  protected static array $route = [];

  public static function add($regexp, $route = []) {
    self::$routes[$regexp] = $route;
  }

  public static function getRoutes(): array {
    return self::$routes;
  }

  public static function getRoute(): array {
    return self::$route;
  }

  public static function dispatch($url) {
    if(self::matchRoute($url)) {
      echo "OK";
    } else {
      echo "NO";
    }
  }

  public static function matchRoute($url): bool {
    foreach (self::$routes as $pattern => $route) {
      if(preg_match("#{$pattern}#", $url, $matches)) {
        foreach($matches as $k => $v) {
          if(is_string($k)) {
            $route[$k] = $v;
          }
        }
        if(empty($route['action'])) {
          $route['action'] = 'index';
        }
        if(!isset($route['admin_prefix'])) {
          $route['admin_prefix'] = '';
        } else {
          $route['admin_prefix'] = '\\';
        }
        $route['controller'] = self::upperCamelCase($route['controller']);
        return true;
      }
    }
    return false;
  }

  protected static function upperCamelCase($name): string {
    // new-product => new product
    $str1 = str_replace('-', ' ', $name);
    // new product => New Product
    $str2 = ucwords($str1);
    // New Product => NewProduct
    return str_replace(' ', '', $str2);
  }

  protected static function lowerCamelCase($name): string {
    return lcfirst(self::upperCamelCase($name));
  }
}