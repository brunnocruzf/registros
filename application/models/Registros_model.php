<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Registros_model extends CI_Model{
	
	public function buscarRegistrar(){ 	
		$usuarioLogado = $this->session->userdata("usuario_logado");
		$this->db->order_by('id', 'desc');		
		return $this->db->get_where("registros", array("status" => 0, "id_usuario" => $usuarioLogado['id']))->result_array();	
	}
	public function buscarRegistrado(){ 
		$usuarioLogado = $this->session->userdata("usuario_logado");
		$this->db->order_by('id', 'desc');	
		return $this->db->get_where("registros", array("status" => 1, "id_usuario" => $usuarioLogado['id']))->result_array();
	}
	public function admBuscaRegistrar(){
		
	}
	public function admBuscaRegistrados(){
		
	}
	
	public function salva ($registro){
		$this->db->insert("registros", $registro);
	}
	public function registrar($id, $numeroChamado){	
		if($this->db->where('id', $id)->update("registros", array("status" => 1, "chamado"=>$numeroChamado))) 	
			return true;	
		else	 
			return false;	  
	}
	public function buscar($id){	
		return $this->db->get_where("registos", array("id" => $id))->row_array();	
	}			
	public function deletar($id){	
		$this->db->where('id', $id); 
		return $this->db->delete('registros');	
	}
	public function buscaExibir($id_servicos = null) {
		if ($id_servicos != null) {
			$this->db->where("id", $id_servicos);
		}
		$this->db->order_by("usuario");
		return $this->db->get("registros");
	}
	public function alterar($id_registros = null, $dados_registros = null){	
		if ($this->db->where("id", $id_registros)->update("registros", $dados_registros))
			return true;
		else
			return false;
	}
		
	function get_registro($q){
		$this->db->select('usuario');
		$this->db->like('usuario', $q);
		$query = $this->db->get('registros');
		if($query->num_rows() > 0){
		  foreach ($query->result_array() as $row){
			$row_set[] = htmlentities(stripslashes($row['usuario'])); //build an array
		  }
		  echo json_encode($row_set); //manda o array formatado em json
		}
	}
	
	public function filtrar(){
		$termo = $this->input->post('filtrar');
		$coluna = $this->input->post('sltFiltrar');
		$this->db->select('*');
		$this->db->like($coluna, $termo);
		$this->db->order_by('id', 'desc');	
	 	return $this->db->get_where("registros", array("status"=>1))->result_array();
	}
}