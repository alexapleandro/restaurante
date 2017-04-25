<?php  
include_once("header.php");
?>
<div class="container" style="margin-top:70px">
	<form>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" placeholder="Nome">
					</div>		
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="sobrenome">Sobrenome</label>
						<input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome">
					</div>		
				</div>
				<div class="col-md-12">
					<button class="btn btn-info pull-right" type="submit">Enviar</button>
				</div>
			</div>
			
		</div>
	</form>	
</div>
<?php
include_once("footer.php");
?>