<?php
	requiere_once("../Structure/bodyHeader.php");
	requiere_once("../Structure/bodyFooter.php");
?>

<h1 id="headerJefe"><a><i>M&Aacute;QUINA $#IDm&aacute;quina</i></a></h1>
<form method="POST" action="consultarMaquina.html" enctype="multipart/form-data">
	<table class="default">
		<tr> 
			<td width="25%">#ID M&aacute;quina: </td> 
			<td width="25%"><input type="text" class="text" disabled name="mID" value=""/></td> 
			<td width="25%">#N&uacute;m. serie: </td> 
			<td width="25%"> <input type="text" class="text" disabled name="mNumSerie" value=""/></td>
		</tr>
		<tr> 
			<td width="25%">Nombre: </td> 
			<td width="25%"><input type="text" class="text" disabled name="mNombre" value=""/></td> 
			<td width="25%"></td> 
			<td width="25%"></td>
		</tr>
		<tr>
			<td width="25%"><br>Descripci&oacute;n:</td>
			<td colspan='3' width="75%">
				<textarea style="resize:none; text-align:left;" style="t" rows="4" name='' disabled>
				Descripci&oacute;n de la utilidad de la m&aacute;quina.
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Documentacion:</td>
        	<td><img src="../../Recursos/images/PDF.png"></td>
        	<td colspan="2"><input type="file" disabled name="m" value="Subir"></td>
		</tr>
		<tr>
			<td colspan="4"><input type="submit" name="m" value="Modificar"></td>
		</tr> 
	</table>
</form>