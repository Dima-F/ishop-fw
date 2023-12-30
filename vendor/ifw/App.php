<?php

namespace ifw;

class App {
    public static $app;

    public function __construct(){
        new ErrorHandler();
        self::$app = Registry::getIstance();
        $this->getParams();
        $query = trim(urldecode($_SERVER['QUERY_STRING']), '/');
        Router::dispatch($query);
    }

    protected function getParams() {
        $params = require_once CONFIG.'/params.php';

        if(!empty($params)) {
            foreach($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }
}