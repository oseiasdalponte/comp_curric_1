   
<!DOCTYPE HTML>
      
<html lang="en-US">
     
<head>
      
  <meta charset="UTF-8">
      
  <title>Formulario HTML</title>
      
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
      
</head>
      
<body>

<!--
 
 Criar um formulário HTML que tenha os campos abaixo e depois de submeter o formulário através de POST,
  
 utilizar o PHP para mostrar todos os dados submetidos:
         
a) hidden
   
b) text
         
c) password
         
d) textarea
         
e) checkbox
         
f) radio
     
g) select
      
+-->

      
<div class="container">
     
  
<form action="formulario.php" method="post">
      
    <fieldset>
      
      <legend align="center">Formulário de Contato</legend>
      

      
      <input type="hidden" name="pagina" value="contato">
     
        
      <label for="idNome">Nome</label>
     
      <input type="text" name="nome" required maxlength="30" autofocus id="idNome">
      

     
      <label for="idEmail">E-mail</label>
      
      <input type="email" name="email" required maxlength="60" autofocus id="idEmail">
      

      
      <label for="idSenha">Senha</label>
       

      <input type="password" name="senha" id="idSenha">
       

      
      <legend>digite  o seu sexo?</legend>
       
      <input type="checkbox" name="sex" value="Masculino" />Masculino<br />
       
      <input type="checkbox" name="sex" value="Femenino" />Femenino<br />
       
        
      <legend>Digite sua religião </legend>
       
            <input type="radio" name="religião" value="cristão" />cristão<br />
       
            <input type="radio" name="religião" value="ateu" />ateu<br />
       
            <input type="radio" name="religião" value="nenhum" />nenhum<br />
     
       
      
           
    
      </select>
        <legend>Deixe a sua mensagem!</legend>
       
      <label for="idMensagem">Mensagem</label>
    
      <textarea name="mensagem" cols="40" rows="4" id="idMensagem"></textarea>
      
      </br>
      
      <button class="btn btn-primary">Enviar Informações</button>
     
    </fieldset>  
      
  </form>
       

      


</div>
  
</body>
      
</html>