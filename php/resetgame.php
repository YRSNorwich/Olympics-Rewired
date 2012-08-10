<?php 
session_start();
// session_destroy();
$_SESSION['score'] = array('mine' => 0, 'yours' => 0);
header('Location: ../');
?>