<!DOCTYPE html>
	<html>
	<head>
		<meta charset ="UTF-8"/>
	<title>Exercicio 7    </title>
	<h1> exercicio 7 <h1>
	</head>
	<body>
	
<?php

//7.	Descrever a sua funcionalidade e fazer exemplos das seguintes funções do PHP:

/*a) array() 
b) trim()
c) substr()
d) strtolower()
e) strtoupper()
f) ucfirst()
g) ucwords()
h) explode()
i) var_dump()
j) implode()
k) htmlspecialchars()
l) join()
m) isset()
n) strlen()
o) is_float(), is_int(), is_array(), is_string(), is_bool(), is_numeric()
p) getdate()
q) empty()
r) strip_tags()
s) max(), min()
t) abs()
u) ceil(), floor(), round()
v) rand()
w) sqrt()
x) str_replace()
y) count()
z) htmlentities(
<?php
?>
<?php
	/*Um array no PHP é atualmente um mapa ordenado. Um mapa é um tipo que 
	relaciona valores para chaves. Este tipo é otimizado de várias maneiras,
	 então você pode usá-lo como um array real, ou uma lista (vetor), hashtable 
	 (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais.
	  Como você pode ter outro array PHP como um valor, você pode facilmente simular árvores.
A explicação dessas estruturas estão além do escopo desse manual, mas você pode encontrar exemplos 
para cada uma dessas estruturas a seguir. Para mais informações sobre estruturas, refira-se a literatura
 externa sobre esses tópicos.*/
 		# A
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);

?>
	<?php
	# B
//	trim — Retira espaço no ínicio e final de uma string
		$var = "                String com sobras                ";
		
		echo " $var </br>"
?>

<?php
	//substr — Return part of a string
	# C =
	$rest = substr("abcdef", -5);    // returns "a,b,c,d,f"
	echo "$rest </br>"

?>
	<?php
	//strtolower — Make a string lowercase



$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // Prints mary had a little lamb and she loved it so
?>





	</body>
	<html>
