<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8>
<title>All cards</title>
<style>
body{
    margin:0;
    background:#DAEDE2;
    font-family:'Hoefler Text',Garamond,serif;
    text-align:center;
}
div.card{
    margin:0 -1px -1px 0;
    background:#fff;
    text-align:center;
    background:#fff;
    width:250px;
    height:400px;
    border:1px dashed #000;
    padding:6px 20px;
    display:inline-block;
}
h1{
    margin:0;
    font-size: 35px;
    text-align:center;
    padding:26px 0;
    color:#fff;
    background:#ff2819;
    border-radius: 0px;
}
h2{
    margin:18px 0;
    font-size:18px;
}
img{
    max-width:100%;
}
@media print{
    h1,#print{display: none}
}
</style>
</head>
<body>
<h1>Printable cards</h1>
<p id="print"><button onclick="javascript:window.print()">Print</button></p><br>
<?php

require 'confidential_credentials.php';

mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

$result = mysql_query('SELECT * FROM cards') or die(mysql_error());

while( $row = mysql_fetch_array($result) ) {
?><div class="card">
<h2><?php echo $row['country_name']; ?></h2>
<p style="overflow:hidden;height:160px;"><img src="http://localhost/cards/img/<?php echo $row['country_code']; ?>/background.jpg" alt="" />
<p>Gold medals: <?php echo $row['medals_gold'];?></p>
<p>Silver medals: <?php echo $row['medals_silver'];?></p>
<p>Bronze medals: <?php echo $row['medals_bronze'];?></p>
<p>CO<sub>2</sub> rank: <?php echo $row['carbon_rank'];?></p>
</div><?php
}
?>
</body>