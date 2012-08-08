<?php
$host = getenv("MYSQL_DB_HOST");
$user = getenv("MYSQL_USERNAME");
$pass = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DB_NAME");

if (empty($host)) {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "trump";
}
?>