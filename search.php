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
   <title>Rechercher</title>  
</head>  
   
 <body style="font-family: Arial, sans-serif;font-size: 12px; color: white;">  
   <table width="900" align="center" valign="top" cellspacing="2" cellpadding="2" border="2">  
     <tr valign="middle">  
       <td width="900" height="110" colspan="2" body background="text.jpg">  
      <img src="logo.jpg" align="left"vspace="5" hspace="10" border="0"  WIDTH="300" height="150"> 
       <marquee Class="Scroller"  behavior="scroll" direction="left"  scrollamount="2" scrolldelay="0" ><b><font color="gold">What a wonderful word...!</font></b></marquee>
	   </td>  
     </tr>  
	 
     <tr valign="top">  
       <td width="150" height="520" rowspan="2" body background="text.jpg">
	   <br> <br> <br> <br>  
	   <align="left">
&nbsp;&nbsp;&nbsp;&nbsp;<a href= "accueil.php"> <font color ="gold"><b>User</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "admin.php"> <font color="gold"><b>Administration</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "gestion_client.php"> <font color="gold"><b>Gestion des clients</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "gestion_chambre"> <font color="gold"><b>Gestion des chambres</font></b></a><br> <br>

     </td> 
	   
       <td width="480" height="310" body background="text.jpg">  
  <div> 
   
<FORM method=post action="recherche.php">
<center>
<b><h1><font color = "yellow" >Rechercher</font></h1></b><br>

<p align="left">

&nbsp;&nbsp;&nbsp;<input type="radio" name="secteur" value="Nom"><b>Par nom </b><br><br>
<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nom:<input type="text" name="nom">
</p>  <br>

&nbsp;&nbsp;&nbsp;<input type="submit"  value="Rechercher"> 
&nbsp;&nbsp;&nbsp;<input type="reset"    value="Annuler"> 

</p>
</form>
         
  </body>  
  </html>  