<h1>Adicionando Postagem <h1>

	<?php
	# criando o formulario atraves do ajundante Form
	echo $this->Form->create('Post');

	#gerando os inputs atraves do ajudante Form
	echo $this->Form->input ('roupas');
	
	echo $this->Form->input ('body',array('rows'=>'3'));

	#fechando o formulario e gerando o botão Submit
	echo $this->Form->end("Enviar");
