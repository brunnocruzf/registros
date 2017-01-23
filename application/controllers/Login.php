<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$this->load->view("login/index.php");
	}

	public function autenticar(){
	  //carrega biblioteca do form_validation
      $this->load->library("form_validation");
      //define regras da validação
      $this->form_validation->set_rules("usuario", "usuario", "trim|required|min_length[3]");
      $this->form_validation->set_rules("senha", "senha", "trim|required|min_length[3]");
      //formatação de retorno do campo com erro
      $this->form_validation->set_error_delimiters("<h6 class='alert alert-danger'>", "</h6>");
      //executa a validação
      $sucesso = $this->form_validation->run();

      //caso formulario seja validado, loga no sistema
      if($sucesso){
		$this->load->model("usuarios_model");
		$usuario = $this->input->post("usuario");
		$senha = md5($this->input->post("senha"));
		$login = $this->usuarios_model->buscaPorUsuarioESenha($usuario, $senha);
		if($login){
			$this->session->set_userdata("usuario_logado" , $login);
			// set_flashdata exibe mensagem somente para uma requisição
			$this->session->set_flashdata("success", "Logado com sucesso");
			$dados = array("mensagem" => "Logado com sucesso");
			redirect(base_url('/index.php/Registros'));
		} else {
			$this->session->set_flashdata("danger", "Usuario ou senha inválidos!");
			redirect('/');
		}
		}else{
			$this->load->view("login/index");
		}
	} 

	public function logout(){
		$this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata("success", "Deslogado com sucesso");
		redirect('/');
	}
}