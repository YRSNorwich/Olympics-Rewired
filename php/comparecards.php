<?php
$player = $_GET['player'];
$opponent = $_GET['opponent'];

// Not right - it doesn't matter if the winner 

if $player > $opponent {
    $points_player += 1; // Player wins a point
} elseif $player < $opponent {
    $points_opponent += 1; // Opponent wins a point
}

require 'confidential_credentials.php';
mysql_connect($host,$user,$pass) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());


?>