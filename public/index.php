<?php

use ifw\App;

error_reporting(-1);

if(PHP_MAJOR_VERSION < 8) {
    die('Required php version >=8');
}

require_once dirname(__DIR__).'/config/init.php';

$myApp = new App();

// var_dump(ifw\App::$app->getProperties());

throw new Exception("My test exception");