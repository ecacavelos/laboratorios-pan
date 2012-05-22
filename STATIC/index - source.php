<?php

$ua = $_SERVER['HTTP_USER_AGENT'];

if (strpos($ua,'MSIE') != false && strpos($ua,'Opera') === false)
{
if (strpos($ua,'Windows NT 5.2') != false)
{
if(strpos($ua,'.NET CLR') === false) return;
}
if (substr($ua,strpos($ua,'MSIE')+5,1) < 7)
{
header('Location: http://www.sodep.com.py/ie6.html');
}
}

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SODEP - Software Development &amp; Products</title>

	<meta name="keywords" content="software, development, products, desarrollo, programacion, base de datos paginas web , aplicaciones web, mac, osx, apple , iphone, desarrollo, php, java, jquerry, css" />

<link href="inc/general.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="keywords" content="bolsas, bolsas plasticas, embalajes, cinta para embalaje, embalar, film, envasado, vasos de plastico," />

<!-- CSS Styele -->
<link href="inc/general.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="inc/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="inc/nivo-slider/demo/style.css" type="text/css" media="screen" />

<!-- SCRIPT -->

<script type="text/javascript" src="inc/nivo-slider/demo/scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="inc/nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $('#slider').nivoSlider({
		   effect:'fade', // Specify sets like: 'fold,fade,sliceDown'

    });
	});
	
    </script>

</head>

<body>

<div id="container"> <!-- START CONTAINTER -->


<div id="header"><!-- START HEADER -->
<div id="logo"> <!-- START LOGO -->
<a href="index.php"><img src="images/logo.png" border="0" /></a>
</div><!-- *END LOGO -->
<div id="language"><!-- START LENGUAGE -->
<ul>
<li><a href="index.php">Español</a></li>
<li><a href="index_eng.php">English</a></li>
</ul>
</div><!-- *END LENGUAGE -->
<div id="menuTop">
  <!-- START MENU TOP -->
  <ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="projects.php">Proyectos</a></li>
    <li><a href="team.php">Nosotros</a></li>
    <li><a href="contact.php">Contactenos</a></li>
  </ul>
</div>
<!-- *END MENU TOP -->


</div> <!-- *END HEADER -->

<div id="content" class="clear"> <!-- START CONTENT -->

    <div id="illus_content"> <!-- START ILLUS CONTENT -->
    
            <div id="intro"> <!-- START INTRO-->
            <img  src="images/separador_home.png"  align="right"/>
            </div><!-- *END INTRO-->
        
            <div id="slide_container"><!-- START SLIDE CONTAINER-->
            
            
             <div id="slider" class="nivoSlider">
                <img src="images/illus/01.jpg" alt="" />
                <img src="images/illus/02.jpg" alt=""  />
                <img src="images/illus/03.jpg" alt="" />
                <img src="images/illus/04.jpg" alt="" />
            </div>
            
            </div><!-- *END SLIDE CONTAINER-->
        
    </div><!-- *END ILLUS CONTENT -->
        
  <div class="sep_shadow"> <!-- START SEP SHADOW -->
  </div> <!-- *END SEP SHADOW -->
  
  
  <div id="intro_text"> <!-- START INTRO TEXT -->
    <h1>Sodep S.A. (Software Development and Products)</h1>
      es una empresa que agrupa a varios consultores con amplia experiencia nacional e internacional en el área de las tecnologías de la información.
      <br />
      <br />
    En sus 2 años de vida ha participado de varios proyectos que han puesto en el mercado nacional y europeo productos en el área de sistemas móviles, sistemas embebidos y aplicaciones web. </div><!-- *END INTRO TEXT -->
    
    <div id="box_home"> <!-- START BOX HOME -->

		<div class="ico_sv"><!-- START ICO SV -->
        </div><!-- *END ICO SV -->
		
        <div id="desc"> <!-- START DESC -->
        
          <p>Todos los servicios que SODEP ofrece están especialmente pensandos y desarrollados para satisfacer las necesidades del cliente. </p>
          <ul>
            <li>Desarrollo de productos software </li>
            <li>Direccion de proyectos</li>
            <li>Cursos a medida</li>
          </ul>
      
      
        </div> <!-- *END DESC -->
		
  </div><!-- *END BOX HOME -->
  
    
</div><!-- *END CONTENT -->

 <div class="sep_shadow"> <!-- START SEP SHADOW -->
  </div> <!-- *END SEP SHADOW -->

<div id="footer"> <!-- START FOOTER -->

    <div id="lf"><!-- START LF -->
    info@sodep.com.py / +595 21 647711
    </div><!-- *END LF -->
    
    <div id="rg"><!-- START RG -->
    SODEP SA - Asunción, Paraguay
    </div><!-- *END RG -->

</div> <!-- *END FOOTER -->


</div><!-- *END CONTAINTER -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-84567-36']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
