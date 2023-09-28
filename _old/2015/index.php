<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>


<html>

<head>
  <title>Bioteknikdagarna 2015</title>
  <meta name="description" content="Bioteknikdagarna" />
  <meta name="keywords" content="Bioteknikdagarna" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>

</head>

<body>
  <div id="main">
    <div id="header">  
      <h1><span>B</span>io<span>T</span>eknik<span>D</span>agarna</h1>	
	  <h2>Umeå universitet 2015</h2>
    </div><!--close header-->			
    <div class="container_header"><p>&nbsp;</p></div>
    <div id="site_background"> 
      <div id="banner">  
		<div id="banner_content">
		</div><!--close banner_content-->	
      </div><!--close banner-->		
	  <div id="site_content">
	    <div id="menubar">
          <ul class="lavaLampWithImage" id="lava_menu">
            <li class="current"><a href="index.php">Hem</a></li>
            <li><a href="info.html">Eventinfo</a></li>
            <li><a href="companies.html">Företag</a></li>
            <li><a href="schedule.html">Schema</a></li>
            <li><a href="contact.html">Kontakta oss</a></li>
	    <li><a href="signup.html">Anmälan</a></li>

          </ul>
	      <div id="contact">
            <a href="https://www.facebook.com/pages/Bioteknikdagarna/342156395803498?fref=ts"><img src="images/icons/facebook.png" alt="facebook" /></a>
	      </div><!--close contact-->
	    </div><!--close menubar-->	
        <div id="content">
         <div class="content_item">
            <h1>Välkommen till Bioteknikdagarna, 5-8 november 2015!</h1>
              <p>Årets BioTeknikDagar kommer att hållas i Umeå. Under dessa dagar kommer det att hända massvis med roligheter, du kommer få träffa mycket folk, företag och andra bioteknikintresserade studenter. För att få bättre koll exakt på vad som händer, läs under eventinfo eller kolla in schemat. Du vill inte missa detta så se till att anmäla dig nu för att få vara med och uppleva Umeå och BTD 2015!</p>
<br>
<br>

<img src="poster.jpg" style="max-width:100%;
max-height:100%;" />

<br><br><br>
            <h3>Om BTD</h3>

            <p>Bioteknikdagarna är ett evenemang som anordnas en helg om året för civilingenjörsstudenter inom bioteknikområdet från Umeå Universitet, Uppsala Universitet, Kungliga tekniska högskolan, Chalmers, Lunds tekniska högskola, och Tekniska högskolan vid Linköpings Universitet. Ungefär tjugofem studenter från varje lärosäte bjuds in att deltaga i helgens aktiviteter. Syftet med Bioteknikdagarna är att marknadsföra Sveriges bioteknikstudenter samt att främja samarbetet mellan lärosätena.
 
Bioteknikdagarna riktar sig främst till studenter som är i slutet av sina utbildningar. Under dagarna erbjuds bland annat studiebesök, inspirationsföreläsningar och en företagsmässa. Utöver det här anordnas sittningar och andra sociala aktiviteter.
 
Varmt välkomna till Umeå och bioteknikdagarna 2015! 

</p>
		  </div><!--close content_item-->	
	      
<!--	
			<div class="sidebar_container">       
		    <div class="sidebar">
              <div class="sidebar_item">
                <h2>Senaste nytt</h2>
			    <h4>Bara 
-->


<?php
$days = ceil((strtotime("11/5/2015") - time())/(60*60*24));
$s='';
if ($days!=1) {
     $s='ar';
}
//echo $days. " dag$s kvar till BTD 2015!";
?>
<!--
 Mer info kommer snart.</h4>
                <p></p>
		          <a href="#"></a>
              </div> -->  <!--close sidebar_item--> 
<!--            </div><!--close sidebar-->     		
		    
<!--            </div><!--close sidebar-->  
<!--           </div><!--close sidebar_container-->	


<!--           <br style="clear:both;" />
        </div><!--close content-->	
      </div><!--close site_content-->	
	</div><!--close site_background-->	
    <div id="footer">  
	  <div id="footer_content"><!--Sammarbetspartners-->

<!--
<br>  <br><br><br><br>
<img src="logo/affibody.jpg" height="100" width="200" align="left"><br><br>
<img src="logo/Tataa.jpg" height="100" width="200" align="right">
<img src="logo/nobozymes.jpg" height="250" width="500" align="center">

<img src="logo/unionen.jpg" height="100" width="200" align="right"><br>
<img src="logo/SIJ.gif" height=100" width="150" align="left"><br>
<img src="logo/wolfram2.png" height="100" width="200" align="center">
-->
        
      </div><!--close footer_content-->	
    </div><!--close footer-->	
  </div><!--close main-->	
<div style="margin: 1em 0 3em 0; text-align: center;">
</div>
</body>
</html>
