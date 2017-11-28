<HTML><HEAD>
<TITLE>Slideshow Tutorial</TITLE>

<SCRIPT LANGUAGE="JavaScript">
<!-- Beginning of JavaScript -

var timer = null
var	 counter =1

function slideshow() {
	timer=setTimeout("slideshow()", 2000);
	counter++;

		if (counter >= 6) 
		counter = 2;
	document.pictures.src = pic[counter].src;
}


function endtimer() {
	clearTimeout(timer);
	document.pictures.src = pic[1].src;
	counter = 1;
}

// - End of JavaScript - -->
</SCRIPT>
</HEAD>

<BODY BACKGROUND="FFFFFF">

<SCRIPT LANGUAGE="JavaScript">
<!-- Beginning of JavaScript -

if (document.images) {

	pic = new Array()

	pic[1] = new Image(108, 108);
	pic[1].src = "pic1.gif";

	pic[2] = new Image(108, 108);
	pic[2].src = "pic2.gif";

	pic[3] = new Image(108, 108);
	pic[3].src = "pic3.gif";

	pic[4] = new Image(108, 108);
	pic[4].src = "pic4.gif";

	pic[5] = new Image(108, 108);
	pic[5].src = "pic5.gif";
}

// - End of JavaScript - -->
</SCRIPT>


<IMG SRC="pic1.gif" WIDTH="108" HEIGHT="108" NAME="pictures">

<a href="Javascript:void(slideshow())"><IMG SRC="onbutton.gif" WIDTH="72" HEIGHT="35" BORDER="0"></a>
<a href="Javascript:void(endtimer())"><IMG SRC="offbutton.gif" WIDTH="70" HEIGHT="35" BORDER="0"></a>

</BODY>
</HTML>