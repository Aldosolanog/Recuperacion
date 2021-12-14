<?php echo "la encontre"; ?>
	<table id="table_select">
	<tr>
		<td colspan="6"><p>
		Ficha de identificación
	</p></td>
	</tr>
	<tr>
	<td colspan="6"><p>
	Fecha de elaboracion:  </p><p id="p2">
	<?php echo  $extraido['fecha_elab']; ?>
	</p></td></tr><tr>
	<td colspan="4"><p>
	Nombre:  </p><p id="p2">
	<?php echo $extraido['nombre'];
	echo '</p></td><td><p>';
	echo 'Genero:  </p><p id="p2">';
	echo $extraido['genero'];
	echo '</td>';
	echo '<td><p>';
	echo 'Edad:  </p><p id="p2">';
	echo $extraido['edad'];
	echo '</p></td></tr><tr>';	
	echo '<td colspan="2"><p>';
	echo 'Fecha de nacimiento:  </p><p id="p2">';
	echo  $extraido['fecha_de_nacimiento'];
	echo '</p></td>';
	echo '<td colspan="2"><p>';
	echo 'ocupacion:  </p><p id="p2">';
	echo $extraido['ocupacion'];
	echo '</p></td>';
	echo '<td colspan="2"><p>';
	echo 'lateralidad:  </p><p id="p2">';
	echo $extraido['lateralidad'];
	echo '</td></tr><tr>';
		?>
	<td colspan="3"><p>
	Nacionalidad:  </p><p id="p2">
	<?php echo $extraido['nacionalidad']; ?>
	</p></td>
	<td colspan="2"><p>
	Religion:  </p><p id="p2">
	<?php echo $extraido['religion']; ?>
	</p></td>
	<td colspan="2"><p>
	Telefono:  </p><p id="p2">
	<?php echo $extraido['telefono']; ?>
	</p></td></tr><tr>
		
	<td colspan="3"><p>
	Domicilio:  </p><p id="p2">
	<?php echo $extraido['domicilio'];?>
	</p></td>
	<td colspan="3"><p>
	Telefono de emergencia:  </p><p id="p2">
	<?php echo $extraido['telefono_sos']; ?>
	</p></td></tr><tr>
	<td colspan="6"><p>
	persona a quien contactar en caso de emergencia:  </p><p id="p2">
	<?php echo $extraido['contacto'];?>
    </p></td></tr>
    </table>
    <br><br>
    

<br><br><br>
<div class="tabla_ant">
<table  border = "1px" id="tabla_antecedentes">
	<tr>
		<td colspan="6"><p>
		Antecedentes heredo-familiares
	</p></td>
	</tr>
	<tr>
	<td></td>
	<td><p>
	si	/   no
	</p></td>
	<td><p>
	parentesco
	</p></td>
	<td><p>
	V	/	M
	</p></td>
	</tr>
	<tr>
	<td>1- neoplacias</td>
	
	<td><p>
	<?php echo  $extraido2['neo']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['neoplacias']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmneo']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>

	<td>2- tuberculosis</td>
	
	<td><p>
	<?php echo  $extraido2['tub']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['tuberculosis']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmtub']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>3- Diabetes</td>
	
	<td><p>
	<?php echo  $extraido2['dia']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['diabetes']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmdia']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>4- Artritis</td>
	
	<td><p>
	<?php echo  $extraido2['art']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['artritis']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmart']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>5- Cardiopatias</td>
	
	<td><p>
	<?php echo  $extraido2['car']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['cardiopatias']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmcar']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>6- Enfermedades Neurobiologicas</td>
	
	<td><p>
	<?php echo  $extraido2['neu']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['Neurobiologicas']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmneu']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>7- Trastornos Siquiatricos</td>
	
	<td><p>
	<?php echo  $extraido2['tra']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['trastornos']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmtra']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>8- Enfermedades respiratorias</td>
	
	<td><p>
	<?php echo  $extraido2['res']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['respiratorias']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmres']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>9- Hepatopatias</td>
	
	<td><p>
	<?php echo  $extraido2['hep']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hepatopatias']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmhep']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>10- Alergias</td>
	
	<td><p>
	<?php echo  $extraido2['ale']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['alergias']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmale']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>11- Hipertension</td>
	
	<td><p>
	<?php echo  $extraido2['hip']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hipertension']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmhip']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>12- Enfermedades hematologicas</td>
	
	<td><p>
	<?php echo  $extraido2['hem']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hematologicas']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmhem']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>13- Enfermedades hendocrinologicas</td>
	
	<td><p>
	<?php echo  $extraido2['hen']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hendocrinologicas']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmhen']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>14- Enfermedades Geneticas</td>
	
	<td><p>
	<?php echo  $extraido2['gen']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['geneticas']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmgen']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	<td>Otros</td>
	
	<td><p>
	<?php echo  $extraido2['otr']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['otros']; ?>
	</p></td>
	<td><p>
	<?php echo  $extraido2['hmotr']; ?>
	</p></td>
	</tr>
	</tr>
	<tr>
	
	
</table>
</div>
<br><br>
<input type="submit" name= "cerrar" value="cerrar"/>