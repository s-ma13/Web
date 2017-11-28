<?php
$id = $_GET{"id"}; 


$mysql_host = "localhost:3306";
$mysql_user="root";
$mysql_password="";
$db=mysql_connect($mysql_host,$mysql_user,$mysql_password);

$mysql_base="reservation";
mysql_select_db($mysql_base,$db);
$query = "DELETE FROM client WHERE code_client = '$id'";
$req=mysql_query($query);
echo suppression_reussie;



mysql_close();
?>




