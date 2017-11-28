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
print("<br>");
print(" <b>Vous avez ajouté les informations suivantes</b>:");
$nom=$_POST['nom'];
print("<p> Nom:<b> $nom </b>\n\n");
$prenom=$_POST['prenom'];
print("<p> Pr&eacute;nom:<b> $prenom </b>\n\n");
$adresse=$_POST['adresse'];
print("<p> Adresse:<b> $adresse </b>\n\n");
$ville=$_POST['ville'];
print("<p> Ville:<b> $ville</b>\n\n");
$num_tel=$_POST['num_tel'];
print("<p> Num&eacute;ro de t&eacute;l&eacute;phone:<b> $num_tel </b>\n\n");
$num_carte=$_POST['num_carte'];
print("<p> Num&eacute;ro de carte:<b> $num_carte </b>\n\n");

$query = "INSERT INTO `reservation`.`client`(`nom`, `prenom`, `adresse`, `num_tel`, `num_carte`) VALUES ( '".addslashes($nom)."', '$prenom', '$adresse', '$num_tel','$num_carte')";

mysql_query($query);

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



