<!DOCTYPE html>
	<html>
	<head>
		<meta charset ="UTF-8"/>
	<title> Exer4.php    </title>
	</head>
	<body>

<?php

/*4.	Utilizando o for() e while():
a) Mostrar 25x a frase: "Lactobacilos vivos também possuem sentimentos";
b) Escrever um algoritmo que receba qualquer valor e mostre os valores de 0 até o número digitado. Ex: $var = 3; "0 1 2 3";
c) capturar dois valores em variáveis e mostrar os números entre eles. Ex: 5 e 10, imprimir: "6 7 8 9";
d) Escrever um algoritmo que multiplique os números utilizando apenas o operador +, ex: (3 * 5) = 5 + 5 + 5
*/

	
 		# a)

	$mensagem = "Lactobacilos vivos também possuem sentimentos";

	

		for ($i=1;$i<=25;$i++) {
  	  			echo $mensagem."<br/>";  //para pular linha use o comando do "<br/>""

		} 

		?>



		

<?php
$var=4;
	# B) 
	for ($i=0; $i <$var ; $i++) { 
	 	echo $i = $var."<br/>"; 
	 } 
?>

<?php

	# C/
	$num =10;
	for ($i=5; $i<$num; $i++) { 
	echo $i =$num."<br/>";
	}

	?>
		</body>
	<html>
