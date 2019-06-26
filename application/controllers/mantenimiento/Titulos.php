<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Titulos extends CI_Controller {

	public function __construct(){
		parent::__construct();
    if (!$this->session->userdata("login")) {
      redirect(base_url());
    }
		$this->load->model("Titulos_model");
    $this->load->model("Carreras_model");
    $this->load->model("Graduados_model");
	}

	public function index()
	{
		$data  = array(
			'titulos' => $this->Titulos_model->getTitulos()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/titulos/list",$data);
		$this->load->view("layouts/footer");

	}
	public function add(){

		$data = array(

		"datosgraduado" => $this->Graduados_model->getGraduados(),
		"carreras" => $this->Carreras_model->getCarreras()
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/titulos/add",$data);
		$this->load->view("layouts/footer");
	}
	public function store(){

		$nombregraduado = $this->input->post("nombregraduado");
		$Num_Acta = $this->input->post("Num_Acta");
		$Anio = $this->input->post("Anio");
		$NumeroFolio = $this->input->post("NumeroFolio");
		$LibroActaGrad = $this->input->post("LibroActaGrad");
		$FechaGraduacion = $this->input->post("FechaGraduacion");
		$carrera = $this->input->post("carrera");


		$data  = array(

			'Id_Graduado' => $nombregraduado,
			'Num_Acta' => $Num_Acta,
			'Anio' => $Anio,
			'NumeroFolio' => $NumeroFolio,
			'LibroActaGrad' => $LibroActaGrad,
			'FechaGraduacion' => $FechaGraduacion,
			'Id_Carrera' => $carrera


		);

		if ($this->Titulos_model->save($data)) {
			redirect(base_url()."mantenimiento/Titulos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/Titulos/add");
		}
	}
	public function edit($Id_Titulo){
		$data  = array(
			'titulos' => $this->Titulos_model->getTitulo($Id_Titulo),
			"carreras" => $this->Carreras_model->getCarreras(),
			"datosgraduado" => $this->Graduados_model->getGraduados()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Titulos/edit",$data);
		$this->load->view("layouts/footer");
	}


	public function update(){
		$idtitulouni = $this->input->post("idtitulouni");
		$nombregraduado = $this->input->post("nombregraduado");
		$Num_Acta = $this->input->post("Num_Acta");
		$Anio = $this->input->post("Anio");
		$NumeroFolio = $this->input->post("NumeroFolio");
		$LibroActaGrad = $this->input->post("LibroActaGrad");
		$FechaGraduacion = $this->input->post("FechaGraduacion");
		$carrera = $this->input->post("carrera");


		$data = array(
			'Id_Graduado' => $nombregraduado,
			'Num_Acta' => $Num_Acta,
			'Anio' => $Anio,
			'NumeroFolio' => $NumeroFolio,
			'LibroActaGrad' => $LibroActaGrad,
			'FechaGraduacion' => $FechaGraduacion,
			'Id_Carrera' => $carrera
		);

		if ($this->Titulos_model->update($idtitulouni,$data)) {
			redirect(base_url()."mantenimiento/Titulos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/Titulos/edit/".$idtitulouni);
		}

	}

}
