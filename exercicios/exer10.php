<?php
  
  //$_POST = variavel global
    
  
    
  //se for enviado um post e a variavel não é vazia mostrar os seguintes dados:
    
  if (isset($_POST["pagina"]) && $_POST["pagina"] == "contato") {
   
  echo $_POST["nome"]."</br>";
   
  echo $_POST["email"]."</br>";
     
  echo $_POST["senha"]."</br>";
    
  echo md5($_POST["senha"])."</br>";
    
  echo $_POST["sex"]."</br>";
  
  echo $_POST["religião"]."</br>";

    
  echo $_POST["mensagem"]."</br>";
    

   
  }
   
  //senão redirecionar para a pagina de contato
   
 else{
  
    header("Location: exer9.php");
   
  }
  

 
?>
 