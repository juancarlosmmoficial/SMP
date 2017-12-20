<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarteraInversion extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('Model_CarteraInversion');
    $this->load->helper('file');
}
public function index()
{
	$this->_load_layout('Front/Pmi/frmCarteraInversion');
}

function AddCartera()
{
	if ($this->input->is_ajax_request())
	{
    $msg=array();

    $config['upload_path']   = './uploads/cartera/';
    $config['allowed_types'] = 'jpg|png|pdf|jpeg';
    $config['max_width']     = 1024;
    $config['max_height']    = 768;
    //$config['file_name'] = 'DOC_';
    $config['max_size'] = '20048';

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('cartera_resolucion'))
    {
        $error = array('error' => $this->upload->display_errors('', ''));
    }
      $c_data['año_apertura_cartera']=$this->input->post("dateAñoAperturaCart")."-01-01";
  	  $c_data['fecha_inicio_cartera']=$this->input->post("dateFechaIniCart");
      $c_data['fecha_cierre_cartera']=$this->input->post("dateFechaFinCart");
      $c_data['estado_cartera'] = $this->input->post("estadoCartera");
      $c_data['numero_resolucion_cartera']=$this->input->post("txt_NumResolucionCart");
      $c_data['file'] = $this->upload->file_name;

      $query = $this->Model_CarteraInversion->getSameYearCartera($c_data);

      if ($query>0) {
        $msg = (['proceso' => 'Error', 'mensaje' => 'El año de apertura ya existe']);
      } else {
        $this->Model_CarteraInversion->AddCartera($c_data);
        $msg = (['proceso' => 'Correcto', 'mensaje' => 'La cartera fue registrada correctamente: ']);
      }
      $this->load->view('front/json/json_view', ['datos' => $msg]);
  }
  else {
    show_404();
  }
}
 	 function editCartera(){
      $idCartera = isset($_GET['id_cartera']) ? $_GET['id_cartera'] : null;
	    if ($this->input->is_ajax_request()) {
	    	$config['upload_path']          = './uploads/cartera/';
		    $config['allowed_types']        = 'jpg|png|pdf';
		    $config['max_width']            = 1024;
		    $config['max_height']           = 768;
		    $config['max_size']      = 15000;
	      $config['encrypt_name']  = false;
	      $this->load->library('upload',$config);
		    $this->upload->do_upload('Cartera_Resoluacion');


	    $dateAñoAperturaCart=$this->input->post("dateAñoAperturaCart")."-01-01";
			$dateFechaIniCart =$this->input->post("dateFechaIniCart");
			$dateFechaFinCart =$this->input->post("dateFechaFinCart");
			$estado=$this->input->post("estadoCartera");
			$txt_NumResolucionCart =$this->input->post("txt_NumResolucionCart");
			$Cartera_Resoluacion=$this->upload->file_name;
			echo $this->Model_CarteraInversion->editCartera($idCartera,$dateAñoAperturaCart,$dateFechaIniCart,$dateFechaFinCart,$estado,$txt_NumResolucionCart,$Cartera_Resoluacion);
		}
	     else
	     {
	      show_404();
	     }
 	}

 	 function editarCartera()
    {
    	if($this->input->get('id_cartera')!=''){
    		$data['arrayCartera']=$this->Model_CarteraInversion->getCartera($this->input->get('id_cartera'))[0];
			$this->load->view('Front/Pmi/Cartera/editar',$data);
    	}
    	else{
    		$this->load->view('front/Pmi/Cartera/editar');
			//$this->load->view('Front/Pmi/itemCartera');
    	}



    }
	//FIN INSERTAR UNA CARTERA DE INVERSION
  function itemCartera(){
    	//$data['id_persona']=$this->input->get('id_persona');
    	if($this->input->get('id_cartera')!=''){
    		$data['arrayCartera']=$this->Model_CarteraInversion->getCartera($this->input->get('id_cartera'))[0];
			$this->load->view('Front/Pmi/itemCartera',$data);
    	}
    	else{
			$this->load->view('Front/Pmi/itemCartera');
    	}

	}

    function GetCarteraFechaCierre($idCartera){
		if ($this->input->is_ajax_request()) {
			echo ($this->Model_CarteraInversion->getCartera($idCartera)[0]->fecha_cierre_cartera);
		}
		else
		{
			show_404();
		}
	}


	function getCarteraAnio($anio)//La variable "$anio" se esté recuperando en la vista "Front/Pmi/frmMProyectoInversion"; por tal motivo, no hay que borrar este parámetro.
	{
		$this->load->view('layout/Pmi/header');
		$this->load->view('Front/Pmi/frmMProyectoInversion', ['anio' => $anio]);
		$this->load->view('layout/Pmi/footer');
	}

    function GetCarteraInvFechAct()
	{
		if ($this->input->is_ajax_request())
		{
		$datos=$this->Model_CarteraInversion->GetCarteraInvFechAct();
		echo json_encode($datos);
		}
		else
		{
			show_404();
		}
	}

	function GetCarteraInversion()
	{
		if ($this->input->is_ajax_request())
		{
			$datos=$this->Model_CarteraInversion->GetCarteraInversion();
			foreach ($datos as $key => $value)
			{
				$value->fecha_inicio_cartera = date('d/m/Y',strtotime($value->fecha_inicio_cartera));
				$value->fecha_cierre_cartera = date('d/m/Y',strtotime($value->fecha_cierre_cartera));
			}
			echo json_encode($datos);
		}
		else
		{
			show_404();
		}

	}
	function GetCarteraAnios(){
		if ($this->input->is_ajax_request())
		{
		$datos=$this->Model_CarteraInversion->GetCarteraAnios();
		echo json_encode($datos);
		}
		else
		{
			show_404();
		}
	}
 	function _load_layout($template)
    {
      $this->load->view('layout/Pmi/header');
      $this->load->view($template);
      $this->load->view('layout/Pmi/footer');
    }

}
