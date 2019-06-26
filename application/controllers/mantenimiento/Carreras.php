<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carreras extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Carreras_model");
	}


	public function index()
	{
		$data  = array(
			'carreras' => $this->Carreras_model->getCarreras(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/carreras/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/carreras/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$car = $this->input->post("Carrera");

		$this->form_validation->set_rules("Carrera", "Carrera", "required|is_unique[carreras.Carrera]");
 				if($this->form_validation->run()){

	$data  = array(
		'Carrera' => $car

	);

	if ($this->Carreras_model->save($data)) {
		redirect(base_url()."mantenimiento/Carreras");
	}
	else{
		$this->session->set_flashdata("error","No se pudo guardar la informacion");
		redirect(base_url()."mantenimiento/carreras/add");
	}

}
else{
	$this->add();
}

	}

	public function edit($Id_Carrera){
		$data  = array(
			'car' => $this->Carreras_model->getCarrera($Id_Carrera),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/carreras/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idCarrera = $this->input->post("idCarrera");
		$Carrera = $this->input->post("Carrera");

$CarreraActual = $this->Carreras_model->getCarrera($idCarrera);


if($Carrera == $CarreraActual->Carrera){
	$unique = '';
}
else {
	$unique = '|is_unique[carreras.Carrera]';
}
$this->form_validation->set_rules("Carrera", "Carrera", "required".$unique);
			if($this->form_validation->run()){

				$data = array(
					'Carrera' => $Carrera

				);

				if ($this->Carreras_model->update($idCarrera,$data)) {
					redirect(base_url()."mantenimiento/Carreras");
				}
				else{
					$this->session->set_flashdata("error","No se pudo actualizar la informacion");
					redirect(base_url()."mantenimiento/grados/edit/".$idCarrera);
				}
			}
			else{
				$this->edit($idCarrera);
			}

	}

	/*public function view($Id_Carrera){
		$data  = array(
			'car' => $this->Carreras_model->getCarrera($Id_Carrera),
		);
		$this->load->view("admin/carreras/view",$data);
	} */

	public function delete($Id_Carrera){

  $this->Carreras_model->delete($Id_Carrera);
  redirect(base_url()."mantenimiento/carreras");
 }

}
