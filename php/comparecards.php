<?php
require 'confidential_credentials.php';
mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

echo var_dump($_GET[]);

// $player_card = $_GET['mine'];
// $opponent_card = $_GET['yours'];

$player_card = 'gb';
mysql_query();


?>