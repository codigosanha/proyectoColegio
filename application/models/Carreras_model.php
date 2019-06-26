<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carreras_model extends CI_Model {

	public function getCarreras(){
	//	$this->db->where("estado","1");
		$resultados = $this->db->get("carreras");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("carreras",$data);
	}
	public function getCarrera($Id_Carrera){
		$this->db->where("Id_Carrera",$Id_Carrera);
		$resultado = $this->db->get("carreras");
		return $resultado->row();

	}

	public function update($Id_Carrera,$data){
		$this->db->where("Id_Carrera",$Id_Carrera);
		return $this->db->update("carreras",$data);
	}


	public function delete($Id_Carrera){
  $this->db->where("Id_Carrera",$Id_Carrera);
  return $this->db->delete("carreras");
 }
}
