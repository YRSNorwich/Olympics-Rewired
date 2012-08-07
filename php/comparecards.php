<?php

header("Content-Type: text/plain");

$input = $_GET;
echo var_dump($input);

require 'confidential_credentials.php';
mysql_connect($host,$user,$pass) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());



?>