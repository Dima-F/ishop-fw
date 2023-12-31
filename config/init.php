<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT.'/public');
define("APP", ROOT.'/app');
define("CORE", ROOT.'/vendor/ifw');
define("HELPERS", ROOT.'/vendor/ifw/helpers');
define("CACHE", ROOT.'/tmp/cache');
define("LOGS", ROOT.'/tmp/logs');
define("CONFIG", ROOT.'/config');

define("LAYOUT", 'ishop');
define("PATH", 'http://ishop-fw');
define("ADMIN", 'http://ishop-fw/admin');
define("NO_IMAGE", 'uploads/no_image.jpg');

require_once ROOT.'/vendor/autoload.php';