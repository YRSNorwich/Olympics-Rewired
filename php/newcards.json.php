<?php
require 'confidential_credentials.php';
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: http://localhost/, http://yrsolympics2.phpfogapp.com/');
@session_start();

$hand_size = 4; // default
if (isset($_GET['hand_size'])) {
    $hand_size = $_GET['hand_size'];
}


mysql_connect($host,$user,$pass) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());

$query = "SELECT * FROM cards";
if (isset($_SESSION['sofar'])) {
    $query .= " WHERE id NOT IN ('";
    $query .= implode( "','" , $_SESSION['sofar'] ) . "')";
}
$query .= " ORDER BY RAND() LIMIT ";
$query .= $hand_size;

// echo $query;
$result = mysql_query($query) or die(mysql_error());

$hand = $sofar = array();

while( $row = mysql_fetch_array($result) ) {
    array_push($hand, $row);
    array_push($sofar, $row['id']);
}

$json = json_encode($hand/*,JSON_PRETTY_PRINT*/);

echo isset($_GET['callback'])
    ? "{$_GET['callback']}($json)"
    : $json;

if (!isset($_SESSION['sofar'])) {
    $_SESSION['sofar'] = $sofar;
} else {
    $_SESSION['sofar'] = array_merge($_SESSION['sofar'], $sofar);
}

// echo "\n/*\nso josh knows what he's doing:\n\n";
// echo $query . "\n\n";
// echo "id='" . implode("' id!='",$_SESSION['sofar']) . "'";
// echo "*/\n";
?>