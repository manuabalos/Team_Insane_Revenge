<?php
require('func/funciones.inc');
require('bd/conexion.inc');
session_cache_limiter('nocache');
 session_start();
cabeceraHTML();

	/* MENU de la web */
	$varMenu='Miembros';
	menu($varMenu);
	
	/* Recogemos la variable para cargar Miembros o Staff */
	if(!isset($_GET['cargar']))
		$cargar="desconocido";
	else
		$cargar=$_GET['cargar'];
?>

<div id='divBody'>

<?php
	/* SLIDER de Noticias */
	slider();
?>

<!-- PANEL DE MIEMBROS -->	
<div id="panelIzquierdo">
	<?php
	if($cargar=="StaffActivo")
	{
		print("<img src='img/Miembros/Staff.jpg' />");
		print("<hr id='separadorNoticia'>");
		
		$sentenciaStaff="SELECT StaffID, StaffNick, StaffCodigo, StaffRango FROM staff ORDER BY StaffID ASC;";
		$contenedorStaff=seleccionar($sentenciaStaff);
		
		print("<div class='datagrid'><table>");
		print("<thead><tr><th>Nick</th><th>C&oacute;digo</th><th>Rango</th></tr></thead>");
		print("<tbody>");
		$colorfila=1;
			
			for($i=0;$i<sizeof($contenedorStaff);$i++)
			{
				print("<tr "); if($colorfila%2==0){ print("class='alt'");} print(">");
				
				print("<td>".$contenedorStaff[$i][1]."</td>"); // NOMBRE
				print("<td>".$contenedorStaff[$i][2]."</td>"); // CODIGO
				print("<td>".$contenedorStaff[$i][3]."</td>"); // RANGO
			
				print("</tr>"); $colorfila++;
			}
		
		
		print("</tbody>");
		print("</table></div>");
	
	}
	if($cargar=="MiembrosActivo" || !isset($_GET['cargar']))
	{
		print("<img src='img/Miembros/Miembros.jpg' />");
		print("<hr id='separadorNoticia'>");
		
		$sentenciaMiembros="SELECT MiembrosNick, MiembrosCodigo, MiembrosRaza, MiembrosLiga, MiembrosTwitchTV, MiembrosTwitter FROM miembros ORDER BY MiembrosLiga, MiembrosRaza, MiembrosNick ASC;";
		$contenedorMiembros=seleccionar($sentenciaMiembros);
			
		print("<div class='datagrid'><table>");
			print("<thead><tr><th>Liga</th><th>Raza</th><th>Nick en Starcraft</th><th>C&oacute;digo</th><th>Twitter</th><th>TwitchTV</th></tr></thead>");
			print("<tbody>");
			$colorfila=1;
			
			 for($i=0;$i<sizeof($contenedorMiembros);$i++)
			 {
					print("<tr "); if($colorfila%2==0){ print("class='alt'");} print(">");
						
						
						if($contenedorMiembros[$i][3]!="8 Sin clasificar") // LIGA
							print("<td><img id='centrarImg' src='img/Miembros/".$contenedorMiembros[$i][3].".png' /></td>");
						else
							print("<td>&nbsp;</td>"); 
						
						print("<td><img id='centrarImg' src='img/Miembros/".$contenedorMiembros[$i][2].".png' /></td>"); // RAZA
						print("<td>".$contenedorMiembros[$i][0]."</td>"); // NICKNAME EN STARCRAFT
						print("<td>".$contenedorMiembros[$i][1]."</td>"); //CODIGO
						
						if($contenedorMiembros[$i][5]!="") // TWITTER
							print("<td><a href='https://twitter.com/".$contenedorMiembros[$i][5]."'><img src=img/Miembros/Twitter.png></a></td>");
						else
							print("<td>".$contenedorMiembros[$i][5]."</td>"); 
							
							
						if($contenedorMiembros[$i][4]!="") // TWITCHTV
							print("<td><a href='http://www.twitch.tv/".$contenedorMiembros[$i][4]."'><img src=img/Miembros/Twitch.png></a></td>");
						else
							print("<td>".$contenedorMiembros[$i][4]."</td>"); 
							
					print("</tr>"); $colorfila++;
			 }
			 
			 
					print("</tbody>");
			print("</table></div>");
			 
	}
	?>
<hr id="separadorNoticia">
<p id='centrarTexto'> Si desea actualizar cualquier dato de los miembros del clan indiquelo en el post del foro correspondiente. <b>Foro -> Noticias -> Actualizar los datos de la sección 'Miembros' de la web.</b> O pulse <a href="http://teaminsanerevenge.foroactivo.com/t3-actualizar-los-datos-de-la-seccion-miembros-de-la-web">Aqu&iacute;</a>.</p>
<hr id="separadorNoticia">
<p class="clear"></p>


</div>

<!-- PANEL DE REDES SOCIALES / WEBS AMIGAS / ETC. -->	
<?php
print("<div id='panelDerecho'>");
print("<a href='miembros.php?cargar=StaffActivo'><img id='panelDerechoWebsAmigas' src='img/Miembros/StaffLateral.jpg' onmouseover=\"this.src='img/Miembros/StaffLateralMouseOver.jpg';\" onmouseout=\"this.src='img/Miembros/StaffLateral.jpg';\"/></a>");
print("<a href='miembros.php?cargar=MiembrosActivo'><img id='panelDerechoWebsAmigas' src='img/Miembros/MiembrosLateral.jpg' onmouseover=\"this.src='img/Miembros/MiembrosLateralMouseOver.jpg';\" onmouseout=\"this.src='img/Miembros/MiembrosLateral.jpg';\"/></a>");

panelDerecho();
 ?>

<!-- 
<?php /*
if(isset($_REQUEST['Activa']))
{
$imgActiva=$_REQUEST['Activa'];
}
else
{
$imgActiva="Desconocido";
} */
/* ---------- DEFAULT --------------*/
/* if($imgActiva=="Desconocido") */
{
?>
<a href="miembros.php?Activa=Staff"><img id='ImgStaffMiembros' src='img/BotonStaff1b.jpg' onmouseover="this.src='img/BotonStaff1a.jpg';" onmouseout="this.src='img/BotonStaff1b.jpg';" /></a>
<a href="miembros.php?Activa=Miembros"><img id='ImgStaffMiembros' src='img/BotonMiembros1b.jpg' onmouseover="this.src='img/BotonMiembros1a.jpg';" onmouseout="this.src='img/BotonMiembros1b.jpg';"/></a>

<p id='centrarTexto'> Seleccione una de las imagenes para ver los miembros de dicha categoria.</p>

<div id='divcuadroMiembros'>
 <p id='pDescripcionGuia'><span id='pTituloMiembros'>&#191;Deseas ser miembro de 'Team Insane Revenge'?</span></p>
 <p id='pDescripcionGuia'>Cualquier persona podr&iacute;a entrar en el clan sin ning&uacute;n requisito. No es necesario tener nivel o pertenecer en alguna liga concreta da igual que seas bronce, plata, oro, platino, diamante, maestro, gran maestro o juegues a la modalidad 1v1, 2v2, 3v3, 4v4. Solamente se pide respeto entre nosotros y pasarlo bien.</p>
 
 <p id='pDescripcionGuia'><span id='pTituloMiembros'>&#191;Como ser miembro de 'Team Insane Revenge'?</span></p>
 <p id='pDescripcionGuia'>Para entrar en el clan, pod&eacute;is agregar en el juego al lider del clan Silent#729 y contactar con &eacute;l por el juego.</p>
 
 <p id='pDescripcionGuia'><span id='pTituloMiembros'>Informaci&oacute;n sobre 'Team Insane Revenge'.</span></p>
 <p id='pDescripcionGuia'>- Disponemos de Raidcall para hablar por micr&oacute;fono m&aacute;s c&oacute;modamente.</p>
 <p id='pDescripcionGuia'>- Tenemos roster del clan (actualmente se est&aacute;n jugando los clasificatorios para completar el roster).</p>
 <p id='pDescripcionGuia'>- Nos ayudamos entre nosotros para mejorar, nos aconsejamos, nos pedimos ayuda.</p>
 <p id='pDescripcionGuia'>- Torneos internos para todos los niveles.</p>
 <p id='pDescripcionGuia'>- La gran mayor&iacute;a del clan que esta actualmente ha aumentado de nivel y ha subido de liga desde que han entrado en el clan.</p>
</div>

<?php
}

/* ---------- STAFF Y ROSTER --------------*/
/*if(isset($imgActiva) && $imgActiva=="Staff")
{*/
?>
<img id='ImgStaffMiembros' src='img/BotonStaff1a.jpg' />
<a href="miembros.php?Activa=Miembros"><img id='ImgStaffMiembros' src='img/BotonMiembros1b.jpg' onmouseover="this.src='img/BotonMiembros1a.jpg';" onmouseout="this.src='img/BotonMiembros1b.jpg';"/></a>

		<img id='ImgMiembros' src='img/CuadroMiembros Staff.jpg' />

			<div class="datagrid">
				<table>
					<thead><tr><th>Nick BattleNet</th><th>C&oacute;digo</th><th>Liga 1v1</th><th>Nivel de Rango</th></tr></thead>
					<tbody>
						<tr><td>Silent</td><td>729</td><td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td><td>Lider del clan</td></tr>
						<tr class="alt"><td>Orcrist</td><td>563</td><td><img id='centrarImg' src='img/iconoLigaMaestro.png' /></td><td>Capit&aacute;n de roster</td></tr>
						<tr><td>Excen</td><td>691</td><td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td><td>Ayudante de torneos</td></tr>
					</tbody>
				</table>
			</div>

		<img id='ImgMiembros' src='img/CuadroMiembros Roster.jpg' />

			<div class="datagrid">
				<table>
					<thead><tr><th>Nick BattleNet</th><th>C&oacute;digo</th><th>Liga 1v1</th><th>Nivel de Rango</th></tr></thead>
					<tbody>
						<tr><td>Orcrist</td><td>563</td><td><img id='centrarImg' src='img/iconoLigaMaestro.png' /></td><td>Capit&aacute;n de roster</td></tr>
						<tr class="alt"><td>Terranouta</td><td>264</td><td><img id='centrarImg' src='img/iconoLigaMaestro.png' /></td><td>Soldado</td></tr>
						<tr><td>Excen</td><td>691</td><td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td><td>Soldado</td></tr>
						<tr class="alt"><td>Carnage</td><td>946</td><td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td><td>Soldado</td></tr>
						<tr><td>Fr&ocirc;nght</td> <td>197</td> <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td> <td>Soldado</td></tr>
						<tr class="alt"><td>Jandro</td> <td>950</td> <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td> <td>Soldado</td></tr>
						<tr><td>Chuekikaaa</td> <td>975</td> <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td> <td>Soldado</td></tr>
						<tr class="alt"><td>Anko</td> <td>654</td> <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td> <td>Soldado</td></tr>
						<tr><td>Por determinar</td> <td>Por determinar</td> <td>Por determinar</td> <td>Por determinar</td></tr>
						<tr class="alt"><td>Por determinar</td> <td>Por determinar</td> <td>Por determinar</td> <td>Por determinar</td></tr>
					</tbody>
				</table>
			</div>
<?php
/*}*/

/* ---------- MIEMBROS --------------*/
/*if(isset($imgActiva) && $imgActiva=="Miembros")
{*/
?>
<a href="miembros.php?Activa=Staff"><img id='ImgStaffMiembros' src='img/BotonStaff1b.jpg' onmouseover="this.src='img/BotonStaff1a.jpg';" onmouseout="this.src='img/BotonStaff1b.jpg';" /></a>
<img id='ImgStaffMiembros' src='img/BotonMiembros1a.jpg'/>

		<img id='ImgMiembros' src='img/CuadroMiembros Miembros.jpg' />
		
			<div class="datagrid">
				<table>
					<thead><tr><th>Nick BattleNet</th><th>C&oacute;digo</th><th>Liga 1v1</th></tr></thead>
					<tbody>
						<tr><td>Silent</td>   <td>729</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr class="alt"><td>Excen</td>   <td>691</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr><td>Orcrist</td>   <td>563</td>   <td><img id='centrarImg' src='img/iconoLigaMaestro.png' /></td></tr>
						<tr class="alt"><td>Terranouta</td>   <td>264</td>   <td><img id='centrarImg' src='img/iconoLigaMaestro.png' /></td></tr>
						<tr><td>Carnage</td>   <td>946</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr class="alt"><td>Incre</td>   <td>391</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Gabba</td>   <td>403</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr class="alt"><td>Lvcian</td>   <td>580</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr><td>Drannki</td>   <td>168</td>   <td><img id='centrarImg' src='img/iconoLigaMaestro.png' /></td></tr>
						<tr class="alt"><td>Keepon</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaMaestro.png' /></td></tr>
						<tr><td>Anko</td>   <td>654</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Flemillas</td>   <td>106</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr><td>Thegame</td>   <td>851</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr class="alt"><td>Rammsfield</td>   <td>720</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr><td>Chuekikaa</td>   <td>975</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>NorthernHawk</td>   <td>281</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr><td>Atrevate</td>   <td>702</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Fr&ocirc;nght</td>   <td>197</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Matazanoz</td>   <td>176</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr class="alt"><td>Waxaman</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Mcjaitoroc</td>   <td>222</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr class="alt"><td>Rebrok</td>   <td>849</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr><td>Jandro</td>   <td>950</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>						
						<tr class="alt"><td>Arvediu</td>   <td>951</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Sordito</td>   <td>737</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Loopez</td>   <td>786</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr><td>Beirao</td>   <td>148</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr class="alt"><td>Neme</td>   <td>375</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Malakaraconk</td>   <td>206</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr class="alt"><td>MightyStiny</td>   <td>661</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr><td>Loridar</td>   <td>204</td>   <td><img id='centrarImg' src='img/iconoLigaBronce.png' /></td></tr>
						<tr class="alt"><td>Lunah</td>   <td>281</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Citry</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Killemall</td>   <td>678</td>   <td><img id='centrarImg' src='img/iconoLigaMaestro.png' /></td></tr>
						<tr><td>Binks</td>   <td>366</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Riku</td>   <td>474</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Kalopsia</td>   <td>966</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Cloudpg</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr><td>Webon</td>   <td>818</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Vecotan</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr><td>Valandil</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr class="alt"><td>Tony</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Sortjit</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr class="alt"><td>Selendis</td>   <td>615</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr><td>Primoh</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Tanor</td>   <td>749</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr><td>Myweapon</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Mbablack</td>   <td>558</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr><td>Hollow</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr class="alt"><td>Eglodo</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr><td>Drizzt</td>   <td>172</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr class="alt"><td>Bray</td>   <td>860</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr><td>Sammael</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr class="alt"><td>Lysander</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr><td>Hidemitsu</td>   <td>123</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr class="alt"><td>Banword</td>   <td>146</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr><td>Elessar</td>   <td>573</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr class="alt"><td>Sheikraz</td>   <td>407</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr><td>Melek</td>   <td>299</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr class="alt"><td>Txonan</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr><td>Chester</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>						
						<tr class="alt"><td>Liken</td>   <td>592</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>					
						<tr><td>Sung</td>   <td>356</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr class="alt"><td>Shousano</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Sivero</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr class="alt"><td>Msdoktor</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr><td>Malius</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr class="alt"><td>Pregy</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>					
						<tr><td>Dav</td>   <td>544</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>						
						<tr class="alt"><td>Denethor</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Diplodocus</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr class="alt"><td>Lokdok</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaBronce.png' /></td></tr>
						<tr><td>Draztil</td>   <td>276</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr class="alt"><td>Lidrac</td>   <td>&nbsp;</td>   <td><img id='centrarImg' src='img/iconoLigaBronce.png' /></td></tr>
						<tr><td>Rufo</td>   <td>792</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr class="alt"><td>Armless</td>   <td>499</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr><td>Kimbo</td>   <td>611</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>
						<tr class="alt"><td>BlueKiwi</td>   <td>852</td>   <td><img id='centrarImg' src='img/iconoLigaOro.png' /></td></tr>			
						<tr><td>FRAXMelon</td>   <td>979</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr class="alt"><td>Cloud</td>   <td>149</td>   <td><img id='centrarImg' src='img/iconoLigaPlatino.png' /></td></tr>
						<tr><td>Marketen</td>   <td>820</td>   <td><img id='centrarImg' src='img/iconoLigaPlata.png' /></td></tr>
						<tr class="alt"><td>Dufo</td>   <td>792</td>   <td><img id='centrarImg' src='img/iconoLigaDiamante.png' /></td></tr>
						<tr><td>Krog</td>   <td>115</td>   <td>Sin clasificar</td></tr>
						<tr class="alt"><td>Eidan</td>   <td>&nbsp;</td>   <td>Sin clasificar</td></tr>
						<tr><td>Kraus</td>   <td>&nbsp;</td>   <td>Sin clasificar</td></tr>
						<tr class="alt"><td>Dmz</td>   <td>&nbsp;</td>   <td>Sin clasificar</td></tr>
						<tr><td>Stormrage</td>   <td>&nbsp;</td>   <td>Sin clasificar</td></tr>
						<tr class="alt"><td>Azrael</td>   <td>&nbsp;</td>   <td>Sin clasificar</td></tr>
						<tr><td>Thor</td>   <td>3475</td>   <td>Sin clasificar</td></tr>
						<tr class="alt"><td>Favio</td>   <td>942</td>   <td>Sin clasificar</td></tr>
					</tbody>
				</table>
			</div>

			<p id='centrarTexto'> Si desea actualizar cualquier dato de los miembros del clan, por favor contacte con el administrador de la web (Silent#729) y hacerselo saber.</p>

<?php
/*}*/
?>
-->	
</div>

<?php
pieHTML();
?>