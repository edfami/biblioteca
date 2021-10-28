<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuario_model");
	} 

	public function index()
		{

			$data = array(
				'usuarios' => $this->Usuario_model->getUsuario(),
			);	
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside");
			$this->load->view("admin/usuarios/list",$data);
			$this->load->view("layouts/footer");

			//aqui hacemos el llamado de la vista 

		}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add");
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
		if ($this->Usuario_model->save($data)){

			redirect(base_url()."mantenimiento/usuarios");
			
		}
		else{
			$this->session->set_flashdata("Error no se pudo guardar la info");
			redirect(base_url()."mantenimiento/usaurios/add");
		}
	}
	
	public function edit($codigo){

		$data = array('usuarios' => $this->Usuario_model->getUsuarios($codigo),);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/edit", $data);
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
		if ($this->Usuario_model->update($codigo, $data)){
			redirect(base_url()."mantenimiento/usuarios");
		}

		else {
			$this->session->set_flashdata("Error no se pudo actualizar la info");
			redirect(base_url()."mantenimiento/usuarios/edit/".$codigo);
		}

	}
	public function view($codigo){

		 $data = array('usuarios' => $this->Usuario_model->getUsuarios($codigo),);
		 $this->load->view("admin/usuarios/view", $data);
	}

	public function delete($codigo){

		$data = array('estado' => "0",);

		$this->Usuario_model->update($codigo, $data);
		echo "mantenimiento/usuarios";
	}
}