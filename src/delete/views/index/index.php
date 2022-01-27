/*
* Arquivo index da pasta views/index contendo a tabela
*/

<table border="2" id="internalActivities" style="width: 100%" class="table table-bordered">
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Contato</th>
	</tr>

	<?php foreach ($this->allrecords as $key => $value) { ?>
		<tr>
			<td><?php echo $value['name']."<br>"?></td>
			<td><?php echo $value['email']. "<br>"?></td>
			<td><?php echo $value['contact'];?></td>
		</tr>

		<td><a href="javascript:confirmDelete('deleteIndex/<?php echo $value['id'];?>')" class="btn btn-primary btn-sm" role="button">Delete</a></td>
	<?php } ?>

</table>

	<script>
		function confirmDelete(deURL) {
			if (confirm("Você tem certeza que deseja excluir?")) {
				document.location = deURL;
			}
		}
	</script>
