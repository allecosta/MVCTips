/*
* Arquivo index da pasta views/index contendo a tabela
*/

<table border="2" id="internalActivities" style="width: 100%" class="table table-bordered">
	<tbody>
		<tr>
			<th>Id</th>
				<td><?php echo $this->content[0]['id']; ?></td>
			<th>Nome</th>
				<td><?php echo $this->content[0]['name']; ?></td>
		</tr>
		<tr>
			<th>Email</th>
				<td><?php echo $this->content[0]['email']; ?></td>
			<th>Contato</th>
				<td><?php echo $this->content[0]['contact']; ?></td>
		</tr>
	</tbody>	
</table>