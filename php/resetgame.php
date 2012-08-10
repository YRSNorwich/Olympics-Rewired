<?php 
session_start();
// session_destroy();
$_SESSION['score'] = array('mine' => 0, 'yours' => 0);
if (count($_SESSION['sofar']) > 50) {
    $_SESSION['sofar'] = array();
}
header('Location: ../');
?>