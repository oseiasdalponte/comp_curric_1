<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <h4>Sucesso !</h4>
  O post foi atualizado com sucesso.
</div>

<div class ="page-header">
<h1>Listando as Postagens</h1>

<p>


<p>

<i class="icon-eye-open"></i>
<?php 
echo $this->Html->Link("Novo Item",		
			array ('controller'=>'posts','action'=>'add'),				
			array ('class'=>"btn btn-success "));?>
		
</p>



<table class ="table table-hover">

<thead>
<tr>
	<th><h4>Roupas</h4></th>
	<th><h4> Marca</h4></th>
 	<th><h4>Modelo</h4></th>
	<th><h4>Tamanho</h4></th>
 	<th><h4>Atualizado em</h4></th>
	<th colspan= "3"><h4>Acoes</h4> </th>
	</tr>
</thead>
<tbody>
		<?php foreach ($posts as $post):?>
<tr>

		<td><?php echo $post ["Post"]["id"];?></td>
		<td><?php  echo $post["Post"]["title"];?></td>
		<td><?php  echo $post ["Post"]["body"];?></td>
		<td><?php  echo $post ["Post"]["created"];?></td>
		<td><?php  echo $post ["Post"]["modified"];?></td>
	<td>
		<!--<a href="/posts/view/id">Visualizar<a> -->

			 <button class="btn "</button>
			<i class="icon-eye-open"></i>
			<?php echo $this->Html->Link("Visualizar",
				array('controller'=>'posts','action'=>'view',
				$post["Post"]["id"]));
?>
<td>
	  
	 <button class=" btn  btn-info"</button>
	<i class="icon-edit"></i>
<?php echo $this->Html->Link("Editar",
						array('controller'=>'posts','action'=>'edit',
				$post["Post"]["id"]));

?>
</td>

<td>
<button class="btn btn-danger"</button>
	<i class="  icon-trash"></i>
<?php echo $this->Html->Link("Deletar",
				array('controller'=>'posts','action'=>'delete',
				$post["Post"]["id"]));
?>
</td>




</tr>
		<?php endforeach ; ?>
</tbody>
</table>

