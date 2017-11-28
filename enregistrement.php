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
   <table width="900" align="center" valign="top" cellspacing="2" cellpadding="2" border="2">  
     <tr valign="middle">  
       <td width="900" height="110" colspan="2" body background="text.jpg">  
      <img src="logo.jpg" align="left"vspace="5" hspace="10" border="0"  WIDTH="300" height="150"> 
       <marquee Class="Scroller"  behavior="scroll" direction="left"  scrollamount="2" scrolldelay="0" ><b><font color="gold">What a wonderful word...!</font></b></marquee>
	   </td>  
     </tr>  
	 
     <tr valign="top">  
       <td width="120" height="520" rowspan="2" body background="text.jpg">
	   <br> <br> <br> <br>  
	   <align="left">
&nbsp;&nbsp;&nbsp;<a href= "accueil.php"><font color = "gold" ><b>Accueil	   </b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "presentation.php"> <font color="gold"><u><b>Pr&eacute;sentation</b></u></font></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "reservation.php"><b><u><font color="pink">R&eacute;servation</font></u></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "chambres.php"><font color = "gold"><b>chambres</b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "visite.php"><font color = "gold"><b>Visite guid&eacute;e</b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "contact.php"><font color = "gold"><b>Contactez nous</b></a><br><br>
</font>

     </td> 
	   
       <td width="480" height="310" body background="text.jpg">  
  <div> 
   
<form action="ajout.php" method="post">
<center>
<b><h1><font color = "yellow" >Enregistrement</font></h1></b><br>


<label><b>Nom</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type ="text" name="nom"> <br><br>
<label><b>Pr&eacute;nom</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type ="text" name="prenom">
<br> <br>
<label><b>Adresse</b></label> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="adresse"><br><br>


<label><b>Ville</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <input type ="text" name="ville"><br><br>
<label><b>N&deg; de t&eacute;l&eacute;phone</b></label> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="num_tel"><br><br>
<label><b>N&deg; de carte bancaire</b></label> &nbsp;&nbsp;&nbsp; <input type ="text" name="num_carte"><br><br><br>

<input type="submit" value="Ajouter">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Annuler">

</form>

         </div>  
         </td>  
      </tr>  
       <tr valign="middle">  
        <td width="480" height="40" body background="text.jpg">  
        <font size ="1" font color="silver" ><p align="center"> <b>designed by Wassila & Asma
	   copyright&copy;</b></p></font>
        </td>  
      </tr>  
    </table>  
  </body>  
  </html>  