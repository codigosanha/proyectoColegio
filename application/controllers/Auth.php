<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}
	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url()."dashboard");
		}
		else{
			$this->load->view("admin/login");
		}


	}

	public function login(){
		$Usuario = $this->input->post("Usuario");
		$Password = $this->input->post("Password");
		$res = $this->Usuarios_model->login($Usuario, $Password);

		if (!$res) {
		$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url());
		}
		else{
			$data  = array(
				'Id_Login' => $res->Id_Login,
				'NombreUsuario' => $res->NombreUsuario,
			//	'TipoUsuario' => $res->TipoUsuario,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url()."dashboard");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
