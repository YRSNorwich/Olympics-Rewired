<?php
header('content-type: application/json');

$json = file_get_contents('medalfeed.json');

$json = json_decode($json);

echo json_encode( $json, JSON_PRETTY_PRINT );

foreach ($json as $card) {
echo var_dump($card);
}
?>