 <?php 
foreach($_POST as $key=>$value)
	echo $key." : ".$value."<br>";
	echo "<br><br>";
foreach($_GET as $key=>$value)
	echo $key." : ".$value."<br>";
// $jour = $_POST{"jour"}; 
// echo "aa".$jour."aa";
 ?>   
 
 <html>  
 <head>  
   <title>Enregistrement</title>  
</head>  
   
 <body style="font-family: Arial, sans-serif;font-size: 12px; color: #FFFFFF;">  
   <table width="1000" align="center" valign="top" cellspacing="2" cellpadding="2" border="2">  
     <tr valign="middle">  
       <td width="1000" height="110" colspan="2" body background="text.jpg">  
      <img src="logo.jpg" align="left"vspace="5" hspace="10" border="0"  WIDTH="300" height="150"> 
       <marquee Class="Scroller"  behavior="scroll" direction="left"  scrollamount="2" scrolldelay="0" ><b><font color="gold">What a wonderful word...!</font></b></marquee>
	   </td>  
     </tr>  
	 
     <tr valign="top">  
       <td width="200" height="520" rowspan="2" body background="text.jpg">
	   <br> <br> <br> <br>  
	   <align="left">
&nbsp;&nbsp;&nbsp;&nbsp;<a href= "accueil.php"><font color = "gold"><b>User</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "admin.php"> <font color="gold"><b>Administration</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "gestion_client.php"> <font color="gold"><b>Gestion des clients</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "gestion_chambre.php"> <font color="gold"><b>Gestion des chambres</font></b></a><br> <br>

     </td> 
	   
       <td width="480" height="310" body background="text.jpg">  
  <div> 
   
<form action="ajout.php" method="post">
<?php
$mysql_host = "localhost:3306";
$mysql_user="root";
$mysql_password="";
$db=mysql_connect($mysql_host,$mysql_user,$mysql_password);

$mysql_base="reservation";
mysql_select_db($mysql_base,$db);
$req=mysql_query("select * from client");

Print("<h2><b>Liste des clients");
print("<table border = 3>\n"); 
print("<tr>\n");
print '<td> <b> Nom: </b></td>'.
      '<td> <b> Pr&eacute;nom: </b></td>'.
      '<td> <b> Adresse: </b></td>'.
      '<td> <b> Ville: </b></td>'.
      '<td> <b> N&deg; de t&eacute;l&eacute;phone: </b></td>'. 
	  '<td> <b> N&deg; de carte bancaire: </b></td>'. 
	  '<td></td>'.
	    '<td></td>';

print("</tr>\n");
while ($resultat=mysql_fetch_array($req))
{

print("<tr>\n");
print '<td>'. $resultat["nom"].'</td>'.
      '<td>'.$resultat["prenom"].'</td>'.
      '<td>'. $resultat["adresse"].'</td>'.
	  '<td>'. $resultat["ville"].'</td>'.
      '<td>'. $resultat["num_tel"].'</td>'. 
	  '<td>'. $resultat["num_carte"].'</td>'. 
	  '<td>.<a href ="modifier.php?id='. $resultat["code_client"].'"><b>Modifier </b></a>'.'</td>'.
	    '<td>.<a href ="supprimer.php?id='. $resultat["code_client"].'"><b>Supprimer </b></a>'.'</td>';

print("</tr>\n");
}



print("</table>\n");


mysql_close();
?>
</form>

         </div>  
         </td>  
      </tr>  
       <tr valign="center">  
        <td width="480" height="40" body background="text.jpg">  
        <font size ="1" font color="silver" ><p align="center"> <b>designed by Wassila & Asma
	   copyright&copy;</b></p></font>
        </td>  
      </tr>  
    </table>  
  </body>  
  </html>  



