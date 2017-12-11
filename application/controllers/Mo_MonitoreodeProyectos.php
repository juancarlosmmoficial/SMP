<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_MonitoreodeProyectos extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Mo_Producto');
        $this->load->model('Model_Mo_Actividad');
        $this->load->helper('FormatNumber_helper');
    }

    function index()
    {
        $listaProyecto = $this->Model_Mo_Producto->listaProyecto();
        $this->load->view('layout/MONITOREO/header');
        $this->load->view('front/Monitoreo/index',['listaProyecto' => $listaProyecto]);
        $this->load->view('layout/MONITOREO/footer');
    }
    function BuscarProyecto()
    {
        $codigoUnico = $this->input->get('inputValue');        
        $existe = count($this->Model_Mo_Producto->existeProyecto($codigoUnico));
        if($existe>0)
        {
            $msg = (['proceso' => 'Info', 'mensaje' => 'Este proyecto ya existe']);
                echo json_encode($msg);
            exit;
        }
        $proyecto = $this->Model_Mo_Producto->buscarProyecto($codigoUnico);
        $this->load->view('front/json/json_view', ['datos' => $proyecto]); 
    }
    function InsertarProducto()
    {
        if($_POST)
        {
            $msg = array();

            $existe = count($this->Model_Mo_Producto->verificarProducto($this->input->post('descripcionProducto'),$this->input->post('idPi')));
            if($existe!=0)
            {
                $msg = (['proceso' => 'Error', 'mensaje' => 'Ya existe el Producto.']);
                echo json_encode($msg);
                exit;
            }

            $c_data['desc_producto'] = $this->input->post('descripcionProducto');
            $c_data['id_pi'] =  $this->input->post('idPi');
            $data = $this->Model_Mo_Producto->insertar($c_data);

            $msg = ($data != '' || $data != null ? (['proceso' => 'Correcto', 'mensaje' => 'los datos fueron registrados correctamente', 'idProducto' => $data ]) : (['proceso' => 'Error', 'mensaje' => 'Ha ocurrido un error inesperado.']));

            echo json_encode($msg);exit;
        }
        
        $codigoUnico = $this->input->get('codigoUnico');
        $proyecto = $this->Model_Mo_Producto->buscarProyecto($codigoUnico);
        $this->load->view('front/Monitoreo/Mo_Producto/insertar', ['proyecto' => $proyecto]); 
    }

    function EditarProducto()
    {
        if($_POST)
        {

        }
        $idPi = $this->input->get('id_pi');
        $proyecto = $this->Model_Mo_Producto->ProyectoPorId($idPi);
        $producto = $this->Model_Mo_Producto->listaProducto($idPi);
        foreach ($producto as $key => $value) 
        {
            $value->childActividad = $this->Model_Mo_Actividad->listaActividad($value->id_producto);
        }
        
        $this->load->view('front/Monitoreo/Mo_Producto/editar', ['proyecto' => $proyecto, 'producto'=>$producto]);
    }

    function eliminarMonitoreo()
    {
        $msg = array();
        $data = $this->Model_Mo_Producto->eliminarMonitoreo($this->input->post('idPi'));
        $msg = ($data > 0 ? (['proceso' => 'Correcto', 'mensaje' => 'el monitoreo del proyecto fue eliminado']) : (['proceso' => 'Error', 'mensaje' => 'Ha ocurrido un error inesperado.']));
        echo json_encode($msg);exit;
    }
}
