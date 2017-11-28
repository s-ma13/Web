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
   
 <body style="font-family: Arial, sans-serif;font-size: 12px; color: #FFFFFF;">  
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
&nbsp;&nbsp;&nbsp;&nbsp;<a href= "accueil.php"><font color = "gold"><b>User</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "admin.php"> <font color="gold"><b>Administration</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "gestion_client.php"> <font color="gold"><b>Gestion des clients</font></b></a><br> <br>
&nbsp;&nbsp;&nbsp;<a href= "gestion_chambre.php"> <font color="gold"><b>Gestion des chambres</font></b></a><br> <br>

     </td> 
	   
       <td width="480" height="310" body background="text.jpg">  
  <div> 
   

<center>
<b><h1><font color = "yellow" >Nombre total</font></h1></b><br>




<p align="left"><b> Chambres individuelles:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;238</b> </p><br>
<p align="left"><b>Chambres doubles:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;124</b></p>  <br>
<p align="left"><b> Suites:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23</b> </p>  <br>
<p align="left"><b> Nombre total:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;385</b></p>


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