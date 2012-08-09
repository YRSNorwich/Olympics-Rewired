<?php
require 'confidential_credentials.php';
mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

// $player_card = $_GET['player'];
// $opponent_card = $_GET['opponent'];

$player_card = 'gb';


// Not right - it doesn't matter if the winner 

if $player > $opponent {
    $points_player += 1; // Player wins a point
} elseif $player < $opponent {
    $points_opponent += 1; // Opponent wins a point
}


?>