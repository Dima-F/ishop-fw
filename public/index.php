<?php
// ----------- THIS IS FRONT CONTROLLER -------------
use ifw\App;

error_reporting(-1);

if(PHP_MAJOR_VERSION < 8) {
    die('Required php version >=8');
}

require_once dirname(__DIR__).'/config/init.php';
require_once HELPERS.'/functions.php';
require_once CONFIG.'/routes.php';

$myApp = new App();


