
<?php
$mysql_host = "localhost:3306";
$mysql_user="root";
$mysql_password="";
$db=mysql_connect($mysql_host,$mysql_user,$mysql_password);

$mysql_base="reservation";

mysql_select_db($mysql_base,$db);
$nom=$_POST["nom"];
$sql="SELECT * FROM client WHERE nom LIKE '%$nom%' ";
$result=mysql_query($sql);
while($row=mysql_fetch_row($result))
{
$code_client=$row[0];
$nom=$row[1];
$prenom=$row[2];
$adresse=$row[3];
$ville=$row[4];
$num_tel=$row[5];
$num_carte=$row[6];

echo "
<tr>
<td><b>Nom : </b></td>
<td>$nom</td>
</tr>
<br>
<tr>
<td><b>Prenom : </b></td>
<td>$prenom</td>
</tr>
<br>
<tr>
<td><b>Adresse : </b></td>
<td>$adresse</td>
</tr>
<br>
<tr>
<td><b>Ville : </b></td>
<td>$ville</td><br>
<td><b>numero de telephone :</b> </td>
<td>$num_tel</td>

</tr>
<br>
<tr>
<td><b> numero de carte bancaire :</b></td>
<td>$num_carte</td>

</tr>
<br>";
}




mysql_close();

?>


