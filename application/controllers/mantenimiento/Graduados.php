<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graduados extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Graduados_model");
	}

	public function index()
	{
		$data  = array(
			'datosgraduado' => $this->Graduados_model->getGraduados(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/graduados/list",$data);
		$this->load->view("layouts/footer");

	}
	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/graduados/add");
		$this->load->view("layouts/footer");
	}

public function store(){

		$Num_Carnet = $this->input->post("Num_Carnet");
		$NombreCompleto = $this->input->post("NombreCompleto");

		$this->form_validation->set_rules("Num_Carnet","Carnet","required|is_unique[datosgraduado.Num_Carnet]");

		if ($this->form_validation->run()) {

			$data  = array(
				'Num_Carnet' => $Num_Carnet,
				'NombreCompleto' => $NombreCompleto
			);

			if ($this->Graduados_model->save($data)) {
				redirect(base_url()."mantenimiento/Graduados");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/Graduados/add");
			}
		}
		else{
			$this->add();
		}


	}


	public function edit($Id_Graduado){
		$data  = array(
			'graduado' => $this->Graduados_model->getGraduado($Id_Graduado)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/graduados/edit", $data);
		$this->load->view("layouts/footer");
	}


	public function update(){
		$idgraduado = $this->input->post("idgraduado");
		$Num_Carnet = $this->input->post("Num_Carnet");
		$NombreCompleto = $this->input->post("NombreCompleto");

		$data  = array(
			'Num_Carnet' => $Num_Carnet,
			'NombreCompleto' => $NombreCompleto

);

	if ($this->Graduados_model->update($idgraduado,$data)) {
		redirect(base_url()."mantenimiento/Graduados");
	}
	else{
		$this->session->set_flashdata("error","No se pudo guardar la informacion");
		redirect(base_url()."mantenimiento/Graduados/edit/".$idgraduado);
	}
	}


	}
