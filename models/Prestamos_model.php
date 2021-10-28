<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamos_model extends CI_Model {

	public function getPrestamo(){
		$this->db->where("estado", "1");
		$resultados = $this->db->get("prestamo");
		return $resultados->result();

		/* este metodo extrae todos los datos de la tabla y manda la peticion al controler */
	}

	
	public function save($data){
		return $this->db->insert("prestamo", $data);

	}
	public function getPrestamos($codigo){
		$this->db->where("codigo",$codigo);
		$resultado = $this->db->get("prestamo");
		return $resultado->row();
	}
	public function update($codigo,$data){
		$this->db->where("codigo", $codigo);
		return $this->db->update("prestamo", $data);
	}
}