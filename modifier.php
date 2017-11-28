 <?php 
foreach($_POST as $key=>$value)
	echo $key." : ".$value."<br>";
	echo "<br><br>";
foreach($_GET as $key=>$value)
	echo $key." : ".$value."<br>";
 $id = $_GET{"id"}; 


$mysql_host = "localhost:3306";
$mysql_user="root";
$mysql_password="";
$db=mysql_connect($mysql_host,$mysql_user,$mysql_password);

$mysql_base="reservation";
mysql_select_db($mysql_base,$db);
$query = "select * from client WHERE code_client = '".$id."'";
$req=mysql_query($query);

$client=mysql_fetch_object($req);


 // $client
 
 // echo "aa".$jour."aa";
 ?>   
 
 <html>  
 <head>  
   <title>Modifier</title>  
</head>  
   
 <body style="font-family: Arial, sans-serif;font-size: 12px; color: #FFFFFF;">  
   <table width="900" align="center" valign="top" cellspacing="2" cellpadding="2" border="2">  
     <tr valign="middle">  
       <td width="900" height="110" colspan="2" body background="text.jpg">  
      <img src="logo.jpg" align="left"vspace="5" hspace="10" border="0"  WIDTH="300" height="150"> 
       </td>  
     </tr>  
	 
     <tr valign="top">  
       <td width="120" height="520" rowspan="2" body background="text.jpg">
	   <br> <br> <br> <br>  
	   <align="left">
&nbsp;&nbsp;&nbsp;<a href= "ajouter.php"><font color = "gold" ><b>Ajout</b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "search.php"><font color="gold"><b>Recherche</b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "affiche.php"><font color = "gold"><b>Consultation</b></a><br> <br>


</font>

     </td> 
	   
       <td width="480" height="310" body background="text.jpg">  
  <div> 
   
<form action="modif.php" method="post">
<center>
<b><h1><font color = "yellow" >Modifier</font></h1></b><br>


<label><b>Nom</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type ="hidden" name="code_client" value="<?php echo $client->code_client; ?>"> 
<input type ="text" name="nom" value="<?php echo $client->nom; ?>"> <br><br>
<label><b>Pr&eacute;nom</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type ="text" name="prenom" value="<?php echo $client->prenom; ?>">
<br> <br>
<label><b>Adresse</b></label> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type ="text" name="adresse" value="<?php echo $client->adresse; ?>"><br><br>


<label><b>Ville</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <input type ="text" name="ville" value="<?php echo $client->ville; ?>"><br><br>
<label><b>N&deg; de t&eacute;l&eacute;phone</b></label> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type ="text" name="num_tel" value="<?php echo $client->num_tel; ?>"><br><br>
<label><b>N&deg; de carte bancaire</b></label> &nbsp;&nbsp;&nbsp; 
<input type ="text" name="num_carte" value="<?php echo $client->num_carte; ?>"><br><br><br>

<input type="submit" value="Modifier">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Supprimer"><br><br>
<input type="reset" value="Annuler">

</form>

         </div>  
         </td>  
      </tr>  
       <tr valign="middle">  
        <td width="480" height="40" body background="text.jpg">  
        <font size ="1" font color="silver" ><p align="right"> <b>designed by Wassila & Asma
	   copyright&copy;</b></p></font>
        </td>  
      </tr>  
    </table>  
  </body>  
  </html>  