<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negocio extends CI_Controller {
   function __construct(){
    parent::__construct();

    $this->load->model('tuNegocio_model');

   }

   function index(){



   }
   function activarServicio(){
    
     $id=  $this->uri->segment(3);
    $idPersona= $this->uri->segment(4);
    $precion=$this->input->post('precio');

        $datos=array(
            'descripcion' => $this->input->post('desc_servicio'),
            'tipologia' => $this->input->post('tipologia'), 
            'superficie' => $this->input->post('superficie'),
            'precio' => $this->input->post('precio'),
            'edificio' => $this->input->post('edificio'),
            'num_viviendas' => $this->input->post('num_viviendas'),
            'precio_e' => $this->input->post('precio_e'),
            'forma_pago' => $this->input->post('forma_pago'),
            'visado' => $this->input->post('visado_s'),
            'monto_visado' => $this->input->post('monto_visado'),
            'servicio' => $this->input->post('boton_s') ,
            'id_servicio' => $this->input->post('id_servicio'));
             $supeficie=$this->tuNegocio_model->activarServicio($datos);
             if ($supeficie) {
                 $this->session->set_flashdata('mensaje', 'Registro exitoso.');
                 redirect ('inicio/negocio/'.$id.'/'.$idPersona,'refresh');
             }
             

        
        }

     function disponibilidad(){
        $id=  $this->uri->segment(3);
          $idPersona= $this->uri->segment(4);
        $turno=$this->input->post('turno');
        $dia=$this->input->post('dia');
        $cont=0;
        $datos=array(
            'turno' =>$this->input->post('turno'),
            'dia' => $this->input->post('dia')
            );
        if ($this->input->post('boton_s') == "Guardar")
            $respuesta=$this->tuNegocio_model->guardarDisponibilidad($datos);
         else
            $respuesta=$this->tuNegocio_model->modificarDisponibilidad($datos);
        
        if ($respuesta) {
            $this->session->set_userdata('mensaje', 'Registro exitoso.');
              redirect ('inicio/negocio/'.$id.'/'.$idPersona,'refresh');
        }else{
            $this->session->set_userdata('mensaje', 'No se realizo el registro.');
            redirect ('inicio/negocio/'.$id.'/'.$idPersona,'refresh');

        }

     }

   /*  function servicio(){
            $id=  $this->uri->segment(3);
            $idPersona= $this->uri->segment(4);
            $id_servicio=$this->uri->segment(5);
          
            $this->layout->setTitle('Tu negocio | Servicios');
            $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
            $this->layout->js(array(base_url().'public/js/negocio/negocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/negocio/cargarNegocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/funciones.js'));
            $this->layout->view('index',compact('id','idPersona'));
            
           # $supeficie=$this->tuNegocio_model->superficie();
           $tabla=array('datos' => $this->tuNegocio_model->tabla() , 'id_tecnico' => $this->session->userdata('id_tecnico'), 'antiguedad' => $this->tuNegocio_model->preciosAntiguedad(), 'disponibilidad' => $this->tuNegocio_model->disponibilidad(), 'servicio' => $this->tuNegocio_model->servicios(),'datos_servicio' => $this->tuNegocio_model->datos_servicio());
            $this->load->view('negocio/cert_energetica_act', $tabla);
        
    }  */ 
}

 
?>