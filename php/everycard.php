<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8>
<title>All cards</title>
<style>
body{
    background:#DAEDE2;
    font-family:'Hoefler Text',Garamond,serif;
}
div.card{
    background:#fff;
    text-align:center;
    box-shadow:2px 2px #fff,3px 3px #000,5px 5px #fff,6px 6px #000,8px 8px #fff,9px 9px #000;
    background:#fff;
    width:160px;
    height:260px;
    border:1px solid #000;
    border-radius:20px;
    padding:10px 20px;margin:10px;
}
</style>
</head>
<body>
<h1 style="display:inline-block;margin:20px">Printable cards</h1>
<p style="display:inline-block"><a href="javascript:window.print()">Print</a></p><br>
<?php

require 'confidential_credentials.php';

mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

$result = mysql_query('SELECT * FROM cards') or die(mysql_error());

while( $row = mysql_fetch_array($result) ) {
?>
<div class="card">
<h2><?php echo $row['country_name']; ?></h2>
<p>Gold medals: <?php echo $row['medals_gold'];?></p>
<p>Silver medals: <?php echo $row['medals_silver'];?></p>
<p>Bronze medals: <?php echo $row['medals_bronze'];?></p>
</div>
<?php
}
?>
</body>