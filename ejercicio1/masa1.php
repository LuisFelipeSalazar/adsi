<html>	

<head>
	<title>calculo masa corporal</title>
</head>
<body>
	<h1>calculo masa corporal</h1>
	<?php echo $_POST ['nombre'];

	$peso= $_POST ['peso'];
	$altura= $_POST ['altura'];
	
	
    $imc=($peso/($altura*$altura));
	
	echo " su IMC es: ".$imc; 

	switch($imc){

	      case $imc < 18.5: 
	           echo " Por debajo del peso";
	           break;
	      case ($imc > 18.5 && $imc < 24.9):
	           echo " Saludable";
	           break;  
	      case ($imc > 25 && $imc < 29.9):
	           echo " Sobrepeso";
	           break; 
	      case ($imc > 30 && $imc < 39.9):
	           echo " Obeso";
	           break;  
	      case ($imc > 40 ):
	           echo " Obesidad morbida";
	           break;            
            






}




	?>

	

	<br>

</body>



</html>