<?php
$mysql_host = "localhost:3306";
$mysql_user="root";
$mysql_password="";
$db=mysql_connect($mysql_host,$mysql_user,$mysql_password);

$mysql_base="reservation";
mysql_select_db($mysql_base,$db);

$code_client=$_POST['code_client'];

$nom=$_POST['nom'];

$prenom=$_POST['prenom'];

$adresse=$_POST['adresse'];

$ville=$_POST['ville'];

$num_tel=$_POST['num_tel'];

$num_carte=$_POST['num_carte'];
$query = "UPDATE client SET nom='$nom',prenom='$prenom',adresse='$adresse',ville='$ville',num_tel='$num_tel',num_carte='$num_carte' 
WHERE code_client='$code_client' ";

$req=mysql_query($query);
echo modification_reussie;
mysql_close();
?>


