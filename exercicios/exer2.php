
<?php
 
/*2.	Depois da tag <h1> criar uma div #conteudo e nela adicionar o seguinte código PHP: 
 $nome1 = “Fulano”;
 $nome2 = “Fulana”;
 $nome3 = “Ciclano”;
 $sexo1 = “M”;
 $sexo2 = “F”;
 $sexo3 = “M”;
 
a) Concatenar os nomes e imprimir numa tag <p>, e mostrar qual sexo predominante na equipe. Exemplo: 

Se o $sexo1 for igual a M, e $sexo2 for igual a M e $sexo3 for igual a M então mostrar uma mensagem dizendo que a equipe é formada por meninos;

Se o $sexo1 for igual a F, e $sexo2 for igual a F e $sexo3 for igual a F então mostrar uma mensagem dizendo que a equipe é formada por meninas;

Senão mostrar uma mensagem dizendo que a equipe é mista;*/


	

	#conteudo;


		$nome1 = 'Oseias';
 		$nome2 = 'Mari';
 		$nome3 = 'Matheus';
 		$sexo1 = 'M';
 		$sexo2 = 'F';
 		$sexo3 = 'M';


 		$mensagem ='  ';


 		

 		if($sexo1 == "M" && $sexo2 == "M" && $sexo3 == "M"){

 			$mensagem = ' Equipe é formada por meninos'; 
			}
 			elseif($sexo1 == "F" && $sexo2 == "F" && $sexo3 == "F"){
 				$mensagem ='Equipe é formada por meninas';
 			}
 		else{
 			$mensagem = 'A equipe eh mista';
 		} 
 		
 			
 		

 			echo "<p> '$sexo1' .  $nome1    	'$sexo2' . $nome2    '$sexo3'  . $nome3   <br> </p>";
 			echo "<p>" .$mensagem ."</p>";

 			





 ?>