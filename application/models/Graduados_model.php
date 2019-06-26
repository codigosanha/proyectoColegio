<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graduados_model extends CI_Model {
	public function getGraduados(){
		$resultados = $this->db->get("datosgraduado");
		return $resultados->result();
	}

	public function getGraduado($Id_Graduado){
		$this->db->where("Id_Graduado",$Id_Graduado);
		$resultado = $this->db->get("datosgraduado");
		return $resultado->row();

	}
	public function save($data){
		return $this->db->insert("datosgraduado",$data);
	}

	public function update($Id_Graduado,$data){
		$this->db->where("Id_Graduado",$Id_Graduado);
		return $this->db->update("datosgraduado",$data);
	}

}
