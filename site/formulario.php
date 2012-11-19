<?php

// $_POST = variavel 

 // var_dump ($_POST);
//se for enviado um post e a  variaavel não é vazia 
//então mostrar os dados


if(isset ($_POST["pagina"]) && $_POST["pagina"] == "contact") {
echo $_POST["nome"]."</br>";
echo $_POST["email"]."<br>";
echo $_POST["mensagem"];
} else{
	header("location:contact.php");
}

//senão 
//redirecionar para a pagina de contato

