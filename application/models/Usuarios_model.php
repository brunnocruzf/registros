<?php
Class Usuarios_model extends CI_Model{
	//acessando a tabela usuários e cadastrando os dados do array do controller
	public function salva($usuario){
		$this->db->insert("usuarios", $usuario);
	}

	public function buscaPorUsuarioESenha($usuario, $senha){
		//busca usuario e senha do  banco e joga na variavel $usuario
		$this->db->where("usuario", $usuario);
		$this->db->where("senha", $senha);
		$login = $this->db->get("usuarios")->row_array();
		return $login;
	}
	public function last_user(){
		$id = $this->db->insert_id();
		/*$this->db->select('nome');
		$this->db->from('usuarios');
		$this->db->where('id', "'"$id"'");
		return $this->db->get()->row_array();*/
	}
} 