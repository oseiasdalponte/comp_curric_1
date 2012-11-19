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
 
	// Lista separada por vírgula
	$listadefrutas = "maçãs, peras, bananas, laranjas, limões";
	 
	// Cria um array seprando os itens da lista (tendo a vírgula como delimitador)
	$arrFrutas = explode(",", $listadefrutas);
	 
	 	echo "<p> a =Array</p>";
	   // Escreve os valores do array
	   echo "<p>Lista de frutas:</p>";
	 
	   echo "<ul>";
	   echo "<li>" . $arrFrutas[0] . "</li>";
	   echo "<li>" . $arrFrutas[1] . "</li>";
	   echo "<li>" . $arrFrutas[2] . "</li>";
	   echo "<li>" . $arrFrutas[3] . "</li>";
	   echo "<li>" . $arrFrutas[4] . "</li>";
	   echo "</ul>";

	?>

	</body>
	</html>





?>
	<?php
	# B
	echo "<p>b =trim</p>";
//	trim — Retira espaço no ínicio e final de uma string
		
		$var = "asa   ";
			echo trim($var);
?>
		
		

<?php
	//substr — Return part of a string
	# C =
	echo "<p> c = substr</p>";
	$rest = substr("abcdef", -3);    // returns ",d,e,f"
	echo "$rest </br>"

?>
	<?php
	//strtolower — Make a string lowercase
		echo "<p> d = strtolower</p>";
$str = "OLA ESTE COMANDO TRANSFORMA MAIUSCULAS EM MINUSCULAS";
$str = strtolower($str);
echo $str; // Prints mary had a little lamb and she loved it so
?>
<?php

	//strtoupper — Make a string uppercase
	echo "<p> e = strtoupper()</p>";
	$str = "este comando converte minusculas  em maiusculas";
	$str = strtoupper($str);
	echo $str; // 
?>
	<?php
	//ucfirst — Faz maiúsculas de uma string primeiro caracterer
	echo "<p> f =ucfirst ()</p>";

	$foo = 'hello world!';
	$foo = ucfirst($foo);  
	echo $foo;
	?>
	<?php
	echo 	"<p> g = ucwords()</p>";
	// ucwords — - maiúsculas o primeiro caractere de cada palavra em uma string

		$foo = 'hello world!';
		$foo = ucwords($foo);             // Hello World!
		echo $foo;
		?>
		<?php
		echo 	"<p> h= ()</p>";
		// explode —Divide uma string por string
$pizza  = "pedaço1, pedaço2, pedaço3 ,pedaço4 ,pedaço5, pedaço6";
$pedaço = explode(" ", $pizza);
echo $pedaço[0]; // 
echo $pedaço[1];
echo $pedaço[2];
echo $pedaço[3];
echo $pedaço[4];
		
?>
<?php
	echo 	"<p> i=var_dump ()</p>";
	//var_dump()Despeja informações sobre uma variável

$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>
	<p>Letra J</p>
		<p>implode — Junta elementos de uma matriz em uma string</p>
		<?php
			$exemp = array('nome', 'sobrenome', 'e-mail');
			$result = implode(",", $exemp);

			echo $result;
		?>
		<p3>Letra K</p3>
		<p>htmlspecialchars — Converte caracteres especiais para a realidade HTML</p>
		<?php
			$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);

			echo $new;
		?>
		<p3>Letra L</p3>
		<p>join — Sinônimo de implode()</p>
		<?php
			function joinr($s1, $s2, $s3) {
        		if (!is_array($s1)) return joinr(array($s1), $s2, $s3);
        			$res = array();
        		if (is_array($s2)&&sizeof($s2)&&is_array(current($s1))) {
            		foreach($s1 as $val)
                	$res[] = joinr($s1, $val, $s3+1);
        		}
        		elseif(is_array($s2)) {
            		$res = $s2;
        		}
        		else $res[] = $s2;
        		return join(isset($join[$s3])?$join[$s3]:"", $res);
    		}

			echo joinr(1, 2, 3);
		?>
		<p3>Letra M</p3>
		<p>isset — Informa se a variável foi iniciada</p>
		<?php
			$test = "teste";
			$test1 = 1;

			if (isset($test)) {
			    echo "Essa variável existe.<br/>";
			}

			if (isset($test1)) {
			    echo "Essa variável existe.";
			}
		?>
		<p3>Letra N</p3>
		<p>strlen — Retorna o tamanho de uma string</p>
		<?php
			$strin2 = 'Oseias Dalponte';
			echo strlen($strin2);
		?>
		<p3>Letra O</p3>
		<p>is_float — Informa se a variável é do tipo float</p>
		<?php
			$var3 = 15;
			if(is_float($var3)) {
				echo "É float.";
			}else {
				echo "Não é float.";
			}
		?>
		<p>is_int — Informa se a variável é do tipo inteiro</p>
		<?php
			$var4 = 8;
			if(is_int($var4)) {
				echo "É do  tipo int.";
			}else {
				echo "Não é do  tipo int.";
			}
		?>
		<p>is_array — Verifica se a variável é um array</p>
		<?php
			$yes = array('AAA', 'BBB', 'CCC');

			echo is_array($yes)  ? 'É uma array' : 'Não é uma array';
			echo "\n";
		?>
		<p>is_string — Informa se a variável é do tipo string</p>
		<?php
			$var5 = 4;
			if(is_string($var5)) {
				echo "É do  tipo string.";
			}else {
				echo "Não é do  tipo string.";
			}
		?>
		<p>is_bool — Verifica se a variável é um boleano</p>
		<?php
			$var6 = 4;
			if(is_bool($var6)) {
				echo "É do  tipo boleano.";
			}else {
				echo "Não é do  tipo boleano.";
			}
		?>
		<p>is_numeric — Informa se a variável é um número ou uma string numérica</p>
		<?php
			$var6 = 4;
			function is_numeric1($var6) {
        		if (!is_numeric($var6)) return false;
    			return true;
			}

			if (is_numeric1($var6) == true) {
				echo "É do tipo numerico";
			} else {
				echo "Não é do tipo numerico";
			}
		?>
		<p>Letra P</p>
		<p>getdate — Consegue informações data/hora</p>
		<?php
			$data = getdate();
			print_r($data);
		?>
		<p>Letra Q</p>
		<p>empty — Informa se a variável é vazia</p>
		<?php
			$var7 = 7;
			if (empty($var7)) {
				echo "A variável é vazia.";
			} else {
				echo "A variável não está vazia.";
			}
		?>
		<p>Letra R<p>
		<p>strip_tags — Retira as tags HTML e PHP de uma string</p>
		<?php
			$text = '<p>Tag </p><br/> <p> Abaixo tag </p>';
			echo strip_tags($text);
		?>
		<p>Letra S</p>
		<p>max — Localiza o maior valor</p>
		<?php
			echo max(1, 10, 15, 6, 7); 
		?>
		<p>min — Encontra o menor valor</p>
		<?php
			echo min(3, 3, 1, 6, 7);
		?>
		<p>Letra T</p>
		<p>abs — Valor absoluto</p>
		<?php
			$abs = abs(-4.2);

			echo $abs;
		?>
		<p>Letra U</p>
		<p>ceil — Arredonda frações para cima</p>
		<?php
			$var8 = 7.1;
			echo ceil($var8);
		?>
		<p>floor — Arredonda frações para baixo</p>
		<?php
			$var8 = 9.9;
			echo floor($var8);
		?>
		<p>round — Arredonda um número</p>
		<?php
			$var8 = 9.9;
			$var9 = 9.1;
			echo round($var8)."<br/>";			
			echo round($var9);
		?>
		<p>Letra V</p>
		<p>rand — Gera um inteiro aleatório</p>
		<?php
			echo rand()."<br/>";
			echo rand();
		?>
		<p>Letra W</p>
		<p>sqrt — Raiz quadrada</p>
		<?php
			$num = 9;
			$num1 = 23;
			echo sqrt($num)."<br/>";
			echo sqrt($num1);
		?>
		<p>Letra X</p>
		<p>str_replace — Substitui todas as ocorrências da string de procura com a string de substituição</p>
		<?php
			$s1 = array("pizza", "sorvete", "vegetais", "suco");
			$s2 = str_replace($s1, "", "Hello World of PHP");

			echo $s2;
		?>
		<p>Letra Y</p>
		<p>count — Conta o número de elementos de uma variável, ou propriedades de um objeto</p>
		<?php
			$b[0] = 7;
			$b[5] = 9;
			$b[10] = 11;
			$result = count($b);

			echo $result;
		?>
		<p>Letra Z</p>
		<p>htmlentities — Converte todos os caracteres aplicáveis em entidades html.</p>
		<?php
			$str = "A 'quote' is <b>bold</b>";

			echo htmlentities($str);
		?>


	</body>
	<html>
