<?php
require('func/funciones.inc');
require('bd/conexion.inc');
session_cache_limiter('nocache');
 session_start();
cabeceraHTML();

	/* MENU de la web */
	$varMenu='Logros';
	menu($varMenu);
?>

<div id='divBody'>

<?php
	/* SLIDER de Noticias */
	slider();
?>

<!-- PANEL DE LOGROS -->	
<div id="panelIzquierdo">
 <img src='img/Logros/Logros.jpg'/>
 <hr id='separadorNoticia'>
 
 <?php
 
  $sentenciaLogros="SELECT LogroID, LogroNombreTorneo, LogroNombreGanador, LogroPosicion, LogroFecha, LogroEnlace FROM logros ORDER BY LogroFecha, LogroPosicion, LogroNombreGanador;";
  $contenedorLogros=seleccionar($sentenciaLogros);
  
  
  print("<div class='datagrid'><table>");
  print("<thead><tr><th>Fecha</th><th>Posici&oacute;n</th><th>Ganador</th><th>Torneo</th><th>Enlace</th></tr></thead>");
  print("<tbody>");
  $colorfila=1;
  if(sizeof($contenedorLogros)==0)
  {
	
	print("<td colspan=5>No hay ning&uacute;n torneo ganado.</td>"); // TORNEO
  }
  else
  {
		for($i=0;$i<sizeof($contenedorLogros);$i++)
		{
			print("<tr "); if($colorfila%2==0){ print("class='alt'");} print(">");
			print("<td>".$contenedorLogros[$i][4]."</td>"); // FECHA
			print("<td><img src='img/Logros/".$contenedorLogros[$i][3].".png' /></td>"); // POSICION
			print("<td>".$contenedorLogros[$i][2]."</td>"); // GANADOR
			print("<td>".$contenedorLogros[$i][1]."</td>"); // TORNEO
			
			if($contenedorLogros[$i][5]!='') //ENLACE
				print("<td><a href='".$contenedorLogros[$i][5]."'><img src='img/Logros/Bracket.png'/></a></td>");
			else
				print("<td>".$contenedorLogros[$i][5]."</td>");
		
			print("</tr>"); $colorfila++;
		}
  }
 
 
    print("</tbody>");
	print("</table></div>");

 ?>
<hr id="separadorNoticia">
<p id='centrarTexto'> Si desea añadir cualquier torneo que haya ganado (entre los tres primeros), ind&iacute;quelo en post correspondiente del foro. <br><b>Foro -> Noticias -> Añadir un torneo ganado en la sección 'Logros' de la web.</b> O pulse <a href="http://teaminsanerevenge.foroactivo.com/t5-anadir-un-torneo-ganado-en-la-seccion-logros-de-la-web">Aqu&iacute;</a>.</p>
<hr id="separadorNoticia">
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