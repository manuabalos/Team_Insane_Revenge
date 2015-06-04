<?php
require('func/funciones.inc');
require('bd/conexion.inc');
session_cache_limiter('nocache');
 session_start();
cabeceraHTML();

	/* MENU de la web */
	$varMenu='Noticias';
	menu($varMenu);
?>

<div id='divBody'>

<?php

	/* SLIDER de Noticias */
	slider();
?>

<!-- PANEL DE NOTICIAS -->	
<div id="panelIzquierdo">
 <?php
 $sentenciaNoticias="SELECT NoticiaID, NoticiaTitulo, NoticiaTexto, NoticiaImagen, NoticiaFecha FROM noticias ORDER BY NoticiaID DESC;";
 $contenedorNoticias=seleccionar($sentenciaNoticias);
 
 print("<hr id='separadorNoticia'>");
 
 for($i=0;$i<sizeof($contenedorNoticias);$i++)
 {
		print("<img src='img/NoticiasImg/".$contenedorNoticias[$i][3]."'/>"); // IMAGEN DE LA NOTICIA
		print("<span id='tituloNoticia'>".$contenedorNoticias[$i][1]."</span><br>"); // TITULO DE LA NOTICIA
		print("<span id='cuerpoNoticia'>".$contenedorNoticias[$i][4]." - ".substr($contenedorNoticias[$i][2],0,250)); // FECHA Y CUERPO DE LA NOTICIA
		print(" <a href='noticias.php?NoticiaID=".$contenedorNoticias[$i][0]."'><br>[Leer mas...]</a></span>"); // LEER MÁS
		?><hr id="separadorNoticia"><?php
 } 
 ?>

<p class="clear"></p>


</div>

<!-- PANEL DE REDES SOCIALES / WEBS AMIGAS / ETC. -->	
<?php
print("<div id='panelDerecho'>");
panelDerecho();
 ?>

</div>

<?php
pieHTML();
?>