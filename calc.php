<?php

	// calc.php	
	
	function multiply($x, $y) {
		
		$answer = $x * $y;
		
		return $answer;
		
	}
	
	function divide($x, $y) {
		
		$answer = $x / $y;
		
		return $answer;
		
	}
	
	
	$result = 0;
	
	$result = multiply(2, 5);
	var_dump($result);
	
	$result = divide(10, 3);
	var_dump($result);
	
	
	
	$multiply_result = $divide_result = 0;
	
	if(isset($_GET["operator"])){
		echo $_GET["operator"];
		
		//kontrollin millega operator v�rdub 
		// == "multiply" siis korrutan arvud > multiply(1,2)
		if($_GET["operator"] == "multiply"){
			
			//aadressirealt 2 arvu ja saatsin funktsiooni
			$multiply_result = multiply($_GET["number_one"], $_GET["number_two"]);
			
		}
		
	}
	
?>

<h1> Korruta </h1>
<form>
	<input type="hidden" name="operator" value="multiply">
	<input name="number_one" > X <input name="number_two" >
	= <?php echo $multiply_result;?>
	<input type="submit" >
</form>

<h1> Jaga </h1>
<form>
	<input type="hidden" name="operator" value="divide">
	<input name="number_one" > / <input name="number_two" >
	= <?=$divide_result;?>
	<input type="submit" >
</form>

