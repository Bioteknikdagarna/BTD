<?php

// php header: no caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: text/html; charset=utf-8');

// HTML header
echo "
     <!DOCTYPE html>
     <html>
     <head>
        <title>Bioteknikdagarna på Chalmers 2016</title>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"BTDlogga2016.png\">
        ";
// CSS stylesheet (with php variable for font size)        
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";

// Extra styling:
echo "<style>";

     
// Check if user chose a page from the menu
$p = '';
$text_animation = '83';
if (isset($_GET['p'])) {
    $p = $_GET['p'];
    echo "
    #menu {
    margin-top: 2vw;
    }"; 
} else {
    echo "
    #menu {
    -webkit-animation: float 3s;  
    animation: float 3s;
    -webkit-animation-delay: 3s; /* Chrome, Safari, Opera */
    animation-delay: 3s;
    animation-fill-mode: forwards;
    }"; 
    
}
        
// Check if browser is mobile
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
    // CSS Modifications for mobile
    echo "
    
    p, li {font-size: 2vmax;}
    h1 {font-size: 2.8vmax;}
    h2 {font-size: 2.5vmax;}
    h3 {font-size: 2.2vmax;}
    h4, h5, h6{font-size: 2vmax;}";
} 


echo "</style></head>";



     
// HTML body
echo "
     <body>
        
         <div id=\"header\">
            <img src=\"background.jpg\" width=\"100%\"></img>
         </div>
         
         <div id=\"menu\">
         
           <table style=\"width:100%\" class=\"table\"><tr>
           
           <td><a href=\"index.php?p=hem\" class=\"btn btn-info\" role=\"button\">Hem</a></td>
           <td><a href=\"index.php?p=eventinfo\">Eventinfo</a></td>
           <td><a href=\"index.php?p=foretag\">Företag</a></td>
           <td><a href=\"index.php?p=schema\">Schema</a></td>
           <td><a href=\"index.php?p=kontakt\">Kontakt</a></td>
           <td><a href=\"index.php?p=anmalan\">Anmälan</a></td>
           <td><a href=\"index.php?p=studiebesok\">Studiebesök</a></td>
           
           </tr></table>
           
         </div>

         <div id=\"container\">
         <div id=\"content\">
         ";

if ($p == 'db') {
    include('db.php');
} elseif ($p != '') {
    include($p . '.html');
} else {
    include('hem.html');
}
     

echo "     
     </div> </div>
	<div id='notis'>
     <h2>Hej, vad roligt att ni vill besöka vår webbsida!</h2>
	 </br>
	 <p>Tyvärr är den inte riktigt färdig än men den kommer inom kort att uppdateras till en version för BTD-2016.</p> <p>Årets Bioteknikdagar kommer att hållas på Chalmers i Göteborg den 3-6 November.</br>
	 Om ni vill ha en inblick i hur BTD går till så är det fritt fram att kolla på den gamla hemsidan. Ha dock i åtanke att informationen på den ej är uppdaterad!</p>
	 
	 <table style='width:100%'>
		<tr>
			<td>Kontakt:</td>
		</tr>
		<tr>
			<td>Allmän info:</td>
			<td>Elin Haraldsson</td>
			<td>projektledare@bioteknikdagarna.org</td>
		</tr>
		<tr>
			<td>Företag:</td>	
			<td>Julia Larsson</td>
			<td>foretagsansvarig@bioteknikdagarna.org</td>
	  </tr>
</table>
	 </br>
      <p>Besök oss gärna på 
	  <a href='https://www.facebook.com/Bioteknikstudenterna' target='_blank'>Facebook!</a></p>

      <p><a id='close' href='#'>Stäng</a></p>
    </div>

    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script>
      jQuery.fn.center = function () {
        var w = $(window);
        this.css('position','absolute');
        this.css('top', Math.max(0, ((w.height() - $(this).outerHeight()) / 2) 
          + w.scrollTop()) + 'px');
        this.css('left', Math.max(0, ((w.width() - $(this).outerWidth()) / 2) 
          + w.scrollLeft()) + 'px');
        return this;
      }
      var hasReadnotis = localStorage.getItem('hasReadnotis');
      if (hasReadnotis){
        $('<div>', {id : 'overlay'}).appendTo('body');
        $('#notis').fadeIn('slow').center();
		
      }
      $('#close').click(function(e){
        localStorage.setItem('hasReadnotis', 'true');
        $('#notis').remove();
        $('#overlay').remove();
        e.preventDefault();
      });
 
  
    
    </script>
  </body>
</html>
     </body>

     ";

     
?>