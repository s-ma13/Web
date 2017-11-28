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
   <title>Gestion</title>  
</head>  
   
 <body style="font-family: Arial, sans-serif;font-size: 12px; color: #FFFFFF;">  
   <table width="900" align="center" valign="top" cellspacing="2" cellpadding="2" border="2">  
     <tr valign="middle">  
       <td width="900" height="110" colspan="2" body background="text.jpg">  
      <img src="logo.jpg" align="left"vspace="5" hspace="10" border="0"  WIDTH="300" height="150"> 
       </td>  
     </tr>  
	 
     <tr valign="top">  
       <td width="150" height="500" rowspan="2" body background="text.jpg">
	   <br> <br> <br> <br>  
	   <align="left">
&nbsp;&nbsp;&nbsp;&nbsp;<a href= "accueil.php"><font color = "gold"><b>User</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "admin.php"> <font color="gold"><b>Administration</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "gestion_client.php"> <font color="gold"><b>Gestion des clients</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "gestion_chambre.php"> <font color="gold"><b>Gestion des chambres</font></b></a><br> <br>


     </td> 
	   
       <td width="480" height="310" body background="text.jpg">  
  <div> 

  <center>
  <h2><b>Gestion des clients</b></h2><br>
  &nbsp;&nbsp;&nbsp;<a href= "ajouter.php"><font color = "gold" ><b>Ajout</b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "search.php"><font color="gold"><b>Recherche</b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "affiche.php"><font color = "gold"><b>Consultation</b></a><br> <br>


</center>
 
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