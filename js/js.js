		$(function(){  
			$('#editar_registro, #confirmar_editar_registro').ajaxForm({
				success: function(data) {
					if (data == 1){
						//se for sucesso, simplesmente recarrego a página. Aqui você pode usar sua imaginação.
						document.location.href = document.location.href;
					}
				}
			});
		});  
	
			/*
		 * Função que carrega após o DOM estiver carregado.
		 * Como estou usando o ajaxForm no formulário, é aqui que eu o configuro.
		 * Basicamente somente digo qual função será chamada quando os dados forem postados com sucesso.
		 * Se o retorno for igual a 1, então somente recarrego a janela.
		 */
	
		//Aqui eu seto uma variável javascript com o base_url do CodeIgniter, para usar nas funções do post.
		var base_url = "http://brunno.cf/registros/index.php/";
		/*
		 *	Esta função serve para preencher os campos do cliente na janela flutuante
		 * usando jSon.
		 */
		function carregaDados(id_registro){
			$.post(base_url+'registros/dados_registros',{
				id_registro : id_registro
			}, function (data){
				$('input[name=usuario]').val(data.usuario);
				$('select[name=empressa]').val(data.empressa);
				$('textarea[name=solicitacao]').val(data.solicitacao);
				$('input[name=id_registro]').val(data.id);//aqui eu seto a o input hidden com o id do registro, para que a edição funcione. Em cada tela aberta, eu seto o id do cliente.
			}, 'json'); 
		}
		
		function janelaExcluirRegistro(id_registro){
			$("button").click(function(){
				$("#link").attr("href", base_url+'registros/deletar/'+id_registro);
			});
			$('#modalExcluirRegistro').modal('show');
		}
				
		function janelaEditarRegistro(id_registro){
			ativaCampos();
			//antes de abrir a janela, preciso carregar os dados do cliente e preencher os campos dentro do modal
			carregaDados(id_registro);
			$('#modalEditarRegistro').modal('show');
		}
		
		function janelaExibirRegistro(id_registro){
			desativarCampos();
			//antes de abrir a janela, preciso carregar os dados do cliente e preencher os campos dentro do modal
			carregaDados(id_registro);  
			$('#modalExibirRegistro').modal('show');
		}
		
		function janelaConfirmarRegistro(id_registro){
			$('input[name=id_registro]').val(id_registro);
			$('#registrar_registro').attr("action", base_url+"registros/registrar/"+id_registro);
			$('#modalConfirmarRegistro').modal('show');
		}
				
	
		
		function ativaCampos(){
			//$("#lnkAlterar").attr("href", base_url+'registros/alterar');
			var mAlterar = document.getElementById("mAlterar");
			mAlterar.innerHTML = "Confirmar";
			mAlterar.setAttribute("class", 'btn btn-success');
			$("input[name=usuario]").prop("disabled", false);
			$("select[name=empressa]").prop("disabled", false);
			$("textarea[name=solicitacao]").prop("disabled", false);
		    $("#mAlterar").click(function (){$("#confirmar_editar_registro").submit();});
		};
		
		function desativarCampos(){ 
			var mAlterar = document.getElementById("mAlterar");
			mAlterar.innerHTML = "Alterar";
			mAlterar.setAttribute("class", 'btn btn-primary');
			$("input[name=usuario]").prop("disabled", true);
			$("select[name=empressa]").prop("disabled", true);
			$("textarea[name=solicitacao]").prop("disabled", true);
		}; 
		
		
		$(function(){
			$("#usuario").autocomplete({
			source: "../registros/autocomplete"   
			});
		});
		
		
		$(window).on("load resize ", function() {
		var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
		$('.tbl-header').css({'padding-right':scrollWidth});
		}).resize();
		
		function popup(url, title, w, h){
			// Fixes dual-screen position Most browsers Firefox
			var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
			var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

			var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
			var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

			var left = ((width / 2) - (w / 2)) + dualScreenLeft;
			var top = ((height / 2) - (h / 2)) + dualScreenTop;
			var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

			// Puts focus on the newWindow
			if (window.focus) {
				newWindow.focus();
			}
		}
		$(document).ready(function(){
			$("#btnExport").click(function(event) {
				$("#dados_a_enviar").val( $("<div>").append( $("#tabela").eq(0).clone()).html());
				$("#FormularioExportacao").submit();
			});
		});
		
		
		
		
		
		
		
		
		