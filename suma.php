<?php
	if(is_numeric($_POST['numA']) && is_numeric($_POST['numB'])){
		echo json_encode($_POST['numA'] + $_POST['numB']);
	}
	else{
		echo json_encode("Error");
	}

?>