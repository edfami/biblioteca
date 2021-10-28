<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Estudiantes_model");
	} 

	public function index()
		{

			$data = array(
				'usuarios' => $this->Estudiantes_model->getEstudiante(),
			);	
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");
			$this->load->view("admin/estudiantes/list",$data);
			$this->load->view("layouts/footer");

			//aqui hacemos el llamado de la vista 

		}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/estudiantes/add");
		$this->load->view("layouts/footer");	
	}
	public function store(){

		$nombres= $this->input->post("nombres");
		$apellido = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");
		$email = $this->input->post("email");
		$usuario = $this->input->post("username");
		$pass = $this->input->post("password");
		$rol_id = $this->input->post("rol_id");
		$estado =$this->input->post("estado");
		


		$data = array(
			'nombres' =>$nombres,
			'apellidos' => $apellido,
			'telefono' => $telefono,
			'email' => $email,
			'username' => $usuario,
			'password' => sha1($pass),	
			'rol_id' => $rol_id,
			'estado' => $estado
		);
		if ($this->Estudiantes_model->save($data)){

			redirect(base_url()."mantenimiento/estudiantes");
			
		}
		else{
			$this->session->set_flashdata("Error no se pudo guardar la info");
			redirect(base_url()."mantenimiento/estudiantes/add");
		}
	}
	
	public function edit($codigo){

		$data = array('usuarios' => $this->Estudiantes_model->getEstudiantes($codigo),);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/estudiantes/edit", $data);
		$this->load->view("layouts/footer");	
	}

	public function update(){
		$codigo=$this->input->post("id");
		$nombres= $this->input->post("nombres");
		$apellido = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");
		$email = $this->input->post("email");
		$usuario = $this->input->post("username");
		$pass = $this->input->post("password");
		$rol = $this->input->post("rol_id");


		$data = array(
			'nombres' =>$nombres,
			'apellidos' => $apellido,
			'telefono' => $telefono,
			'email' => $email,
			'username' => $usuario,
			'password' => $pass,
			'estado' => "1",
			'rol_id' => $rol
			
		);
		if ($this->Estudiantes_model->update($codigo, $data)){
			redirect(base_url()."mantenimiento/Estudiantes");
		}

		else {
			$this->session->set_flashdata("Error no se pudo actualizar la info");
			redirect(base_url()."mantenimiento/estudiantes/edit/".$codigo);
		}

	}
	public function view($codigo){

		 $data = array('usuarios' => $this->Estudiantes_model->getEstudiantes($codigo),);
		 $this->load->view("admin/estudiantes/view", $data);
	}

	public function delete($codigo){

		$data = array('estado' => "0",);

		$this->Estudiantes_model->update($codigo, $data);
		echo "mantenimiento/estudiantes";
	}
}