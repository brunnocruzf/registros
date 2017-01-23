<html>
	<head>  
		<title>Registros</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://registros.ml/js/jquery.popupwindow.js"></script>
		<link rel="stylesheet" type="text/css" href="http://registros.ml/css/bootstrap.css">
		<script src="http://registros.ml/js/jquery.form.js"></script>
		<script src="http://registros.ml/js/jquery-2.1.3.min.js"></script>
		<script src="http://registros.ml/js/js.js"></script>	 
		<script src="http://registros.ml/js/bootstrap.js"></script>
		

			<!-- implementação modal-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=""> 
	<meta name="author" content="">
	<script src="http://registros.ml/js/jquery.form.js"></script>
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!--Fecha modal-->
	</head>
	
	<body>
	<div class="container-fluid">
		<h1 style="padding-left: 2%;">Registros de Atendimento</h1>
	</div>
	<form action="http://registros.ml/index.php/registros/novo" method="post" accept-charset="utf-8">
 
    <form class="form-horizontal" role="form">
		<div class="form-group col-md-3" style="padding-left: 35px;">
			<label for="newUsuario" class="col-md-2 control-label" style="padding-right: 50px;">Usuario</label>
			<div class="col-md-10">
				<input type="text" name="newUsuario" value="" class="form-control" maxlength="255"  />
			</div> 
		</div>
		<div class="form-group col-md-3">
			<label for="newEmpressa" class="col-md-2 control-label" style="padding-right: 50px;">Empressa</label>
			<div class="col-md-10" style="width: 300px;"> 
				<label class="radio-inline" style="font-size: 20px;">
					<input type="radio" name="newEmpressa" value="Helibras">Helibras
				</label> 
				<label class="radio-inline" style="font-size: 20px;">
					<input type="radio" name="newEmpressa" value="Wtorre">Wtorre
				</label>
						   </div> 
	   </div>
			
	   <div class="form-group col-md-3">
         <label for="newSolicitacao" class="col-md-2 control-label" style="padding-right: 50px;">Solicitacao</label>
         <div class="col-md-10">
			<input type="text" name="newSolicitacao" value="" id="inpSolicitacao" class="form-control" maxlength="255"  />
			</div>
       </div>
	   <div class="form-group col-md-1">
		<div class="col-md-2">
	   <button name="btnCadastrar" type="submit" class="btn btn-success" style="margin-top: 25px;" id="btn" >Cadastrar</button>
</form>		</div>
       </div>
     </form> 
	 <div class="conteiner">
		<div  style="overflow: auto; height: 40%; margin-top:74px;margin-left: 50px; margin-right: 50px;">
				<h3 tyle="margin-top: 0px;">Para Registrar</h3>
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
														<td><a href="javascript:;" onclick="janelaExibirRegistro(130)">andre.rocha</a></td>
							<td><a href="javascript:;" onclick="janelaExibirRegistro(130)">Helibras</a></td>
							<td><a href="javascript:;" onclick="janelaExibirRegistro(130)">informação sobre chamado 201020.</a></td>
							<td>11/10/16</td>
							<td><a href="javascript:;" onclick="janelaConfirmarRegistro(130)"><button type="button" class="btn btn-success">Registrar</button></a></td>												
							<td><a href="javascript:;" onclick="janelaEditarRegistro(130)"><button type="button" class="btn btn-primary">Alterar</button></a></td>		
							<td><a href="javascript:;" onclick="janelaExcluirRegistro(130)"><button type="button" class="btn btn-danger">Excluir</button></a></td>											
						</tr>
					</tbody>
												<td><a href="javascript:;" onclick="janelaExibirRegistro(129)">josiane.machado</a></td>
							<td><a href="javascript:;" onclick="janelaExibirRegistro(129)">Helibras</a></td>
							<td><a href="javascript:;" onclick="janelaExibirRegistro(129)">informação sobre acesso a pasta</a></td>
							<td>11/10/16</td>
							<td><a href="javascript:;" onclick="janelaConfirmarRegistro(129)"><button type="button" class="btn btn-success">Registrar</button></a></td>												
							<td><a href="javascript:;" onclick="janelaEditarRegistro(129)"><button type="button" class="btn btn-primary">Alterar</button></a></td>		
							<td><a href="javascript:;" onclick="janelaExcluirRegistro(129)"><button type="button" class="btn btn-danger">Excluir</button></a></td>											
						</tr>
					</tbody>
					 
								</table>
		</div> 
	</div>
	 <div class="conteiner">
		<div  style="overflow: auto; height: 35%; margin-top:0px; margin-left: 50px; margin-right: 50px;">
		<h3>Registrados <a href="#" class="defaults"><img src="http://registros.ml/img/popup.svg" width="28px"></a>
</h3> 
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
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(132)">leina.carneiro</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(132)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(132)">solicitação de voucher - 69410-04103.</a></td>
						<td>11/10/16</td>
						<td>INC-447674</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(132)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(132)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(131)">andre.rocha</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(131)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(131)">informação sobre chamado 201020.</a></td>
						<td>11/10/16</td>
						<td>201638</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(131)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(131)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(128)">vinicius.santos</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(128)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(128)">atualizar modulo de banco - durante a ligação funcionou.</a></td>
						<td>11/10/16</td>
						<td>INC-44765</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(128)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(128)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(127)">francisco.lucena</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(127)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(127)">Usuário bloqueado.</a></td>
						<td>11/10/16</td>
						<td>INC-44766</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(127)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(127)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(126)">cesar.silva</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(126)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(126)">outlook não esta abrindo</a></td>
						<td>11/10/16</td>
						<td>201627</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(126)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(126)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(125)">gustavo.pinheiro</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(125)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(125)">configurar scanback</a></td>
						<td>11/10/16</td>
						<td>201617</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(125)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(125)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(116)">e351980</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(116)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(116)">configurar outlook</a></td>
						<td>10/10/16</td>
						<td>201593</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(116)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(116)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(115)">mudo</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(115)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(115)">mudo</a></td>
						<td>10/10/16</td>
						<td>INC-44751</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(115)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(115)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(114)">anderson.lima</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(114)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(114)">sem aceso ao email</a></td>
						<td>10/10/16</td>
						<td>201603</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(114)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(114)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(113)">e485737</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(113)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(113)">reset de senha - helibras@2016
</a></td>
						<td>10/10/16</td>
						<td>201600</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(113)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(113)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(112)">mudo</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(112)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(112)">mudo</a></td>
						<td>10/10/16</td>
						<td>INC-44750</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(112)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(112)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(111)">leticia.silva</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(111)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(111)">informação 201552</a></td>
						<td>10/10/16</td>
						<td>201599</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(111)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(111)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(110)">fulvio.piacentin</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(110)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(110)">senha expirada</a></td>
						<td>10/10/16</td>
						<td>inc-44756</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(110)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(110)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(109)">maria.barcelos</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(109)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(109)">solicitação de voucher</a></td>
						<td>10/10/16</td>
						<td>inc-44757</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(109)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(109)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(108)">gesildo.andrade</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(108)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(108)">solicitação de voucher</a></td>
						<td>10/10/16</td>
						<td>inc-44755</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(108)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(108)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(107)">michelly.lemes</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(107)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(107)">Recuperar emails.</a></td>
						<td>10/10/16</td>
						<td>201598</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(107)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(107)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(106)">conrado.russi</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(106)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(106)">solicitação de voucher - 42857-52562</a></td>
						<td>10/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(106)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(106)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(105)">vinicius.dias</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(105)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(105)">solicitação de voucher - 74045-38784</a></td>
						<td>10/10/16</td>
						<td>INC-44727</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(105)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(105)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(77)">mudo</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(77)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(77)">mudo</a></td>
						<td>07/10/16</td>
						<td>INC-44723</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(77)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(77)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(50)">mauro.ayres</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(50)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(50)">reset de senha SAP</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(50)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(50)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(49)">xe351893</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(49)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(49)">reset de senha Sap.</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(49)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(49)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(48)">marcos.matos</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(48)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(48)">Informação sobre chamado INC-44545</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(48)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(48)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(47)">xe351919</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(47)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(47)">acesso ao jabber.</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(47)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(47)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(46)">roselene.martins</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(46)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(46)">solicitação de voucher.- 16044-65406.</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(46)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(46)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(45)">leonardo.cunha e485142</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(45)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(45)">token bloqueado</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(45)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(45)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(44)">tamires.rodrigues</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(44)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(44)">solicitação de voucher - 28202-76494</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(44)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(44)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(42)">jucelio.santos</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(42)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(42)">Redefinir senha no oracle.</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(42)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(42)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(38)">fernanda.oliveira</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(38)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(38)">Informação sobre chamado INC-44699 que esta com o Denilson</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(38)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(38)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(37)">lucas.correa</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(37)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(37)">reset de senha Sap.</a></td>
						<td>07/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(37)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(37)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(35)">jessica.rodrigues</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(35)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(35)">acesso a pasta</a></td>
						<td>06/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(35)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(35)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(33)">andre.paulista</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(33)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(33)">Sem acesso a rede</a></td>
						<td>06/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(33)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(33)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(32)">leticia.silva</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(32)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(32)">informação sobre chamado 201448</a></td>
						<td>06/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(32)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(32)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(31)">e485515</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(31)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(31)">Reset de senha SAP.</a></td>
						<td>06/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(31)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(31)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(30)">cristiane.tomaz</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(30)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(30)">excluisão de arquivos pasta M:</a></td>
						<td>06/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(30)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(30)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(29)">andre.paulista</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(29)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(29)">informação sobre chamado 201435</a></td>
						<td>06/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(29)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(29)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(28)">francisco.lucena</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(28)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(28)">Desbloquear usuário</a></td>
						<td>06/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(28)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(28)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(27)">andre.paulista</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(27)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(27)">teclado com problema</a></td>
						<td>06/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(27)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(27)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(26)">ana.teixeira</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(26)">Helibras</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(26)">acesso a rede guest - heli@3010</a></td>
						<td>06/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(26)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(26)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(23)">monica.pinto</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(23)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(23)">instalar siscalc</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(23)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(23)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(22)">henrique.maques</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(22)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(22)">instalar google chorme.</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(22)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(22)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(21)">rodrigo.fiqueredo</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(21)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(21)">voucher wi-fi - 98676-18000</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(21)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(21)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(15)">douglas.alves</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(15)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(15)">alteração de registro oracle</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(15)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(15)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(14)">fernando.azevedo</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(14)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(14)">Reset de senha - wtorre@2016</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(14)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(14)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(13)">fernando.azevedo</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(13)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(13)">desbloqueio de senha</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(13)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(13)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(11)">sandra.santos</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(11)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(11)">solicitação de voucher - 06805-87921</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(11)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(11)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(10)">fernando.rocha</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(10)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(10)">reset de senha</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(10)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(10)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(9)">Celia Miranda de Souza</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(9)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(9)">desbloquear usuário</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(9)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(9)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(8)">dario.cunha</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(8)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(8)">desbloquear usuário</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(8)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(8)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(7)">dario.cunha</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(7)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(7)">redefinir senha</a></td>
						<td>05/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(7)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(7)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(4)">adelsio.abreu</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(4)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(4)">intranet fora</a></td>
						<td>04/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(4)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(4)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(3)">ana.mascarenhas</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(3)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(3)">acesso ao oracle - configurado link para acesso</a></td>
						<td>04/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(3)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(3)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(2)">celia.miranda</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(2)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(2)">desbloqueio de senha</a></td>
						<td>04/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(2)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(2)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
										<tbody>
					<tr>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(1)">thiago.britto</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(1)">Wtorre</a></td>
						<td><a href="javascript:;" onclick="janelaExibirRegistro(1)">voucher wifi</a></td>
						<td>04/10/16</td>
						<td>---</td> 
						<td><a href="javascript:;" onclick="janelaEditarRegistro(1)"><button type="button" class="btn btn-default">Alterar</button></a></td>								
						<td><a href="javascript:;" onclick="janelaExcluirRegistro(1)"><button type="button" class="btn btn-default">Excluir</button></a></td>
					</tr>
					</tbody>
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
					<form role="form" method="post" action="http://registros.ml/registros/alterar" id="confirmar_editar_registro">
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
							<textarea class="form-control" disabled="disabled" name="solicitacao" style="height:22%;"></textarea>
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
					<form role="form" method="post" action="http://registros.ml/registros/alterar" id="editar_registro">
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
				<form role="form" method="post" action="http://registros.ml/registros/registrar/129" id="registrar_registro">
					<div class="modal-body"> 
						<p>Numero do Chamado:<input type="text" class="form-control" name="inpChamado" style="float:right;width: 169px;padding-right: 5px;margin-right: 249px;"></p>  
					</div>
					<input type="text" name="id_registro" id="id_registro" value="" />
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
						<a id="linkConfirn"><button type="button" id="btnRegistar" onclick="$('#registrar_registro').submit()" class="btn btn-success">Registrar</button></a>
					</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
 