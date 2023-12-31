<?php

namespace app\controllers;

use ifw\Controller;

class MainController extends Controller {
  // public false|string $layout = 'test2';
  public function indexAction() {
    // $this->layout = 'test';
    $this->setMeta('Главная страница', 'Description...');
  }
}