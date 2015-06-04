<?php
/* -------- ESTRUCTURA BASICA --------------*/

  function cabeceraHTML(){
   echo "
		<html>
        <head>
			<title>Team Insane Revenge</title>
			<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
			<link href='css/estilo.css' rel='stylesheet' type='text/css' /> 
			<link rel='stylesheet' href='slider/themes/default/default.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='slider/themes/light/light.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='slider/themes/dark/dark.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='slider/themes/bar/bar.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='slider/nivo-slider.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='style.css' type='text/css' media='screen' />
			<link href='img/iconoNavegador.png' type='image/png' rel='shortcut icon' />
        </head>
        <body>
		 
		  <div id='divLogo'>
				<img id='centrarImg' src='img/cabecera.png' />
		  </div>
		 "; 	 
  }

  function pieHTML(){
   echo "<p id='pieWeb'>Starcraft II Copyright &copy; 2013 Team Insane Revenge. Pagina web en fase beta v.2.0.0 Navegadores soportados: Google Chrome y Firefox.</p>
		 </body>
         </html>";
  }
  
  function slider(){
  
  echo"<div id='wrapper'>
			<div class='slider-wrapper theme-default'>
				<div id='slider' class='nivoSlider'>
					<a href='http://www.esl.eu/es/sc2/'><img src='images/ESL.jpg' data-thumb='images/ESL.jpg'/></a>
					<a href='http://www.teamliquid.net/'><img src='images/TL.jpg' data-thumb='images/TL.jpg'/></a>
					<a href='http://www.twitch.tv/'><img src='images/TwitchTv.jpg' data-thumb='images/TwitchTv.jpg'/></a>
					
				</div>
			</div>
		</div>
				
				<!-- Ejemplo
				
				 <div id='wrapper'>
						<div class='slider-wrapper theme-default'>
						<div id='slider' class='nivoSlider'>
							<a href='http://www.esl.eu/es/sc2/'><img src='images/ESL.jpg' data-thumb='images/ESL.jpg' alt='' title='Electronic Sport League.' /></a>
							<a href='http://dev7studios.com'><img src='images/up.jpg' data-thumb='images/up.jpg' alt='' title='This is an example of a caption' /></a>
							<img src='images/walle.jpg' data-thumb='images/walle.jpg' alt='' data-transition='slideInLeft' />
							<img src='images/nemo.jpg' data-thumb='images/nemo.jpg' alt='' title='#htmlcaption' />
						</div>
						<div id='htmlcaption' class='nivo-html-caption'>
							<strong>This</strong> is an example of a <em>HTML</em> caption with <a href='#'>a link</a>. 
						</div>
					</div>
				</div> -->

				<script type='text/javascript' src='scripts/jquery-1.9.0.min.js'></script>
				<script type='text/javascript' src='slider/jquery.nivo.slider.js'></script>
				<script type='text/javascript'>
				$(window).load(function() {
					$('#slider').nivoSlider();
				});
				</script>";
  }
  
  function menu($varMenu)
  {
		print("<div id='divMenu'>");
				print("<ul class='menu1'>");		
				print("<li "); if(isset($varMenu) && $varMenu=='Noticias') print("class='current'"); print("><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='index.php'><b>Noticias</b></a></li>");
				print("<li "); if(isset($varMenu) && $varMenu=='Miembros') print("class='current'"); print("><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='miembros.php'><b>Miembros</b></a></li>");
				print("<li "); if(isset($varMenu) && $varMenu=='Logros') print("class='current'"); print("><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='logros.php'><b>Logros<b></b></a></li>");
				print("<li "); if(isset($varMenu) && $varMenu=='Torneos') print("class='current'"); print("><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='torneos.php'><b>Torneos</b></a></li>");
				print("<li "); if(isset($varMenu) && $varMenu=='Guias') print("class='current'"); print("><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='guias.php'><b>Guias<b></b></a></li>");
				print("<li "); if(isset($varMenu) && $varMenu=='Foro') print("class='current'"); print("><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='foro.php'><b>Foro</b></a></li>");
				
				print("<img id='lineaMenu' src='img/menu/separador_menu.png'/>");
				print("</ul>");
				
				
				
				
				/* print("<li class='current'><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='index.php'><b>Inicio</b></a></li>");
				print("<li><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='miembros.php'><b>Miembros</b></a></li>");
				print("<li><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='logros.php?'><b>Logros</b></a></li>");
				print("<li><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='streams.php'><b>Streams</b></a></li>");
				print("<li><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='guias.php'><b>Guias<b></b></a></li>");
				print("<li><img id='lineaMenu' src='img/menu/separador_menu.png' /><a href='contacto.php'><b>Contacto</b></a></li>");
				print("<img id='lineaMenu' src='img/menu/separador_menu.png'/>");
				print("</ul>");*/
		print("</div>");
  
  }
  
  function panelDerecho()
  {

		print("<img id='centrarImg' src='img/PanelDerecho RedesSociales.jpg' /><br>");
		print("<a href='https://twitter.com/TmInsaneRevenge'><img id='panelDerechoRedesSociales' src='img/twitter.png' onmouseover=\"this.src='img/twitterMouseOver.png';\" onmouseout=\"this.src='img/twitter.png';\"/></a>");
		print("<a href=''><img id='panelDerechoRedesSociales' src='img/facebook.png' onmouseover=\"this.src='img/facebookMouseOver.png';\" onmouseout=\"this.src='img/facebook.png';\"/></a>");
		print("<a href=''><img id='panelDerechoRedesSociales' src='img/youtube.png' onmouseover=\"this.src='img/youtubeMouseOver.png';\" onmouseout=\"this.src='img/youtube.png';\"/></a><br>");

		print("<img id='centrarImg' src='img/PanelDerecho WebsAmigas.jpg' /><br>");
		print("<a href='http://www.starcraft-esp.com/'><img id='panelDerechoWebsAmigas' src='img/webAmiga_StarcraftEsp.jpg' /></a>");
		print("<a href='http://rankup.es/'><img id='panelDerechoWebsAmigas' src='img/webAmiga_RankUp.jpg' /></a>");

		print("<p class='clear'></p>");
	print("</div>");

	print("<p class='clear'></p>");
  
  
  
  }
  
  
?>