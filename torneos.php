<?php
require('func/funciones.inc');
session_cache_limiter('nocache');
 session_start();
cabeceraHTML();

	/* MENU de la web */
	$varMenu='Torneos';
	menu($varMenu);
?>

<div id='divBody'>

<?php
	/* SLIDER de Noticias */
	slider();
?>

<!-- Para mostrar la animacion de mostrar el stream -->

	<script> 
	/*$(document).ready(function(){
	  $("#flipTorneo").click(function(){
		$("#panelTorneo").slideToggle("slow");
	  });
	});	*/
	/*// Primer Clasificatorio
	$(document).ready(function(){
	  $("#flipPrimerClasificatorio").click(function(){
		$("#panelPrimerClasificatorio").slideToggle("slow");
	  });
	});
	
	// Segundo Clasificatorio
	$(document).ready(function(){
	  $("#flipSegundoClasificatorio").click(function(){
		$("#panelSegundoClasificatorio").slideToggle("slow");
	  });
	});
	
	// Tercer Clasificatorio
	$(document).ready(function(){
	  $("#flipTercerClasificatorio").click(function(){
		$("#panelTercerClasificatorio").slideToggle("slow");
	  });
	});

	// Cuarto Clasificatorio
	$(document).ready(function(){
	  $("#flipCuartoClasificatorio").click(function(){
		$("#panelCuartoClasificatorio").slideToggle("slow");
	  });
	});
	
	// Quinto Clasificatorio
	$(document).ready(function(){
	  $("#flipQuintoClasificatorio").click(function(){
		$("#panelQuintoClasificatorio").slideToggle("slow");
	  });
	});*/
	</script>

<img id='centrarImg' src='img/Torneos/Revenge Tournament 1.jpg' />
<center>
	<p id='pTituloTorneos'>1º Edici&oacute;n del torneo 'Revenge Tournament'</p>
</center>
	
<div id="panelTorneo">
	<iframe id='centrarImg' src="http://challonge.com/revengetournament_1/module" width="790" height="520" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
</div>

<div id='divGuia'>
		<img id='imgAdobe' src='img/pdf-icon.png' />
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Torneo:</span> Revenge Tournament #1.</p>
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Descripci&oacute;n:</span> Informaci&oacute;n sobre el torneo Revenge Tournament #1.</p>
			<a id='descargarverGuia' href="torneos.php" onclick="window.open('doc/Revenge Tournament 1.pdf')">Ver online</a>
			<a id='descargarverGuia' href="doc/Revenge Tournament 1.rar">Descargar</a>
		<p class='clear'></p>
	</div>
<center>
	<p id='pTextoTorneos'><b><u>Plazo m&aacute;ximo de inscripci&oacute;n</u>: </b>2 de Marzo del 2014. (inclusive)</p> 
	<p id='pTextoTorneos'><b><u>Fecha de inicio del torneo</u>: </b>3 de Marzo del 2014.</p> 
</center>

<br><br>
<img id='centrarImg' src='img/Torneos/Historial Campeones.jpg' />
<center><p id='pDescripcionGuia'>Sin ning&uacute;n ganador actualmente.</p></center>

<!--

<div id="flipQuintoClasificatorio">
	<p id='pTituloTorneos'>The Chosen One to War #5</p> Click para mostrar m&aacute;s detalles.
</div>
	<p id='pTextoTorneos'><b><u>Eliminatorias (Brackets)</u></b></p> 
		<iframe id='centrarImg' src="http://challonge.com/thechosenonetowar5/module" width="790" height="650" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
	<p id='pTextoTorneos'><b><u>Participantes</u></b></p> 
		<img id='centrarImg' src='img/IDparticipantes.jpg' />

<div id="flipCuartoClasificatorio">
	<p id='pTituloTorneos'>The Chosen One to War #4 [Finalizado]</p> Click para mostrar m&aacute;s detalles.
</div>
	<div id="panelCuartoClasificatorio">
		<p id='pTextoTorneos'><b><u>Eliminatorias (Brackets)</u></b></p> 
		<iframe id='centrarImg' src="http://challonge.com/thechosenonetowar4/module" width="790" height="650" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
	</div>
		
<div id="flipTercerClasificatorio">
	<p id='pTituloTorneos'>The Chosen One to War #3 [Finalizado]</p> Click para mostrar m&aacute;s detalles.
</div>
	<div id="panelTercerClasificatorio">
		<p id='pTextoTorneos'><b><u>Eliminatorias (Brackets)</u></b></p> 
		<iframe id='centrarImg' src="http://challonge.com/thechosenonetowar3/module" width="790" height="650" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
	</div>

<div id="flipSegundoClasificatorio">
	<p id='pTituloTorneos'>The Chosen One to War #2 [Finalizado]</p> Click para mostrar m&aacute;s detalles.
</div>
	<div id="panelSegundoClasificatorio">
		<p id='pTextoTorneos'><b><u>Eliminatorias (Brackets)</u></b></p> 
		<iframe id='centrarImg' src="http://challonge.com/thechosenonetowar2/module" width="790" height="650" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
	</div>


<div id="flipPrimerClasificatorio">
	<p id='pTituloTorneos'>The Chosen One to War #1 [Finalizado]</p> Click para mostrar m&aacute;s detalles.
</div>
	<div id="panelPrimerClasificatorio">
		<p id='pTextoTorneos'><b><u>Eliminatorias (Brackets)</u></b></p>
		<iframe id='centrarImg' src="http://challonge.com/thechosenonetowar1/module" width="790" height="650" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
	</div>


-->





</div>

<?php
pieHTML();
?>