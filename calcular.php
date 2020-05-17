<?php
	//Accion del boton calcular
	if(isset($_POST['calcular'])){
		$dato =$_POST['dato'];
		//transformo el valor a numero
		$numero = (int)$dato;
		//Si $numero = 0, entonces el dato es un string
		if (0 === $numero){
			//separamos el string que tienen _ y luego los unimos sin el caracter
			$espaciado= explode("_",$dato);
			$espaciado= implode("",$espaciado);
			echo"<br> Valor de Dato  sin _: $espaciado ";
			//separamos el string que tienen espacion y luego los unimos sin el caracter
			$espaciado= explode(" ",$espaciado);
			$espaciado= implode("",$espaciado);
			echo"<br> Valor de Dato  sin espacios: $espaciado ";

			//separamos el string que tiene -
			$espaciado= explode("-",$espaciado);
			//buscamos y añadimos mayuscula a la palabra que esta luego de -
			$j=count($espaciado);
			for ($i=1; $i<$j; $i++){
				$espaciado[$i]= ucfirst($espaciado[$i]);
			}
			//lo volvmos a convertir en un string
			$espaciado= implode("",$espaciado);
			echo"<br> Valor de Dato  sin - y mayuscula: $espaciado";
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
					
			echo"<br> Esta fue el resultado 1 : $espaciado";
			echo"<br> Valor de Dato  en reversa $reversa";
		}// fin de caso si es cadena
		// si no, es un numero y buscamos los multiplos de 3 y de 5
		for ($i =1; $i<$numero ; $i++){
			if ($i%3==0){
				$mult[$i] = $i;
				$mult[0] = $mult[0] + $i;

				echo"<br> $mult[$i] <br>";
			}
			if($i%5==0){
				$mult[$i] = $i;
				echo"<br> $mult[$i] <br>";
				$mult[0] = $mult[0] + $i;
			}

		}

		echo"<br> La sumatoria y Los multiplos del numero son $mult[0]";

	}//fin accion boton calcular	
?>
