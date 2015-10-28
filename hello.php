<?php
				// vaikeväärtus, kui nime ei ole kaasas
	function hello($name = "tundmatu kasutaja"){
		
		echo "hello ".$name;
		
	}
	
	$user = "Romil";
	
	hello($user);
	
	echo "<br>";
	
	hello();
	

?>