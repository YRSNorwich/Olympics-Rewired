<?php
header('content-type: application/json');
session_start();
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = array('mine' => 0, 'yours' => 0);
}

$compare = $_GET['chosenProperty'];
$card_mine = $_GET['mine'];
$card_yours = $_GET['yours'];

if ( !settype($card_mine[$compare],'integer') or !settype($card_yours[$compare],'integer') ){
    $card_mine[$compare] = strlen($card_mine[$compare]);
    $card_mine[$compare] = strlen($card_mine[$compare]); // Compare the length of country names!!
}

if ( $card_mine[$compare] > $card_yours[$compare] )
{
   $_SESSION['score']['mine'] += 1;
   $lastWinner = 'mine';
}
elseif ( $card_mine[$compare] < $card_yours[$compare] )
{
    $_SESSION['score']['yours'] += 1;
    $lastWinner = 'yours';
}
else
{
    $lastWinner = 'tie';
}

echo json_encode( array('mine' => $_SESSION['score']['mine'], 'yours' => $_SESSION['score']['yours'], 'lastWinner' => $lastWinner) );

// require 'confidential_credentials.php';
// mysql_connect($host,$user,$pass) or die(mysql_error());
// mysql_select_db($dbname) or die(mysql_error());

// mysql_query('INSERT into gameplay') or die(mysql_error());

?>