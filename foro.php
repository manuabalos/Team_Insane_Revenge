<?php
require('func/funciones.inc');
session_cache_limiter('nocache');
 session_start();
cabeceraHTML();

	/* MENU de la web */
	$varMenu='Foro';
	menu($varMenu);
?>

<div id='divBody'>

<?php
	/* SLIDER de Noticias */
	slider();
?>

<center>
<iframe width="890" height="1470" frameborder="0" marginheight="0" marginwidth="0" src="http://teaminsanerevenge.foroactivo.com/"></iframe>
</center>

</div>

<?php
pieHTML();
?>