<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Post', array('action' => 'edit'));
    echo $this->Form->input('roupas');
    echo $this->Form->input('marca', array('rows' => '3'));
    echo $this->Form->input('modelo',array('rows' => '3')); 
    echo $this->Form->input('tamanho');
    echo $this->Form->end('Editar');

