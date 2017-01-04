<?php
function writeMsg($tipe){
	if ($tipe=='save.sukses') {
		echo '<script>alert("DATO INGRESADO CORRECTAMENTE")</script> ';	
	} else 
	if ($tipe == 'save.gagal') {
		echo '<script>alert("DATO INCORRECTO")</script> ';
	}
	else 
	if ($tipe == 'update.sukses') {
		
		echo '<script>alert("DATO ACTUALIZADO")</script> ';
	}
	else 
	if ($tipe == 'update.gagal') {
		 echo '<script>alert("Dato no actualizado")</script> ';
	}

	  
}
?>