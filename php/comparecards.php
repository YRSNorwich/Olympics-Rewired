<?php
header('content-type: application/json');
session_start();
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = array();
}

$compare = $_GET['chosenProperty'];
$card_mine = $_GET['mine'];
$card_yours = $_GET['yours'];

if ( !settype($card_mine[$compare],'integer') or !settype($card_yours[$compare],'integer') ){
    $card_mine[$compare] = strlen($card_mine[$compare]);
    $card_mine[$compare] = strlen($card_mine[$compare]);
}

if ( $card_mine[$compare] > $card_yours[$compare] )
{
   $_SESSION['score']['mine'] += 100;
   $lastWinner = 'mine';
}
elseif ( $card_mine[$compare] < $card_yours[$compare] )
{
    $_SESSION['score']['yours'] += 100;
    $lastWinner = 'yours';
}
else
{
    $lastWinner = 'tie';
}

echo json_encode( array('mine' => $_SESSION['score']['mine'], 'yours' => $_SESSION['score']['yours'], 'lastWinner' => $lastWinner) );
?>