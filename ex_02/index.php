<?php
	$variable=
htmlspecialchars($_GET["name"]);
	if ($variable == NULL){
		echo "Hello platypus";
	}
	else{
		echo "Hello" .$variable;
	}
?>
