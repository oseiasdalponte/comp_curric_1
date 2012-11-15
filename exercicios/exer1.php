

<!doctype.<html>

<html>
<head>
	<meta charset="utf-8"> 
	<title>Exercicio 1 </title>
	<h1>exercicio 1 </h1>


</head>

	<body>
		<?php
		$title = "Site.com";
			$subtitle ="este é um site em PHP";
				
	
		echo $title ."   ".$subtitle."<br/>";
	?>

	<!--div#rodape-->
	<div id ="rodape">
		&copy; copyryght <?php echo $title." - ".date ("Y");?>
		</div>
		</body>
	</html>
	
	
<!-- /*
1.	Criar um arquivo PHP, e fazer o seguinte:
a) Criar a estrutura HTML
b) no Inicio do documento, criar a variável $title = “Site.com” e $subtitle = “este é um site em PHP”;
c) na tag <title> mostrar o seguinte texto concatenado: “Site.com – este é um site em PHP”;
d) dentro da DIV #rodape adicionar o seguinte texto: “® copyright Site.com – 2012”, sendo que o ® deve utilizar 
o código &reg; (HTML Entities) no html e o ano, deve ser mostrado o ano atual através do PHP com a função date.
*/ -->




