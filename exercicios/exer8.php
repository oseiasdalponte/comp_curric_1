<!DOCTYPE html>
	<html>
	<head>
		<meta charset ="UTF-8"/>
	<title> Exercicio 8   </title>
	<h1>Exercicio 8</h1>
	</head>
	<body>
<?php
/*8.	Utilize o PHP para efetuar as seguintes conversões:
a) de string para integer
b) de integer para string
c) de string para array
d) de array para string
e) de integer para float
f) de float para string em formato de dinheiro: R$ 23,45*/

?>
	<?php
	echo "<h2>LETRA A</h2>";			


$string = '011';
$inteiro = (int)$string;
echo $inteiro;
?>
<?php
	echo "<h2>LETRA B</h2>";

	$integer = 11;
	$string =(String) "onze";
	echo $string;

?>
<?php
	echo "<h2>LETRA C</h2>";

	
$string = "joão, maria, josé, pedro";
$array  = explode(',',$string);
print_r($array);
?>
<?php
		echo "<h2>LETRA D</h2>";

$array[] = " 0";
$array[] = " 1";
$array[] = " 2 ";
$array[] ="3";
print_r(implode(':', $array))


?>
<?php
	echo "<h2>LETRA E</h2>";
	
		$int = (float) 11;

			echo var_dump($int);

?>

?>
<?php
	echo "<h2>LETRA F</h2>";
		$float = 11.09;

			echo "R$".number_format($float, 2, ',', '.');

?>

</body>
	<html>
