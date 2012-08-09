<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8>
    <title>All cards</title>
</head>
<<<<<<< HEAD
<body style="background-color:#ccc">
    <h1 style="display:inline-block;margin:20px">Printable cards</h1>
    <p  style="display:inline-block"><a href="javascript:window.print()">Print</a></p><br>
=======
<body style="background-color:#CCCCCC">
>>>>>>> Entré almaty trois
    <?php

require 'confidential_credentials.php';

mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

$result = mysql_query('SELECT * FROM cards') or die(mysql_error());

while( $row = mysql_fetch_array($result) ) {
    ?><div style="text-align:center;box-shadow:2px 2px #fff,3px 3px #000,5px 5px #fff,6px 6px #000,8px 8px #fff,9px 9px #000;font-family:'Hoefler Text',Garamond,serif;background:#fff;width:160px;height:260px;border:1px solid #000;border-radius:20px;padding:10px 20px;margin:10px;float:left;">
<p style="margin:auto -20px;padding:5px 10px;border-bottom:1px solid #000;text-transform:uppercase;font-size:18px;letter-spacing:2px"><?php
    echo $row['country_name'];
    ?></p><p>Gold medals: <?php echo $row['medals_gold'];?></p><p>Silver medals: <?php echo $row['medals_silver'];?></p><p>Bronze medals: <?php echo $row['medals_bronze'];?></p></div><?php
}
?>
</body>