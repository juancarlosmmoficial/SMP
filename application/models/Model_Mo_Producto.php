<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Mo_Producto extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function buscarProyecto($codigoUnico)
	{
		$this->db->select('PROYECTO_INVERSION.*');
		$this->db->from('PROYECTO_INVERSION');
		$this->db->where('PROYECTO_INVERSION.codigo_unico_pi',$codigoUnico);
		return $this->db->get()->result();
	}

	function ProyectoPorId($idPi)
	{
		$this->db->select('PROYECTO_INVERSION.*');
		$this->db->from('PROYECTO_INVERSION');
		$this->db->where('PROYECTO_INVERSION.id_pi',$idPi);
		return $this->db->get()->result();
	}

	function insertar($data)
	{
		$this->db->insert('MO_PRODUCTO',$data);
		return $this->db->insert_id();
	}

	function listaProyecto()
	{
		$this->db->select('PROYECTO_INVERSION.id_pi, PROYECTO_INVERSION.codigo_unico_pi, PROYECTO_INVERSION.nombre_pi, PROYECTO_INVERSION.costo_pi');
		$this->db->from('MO_PRODUCTO');
		$this->db->join('PROYECTO_INVERSION','MO_PRODUCTO.id_pi = PROYECTO_INVERSION.id_pi');
		$this->db->group_by('PROYECTO_INVERSION.id_pi, PROYECTO_INVERSION.codigo_unico_pi, PROYECTO_INVERSION.nombre_pi, PROYECTO_INVERSION.costo_pi');
		$query = $this->db->get();
		return $query->result();
	}
}