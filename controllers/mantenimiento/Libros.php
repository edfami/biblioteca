<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libros extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Libros_model");
	}

	public function index()
	{

		$data = array(
			'libros' => $this->Libros_model->getLibro(),
		);	
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/libros/list",$data);
		$this->load->view("layouts/footer");

		//aqui hacemos el llamado de la vista 

	}

	public function add(){


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/libros/add");
		$this->load->view("layouts/footer");		
	}

	public function store(){

		$nombre_libro = $this->input->post("nombre_libro");
		$anho = $this->input->post("anho");
		$autor = $this->input->post("autor");
		$editorial = $this->input->post("editorial");
		$categoria = $this->input->post("categoria");
		$f_ingreso = $this->input->post("f_ingreso");
		
		

		$data = array(
			'nombre_libro' =>$nombre_libro,
			'anho' => $anho,
			'autor' => $autor,
			'editorial' => $editorial,
			'categoria' => $categoria,
			'f_ingreso' => $f_ingreso,
			'estado' => "1"
		);

		if ($this->Libros_model->save($data)){

			redirect(base_url()."mantenimiento/libros");
			
		}
		else{
			$this->session->set_flashdata("Error no se pudo guardar la info");
			redirect(base_url()."mantenimiento/libros/add");
		}
	}



	public function edit($codigo){

		$data = array('libro' => $this->Libros_model->getLibros($codigo),);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/libros/edit", $data);
		$this->load->view("layouts/footer");	
	}

	public function update(){
		$codigo = $this->input->post("codigo_libro");
		$nombre_libro = $this->input->post("nombre_libro");
		$anho = $this->input->post("anho");
		$autor = $this->input->post("autor");
		$editorial = $this->input->post("editorial");
		$categoria = $this->input->post("categoria");
		$f_ingreso = $this->input->post("f_ingreso");

		$data = array(
			'nombre_libro' =>$nombre_libro,
			'anho' => $anho,
			'autor' => $autor,
			'editorial' => $editorial,
			'categoria' => $categoria,
			'f_ingreso' => $f_ingreso
			
		);

		if ($this->Libros_model->update($codigo, $data)){
			redirect(base_url()."mantenimiento/libros");
		}

		else {
			$this->session->set_flashdata("Error no se pudo actualizar la info");
			redirect(base_url()."mantenimiento/libros/edit/".$codigo);
		}
	}

	public function view($codigo){

		 $data = array('libro' => $this->Libros_model->getLibros($codigo),);
		 $this->load->view("admin/libros/view", $data);
	}

	public function delete($codigo){

		$data = array('estado' => "0",);

		$this->Libros_model->update($codigo, $data);
		echo "mantenimiento/libros";
	}
}
