<?php

namespace ifw;

use Exception;

abstract class Controller {
  public array $data = [];
  public array $meta = [
    'title' => '',
    'keywords' => '',
    'description' => ''
  ];
  public false|string $layout = '';
  public string $view = '';
  public object $model;

  // синтаксис php 8,де автоматом в конструкторі створюються поля класу
  public function __construct(public $route = [])
  {}

  public function getModel() {
    $model = 'app\models\\' . $this->route['admin_prefix'] . $this->route['controller'];
    if (class_exists($model)) {
        $this->model = new $model();
    } else {
      throw new Exception("Cant find model {$model}", 500);
    }
  }

  public function getView() {
    $this->view = $this->view ?: $this->route['action'];
    (new View($this->route, $this->layout, $this->view, $this->meta))->render($this->data);
  }

  public function set($data) {
    $this->data = $data;
  }

  public function setMeta($title = '', $description = '', $keywords = '') {
    $this->meta = [
      'title' => $title,
      'description' => $description,
      'keywords' => $keywords
    ];
  }
}