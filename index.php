<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
	input{
		width: 100px;
		height: 100px;
	}
</style>
</head>
<body>
<?php include "funciones.php";
		$arrayButacas = array();
		$arrayButacas = generarButacas();	
		$arraySerializado = base64_encode(serialize($arrayButacas));
	?>
		

	<form action="" method="post"  enctype="multipart/form-data">
		
		<?php 
			foreach($arrayButacas as $indice => $butaca){
				if($indice % 5 == 0){
					echo "</br>";
				}
				echo $butaca;
			}
		?>
		
		<input type="hidden" name="butacasOculto" value= "<?php echo $arraySerializado;?>" />
		
	</form>

	
</body>
</html>