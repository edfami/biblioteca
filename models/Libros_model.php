<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libros_model extends CI_Model {

	public function getLibro(){
		$this->db->where("estado", "1");
		$resultados = $this->db->get("libro");
		return $resultados->result();

		/* este metodo extrae todos los datos de la tabla y manda la peticion al controler */
	}

	public function save($data){
		return $this->db->insert("libro", $data);

	}

	public function getLibros($codigo){

		$this->db->where("codigo", $codigo);
		$resultado = $this->db->get("libro");
		return $resultado->row();
	}

	public function update($codigo, $data){
		$this->db->where("codigo", $codigo);
		return $this->db->update("libro", $data);

	}
}


/* aqui solo hacemos el acceso a la base de datos y la tabla y llamar al controlador */
/*  */
/* https://www.youtube.com/watch?v=NuxURLdI6EI&list=PLsk-U_4GoSVMz3OzYGN7ZJWOm-rx2FvwS&index=6 */