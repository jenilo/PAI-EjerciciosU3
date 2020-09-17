<?php
	if($_POST['anio']!=""){
		$aux = $_POST['anio'];
		echo json_encode(2020-$aux);
	}
	else{
		echo json_encode("Campo vacio");
	}
?>