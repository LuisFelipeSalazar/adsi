<html>	

<head>
	<title>Nomina</title>
</head>
<body>
	<h1>Nomina</h1>
	<?php echo $_POST ['nombre'];

	$autosv= $_POST ['autosv'];
	$autost= $_POST ['autost'];
	
	$comision=$autosv*50000;
    $totalv=$autost*0.05;
	$salario=(450000+$comision+$totalv);
	?>

	su valor a pagar es: <?php echo "$".$salario?>

	<br>

</body>



</html>