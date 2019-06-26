<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VistaConstancia_model extends CI_Model
 {
	public function getVistaConstancias(){
		$this->db->select("title.*,
    car.Carrera as carrera,
    gradu.Num_Carnet as Carnet,
    gradu.NombreCompleto as nombre");

		$this->db->from("titulos title");
		$this->db->join("carreras car", "title.Id_Carrera = car.Id_Carrera");
		$this->db->join("datosgraduado gradu", "title.Id_Graduado = gradu.Id_Graduado");
		$resultados = $this->db->get();
    if($resultados->num_rows()>0){
      return $resultados->result();
    } else {
      return false;
    }

	}


  public function getVistaConstancia($Id_Titulo){

    $this->db->select("title.*,
    gradu.Num_Carnet as Carnet,
    gradu.NombreCompleto as nombre,
    car.Carrera as carrera,");
		$this->db->from("titulos title");
		$this->db->join("carreras car", "title.Id_Carrera = car.Id_Carrera");
		$this->db->join("datosgraduado gradu", "title.Id_Graduado = gradu.Id_Graduado");

  	$this->db->where("title.Id_Titulo",$Id_Titulo);

  	$resultado = $this->db->get();
  		return $resultado->row();
  	}
}
