<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ET_Etapa_Ejecucion extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function ETEtapaEjecucion_Listar($opcion)
	{
		$ETEtapaEjecucion_Listar=$this->db->query("execute sp_Gestionar_ET_Etapa_Ejecucion @Opcion='".$opcion."'");
	    
	    return $ETEtapaEjecucion_Listar->result();
	}

	function insertar($opcion,$txtDescripcionEtapa)
	{
		$ETEtapaEjecucion=$this->db->query("execute sp_Gestionar_ET_Etapa_Ejecucion @Opcion='".$opcion."',@desc_etapa_et='".$txtDescripcionEtapa."'");
		
		return true;
	} 
	function nombreEtapaEjecucion($id_etapa_et){
		$ETEtapaEjecucion_Listar=$this->db->query("SELECT id_etapa_et,desc_etapa_et FROM   ET_ETAPA_EJECUCION where id_etapa_et='".$id_etapa_et."'");
	    
	    return $ETEtapaEjecucion_Listar->result()[0];
	}
	function editar($opcion,$hdIdEtapaFE,$txtDescripcionEtapa)
	{
		$ETEtapaEjecucion=$this->db->query("execute sp_Gestionar_ET_Etapa_Ejecucion @Opcion='".$opcion."',@id_etapa_et='".$hdIdEtapaFE."',@desc_etapa_et ='".$txtDescripcionEtapa."'");
	    
	    return $ETEtapaEjecucion->result();
	}
	function ValidarDescripcionEtapa($txtDescripcionEtapa)
	{
		$ETEtapaEjecucion=$this->db->query("select * from ET_ETAPA_EJECUCION where replace(desc_etapa_et, ' ', '')=replace('".$txtDescripcionEtapa."', ' ', '')");
		
		return $ETEtapaEjecucion->result();
	}
	function ValidarDescripcionEtapaEditar($hdIdEtapaFE,$txtDescripcionEtapa)
	{
		$tipoGastoFE=$this->db->query("select * from ET_ETAPA_EJECUCION where id_etapa_et!='".$hdIdEtapaFE."' and replace(desc_etapa_et, ' ', '')=replace('".$txtDescripcionEtapa."', ' ', '')");

		return $tipoGastoFE->result();
	}


}