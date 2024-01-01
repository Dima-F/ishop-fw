<?php

namespace app\controllers;

use ifw\Controller;
use app\models\Main;

/** @property Main $model */
class MainController extends Controller {
  // public false|string $layout = 'test2';
  public function indexAction() {
    // $this->layout = 'test';
    $this->setMeta('Главная страница', 'Description...', 'keywords...');
    $names = $this->model->get_names();
    $this->set(compact('names'));
  }
}