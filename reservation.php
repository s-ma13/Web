 <?php 
 $page = $_GET['page']; 
 ?>   
 
 <html>  
 <head>  
   <title>R&eacute;servation</title>  
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
&nbsp;&nbsp;&nbsp;<a href= "login.php"><font color = "gold"><b>Administration</b></a><br><br>
</font>

     </td> 
	   
       <td width="480" height="310" body background="text.jpg">  
  <div> 
   

<center>
<b><h1><font color = "yellow" >R&eacute;servation</font></h1></b><br>
<form method="post" action="enregistrement.php" name="form1" id="form1">

<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date d'arriv&eacute;e :&nbsp;&nbsp;&nbsp;</b>
<select class ="modulo" name="jour_arrivee" onchange="StartDateChange()">
<option value="" selected="">- -</option>
<option value="1" >1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
&nbsp;&nbsp;
<select class ="modulo" name="mois_arrivee" onchange="StartDateChange()">
<option value=""selected="">- -</option>
<option value="">Janvier</option>
<option value="2">Mars</option>
<option value="3">Avril</option>
<option value="4">Mai</option>
<option value="5">Juin</option>
<option value="6">Juillet</option>
<option value="7">Aout</option>
<option value="8">Septembre</option>
<option value="9">Octobre</option>
<option value="10">Novembre</option>
<option value="11">D&eacute;crmbre</option>
</select>
&nbsp;&nbsp;

<select class ="modulo" name="annee_arrivee" onchange="StartDateChange()">
<option value=""selected="">- -</option>
<option value="">2009</option>
<option value="1">2010</option>
<option value="2">2011</option>
</select>

<br><br>
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date de d&eacute;part:&nbsp;&nbsp;&nbsp;</b>
<select class ="modulo" name="jour_depart" onchange="StartDateChange()">
<option value="" selected="">- -</option>
<option value="1" >1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
&nbsp;&nbsp;
<select class ="modulo" name="mois-depart" onchange="StartDateChange()">
<option value=""selected="">- -</option>
<option value="">Janvier</option>
<option value="1">Fevrier</option>
<option value="2">Mars</option>
<option value="3">Avril</option>
<option value="4">Mai</option>
<option value="5">Juin</option>
<option value="6">Juillet</option>
<option value="7">Aout</option>
<option value="8">Septembre</option>
<option value="9">Octobre</option>
<option value="10">Novembre</option>
<option value="11">D&eacute;crmbre</option>
</select>
&nbsp;&nbsp;

<select class ="modulo" name="annee_depart" onchange="StartDateChange()">
<option value=""selected="">- -</option>
<option>2009</option>
<option value="1">2010</option>
<option value="2">2011</option>
</select>

<br><br>

<b>Nombre de chambres:&nbsp;&nbsp;&nbsp;</b><select class ="modulo" name="chambres" onchange="StartDateChange()">
<option value=""selected="">- -</option>
<option value="1">1</option>
<option value="1">2</option>
<option value="2">3</option>
<option value="3">4</option>
</select>
<br><br>
<b>Type de chambre:&nbsp;&nbsp;&nbsp;</b><select class ="modulo" name="type" onchange="StartDateChange()">
<option value=""selected="">- -</option>
<option value="">Individuelle</option>
<option value="1">Double</option>
<option value="2">Suite</option>
</select>
<br><br><br><br>
<input type="submit" value="Valider">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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