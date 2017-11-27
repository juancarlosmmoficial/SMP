<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_RubroE extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


/***********************************************************************************/
    public function Insertar_rubro($data)
    {
          $this->db->insert('RUBRO_PI', $data);
          return $this->db->affected_rows() > 0;
    }
/***********************************************************************************/




//----------------------METODOS PARA EL MANTENIMIENTO DE RUBRO DE EJECUCION--------------------------------------------
    //AGREGAR UN RUBRO DE EJECUCION
    public function AddRubroE($listaFuenteFinanc, $txt_NombreRubroE)
    {
        $this->db->query("execute sp_Rubro_c'" . $listaFuenteFinanc . "','" . $txt_NombreRubroE . "'");
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    //FIN AGREGAR UN RUBRO DE EJECUCION

    //LISTAR RUBRO DE EJECUCION
    public function GetRubroE()
    {
        $rubroe = $this->db->query("execute sp_Rubro_r"); //PROCEDIMIENTO DE LISTAR LOS RUBROS DE EJECUCION
        if ($rubroe->num_rows() > 0) {
            return $rubroe->result();
        } else {
            return false;
        }

    }
    //FIN LISTAR UN RUBRO DE EJECUCION
    public function GetRubroId($id_fuente_finan)
    {
        $rubroF = $this->db->query("execute sp_FuenteFinanRubro_r'" . $id_fuente_finan . "'"); //listar de division funcional
        if ($rubroF->num_rows() > 0) {
            return $rubroF->result();
        } else {
            return null;
        }
    }
    //MODIFICAR DATOS DE LOS RUBROS
    public function UpdateRubroE($id_rubro_ejecucion, $nombre_ejecucion)
    {
        $this->db->query("execute sp_Rubro_u '" . $id_rubro_ejecucion . "','" . $nombre_ejecucion . "'");
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
    //FIN MODIFICAR DATOS DE LOS RUBROS
    //--------------FIN DE METODOS PARA EL MANTENIMIENTO DE RUBRO DE EJECUCION--------------------------------------------
}
