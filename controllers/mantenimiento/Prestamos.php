<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prestamos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Prestamos_model");
    }

    public function index() {

        $data = array(
            'prestamo' => $this->Prestamos_model->getPrestamo(),
        );
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/prestamos/list", $data);
        $this->load->view("layouts/footer");

        //aqui hacemos el llamado de la vista 
    }

    public function add() {

        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/prestamos/add");
        $this->load->view("layouts/footer");
    }

    public function store() {
        
        $estudiante = $this->input->post("Estudiante");
        $fecha_i = $this->input->post("fecha_inicio");
        $fecha_f = $this->input->post("fecha_final");
        $montoDia = $this->input->post("montoxDia");
        $monto = $this->input->post("monto");
        $dias = $this->input->post("diasPrestados");
        $libro = $this->input->post("libro");
        
        
        $data = array(
            'Estudiante' => $estudiante,
            'fecha_inicio' => $fecha_i,
            'fecha_final' => $fecha_f,
            'montoxDia' => $montoDia,
            'monto' =>$monto,
            'diasPrestados' => $dias,
            'libro' => $libro,
            'estado' => "1"
        );
        if ($this->Prestamos_model->save($data)) {

            redirect(base_url() . "mantenimiento/prestamos");
        } else {
            $this->session->set_flashdata("Error no se pudo guardar la info");
            redirect(base_url() . "mantenimiento/prestamos/add");
        }
    }

    public function edit($codigo) {

        $data = array('prestamo' => $this->Prestamos_model->getPrestamos($codigo),);
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/prestamos/edit", $data);
        $this->load->view("layouts/footer");
    }

    public function update() {
        
        $codigo = $this->input->post("codigo");
        $estudiante = $this->input->post("Estudiante");
        $fecha_i = $this->input->post("fecha_inicio");
        $fecha_f = $this->input->post("fecha_final");
        $montoDial = $this->input->post("montoxDia");
        $monto = $this->input->post("monto");
        $dias = $this->input->post("diasPrestados");
        $libro = $this->input->post("libro");
        
        $data = array(
            
            'codigo' => $codigo,
            'Estudiante' => $estudiante,
            'fecha_inicio' => $fecha_i,
            'fecha_final' => $fecha_f,
            'montoxDia' => $montoDial,
            'monto' => $monto,
            'diasPrestados' => $dias,
            
            
           
        );
        
        if ($this->Prestamos_model->update($codigo, $data)) {

            redirect(base_url() . "mantenimiento/prestamos");
        } else {
            $this->session->set_flashdata("Error no se pudo guardar la info");
            redirect(base_url() . "mantenimiento/prestamos/add" . $codigo);
        }
    }

    public function view($codigo) {

        $data = array('prestamo' => $this->Prestamos_model->getPrestamos($codigo),);
        $this->load->view("admin/prestamos/view", $data);
    }

    public function delete($codigo) {

        $data = array('estado' => "0",);

        $this->Prestamos_model->update($codigo, $data);
        echo "mantenimiento/prestamos";
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

