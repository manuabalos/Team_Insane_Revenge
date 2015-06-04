<?php
require('func/funciones.inc');
session_cache_limiter('nocache');
 session_start();
cabeceraHTML();

	/* MENU de la web */
	$varMenu='Guias';
	menu($varMenu);
?>

<div id='divBody'>

<?php
	/* SLIDER de Noticias */
	slider();
?>

<img id='centrarImg' src='img/Guias Zerg 2.jpg' />

	<div id='divGuia'>
		<img id='imgAdobe' src='img/pdf-icon.png' />
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Autor:</span> Silent.</p>
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Descripci&oacute;n:</span> Gu&iacute;a Zerg vs Terran adaptada para 'Heart of the Swarm'.</p>
			<a id='descargarverGuia' href="guias.php" onclick="window.open('doc/ZvT - Guia Silent.pdf')">Ver online</a>
			<a id='descargarverGuia' href="doc/ZvT - Guia Silent.rar">Descargar</a>
			<p class='clear'></p>
	</div>
	
	<div id='divGuia'>
		<img id='imgAdobe' src='img/pdf-icon.png' />
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Autor:</span> Silent.</p>
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Descripci&oacute;n:</span> Gu&iacute;a Zerg vs Protoss adaptada para 'Heart of the Swarm'.</p>
			<a id='descargarverGuia' href="guias.php" onclick="window.open('doc/ZvP - Guia Silent.pdf')">Ver online</a>
			<a id='descargarverGuia' href="doc/ZvP - Guia Silent.rar">Descargar</a>
			<p class='clear'></p>
	</div>
	
	<div id='divGuia'>
		<img id='imgAdobe' src='img/pdf-icon.png' />
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Autor:</span> Silent.</p>
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Descripci&oacute;n:</span> Gu&iacute;a Zerg vs Zerg adaptada para 'Heart of the Swarm'.</p>
			<a id='descargarverGuia' href="guias.php" onclick="window.open('doc/ZvZ - Guia Silent.pdf')">Ver online</a>
			<a id='descargarverGuia' href="doc/ZvZ - Guia Silent.rar">Descargar</a>
			<p class='clear'></p>
	</div>
	
<img id='centrarImg' src='img/Guias Protoss 2.jpg' />

	<div id='divGuia'>
		<img id='imgAdobe' src='img/pdf-icon.png' />
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Autor:</span> Silent.</p>
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Descripci&oacute;n:</span> Gu&iacute;a b&aacute;sica Protoss vs Zerg - FFE (Forge Fast Expansion).</p>
			<a id='descargarverGuia' href="guias.php" onclick="window.open('doc/PvZ - Guia Silent.pdf')">Ver online</a>
			<a id='descargarverGuia' href="doc/PvZ - Guia Silent.rar">Descargar</a>
			<p class='clear'></p>
	</div>
	
	<div id='divGuia'>
		<img id='imgAdobe' src='img/pdf-icon.png' />
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Autor:</span> Silent.</p>
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Descripci&oacute;n:</span> Gu&iacute;a Protoss vs Terran - Rain's 1 gate FE.</p>
			<a id='descargarverGuia' href="guias.php" onclick="window.open('doc/PvT - Guia Silent.pdf')">Ver online</a>
			<a id='descargarverGuia' href="doc/PvT - Guia Silent.rar">Descargar</a>
			<p class='clear'></p>
	</div>
	
	<div id='divGuia'>
		<img id='imgAdobe' src='img/pdf-icon.png' />
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Autor:</span> Silent.</p>
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Descripci&oacute;n:</span> Gu&iacute;a Protoss vs Protoss - Hwangsin's Stargate Expand.</p>
			<a id='descargarverGuia' href="guias.php" onclick="window.open('doc/PvP - Guia Silent.pdf')">Ver online</a>
			<a id='descargarverGuia' href="doc/PvP - Guia Silent.rar">Descargar</a>
			<p class='clear'></p>
	</div>
	
<img id='centrarImg' src='img/Guias Terran 2.jpg' />

	<div id='divGuia'>
		<img id='imgAdobe' src='img/pdf-icon.png' />
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Autor:</span> Orcrist.</p>
		<p id='pDescripcionGuia'><span id='pTituloGuia'>Descripci&oacute;n:</span> Gu&iacute;a b&aacute;sica para principiantes. Muy recomendable.</p>
			<a id='descargarverGuia' href="guias.php" onclick="window.open('doc/TvX - Guia Orcrist Basica.pdf')">Ver online</a>
			<a id='descargarverGuia' href="doc/TvX - Guia Orcrist Basica.rar">Descargar</a>
			<p class='clear'></p>
	</div>

	
</div>

<?php
pieHTML();
?>