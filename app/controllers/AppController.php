<?php

namespace app\controllers;

use ifw\Controller;
use app\models\Main;

/** @property Main $model */
class AppController extends Controller {
  public function __construct($route)
  {
    parent::__construct($route);
  }
}