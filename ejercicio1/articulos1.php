<html>	

<head>
	<title>Descuento de articulos</title>
</head>
<body>
	<h1>Descuento de articulos</h1>
	<?php echo $_POST ['nombre'];

	$precio= $_POST ['precio'];
	$clave= $_POST ['clave'];

	if ($clave >= 1 && $clave <= 2){
	
		switch($clave){

		      case $clave == 1: 
		           $des1 = $precio*0.10;
		           $des = $precio-$des1;

		           echo " tiene el valor con descuento de $".$des;
		           break;
		      case $clave == 2: 
		           $des1 = $precio*0.20;
		           $des = $precio-$des1;

		           echo " tiene el valor con descuento de $".$des;
		           break;
		                
	            }
    } else {
           echo " Clave invalida";
      }        


	?>

	

	<br>

</body>



</html>