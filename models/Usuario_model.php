<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function getUsuario(){
		$this->db->where("rol_id", "3");
		$resultados = $this->db->get("usuarios");
		return $resultados->result();

		/* este metodo extrae todos los datos de la tabla y manda la peticion al controler */
	}

	
	public function save($data){
		return $this->db->insert("usuarios", $data);

	}
	public function getUsuarios($codigo){
		$this->db->where("id",$codigo);
		$resultado = $this->db->get("usuarios");
		return $resultado->row();
	}
	public function update($codigo,$data){
		$this->db->where("id", $codigo);
		return $this->db->update("usuarios", $data);
	}
}