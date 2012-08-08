<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: http://localhost/, http://yrsolympics2.phpfogapp.com/');

$hand_size = 4; // default
if (isset($_GET['hand_size'])) {
    $hand_size = $_GET['hand_size'];
}

require 'confidential_credentials.php';

mysql_connect($host,$user,$pass) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());

$result = mysql_query("SELECT * FROM cards WHERE id!='103' ORDER BY RAND() LIMIT " . $hand_size) or die(mysql_error());

// ^ To do: exclude previously spat cards from being selected again ("NOT LIKE"?)

$hand = $sofar = array();

while( $row = mysql_fetch_array($result) ) {
    array_push($hand, $row);
    array_push($sofar, $row['id']);
}

$json = json_encode($hand);

echo isset($_GET['callback'])
    ? "{$_GET['callback']}($json)"
    : $json;

@session_start();

if (!isset($_SESSION['sofar'])) {
    $_SESSION['sofar'] = $sofar;
} else {
    $_SESSION['sofar'] = array_merge($_SESSION['sofar'], $sofar);
}

echo "\n/*\n";
echo var_dump($_SESSION['sofar']);
echo "*/\n";
?>