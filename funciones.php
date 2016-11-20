<?php 

function generarButacas() {
	
	if(empty($_POST["butacasOculto"])){
		for($i = 0; $i < 25; $i++){
			$butacas[] = '<input type="submit" name="' . $i . '" style="background-color:' . generarColor() . ';" value=""/>'; 
		}
		
		return $butacas;
	}else{
		$arrayDes = unserialize(base64_decode($_POST["butacasOculto"]));
		return cambiarColor($arrayDes);;
	}
}

function generarColor(){
	$aleatorio = rand(0,1);
	
	if($aleatorio == 0){
		return "red";
	}else{
			return "";
		}
}

function cambiarColor($arrayDes){
	
	$butacas = $arrayDes;
		
	for($i = 0; $i < 25; $i++){
		if(isset($_POST[$i])){
			
			if($butacas[$i] == '<input type="submit" name="' . $i . '" style="background-color:red;" value=""/>'){
				$butacas[$i] = '<input type="submit" name="' . $i . '" " value=""/>';
			}else{
				$butacas[$i] = '<input type="submit" name="' . $i . '" style="background-color:red;" value=""/>';
				}
		}
	}
	
	return $butacas;
	
	
}

?>