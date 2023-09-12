<?php

namespace ifw;

class Registry {
    use TSingleton;

    protected static array $properties = [];

    public function setProperty($name, $value) {
        self::$properties[$name] = $value;
    }

    public function getProperty($name) {
        return self::$instance[$name] ?? null;
    }

    public function getProperties(): array {
        return self::$properties;
    }
}