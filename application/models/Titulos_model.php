<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Titulos_model extends CI_Model
 {
	public function getTitulos(){
		$this->db->select("title.*,car.Carrera as carrera, gradu.NombreCompleto as nombregraduado");
		$this->db->from("titulos title");
		$this->db->join("carreras car", "title.Id_Carrera = car.Id_Carrera");
		$this->db->join("datosgraduado gradu", "title.Id_Graduado = gradu.Id_Graduado");

		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getTitulo($Id_Titulo){
		$this->db->where("Id_Titulo",$Id_Titulo);
		$resultado = $this->db->get("titulos");
		return $resultado->row();

	}
	public function save($data){
		return $this->db->insert("titulos",$data);
	}
	public function update($Id_Titulo,$data){
		$this->db->where("Id_Titulo",$Id_Titulo);
		return $this->db->update("titulos",$data);
	}

}
