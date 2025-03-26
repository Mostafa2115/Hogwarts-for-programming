<?php

    class Singleton {
        private static array $instances = [];
        private static $db;
        public static function getDatabase() {
            if (!self::$db) {
                $config = require 'Config.php';
                $db = Database::connect($config['database']);
                self::$db = $db;
            }
            return self::$db;
        }

        public static function getInstance(string $className, $db) {
            if (!isset(self::$instances[$className])) {
                self::$instances[$className] = new $className($db);
            }
            return self::$instances[$className];
        }

    }