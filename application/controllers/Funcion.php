<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcion extends CI_Controller {/* Mantenimiento de sector entidad Y servicio publico asociado*/

    public function __construct(){
        parent::__construct();
        $this->load->model('Model_Funcion');
    }

     public function index()
    {
        $listaNumPipFuncion=$this->Model_Funcion->FuncionPipListar();
        $this->load->view('layout/Reportes/header');
        $this->load->view('front/Reporte/Funcion/index',['listaNumPipFuncion'=>$listaNumPipFuncion]);
        $this->load->view('layout/Reportes/footer');
    }
    public function CadenaFuncional()
    {
        $this->load->view('layout/Reportes/header');
        $this->load->view('front/Reporte/CadenaFuncional/index');
        $this->load->view('layout/Reportes/footer');
    }

    function GetFuncion()
    {
        if ($this->input->is_ajax_request()) 
        {
            $datos=$this->Model_Funcion->GetFuncion();
            echo json_encode($datos);
        }
        else
        {
            show_404();
        }
    }

    function GetDivisionFuncional()
    {
        $idFuncion=$this->input->post('idFuncion');
        $datos=$this->Model_Funcion->GetDivisionFuncional($idFuncion);
        echo json_encode($datos);
    }
    function GetGrupoFuncional()
    {
        $idDivisionFuncional=$this->input->post('idDivisionFuncional');
        $datos=$this->Model_Funcion->GetGrupoFuncional($idDivisionFuncional);
        echo json_encode($datos);
    }
    function GetProvincia()
    {
        $datos=$this->Model_Funcion->GetProvincia();
        echo json_encode($datos);
    }
    function GetDistrito()
    {
        $provincia=$this->input->post('provincia');
        $datos=$this->Model_Funcion->GetDistrito($provincia);
        echo json_encode($datos);
        exit;
    }
    function ProyectosPorCadenaFuncional()
    {
        if ($this->input->is_ajax_request()) 
        {
            $idFuncion = $this->input->post('idFuncion');
            $idDivisionFuncional = $this->input->post('idDivisionFuncional');
            $idGrupoFuncional = $this->input->post('idGrupoFuncional');
            $provincia = $this->input->post('idProvincia');
            $distrito = $this->input->post('idDistrito');
            $deFecha = $this->input->post('deFecha');
            $aFecha = $this->input->post('aFecha');

            $idFuncion=(($idFuncion=='' || $idFuncion==null) ? 'NULL' : $idFuncion);
            $idDivisionFuncional=(($idDivisionFuncional=='' || $idDivisionFuncional==null) ? 'NULL' : $idDivisionFuncional);
            $idGrupoFuncional=(($idGrupoFuncional=='' || $idGrupoFuncional==null) ? 'NULL' : $idGrupoFuncional);
            $provincia=(($provincia=='' || $provincia==null) ? 'NULL' : "'".$provincia."'");
            $distrito=(($distrito=='' || $distrito==null) ? 'NULL' : "'".$distrito."'");
            $fecha1=(($deFecha=='' || $deFecha==null) ? 'NULL' : "'".$deFecha."'");
            $fecha2=(($aFecha=='' || $aFecha==null) ? 'NULL' : "'".$aFecha."'");

            $datos=$this->Model_Funcion->GetProyectos($idFuncion,$idDivisionFuncional,$idGrupoFuncional,$provincia,$distrito,$fecha1,$fecha2);


            $this->load->view('front/Reporte/CadenaFuncional/tablaFuncion',['listaProyectos'=>$datos]);
        }
        else
        {
            show_404();
        }
    }


    function AddFucion()
    {
        if ($this->input->is_ajax_request()) 
        {
            $txt_codigofuncion =$this->input->post("txt_codigofuncion");
            $txt_nombrefuncion =$this->input->post("txt_nombrefuncion");
            if($this->Model_Funcion->AddFucion($txt_codigofuncion,$txt_nombrefuncion) == true)
                echo "Se añadio una función";
            else
                echo "Se añadio  una función";  
        }
        else
        {
            show_404();
        }

    }

    function UpdateFuncion()
    {
        if ($this->input->is_ajax_request()) 
        {
            $txt_IdfuncionM =$this->input->post("txt_IdfuncionM");
            $txt_codigofuncionM =$this->input->post("txt_codigofuncionM");
            $txt_nombrefuncionM =$this->input->post("txt_nombrefuncionM");

            if($this->Model_Funcion->UpdateFuncion($txt_IdfuncionM,$txt_codigofuncionM,$txt_nombrefuncionM) == true)
                echo "Se actualizao  la función";
            else
                echo "Se actualizo la  función";  
        }
        else
        {
            show_404();
        }

    }

    /*fin FUNCION*/

    /* division funcional*/

    function _load_layout($template)
    {
        $this->load->view('layout/ADMINISTRACION/header');
        $this->load->view($template);
        $this->load->view('layout/ADMINISTRACION/footer');
    }

}
