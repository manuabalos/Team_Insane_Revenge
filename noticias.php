<?php
require('func/funciones.inc');
require('bd/conexion.inc');
session_cache_limiter('nocache');
 session_start();
cabeceraHTML();

	/* MENU de la web */
	$varMenu='Noticias';
	menu($varMenu);
	
	/* Recogemos la ID de la noticia */
	$id_noticia=$_GET['NoticiaID'];
	
?>

<div id='divBody'>

<?php

	/* SLIDER de Noticias */
	slider();
?>

<!-- PANEL DE NOTICIAS -->	
<div id="panelIzquierdo">
 <?php
 $sentenciaNoticias="SELECT NoticiaID, NoticiaTitulo, NoticiaTexto, NoticiaImagen, NoticiaFecha FROM noticias WHERE NoticiaID=".$id_noticia.";";
 $contenedorNoticias=seleccionar($sentenciaNoticias);

 for($i=0;$i<sizeof($contenedorNoticias);$i++)
 {
 print("<hr id='separadorNoticia'>");
		print("<img src='img/NoticiasImg/".$contenedorNoticias[$i][3]."'/>"); // IMAGEN DE LA NOTICIA
		print("<span id='tituloNoticia'>".$contenedorNoticias[$i][1]."</span><br>"); // TITULO DE LA NOTICIA
		print("<span id='cuerpoNoticia'>".$contenedorNoticias[$i][4]." - ".$contenedorNoticias[$i][2]); // FECHA Y CUERPO DE LA NOTICIA
 print("<hr id='separadorNoticia'>");
 }
 print("<br><a href='index.php'><img id='centrarImg' src='img/botonVolver.png'/></a>");
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