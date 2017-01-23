<!DOCTYPE html>
<html>  
   <head>
      <title>Registros</title>
	  <link rel="icon" href="<?= base_url("img/icone.ico")?>" type="image/x-icon" />
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?= base_url("css/testes/reset.css")?>">
      <link rel="stylesheet" href="<?= base_url("css/testes/style.css")?>">
      <link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?>">
      <script src="<?= base_url('js/jquery-2.1.3.min.js') ?>"></script>
      <script src="<?= base_url('js/js.js') ?>"></script>	 
      <script src="<?= base_url('js/bootstrap.js') ?>"></script> 
	  <script src="<?= base_url('js/jquery.form.js') ?>"></script>
   </head>
   <body>
		<div class="head" id="head">		
			<span style="padding-left: 2%;">Registros de Atendimento</span>		
			<?php if($usuario['nivel']==1) :?>
			<?= anchor('registros\admin','Admin',array("class"=>"btn btn-primary", "id"=>"adimin")) ?>
			<?php endif ?> 
			<?= anchor('login/Logout','Logout',array("class"=>"btn btn-primary", "id"=>"logout")) ?>	
			<span class="username"><?= ucfirst($usuario['nome']) ?></span>
		</div>
		<?php echo form_open("registros/novo");	?>     
		<form class="form-horizontal" role="form">
			<div class="form-group col-md-2" style="padding-left: 35px;">
				<label for="newUsuario" class="col-md-2 control-label" style="padding-right: 50px;">Usuario</label>			
				<div class="col-md-10">
					<?php echo form_input(array("name" => "newUsuario",	"class" => "form-control", "maxlength" => "255", "value"=>set_value("newUsuario", "")));			
					//exibe erros de validação					
					echo form_error("newUsuario");	?>			
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
					<?php	echo form_error("newEmpressa");	?>	
				</div>
			</div>
			<div class="form-group col-md-5">
				<label for="newSolicitacao" class="col-md-5 control-label" style="padding-right: 50px;">Solicitacao</label>         
				<div class="col-md-10">
					<?php echo form_input(array(
						"id" => "inpSolicitacao",
						"name" => "newSolicitacao",
						"class" => "form-control", 
						"maxlength" => "255", 
						"value"=>set_value("newSolicitacao", "")
						));		
						echo form_error("newSolicitacao");?>			
				</div>
			</div>
			<div class="form-group col-md-2">
				<label for="newSolicitacao" class="col-md-2 control-label" style="padding-right: 50px; color:white;">.</label>		   
						  
					<?php echo form_button(array(						
						"class" => "btn btn-success",						
						"name" => "btnCadastrar",						
						"type" => "submit",						
						"content" => "Cadastrar",						
						"style" =>"margin-right: 170px",						
						"id" => "btn"));					
						echo form_close();?>		  
				</div>
			</div>
		</form>
      <section id="section">
		<?php if($this->session->flashdata("success")) : ?>
				<h4 class="alert alert-success" id="alert"><?= $this->session->flashdata("success")?><button class="close" data-dismiss="alert">x</button></h4>
		<?php endif ?>
         <div  class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
               <thead>
                  <h4>Registar</h4>
                  <tr>
                     <th class="smalthtduser"><b>Usuário</b></th>
                     <th class="smalthtd"><b>Empressa</b></th>
                     <th><b>Solicitação</b></th>
                     <th class="smalthtd"><b>Data</b></th>
                     <th class="smalthtd"></th>
                     <th class="smalthtd"></th>
                     <th class="smalthtd"></th>
                  </tr>
               </thead>
            </table>
         </div>
         <div  class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
               <?php
				if(empty($registrar)):
					echo "<td><center><b>Tudo registrado!</b></center></td>";
				else:
					foreach ($registrar as $registrar): ?>
               <tbody>  
                  <td class="smalthtduser"><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrar['id'] ?>)"><?= character_limiter($registrar ["usuario"], 10)?></a></td>
                  <td class="smalthtd"><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrar['id'] ?>)"><?= $registrar ["empressa"] ?></a></td>
                  <td><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrar['id'] ?>)"><?= character_limiter($registrar ["solicitacao"], 70) ?></a></td>
                  <td class="smalthtd"><?= date("d/m/y", strtotime($registrar ["data"])) ?></td>
                  <td class="smalthtd"><a href="javascript:;" onclick="janelaConfirmarRegistro(<?= $registrar['id'] ?>)"><button type="button" id="btn-tbl"  class="btn btn-success">Registrar</button></a></td>
                  <td class="smalthtd"><a href="javascript:;" onclick="janelaEditarRegistro(<?= $registrar['id'] ?>)"><button type="button" id="btn-tbl"  class="btn btn-primary">Alterar</button></a></td>
                  <td class="smalthtd"><a href="javascript:;" onclick="janelaExcluirRegistro(<?= $registrar['id'] ?>)"><button type="button" id="btn-tbl" class="btn btn-danger">Excluir</button></a></td>
               </tbody>
               <?php endforeach?>
			   <?php endif ?>
            </table>
         </div>
         <div  class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
               <thead>
                  <h4>Registrados <a href="javascript:;" onclick="popup('<?= base_url('registros/todosRegistrados')?>','Todos os Registros','900','500')"><img src="<?= base_url('img/popup.svg')?>" width="1%" height="1%"/></h4></a>
                  <tr>
                     <th class="smalthtduser"><b>Usuário</b></th>
                     <th class="smalthtd"><b>Empressa</b></th>
                     <th><b>Solicitação</b></th>   
                     <th class="smalthtd"><b>Data</b></th>
                     <th class="smalthtd"><b>Chamado</b></th>
                     <th class="smalthtd"></th>
                     <th class="smalthtd"></th>
                  </tr>
               </thead>
            </table>
         </div>
         <div  class="tbl-content" id="tbl-content-registrados">
            <table cellpadding="0" cellspacing="0" border="0">
               <?php 
				if(empty($registrado)):
					echo "<td><center><b>Ainda não há registros.</b></center></td>";
				else:
				foreach ($registrado as $registrado): ?>
               <tbody>
                  <td class="smalthtduser"><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrado['id'] ?>)"><?= character_limiter($registrado ["usuario"], 10)?></a></td>
                  <td class="smalthtd"><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrado['id'] ?>)"><?= $registrado ["empressa"] ?></a></td>
                  <td><a href="javascript:;" onclick="janelaExibirRegistro(<?= $registrado['id'] ?>)"><?= character_limiter($registrado ["solicitacao"], 70)?></a></td> 
                  <td class="smalthtd"><?= date("d/m/y", strtotime($registrado ["data"])) ?></td> 
                  <td class="smalthtd"><a href="javascript:;" onclick="popup('http://sit2057:7070/WorkOrder.do?woMode=viewWO&woID=<?=$registrado['chamado'] ?>&', 'Chamado <?= $registrado['chamado'] ?>',900, 500)",'Todos os Registros','900','500')"><?= $registrado ["chamado"] ?></a></td>
                  <td class="smalthtd"><a href="javascript:;" onclick="janelaEditarRegistro(<?= $registrado['id'] ?>)"><button type="button" id="btn-tbl" class="btn btn-default">Alterar</button></a></td>
                  <td class="smalthtd"><a href="javascript:;" onclick="janelaExcluirRegistro(<?= $registrado['id'] ?>)"><button type="button" id="btn-tbl" class="btn btn-default">Excluir</button></a></td>
               </tbody>
               <?php endforeach?>
			   <?php endif?>
            </table>
         </div>
      </section>
      <!--janela do modal editar clientes-->	
      <div class="modal fade bs-example-modal-lg" id="modalExibirRegistro" >
         <div class="modal-dialog">
            <div class="modal-content">
               <!--	<div class="modal-header">		
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>				
				<h4class="modal-title">Editar Serviço</h4></div>-->				
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
						<textarea class="form-control" disabled="disabled" name="solicitacao" style="height:150px;"></textarea>					
					 </div>
                     <input type="hidden" name="id_registro" id="id_registro" value="" />					
                  </form>
               </div>
               <div class="modal-footer">					<a id="lnkAlterar"><button type="button" class="btn btn-primary" id="mAlterar" onclick="ativaCampos()">Alterar</button><a>			
			   <a id="linkExcluir"><button type="button" class="btn btn-danger" onclick="janelaExcluirRegistro($('#id_registro').val())">Excluir</button></a>		
			   <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>				</div>
            </div>
            <!-- /.modal-content -->		
         </div>
         <!-- /.modal-dialog -->	
      </div>
      <!-- /.modal -->	<!--Excluir registro-->	
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
            </div>
            <!-- /.modal-content -->		
         </div>
         <!-- /.modal-dialog -->	
      </div>
      <!-- /.modal -->	<!--janela do modal editar registro-->	
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
					 <textarea class="form-control" id="edtsolicitacao" name="solicitacao">
					 </textarea>		
					 </div>
                     <input type="hidden" name="id_registro" id="id_registro" value="" />					
                  </form>
               </div>
               <div class="modal-footer">					
			   <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>			
			   <button type="button" class="btn btn-primary" onclick="$('#editar_registro').submit()">Salvar Alterações</button>				</div>
            </div>
            <!-- /.modal-content -->		
         </div>
         <!-- /.modal-dialog -->	
      </div>
      <!-- /.modal -->	
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
                  <div class="modal-footer">						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>				
				  <a id="linkConfirn"><button type="button" id="btnRegistar" onclick="$('#registrar_registro').submit()" class="btn btn-success">Registrar</button></a>	
				  </div>
               </form>
            </div>
            <!-- /.modal-content -->		
         </div>
         <!-- /.modal-dialog -->	
      </div>
      <!-- /.modal -->
   </body>
</html>