<html>	

<head>
	<title>calculo definitiva</title>
</head>
<body>
	<h1>calculo nota definitiva</h1>
	<?php echo $_POST ['nombre'];

	$nota1= $_POST ['nota1'];
	$nota2= $_POST ['nota2'];
	$nota3= $_POST ['nota3'];
	$nota4= $_POST ['nota4'];
	$nota5= $_POST ['nota5'];
	

	$def =($nota1+$nota2+$nota3)/3;
	$def1 =$def*0.35;
	$def2 =$nota4*0.35;
	$def3 =$nota5*0.30;

	$final =($def3+$def1+$def2);

	echo " su definitiva es: ".$final;


    if ($final>= 3.0){

    	echo " Aprobo la materia";
    } else {
    	echo " No aprobaste la materia";
    	    }

	?>

	

	<br>

</body>



</html>