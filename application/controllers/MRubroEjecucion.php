<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MRubroEjecucion extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_RubroE');
    }
    public function index()
    {
        $this->_load_layout('Front/ADMINISTRACION/frmInformacionPresupuestal');
    }
//---------------------MANTENIMIENTOS DE RUBRO DE EJECUCION-------------------------------------
    //AGREGAR UN RUBRO DE EJECUCION
    public function AddRubroE()
    {
        if ($this->input->is_ajax_request()) {
            $flag = 0;
            $msg = '';
            $listaFuenteFinanc=$this->input->post("listaFuenteFinanc");
            $txt_NombreRubroE   = $this->input->post("txt_NombreRubroE");
            $r_data['id_fuente_finan']=$listaFuenteFinanc;
            $r_data['nombre_rubro']=$txt_NombreRubroE;
            $r_data=$this->security->xss_clean($r_data);
            if($this->Model_RubroE->BuscarRubro($txt_NombreRubroE)==true){
            $flag=1;
            $msg='Registro ya Existente';
            }
            else{
                if($this->Model_RubroE->AddRubroE($r_data)!=0){
                    $flag=0;
                    $msg='Registro exitoso';      
                }
                else{
                    $flag=1;
                    $msg='Error dbx0001';                    
                }

            }
                    $datos['flag']=$flag;
                    $datos['msg']=$msg;
                    echo json_encode($datos);
        } 
        else {
            show_404();
        }

    }
//FIN DE AGREGAR UN RUBRO DE EJECUCION
//
public function EliminarRubroEjecucion(){
        if ($this->input->is_ajax_request()) {
            $flag=0;
            $msg="";
            $id_rubro = $this->input->post("id_rubro");

        if($this->Model_RubroE->EliminarRubro($id_rubro)==true){
                $flag=0;
                $msg="registro Eliminado Satisfactoriamente";
            }
            else{
                $flag=1;
                $msg="No se pudo eliminar";
            }
                    $datos['flag']=$flag;
                    $datos['msg']=$msg;
                    echo json_encode($datos);
        }  else {
            show_404();
        }
}


/* LISTAR RUBROS DE EJECUCION*/
    public function GetRubroE()
    {
        if ($this->input->is_ajax_request()) {
            $datos = $this->Model_RubroE->GetRubroE();
            echo json_encode($datos);
        } else {
            show_404();
        }
    }
//FIN LISTAR RUBROS DE EJECUCION
 function GetRubroId(){
      if ($this->input->is_ajax_request()) 
        {
        $id_fuente_finan=$this->input->post('id_fuente_finan');
        $datos=$this->Model_RubroE->GetRubroId($id_fuente_finan);
        echo json_encode($datos);
        }
        else
        {
          show_404();
        }
    }
    //ACTUALIZAR O MODIFICAR DATOS DE LOS RUBROS
    public function UpdateRubroE()
    {
        if ($this->input->is_ajax_request()) {
            $txt_IdRubroEModif   = $this->input->post("txt_IdRubroEModif");
            $txt_NombreRubroEU   = $this->input->post("txt_NombreRubroEU");
            if ($this->Model_RubroE->UpdateRubroE($txt_IdRubroEModif, $txt_NombreRubroEU) == false) {
                echo "Se actualizo correctamente el rubro de ejecucion";
            } else {
                echo "Se actualizo correctamente el rubro de ejecucion";
            }

        } else {
            show_404();
        }
    }
//FIN ACTUALIZAR O MODIFICAR DATOS DE LOS RUBROS DE EJECUCION
    //----------------------FIN MANTENIMIENTOS DE RUBRO DE EJECUCION--------------------------------------------

    public function _load_layout($template)
    {
        $this->load->view('layout/ADMINISTRACION/header');
        $this->load->view($template);
        $this->load->view('layout/ADMINISTRACION/footer');
    }

}
