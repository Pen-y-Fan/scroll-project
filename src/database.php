<?php

defined('DB_HOST') or define('DB_HOST', 'localhost');
defined('DB_USER') or define('DB_USER', 'root');
defined('DB_PASS') or define('DB_PASS', '');
defined('DB_NAME') or define('DB_NAME', 'scroll');
$dsn = "mysql:dbname=". DB_NAME . ";host=" . DB_HOST ;


try {
    $dbh = new PDO($dsn, DB_USER,DB_PASS);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

