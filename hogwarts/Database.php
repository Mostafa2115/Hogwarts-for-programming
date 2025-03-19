<?php
class Database {
    public static function connect($config) {
        try {
            return new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['user'], $config['password']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>