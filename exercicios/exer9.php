
	<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP</title>
	</head>
	<body>

        <?php
 /*       9.  Criar um formulário HTML que tenha os campos abaixo e depois de submeter o formulário através de POST,
  utilizar o PHP para mostrar todos os dados submetidos:
a) hidden
b) text
c) password
d) textarea
e) checkbox
f) radio
g) select  */
?>
		<form action="formulario.php" method="POST">
            <fieldset>
                <legend>Formulário contato</legend>

                <input type="hidden" name="pagina" value="contato">
                  
                <label for="idNome">Nome:</label>
                <br>
                <input type="text" name="nome" id="idNome">

                <br>

                <label for="idPassword">Senha:</label>
                <br>

                <input type="password" name="password" id="idPassword">
                <br>
                <input type="checkbox" name="password" id="idPassword">
                <label for="idPassword">Lembrar-me</label>

                <br>

                <label for="idSexo">Sexo:</label>
                <br>
                <input type="radio" name="sexo" id="idSexo">
                <label for="idSexo">Feminino</label>
                <input type="radio" name="sexo1" id="idSexo1">
                <label for="idSexo1">Masculino</label>

                <br>

                <label for="idIdade">Idade:</label>
                <br>
                <select>
                	<option name="idade"><label for="idIdade">Sua idade é:</label></option>
                	<option name="idade"><label for="idIdade">Menor de 18</label></option>
                	<option name="idade"><label for="idIdade">Maior de 18</label></option>
                	<option name="idade"><label for="idIdade">Maior de 30</label></option>
            	</select>

                <br>

                <label for="idEmail">E-mail:</label>
                <br>
                <input type="email" name="email" id="idEmail">

                <br>

                <label for="idMensagem">Mensagem:</label>
                <br>
                <textarea name="mensagem" id="idMensagem" rows="3"></textarea>

                <br>

                <button class="btn btn-primary">Enviar informações</button>
            </fieldset>
        </form>
	</body>
</html>
?>





	</body>
	<html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP</title>
	</head>
	<body>
		<form action="formulario.php" method="POST">
            <fieldset>
                <legend>Formulário contato</legend>

                <input type="hidden" name="pagina" value="contato">
                  
                <label for="idNome">Nome:</label>
                <br>
                <input type="text" name="nome" id="idNome">

                <br>

                <label for="idPassword">Senha:</label>
                <br>

                <input type="password" name="password" id="idPassword">
                <br>
                <input type="checkbox" name="password" id="idPassword">
                <label for="idPassword">Lembrar-me</label>

                <br>

                <label for="idSexo">Sexo:</label>
                <br>
                <input type="radio" name="sexo" id="idSexo">
                <label for="idSexo">Feminino</label>
                <input type="radio" name="sexo1" id="idSexo1">
                <label for="idSexo1">Masculino</label>

                <br>

                <label for="idIdade">Idade:</label>
                <br>
                <select>
                	<option name="idade"><label for="idIdade">Sua idade é:</label></option>
                	<option name="idade"><label for="idIdade">Menor de 18</label></option>
                	<option name="idade"><label for="idIdade">Maior de 18</label></option>
                	<option name="idade"><label for="idIdade">Maior de 30</label></option>
            	</select>

                <br>

                <label for="idEmail">E-mail:</label>
                <br>
                <input type="email" name="email" id="idEmail">

                <br>

                <label for="idMensagem">Mensagem:</label>
                <br>
                <textarea name="mensagem" id="idMensagem" rows="3"></textarea>

                <br>

                <button class="btn btn-primary">Enviar informações</button>
            </fieldset>
        </form>
	</body>
</html>