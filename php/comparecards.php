<?php
header('content-type: application/json');
session_start();

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = array('mine' => 0, 'yours' => 0);
}

// require 'confidential_credentials.php';
// mysql_connect($host,$user,$pass) or die(mysql_error());
// mysql_select_db($dbname) or die(mysql_error());
// result({mine:1, yours:0, lastWinner:'mine'});

$compare = $_GET['chosenProperty'];
$card_mine = $card_yours = $_GET['mine']; //
// $card_yours = $_GET['yours'];

// echo '/*
// ';
// echo var_dump($_GET);
// echo '*/';

// $player_card = 'gb';
// mysql_query();

if ( !settype($card_mine[$compare],'integer') or !settype($card_yours[$compare],'integer') )
{
    $card_mine[$compare] = strlen($card_mine[$compare]);
    $card_mine[$compare] = strlen($card_mine[$compare]);
}

$score_mine = $score_yours = 0;
if ( settype($card_mine[$compare],'integer') > settype($card_yours[$compare],'integer') )
{
   $_SESSION['score']['mine'] .+ 100;
   $_SESSION['score']['yours'] .- 1;
   $lastWinner = 'me';
}
elseif ( settype($card_mine[$compare],'integer') < settype($card_yours[$compare],'integer') )
{
    $_SESSION['score']['mine'] .- 1;
    $_SESSION['score']['yours'] .+ 100;
    $lastWinner = 'you';
}
else
{
    $_SESSION['score']['mine'] .+ 0;
    $_SESSION['score']['yours'] .+ 0;
    $lastWinner = 'tie';
}

echo json_encode( array('mine' => $_SESSION['score']['mine'], 'yours' => $_SESSION['score']['yours'], 'lastWinner' => $lastWinner) );
?>