<?php
// the client askeds for some cards: /php/newcards.json.php?maxcards=14
// how many cards did the client ask for?
$maxcards = 4; // default
if (isset($_GET['maxcards'])) {
    $maxcards = $_GET['maxcards'];
}

header("Content-Type: application/json");

require 'confidential_credentials.php';
mysql_connect($host,$user,$pass)
    or die(mysql_error());

mysql_select_db($dbname)
    or die(mysql_error());

$result = mysql_query("SELECT * FROM cards ORDER BY RAND() LIMIT " . $maxcards)
    or die(mysql_error());

$hand = $sofar = array();

while( $row = mysql_fetch_array($result) ) {
    array_push($hand, $row);
    array_push($sofar, $row['id']);
}
echo json_encode($hand, JSON_PRETTY_PRINT);

// remembering which cards were given


session_start();
array_push($_SESSION['sofar'], $sofar);

// echo var_dump($_SESSION['sofar']);


?>