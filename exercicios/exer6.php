<?php

	/* Fazer uma função chamada imprime() que faça o seguinte:
	a) receba um parâmetro
	b) retorne uma string que deverá estar dentro da tag <p>. Ex: “<p> $parametro</p>”
*/

?>

<!doctype html>

<html>
	<head>
		<meta charset = "UTF-8"/>

		<title>Exercicio 6</title>
			<h1>Exercicio 6</h1>
		</head>
	<body>


		<?php

		function imprime ($parâmetro){
			echo "<p>$parâmetro </p>";
		}

		imprime ("oseias Dalponte");

?>
	</body>
</html>			




