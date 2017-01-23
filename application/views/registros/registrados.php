 <head>
      <title>Registros</title>
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
	<div id="linha">
		<div id="filtro">
			<div id="h1"><h1>Registrados</h1></div><?= anchor('registros\exportar','Exportar',array("class"=>"btn btn-primary", "id"=>"export")) ?>
			<div class="input-group">
				<div class="input-group-btn">
					<?php
					echo form_open("registros/filtrar");

					echo form_button(array(
						"class" => "btn btn-primary",
						"content" => "Buscar",
						"type" => "submit",
						"id"=>"btnFiltro"
					));

					echo form_input(array(
						"name" => "filtrar",
						"class" => "form-control",
						"id" => "cliente",
						"maxlength" => "255",
						"id"=>"iptFiltro",
						"placeholder"=>"Pesquisar...",
					));

					echo form_dropdown(array(
						"name" => "sltFiltrar",
						"type"=>"button",
						"class"=>"btn btn-default dropdown-toggle",
						"id"=>"sltFiltro"
					),
						$options = array(
							'usuario'=>'usuario',
							'empressa'=>'empressa',
							'solicitacao'=>'solicitacao'
						));
				echo "</div>";

					echo form_close();
					?>
			</div><!-- /input-group -->
		</div>
	</div> 
	<!--teste export--
	<form action="//base_url('registros\exportar') " method="post" id="FormularioExportacao">
		<input type="hidden" id="dados_a_enviar" name="dados_a_enviar" value=""/>  
		<button class="btn btn-primary" id="btnExport">exportar</button>
	</form>
	--fim teste-->
	<div  class="tbl-header">
		<table cellpadding="0" cellspacing="0" border="0">
            <thead>
               <tr>
					<th class="smalthtduser"><b>Usuário</b></th>
					<th class="smalthtd"><b>Empressa</b></th>
					<th><b>Solicitação</b></th>   
					<th class="smalthtd"><b>Data</b></th>
					<th class="smalthtd"><b>Chamado</b></th>
                </tr>
            </thead>
        </table>
    </div>
         <div  class="tbl-content" id="tbl-content-todos-registrados">
            <table cellpadding="0" cellspacing="0" border="0" id="tabela">
               <?php 
			   if(empty($registrado)):
					echo "<td><center><b>Sem resultados para a pesquisa!</b></center></td>";
				else:
			   foreach ($registrado as $registrado): ?>
               <tbody>
                  <td class="smalthtduser"><?= $registrado ["usuario"]?></td>
                  <td class="smalthtd"><?= $registrado ["empressa"] ?></td>
                  <td><?= $registrado ["solicitacao"] ?></a></td>
                  <td class="smalthtd"><?= date("d/m/y", strtotime($registrado ["data"])) ?></td>
                  <td class="smalthtd"><?= $registrado ["chamado"] ?></td>
               </tbody>
               <?php endforeach?>
			   <?php endif?>
            </table>
         </div>