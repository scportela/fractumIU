<?php
	$userType="interno";
	require_once("../structure/header.php");
?>

<h1 id='headerInterno'><a>- MAQUINA: $nombreMaquina -</a></h1> <!--SECCIÓN-->
<!--INICIO TABLA-->
<br>
<form name='consultarMaquina' id='consultarMaquina' onsubmit='' action='' method='post'>
	<div style='height:350px;width:auto;overflow-y: scroll;'>
		<table class='default'>
			<tr>
				<td>ID Maquina:</td>
				<td><input type='text' disabled value='$idMaquina' / name='idMaquina'></td>
				<td>Numero de serie:</td>
				<td><input type='text' disabled value='$numSerie' / name='numSerie'></td>
			</tr>
			<tr>
				<td colspan='4'>Descripcion:</td>
			</tr>
			<tr>	
		        <td colspan='4'>
					<textarea style="resize:none" rows="4" name='descripcionApertura' disabled>
					BREVE DESCRIPCION DE LA MAQUINA
					</textarea>
				</td>
		    </tr>
			<tr>
				<td>Documentacion:</td>
		        <td><img src="../../Recursos/images/PDF.png"></td>
		        <td colspan="2"><a href='altaIncidencia.html'><input type='button' value='Alta Incidencia'></a></td>
			</tr>
		</table>
 	</div>
	<br>
</form>
<h1 id="headerInterno"><a><i>INCIDENCIAS RELATIVAS</i></a></h1>
<form method="POST" action="">
	<table class="default">
		<tr> 
			<td width="20%">ID001</td> 
			<td width="20%"><a href="consultarMaquina.html">Maquina1</a></td> 
			<td width="20%">Usuario3</td> 
			<td width="20%">Abierta</td>
			<td width="15%"><a href="consultarTrabajoIncidencia.html">IT001</a></td>
			<td width="5%"><a href="consultarIncidencia.html">Consultar</a></td>
		</tr>
		<tr> 
			<td width="20%">ID003</td> 
			<td width="20%"><a href="consultarMaquina.html">Maquina1</a></td>
			<td width="20%">Usuario1</td> 
			<td width="20%">Pendiente de cierre</td>
			<td width="15%"><a href="consultarTrabajoIncidencia.html">IT003</a></td>
			<td width="5%"><a href="consultarIncidencia.html">Consultar</a></td>
		</tr>
		<tr> 
			<td width="20%">ID004</td> 
			<td width="20%"><a href="consultarMaquina.html">Maquina1</a></td> 
			<td width="20%">Usuario1</td> 
			<td width="20%">En curso</td>
			<td width="15%"><a href="consultarTrabajoIncidencia.html">IT003</a></td>
			<td width="5%"><a href="consultarIncidencia.html">Consultar</a></td>
		</tr>
	</table>
</form>		

<?php
	require_once("../structure/footer.php");
?>