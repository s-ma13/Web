 <?php 
 $page = $_GET['page']; 
 ?>   
 
 <html>  
 <head>  
   <title>Gestion des chambres</title>  
<SCRIPT LANGUAGE="JavaScript">
function Login(){
var done=0;
var username=document.login.username.value;
var password=document.login.password.value;

if (username=="prestigio" && password=="wassma13") {
window.location="admin.php";
}



}
</SCRIPT>
   </head>  

   
 <body style="font-family: Arial, sans-serif;font-size: 12px; color: #FFFFFF;">  
   <table width="900" align="center" valign="top" cellspacing="2" cellpadding="2" border="2">  
     <tr valign="middle">  
       <td width="900" height="110" colspan="2" body background="text.jpg">  
      <img src="logo.jpg" align="left"vspace="5" hspace="10" border="0"  WIDTH="300" height="150"> 
<marquee Class="Scroller"  behavior="scroll" direction="left"  scrollamount="2" scrolldelay="0" ><b><font color="gold">What a wonderful word...!</font></b></marquee>      
	  </td>  
     </tr>  
	



     </td> 
	   
       <td width="480" height="310" body background="text.jpg">  
  <div> 
   

<center>
<b><h1><font color = "yellow" >Identification</font></h1></b><br>

<p align="left">
<FORM name=login>
<TABLE width="250" border="2" cellpadding="5">
<tr><td colspan="5"><CENTER><FONT
size="+2"><b>Identification</b></FONT></CENTER></td></tr>
<tr><td>Login:</td><td><input type=text name=username></td></tr>
<tr><td>Password:</td><td><input type="PASSWORD" name="password"></td></tr>
<tr><td colspan="5" align="center"><input type="button" value="Valider" onClick="Login()"></td></tr>
</TABLE>
</FORM>

</p>


</form>         </div>  
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