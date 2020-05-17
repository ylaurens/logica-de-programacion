 
<?php

$dato =$_POST['dato'];
$result= generar($dato);
echo "El resultado es $result";

function generar($dato){
	if (isset($_POST['guion'])){
		//separamos el string que tienen _ y luego los unimos sin el caracter
		$espaciado= explode("_",$dato);
		$espaciado= implode("",$espaciado);
		//echo"<br> Valor de Dato  sin _: $espaciado ";
		//separamos el string que tienen espacion y luego los unimos sin el caracter
		$espaciado= explode(" ",$espaciado);
		$espaciado= implode("",$espaciado);
		//echo"<br> Valor de Dato  sin espacios: $espaciado ";

		//separamos el string que tiene -
		$espaciado= explode("-",$espaciado);
		//buscamos y añadimos mayuscula a la palabra que esta luego de -
		$j=count($espaciado);
		for ($i=1; $i<$j; $i++){
			$espaciado[$i]= ucfirst($espaciado[$i]);
		}
		//lo volvemos a convertir en un string
		$espaciado= implode("",$espaciado);
		//echo"<br> Valor de Dato  sin - y mayuscula: $espaciado";
		
	 	return ($espaciado);
	}//fin de if quitar caracteres	

	if(isset($_POST['reversa'])){
		echo "entro en la opcion reversa<br>";
		//separo cada palabra
		$reversa= explode(" ",$dato);
		$j=count($reversa);
		for ($i=0; $i<$j; $i++){
			//$espaciado[$i]= ucfirst($espaciado[$i]);
			if( 5<=(strlen($reversa[$i]))){
				$reversa[$i]= strrev($reversa[$i]);
			}
		}
		$reversa= implode(" ",$reversa);
		return ($reversa);
	}// fin de caso si es cadena opcion reversa

	if(isset($_POST['multiplo'])){
		//se convierte el string en numero
		$numero = (int)$dato;
		$mult = array();
		$sum = 0;
		for ($i=1; $i<$numero ; $i++){
			//si es multiplo de 3
			if ($i%3==0){
				$sum = $sum + $i;
				$mult[$i] = $i;
			}
			//si es multiplo de 5
			if($i%5==0){
				$sum = $sum + $i;
				$mult[$i] = $i;
			}
		}
		$mult[$i+1]=$sum; 
		$mult= implode(" ",$mult);
		return ($mult);
	}	
}//Fin de la funcion generar
?>
