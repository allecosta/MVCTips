/*
* Este é o arquivo index da pasta view que contém o formulário.

*/

<?php 

$name->$this->content[0]['name'];
$email->$this->content[0]['email'];
$contact->$this->content[0]['contact'];

?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form action="<?php echo URL; ?>index/editSubmitIndex" method="POST" enctype="multipart-form-data" onsubmit="return confirm('Você quer realmente enviar o formulário');">
				<div class="col-xs-6 form-group">
					<label class="control-label col-xs-6" for="name">Nome:</label>
					<div class="col-xs-6 form-group">
						<input class="form-control" name="name" id="name" placeholder="Informe o seu nome">
					</div>
				</div>

				<div class="col-xs-6 form-group">
					<label class="control-label col-xs-6" for="email">Email:</label>
					<div class="col-xs-6 form-group">
						<input type="text" class="form-control" name="email" id="email" placeholder="Informe o seu email">	
					</div>
				</div>

				<div class="col-xs-6 form-group">
					<label class="control-label col-xs-6" for="contact">Contato:</label>
					<div class="col-xs-6">
						<input type="text" class="form-control" name="contact" id="contact" placeholder="Informe o seu contato">
					</div>
				</div>

				<div class="col-xs-6 form-group">
					<div class="col-sm-offset-2 col-xs-6">
						<button type="submit" class=".btn-info form-control" value="submit" name="submit">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
