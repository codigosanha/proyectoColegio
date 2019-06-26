<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VistaConstancia extends CI_Controller {

	public function __construct(){
		parent::__construct();
    if (!$this->session->userdata("login")) {
      redirect(base_url());
    }
		$this->load->model("Titulos_model");
    $this->load->model("Carreras_model");
    $this->load->model("Graduados_model");
    $this->load->model("VistaConstancia_model");
	}

	public function index()
	{
		$data  = array(
			'titulos' => $this->VistaConstancia_model->getVistaConstancias()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/vistaconstancia/list",$data);
		$this->load->view("layouts/footer");

	}
	public function view(){
		$idtitulo = $this->input->post("Id_Titulo");
		$numero = $this->input->post("numero");
		$year = $this->input->post("year");
		$data = array(
			"titulos" => $this->VistaConstancia_model->getVistaConstancia($idtitulo),
			"numero" => $numero,
			"year" => $year
		//	"carreras" => $this->VistaConstancia_model->getCarre($idtitulo)
		);
		$this->load->view("admin/vistaconstancia/view", $data);
	}
}
