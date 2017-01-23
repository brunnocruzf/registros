<html>
	<head>  
		<title>Registros</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?>">
		<script src="<?= base_url('js/jquery.form.js') ?>"></script>
		<script src="<?= base_url('js/jquery-2.1.3.min.js') ?>"></script>
		<script src="<?= base_url('js/js.js') ?>"></script>	 
		<script src="<?= base_url('js/bootstrap.js') ?>"></script>
			<!-- implementação modal-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=""> 
	<meta name="author" content="">
	<script src="<?= base_url('js/jquery.form.js') ?>"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!--Fecha modal-->
	</head> 
	
	<body>
	<div class="head" id="head">
		<span style="padding-left: 2%;">Registros de Atendimento</span>
		<?= anchor('login\Logout','Logout',array("class"=>"btn btn-primary", "id"=>"logout")) ?>
	</div>
	<?php
		echo form_open("registros/novo");
	?> 
    <form class="form-horizontal" role="form">
		<div class="form-group col-md-2" style="padding-left: 35px;">
			<label for="newUsuario" class="col-md-2 control-label" style="padding-right: 50px;">Usuario</label>
			<div class="col-md-10">
				<?php
					echo form_input(array(
						"name" => "newUsuario",
						"class" => "form-control",
						"maxlength" => "255",
						"value"=>set_value("newUsuario", "")
						));
						//exibe erros de validação
					echo form_error("newUsuario");
				?>
			</div> 
		</div>
		<div class="form-group col-md-2">
			<label for="newEmpressa" class="col-md-2 control-label" style="padding-right: 50px;">Empressa</label>
			<div class="col-md-10" style="width: 300px;"> 
				<label class="radio-inline" style="font-size: 20px;">
					<input type="radio" name="newEmpressa" value="Helibras">Helibras
				</label> 
				<label class="radio-inline" style="font-size: 20px;">
					<input type="radio" name="newEmpressa" value="Wtorre">Wtorre
				</label>
				<?php
				   echo form_error("newEmpressa");
				?>
		   </div> 
	   </div>
			
	   <div class="form-group col-md-5">
         <label for="newSolicitacao" class="col-md-5 control-label" style="padding-right: 50px;">Solicitacao</label>
         <div class="col-md-10">
			<?php	echo form_input(array(
				"id" => "inpSolicitacao",
				"name" => "newSolicitacao",
				"class" => "form-control",
				"maxlength" => "255", 
				"value"=>set_value("newSolicitacao", "")
				));
				 echo form_error("newSolicitacao");
			?>
			</div>
       </div>
	   <div class="form-group col-md-2">
	   <label for="newSolicitacao" class="col-md-2 control-label" style="padding-right: 50px; color:white;">.</label>
	   <div class="col-md-10">
	   <?php
			echo form_button(array(
				"class" => "btn btn-success",
				"name" => "btnCadastrar",
				"type" => "submit",
				"content" => "Cadastrar",
				"style" =>"margin-right: 170px",
				"id" => "btn"));
			echo form_close();
		?>
	   </div>
       </div>
     </form> 
	 <div class="conteiner">
		<div  style="overflow: auto; height: 40%; margin-top:6%; margin-left: 50px; margin-right: 50px;">
		<?php if($this->session->flashdata("success")) : ?>
				<h4 class="alert alert-success" style="width:92%; position:absolute; padding-bottom: 0px;padding-top: 0px; text-aling:center; margin-bottom: 5px; margin-top: -20px;"><?= $this->session->flashdata("success")?><button class="close" data-dismiss="alert">x</button></h4>
		<?php endif ?>
		<h3 tyle="margin-top: 0px;">Registrar</h3>
			<table class="table table-striped">
				<thead> 
				<tr>  
					<th><b>Usuario</b></th>
					<th><b>Empressa</b></th>
					<th><b>Solicitacao</b></th>
					<th><b>Data</b></th>						
					<th style="padding-right: 7px;padding-left: 0px;width: 105px;"><b> </b></th>		
					<th style="padding-right: 7px;padding-left: 0px; width:1%;"><b> </b></th>										
					<th style="padding-right: 7px;padding-left: 0px; width:1%;"><b> </b></th>
				</tr>
				</thead>
					<tbody>
						<tr>					
							<?php 
							if(empty($registrar)):
								echo "<td></td>";
								echo "<td><center>Tudo registrado!</center></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
							else:
								foreach ($registrar as $registrar): ?>
							<td><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrar['id'] ?>)"><?= character_limiter($registrar ["usuario"], 10)?></a></td>
							<td><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrar['id'] ?>)"><?= $registrar ["empressa"] ?></a></td>
							<td><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrar['id'] ?>)"><?= character_limiter($registrar ["solicitacao"], 50) ?></a></td>
							<td><?= date("d/m/y", strtotime($registrar ["data"] ))?></td>
							<td><a href="javascript:;" onclick="janelaConfirmarRegistro(<?= $registrar['id'] ?>)"><button type="button" class="btn btn-success">Registrar</button></a></td>												
							<td><a href="javascript:;" onclick="janelaEditarRegistro(<?= $registrar['id'] ?>)"><button type="button" class="btn btn-primary">Alterar</button></a></td>		
							<td><a href="javascript:;" onclick="janelaExcluirRegistro(<?= $registrar['id'] ?>)"><button type="button" class="btn btn-danger">Excluir</button></a></td>											
						</tr>
					</tbody>
					<?php endforeach?> 
					<?php endif ?>
			</table>
		</div> 
	</div>
	 <div class="conteiner">
		<div  style="overflow: auto; height: 35%; margin-top:0px; margin-left: 50px; margin-right: 50px;">
		<h3>Registrados</h3> 
			<table class="table table-striped table-hover">
				<thead>
				<tr>
					<th><b>Usuário</b></th>
					<th><b>Empressa</b></th>
					<th><b>Solicitacao</b></th>	
					<th><b>Data</b></th>
					<th><b>Chamado</b></th>
					<th style="padding-right: 7px;padding-left: 0px; width:1%;"><b> </b></th>								
					<th style="padding-right: 7px;padding-left: 0px; width:1%;"><b> </b></th>
				</tr>
				</thead>					
					<?php 
					foreach ($registrado as $registrado): ?>
					<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrado['id'] ?>)"><?= character_limiter($registrado ["usuario"], 10)?></a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrado['id'] ?>)"><?= $registrado ["empressa"] ?></a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrado['id'] ?>)"><?= character_limiter($registrado ["solicitacao"], 30)?></a></td>
						<td><?= date("d/m/y", strtotime($registrado ["data"])) ?></td>
						<td><?= $registrado ["chamado"] ?></td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(<?= $registrado['id'] ?>)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(<?= $registrado['id'] ?>)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
					<?php endforeach?>
			</table>  
		</div>
	</div> 
	
	<!--janela do modal editar clientes-->

	<div class="modal fade bs-example-modal-lg" id="modalExibirRegistro" >
		<div class="modal-dialog">
			<div class="modal-content">
			<!--	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
					<h4 class="modal-title">Editar Serviço</h4>
				</div>-->
				<div class="modal-body">
					<form role="form" method="post" action="<?= base_url('registros/alterar')?>" id="confirmar_editar_registro">
						<div class="form-group">
							<label for="usuario">Usuario</label>
							<input type="text" class="form-control" name="usuario" value="" disabled>
						</div> 
						<div class="form-group">
							<div class="form-group">
							<label for="empressa">Empressa</label>
							<select name="empressa" class="form-control"> 
							  <option value="Wtorre" name="Wtorre">Wtorre</option>
							  <option value="Helibras" name="Helibras">Helibras</option>  
							</select>
						</div>
						</div>
						<div class="form-group">
							<label for="solicitacao">Solicitacao</label>
							<textarea class="form-control" disabled="disabled" name="solicitacao" style="height:20%"></textarea>
						</div> 
						<input type="hidden" name="id_registro" id="id_registro" value="" />
					</form>
				</div>
				<div class="modal-footer">
					<a id="lnkAlterar"><button type="button" class="btn btn-primary" id="mAlterar" onclick="ativaCampos()">Alterar</button><a>
					<a id="linkExcluir"><button type="button" class="btn btn-danger" onclick="janelaExcluirRegistro($('#id_registro').val())">Excluir</button></a>
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	<!--Excluir registro-->

	<div class="modal fade bs-example-modal-lg" id="modalExcluirRegistro" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></span></button>
					<h4 class="modal-title">Excluir</h4>
				</div>
				<div class="modal-body">
					<p>Deseja excluir registro?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<a id="link"><button type="button" id="btnExcluir" class="btn btn-danger">Excluir</button></a>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	
	<!--janela do modal editar registro-->

	<div class="modal fade bs-example-modal-lg" id="modalEditarRegistro" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
					<h4 class="modal-title">Editar Registro</h4>
				</div>
				<div class="modal-body"> 
					<form role="form" method="post" action="<?= base_url('registros/alterar')?>" id="editar_registro">
						<div class="form-group">
							<label for="usuario">Usuário</label>
							<input type="text" class="form-control" id="edtusuario" onclick="zIndex()" name="usuario" value="">
						</div> 
						<div class="form-group">
							<label for="empressa">Empressa</label>
							<select name="empressa" class="form-control"> 
							  <option value="Wtorre" name="Wtorre">Wtorre</option>
							  <option value="Helibras" name="Helibras">Helibras</option>  
							</select>
						</div>
						<div class="form-group">
							<label for="solicitacao">solicitacao</label>
							<textarea class="form-control" id="edtsolicitacao" name="solicitacao"></textarea>
						</div> 
						<input type="hidden" name="id_registro" id="id_registro" value="" />
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary" onclick="$('#editar_registro').submit()">Salvar Alterações</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	
	<div class="modal fade bs-example-modal-lg" id="modalConfirmarRegistro" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></span></button>
					<h4 class="modal-title">Confirmar</h4>
				</div> 
				<form role="form" method="post" action="" id="registrar_registro">
					<div class="modal-body"> 
						<p>Numero do Chamado:<input type="text" class="form-control" name="inpChamado" style="float:right;width: 169px;padding-right: 5px;margin-right: 249px;"></p>  
					</div>
					<input type="hidden" name="id_registro" id="id_registro" value="" />
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<a id="linkConfirn"><button type="button" id="btnRegistar" onclick="$('#registrar_registro').submit()" class="btn btn-success">Registrar</button></a>
					</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
 