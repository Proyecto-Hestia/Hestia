<?php 
if($result->num_rows>0){
	while($filas = $result->fetch_object()){
	?>
	<option value="<?php echo $filas->ID; ?>"><?php echo $filas->DES_ROL; ?></option>
	<?php
	}
}
else{?> 

	<option disabled="disabled" selected="selected" value="0">No se han encontrado usuarios a mostrar</option>

<?php
}

 ?>

<!--<select id="frmp_rol" class="browser-default custom-select">
<?php 
//foreach($result as $filas):?>
<option value="<?php //echo $filas['ID']; ?>"><?php //echo $filas['ID']," ",$filas['DES_ROL']; ?></option>
<?php //endforeach ?>
</select>

<?php
//foreach($result2 as $filas):?>
<option value="<?php //echo $filas['ID']; ?>"><?php //echo $filas['DES_ROL']; ?></option>
<?php //endforeach ?>
!--!-->