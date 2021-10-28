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
		//$this->load->view("layouts/aside");
		$this->load->view("admin/plebeyo/list",$data);
		$this->load->view("layouts/footer");

		//aqui hacemos el llamado de la vista 
        }
}
        ?>