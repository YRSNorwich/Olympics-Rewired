<?php
header('content-type: text/plain');

// require 'confidential_credentials.php';
// mysql_connect($host,$user,$pass) or die(mysql_error());
// mysql_select_db($dbname) or die(mysql_error());

$compare = $_GET['chosenProperty'];
$card_mine = $_GET['mine'];
$card_yours = $_GET['yours'];

echo '/*
';
echo var_dump($_GET);
echo '*/';

$player_card = 'gb';
// mysql_query();

echo is_integer($card_mine[$compare]) > is_integer($card_yours[$compare]);
?>