<?php

namespace ifw;

trait TSingleton {
    private static ?self $instance = null;

    private function __construct(){}

    public static function getIstance(): static {
        return static::$instance ?? static::$instance = new static();
    }
}