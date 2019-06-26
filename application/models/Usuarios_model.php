<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function login($Usuario, $Password){
		$this->db->where("Usuario", $Usuario);
		$this->db->where("Password", $Password);

		$resultados = $this->db->get("inicio");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
}
