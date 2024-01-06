<?php

namespace app\models;

use \RedBeanPHP\R;

class Main extends \ifw\Model {
  public function get_names(): array {
    return R::findAll(('name'));
  }
}