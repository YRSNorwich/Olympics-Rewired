<?php
header("Content-Type: application/json");
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("trump") or die(mysql_error());

$result = mysql_query("SELECT * FROM cards ORDER BY RAND() LIMIT 2") or die(mysql_error());

$hand = $sofar = array();

while( $row = mysql_fetch_array($result) ) {
    array_push($hand, $row);
    array_push($sofar, $row['id']);
}
echo json_encode($hand, JSON_PRETTY_PRINT);

echo var_dump($sofar); // Keeping track of already shown cards


?>
