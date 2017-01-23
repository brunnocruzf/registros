<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Registros extends CI_Controller{
	
	public function index(){
		autoriza();
		$this->load->model("Registros_model");
		//array que traz dados para serrem registrados
		$dados['registrar'] = $this->Registros_model->buscarRegistrar();
		//array que traz todos os dados que ja foram registrados.
		$dados['registrado'] = $this->Registros_model->buscarRegistrado();	
		//pega o usuário logado
		$dados['usuario'] = $this->session->userdata("usuario_logado");
		//Carrogo os helpers de url e form.
		$this->load->helper(array("url","form"));
		//carrego a view e passo o array com os dados 
		$this->load->view("registros/index.php", $dados);		
	}
	public function admin(){
		
	}
	
	public function teste(){
		$this->load->model("Registros_model");
		//array que traz dados para serrem registrados
		$dados['registrar'] = $this->Registros_model->buscarRegistrar();
		//array que traz todos os dados que ja foram registrados.
		$dados['registrado'] = $this->Registros_model->buscarRegistrado();		
		//Carrogo os helpers de url e form.
		$this->load->helper(array("url","form"));
		//carrego a view e passo o array com os dados 
		$this->load->view("registros/teste.php", $dados);		
	}
	
	public function todosRegistrados(){
		$this->load->model("Registros_model");
		$dados['registrado'] = $this->Registros_model->buscarRegistrado();		
		$this->load->helper(array("url","form"));
		//carrego a view e passo o array com os dados 
		$this->load->view("/registrados.php", $dados);		
	}
		
	public function novo(){
		//carrega biblioteca do form_validation
		$this->load->library("form_validation");
		//define regras da validação
		$this->form_validation->set_rules("newUsuario", "Usuario", "trim|min_length[3]");
		$this->form_validation->set_rules("newEmpressa", "Empressa", "trim|required");
		$this->form_validation->set_rules("newSolicitacao", "Solicitacao", "trim|required|min_length[3]");
		//formatação de retorno do campo com erro
		$this->form_validation->set_error_delimiters("<p  class='alert2 alert-danger'>", "</p>");
		//executa a validação 
		$sucesso = $this->form_validation->run();
		//verifica se o campo usuário não esta vazio, caso estiver vazio coloca "xxx".
		$user = $this->input->post("newUsuario");
		if(empty($user==true)){$user = "xxx";}
		//caso campos sejam validados salva no banco
		if($sucesso){
		$usuarioLogado = $this->session->userdata("usuario_logado");
		$registro = array(
			 "usuario" => $user,
			 "empressa" => $this->input->post("newEmpressa"),
			 "solicitacao" => $this->input->post("newSolicitacao"),
			 "data"=> date("o-n-d"),
			 "id_usuario"=>$usuarioLogado["id"]
		); 
		$this->load->model("Registros_model");
		$this->Registros_model->salva($registro);
		$this->session->set_flashdata('success', 'Salvo com sucesso!');
		redirect('Registros');
		}else{
			$this->load->model("Registros_model");
			//array que traz dados para serrem registrados
			$dados['registrar'] = $this->Registros_model->buscarRegistrar();
			//array que traz todos os dados que ja foram registrados.
			$dados['registrado'] = $this->Registros_model->buscarRegistrado();	
			//pega o usuário logado
			$dados['usuario'] = $this->session->userdata("usuario_logado");
			//Carrogo os helpers de url e form.
			$this->load->helper(array("url","form"));
			//carrego a view e passo o array com os dados 
			$this->load->view("registros/index.php", $dados);
		}
	}
	public function registrar($id){
		$this->load->model("Registros_model");
		$numeroChamado = $this->input->post("inpChamado");
		if(empty($numeroChamado==true)){$numeroChamado = "---";}
		$this->Registros_model->registrar($id, $numeroChamado);
		$this->session->set_flashdata('success', 'Registrado com sucesso!');
		redirect('Registros');
	}
	
	public function dados_registros(){
		//recebo o id_registro da view para trazer os dados somente daquele registro
		$id_registro = $this->input->post("id_registro");
		
		//carrego o model responsável pelos servico
		$this->load->model("Registros_model", "buscaExibir");
		 
		//chamo a função buscaExibir() dentro do model que me traz somente os dados de um serviço, pois estou passando o id_servicos como parãmetro
		$consulta = $this->buscaExibir->buscaExibir($id_registro);
		
		//antes de continuar, verifico se alguma informação foi retornada, para não dar erro.
		if ($consulta->num_rows() == 0) {
			die("Serviço não encontrado");
		}
		
		//como eu vou retornar os dados para a view em formato jSon, aqui eu crio os índices para serem acessados dentro da função $.post()
		$array_registros = array(
			"id" => $consulta->row()->id,
			"usuario" => $consulta->row()->usuario,
			"empressa" => $consulta->row()->empressa,
			"solicitacao" => $consulta->row()->solicitacao			
		);
		
		/*
		 * Após os índices criados para o formato jSon, dou um echo no jsonEcode da array acima.
		 */
		echo json_encode($array_registros);
	}
	
	function data(){
		echo  date("o-n-d");
		//date("d-n-o");
	} 
	
	public function deletar($id){
		$this->load->model("registros_model"); 
	    $deletar = $this->registros_model->deletar($id);
		if($deletar){
			$this->session->set_flashdata('success', 'Registro deletado com sucesso!');
		}else{
			$this->session->set_flashdata('fail', '<b>Erro ao deletar!</b>!'); 
		}
		redirect('Registros');  
	} 
	
	public function alterar(){
		//Carrego o model clientes
		$this->load->model("Registros_model", "buscaRegistros");
		$id_registro = $this->input->post("id_registro");
		$usuario = $this->input->post("usuario");
		$empressa = $this->input->post("empressa");
		$solicitacao = $this->input->post("solicitacao");
		
		//Aqui eu seto cada campo da tabela com seu respectivo valor para o update no model.
		$dados_registro = array(
			"usuario" => $usuario,
			"empressa" => $empressa,
			"solicitacao" => $solicitacao
		);
		//Agora eu chamo a função salvar() dentro do model passando o id_cliente e os dados do cliente como parâmetro
		//Se tiver sucesso, então retorno com o código 1, pois recupero as informações via ajax na view.
		$this->session->set_flashdata('success', 'Registro alterado com sucesso!');
		if ($this->buscaRegistros->alterar($id_registro, $dados_registro))
			echo 1;
		else
			echo 0;
	}
	public function modalExibirRegistro(){
		$this->load->view("registros/modalExibirRegistro.php");
	}
	
	function autocomplete(){
		$this->load->model('Registros_model');
		if (isset($_GET['term'])){
		  $q = strtolower($_GET['term']);
		  $this->Registros_model->get_registro($q); 
		} 
	}
	
	 public function filtrar(){ 
        $this->load->model("registros_model");
        $dados['registrado'] = $this->registros_model->filtrar();
        $this->load->helper(array("url", "form"));
        $this->load->view("registros/registrados.php", $dados);
    }	 
	
	function exportar(){
		header("Content-type: application/vnd.ms-excel; name='excel'");
		header("Content-Disposition: filename=Registros.xls");
		header("Pragma: no-cache");
		header("Expires: 0");
		echo $_POST['dados_a_enviar'];
	}
}