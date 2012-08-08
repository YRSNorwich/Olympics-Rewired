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

if (isset($_GET['callback'])) {
    echo htmlspecialchars($_GET['callback']);
    echo '(';
}

echo json_encode($hand);

if (isset($_GET['callback'])) {
    echo ')';
}

session_start();

if (!isset($_SESSION['sofar'])) {
    $_SESSION['sofar'] = array();
}
array_push($_SESSION['sofar'], $sofar);
// echo '/*';
// echo var_dump($_SESSION['sofar']);
// echo '*/';
?>