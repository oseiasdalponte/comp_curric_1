<!-- <pre>
	<?php print_r($posts); ?>
</pre> -->
<div class="page-header">
	<h1>Listando as tabelas</h1>
</div>

<p>
	<?php echo $this->Html->link("Novo item", array('controller' => 'posts', 'action' => 'add'),
		array('class' => 'btn btn-success')); ?>
</p>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Código</th>
			<th>Roupas</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>tamanho</th>
			<th>Atualizado em</th>
			<th colspan="3">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $post): ?>
			<tr>
				<td><?php echo $post["Post"]["id"];?></td>
				<td><?php echo $post["Post"]["roupas"];?></td>
				<td><?php echo $post["Post"]["marca"];?></td>
				<td><?php echo $post["Post"]["modelo"];?></td>
				<td><?php echo $post["Post"]["tamanho"];?></td>
				
				<td>
					<!--<a href="/post">Visualizar</a> -->
					
				
					<?php echo $this->Html->link
					("Visualizar", array('controller' => 'posts', 'action' => 'view',
						 $post["Post"]["id"]),array('<class' => 'btn'));?>
				</td>
        		<td>

        			<?php echo $this->Html->link('Editar', array('controller' => 'posts', 'action' => 'edit',
						 $post["Post"]["id"]),  array('class' => 'btn btn-info'));?>
				</td>
				<td>
					<?php echo $this->Form->postLink('Deletar', array('action' => 'delete', $post['Post']['id']), array('class' => 'btn btn-warningr'));?>
					
        		</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
