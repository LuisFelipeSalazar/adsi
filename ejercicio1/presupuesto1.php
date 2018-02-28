<html>	

<head>
	<title>Presupuesto</title>
</head>
<body>
	<h1>Presupuesto</h1>
	<?php echo $_POST ['monto'];
     $monto= $_POST ['monto'];
	
	
	
    $gine = ($monto*0.40);
	echo "<br> Presupuesto para ginecologia: $".$gine;
	$trauma = ($monto*0.30);
	echo "<br> Presupuesto para traumatologia: $".$trauma; 
	$pedia = ($monto*0.30);
	echo "<br> Presupuesto para pediatria: $".$pedia; 

	?>

	

	<br>

</body>



</html>