<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_DashboardFE extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getDatosEstudiosInversion()
    {
        // TODO: para el reporte de notificacion

        $funcion = $this->db->query("exec sp_DatosNotificacionFE");//listar EVAL
        if ($funcion->num_rows() > 0) {
            return $funcion->result();
        } else {
            return false;
        }
    }
    function GetAprobadosEstudio()
    {
        $estudios = $this->db->query(" select ETAPAS_FE.denom_etapas_fe, count(ETAPAS_FE.denom_etapas_fe) AS Cantidadpip from ETAPAS_FE inner join
        ETAPA_ESTUDIO ON ETAPA_ESTUDIO.id_etapa_fe=ETAPAS_FE.id_etapa_fe inner join ESTUDIO_INVERSION on
        ESTUDIO_INVERSION.id_est_inv=ETAPA_ESTUDIO.id_est_inv group by ETAPAS_FE.denom_etapas_fe");//listar EVAL
        if ($estudios->num_rows()> 0) {
            return $estudios->result();
        } else {
            return false;
        }
    }
    function EstudioInvPorTipoEstudio()
    {
        $tipo = $this->db->query("select  nombre_tipo_est , COUNT (nombre_est_inv) as CantidadEstudio  from TIPO_ESTUDIO LEFT JOIN ESTUDIO_INVERSION ON TIPO_ESTUDIO.id_tipo_est=ESTUDIO_INVERSION.id_tipo_est GROUP BY nombre_tipo_est");
        if ($tipo->num_rows()> 0) {
            return $tipo->result();
        } else {
            return false;
        }
    }
    function EstudioInvPorProvincia()
    {
        $EstudioProv = $this->db->query("select provincia, count(nombre_est_inv) as CantidadEstudio from UBIGEO LEFT JOIN UBIGEO_PI ON UBIGEO.id_ubigeo=UBIGEO_PI.id_ubigeo LEFT JOIN PROYECTO_INVERSION on UBIGEO_PI.id_pi=PROYECTO_INVERSION.id_pi LEFT JOIN ESTUDIO_INVERSION on PROYECTO_INVERSION.id_pi=ESTUDIO_INVERSION.id_pi where UBIGEO.id_ubigeo between '030100' and '030714' group by provincia");
        if ($EstudioProv ->num_rows()> 0) {
            return $EstudioProv ->result();
        } else {
            return false;
        }
    }
    function TipoGastoMontos()
    {
        $TipoGastoMonto = $this->db->query("");
        if ($TipoGastoMonto ->num_rows()> 0) {
            return $TipoGastoMonto ->result();
        } else {
            return false;
        }
    }

}
