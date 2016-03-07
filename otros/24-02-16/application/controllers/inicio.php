<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
    //private $session_id;
    function __construct() {
        parent::__construct();
        $this->load->library(array('ion_auth'));
        $this->layout->setLayout('template');
        //$this->session_id = $this->session->userdata('usuario');
        $this->load->model('login_model');
        $this->load->model('datospersonales_model');
         $this->load->model('tuNegocio_model');
    }
  
    public function index(){
        $this->layout->setTitle('Tectarea');
        $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
        $this->layout->js(array(base_url().'public/js/cuenta/cuentaTecnico.js'));

        
        $id=  $this->uri->segment(3);
        $idPersona= $this->uri->segment(4);
        if(!$id || !$idPersona){
            show_404();  
        }
        else{
            $this->layout->view('index',  compact('id','idPersona'));
        }
    }
    
    public function cuenta(){
        $this->layout->setTitle('Tu cuenta');
        $id=  $this->uri->segment(3);
        $idPersona= $this->uri->segment(4);
        if(!$id || !$idPersona){
            show_404();  
        }
        else{
            $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
            $this->layout->js(array(base_url().'public/js/cuenta/cuentaTecnico.js'));
            $this->layout->js(array(base_url().'public/js/cuenta/cargarDatosPersonales.js'));
            
            $respuesta_telefono= $this->datospersonales_model->getTelefonoPorId($idPersona);
            $respuesta_tecnico= $this->datospersonales_model->getTecnicoPorId($id);
            $respuesta_red_social= $this->datospersonales_model->getRedesSocialesPorId($id);      
            $this->layout->view('index',  compact('id','idPersona','respuesta_telefono','respuesta_tecnico','respuesta_red_social'));
            $this->load->view('cuenta/cuenta');
        }
    }
    
    public function negocio(){
        $this->layout->setTitle('Tu negocio');
         $id=  $this->uri->segment(3);
        $idPersona= $this->uri->segment(4);
        if(!$id || !$idPersona){
            show_404();  
        }
        else{
            $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
            $this->layout->js(array(base_url().'public/js/negocio/negocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/negocio/cargarNegocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/funciones.js'));
            $this->layout->view('index',compact('id','idPersona'));
            $tipologia=$this->tuNegocio_model->tipologia();
            $supeficie=$this->tuNegocio_model->superficie();
            $tabla=array('datos' => $this->tuNegocio_model->tabla() , 'id_tecnico' => $this->session->userdata('id_tecnico'), 'antiguedad' => $this->tuNegocio_model->preciosAntiguedad(), 'disponibilidad' => $this->tuNegocio_model->disponibilidad(), 'servicio' => $this->tuNegocio_model->servicios());
            $this->load->view('negocio/negocio', $tabla);

        } 
    }
    
    public function areaTecnico(){
        $this->layout->setTitle('Area técnico');
        $id=  $this->uri->segment(3);
        $idPersona= $this->uri->segment(4);
        if(!$id || !$idPersona){
            show_404();  
        }
        else{
            $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
            $this->layout->view('index',compact('id','idPersona'));
        }
    }
    
    public function solicitud(){
        $this->layout->setTitle('Tus solicitudes');
        $id=  $this->uri->segment(3);
        $idPersona= $this->uri->segment(4);
        if(!$id || !$idPersona){
            show_404();  
        }
        else{
            $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
            $this->layout->view('index',compact('id','idPersona'));
        }
    }
       
    public function tecnico(){
        $this->layout->setTitle('Cargar técnico');
        $id=  $this->uri->segment(3);
        $idPersona= $this->uri->segment(4);
        if(!$id || !$idPersona){
            show_404();  
        }
        else{
            $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
            $this->layout->view('index',compact('id','idPersona'));
        }
    }
    
    public function obtenerTitulo(){
        $opciones=  $this->datospersonales_model->devolverTitulos();
        echo json_encode($opciones);
    }
    
    public function procesarDatosPersonales(){
        if($this->input->post()){
                $data= array(
                    'numero_telefonico' => $this->input->post('tel',true),
                    );
                $data2=array(
                    'biografia' => $this->input->post('bio',true),
                    'web' => $this->input->post('web',true),
                    'id_titulo' => $this->input->post('titulo',true),
                );
                $id_usuario = $this->input->post('idUsuario',true);
                $id_persona = $this->input->post('idPersona',true);
                $editar = $this->datospersonales_model->modificar_persona($data,$data2,$id_usuario,$id_persona);

                $datos3=array(
                    'red_social_1'=>$this->input->post('facebook',true),
                    'red_social_2'=>$this->input->post('twitter',true),
                    'red_social_3'=>$this->input->post('linkedin',true),
                );
                $respuesta_red=$this->datospersonales_model->insertar_red($datos3,$id_usuario);

                if($editar && $respuesta_red){
                    echo "Datos guardados con éxito";
                }
                else{
                    echo "Ha ocurrido un error, por favor contacte al administrador.";
                }
        }//post   
    }
    function servicio(){
            $id=  $this->uri->segment(3);
            $idPersona= $this->uri->segment(4);
            $id_servicio=$this->uri->segment(5);
          
            $datos = array(
                'id_tecnico' => $this->session->userdata('id_tecnico'),
                'id_servicio' => $id_servicio
                );
            $this->layout->setTitle('Tu negocio | Servicios');
            $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
            $this->layout->js(array(base_url().'public/js/negocio/negocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/negocio/cargarNegocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/funciones.js'));
            $this->layout->view('index',compact('id','idPersona'));
            
           # $supeficie=$this->tuNegocio_model->superficie();
            if ($id_servicio == 1) { //Certificado energetico
               $tabla=array('datos' => $this->tuNegocio_model->datos_servicio($datos));
                 $this->load->view('negocio/cert_energetica_act', $tabla); 
            }
            else
                if ($id_servicio == 6) {//cedula de habitabilidad
                     $tabla=array('datos' => $this->tuNegocio_model->datos_servicio($datos));
                    $this->load->view('negocio/cedula_habil_act', $tabla); 
                }
                else
                if ($id_servicio == 2) {//ITE
                     $tabla=array('antiguedad' => $this->tuNegocio_model->datos_servicioITE_IEE($datos));
                    $this->load->view('negocio/ITE_act', $tabla); 
                }
                else
                if ($id_servicio == 3) {//IEE
                     $tabla=array('antiguedad' => $this->tuNegocio_model->datos_servicioITE_IEE($datos));
                    $this->load->view('negocio/ITE_act', $tabla); 
                }
           
        
    }   
    /*public function servicios(){
             $this->layout->setTitle('Tu negocio | Servicios');
            $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
            $this->layout->js(array(base_url().'public/js/negocio/negocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/negocio/cargarNegocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/funciones.js'));
            $this->layout->view('index',compact('id','idPersona'));
            
            $supeficie=$this->tuNegocio_model->superficie();
            $tabla=array('datos' => $this->tuNegocio_model->tabla() , 'id_tecnico' => $this->session->userdata('id_tecnico'), 'antiguedad' => $this->tuNegocio_model->preciosAntiguedad(), 'disponibilidad' => $this->tuNegocio_model->disponibilidad(), 'servicio' => $this->tuNegocio_model->servicios());
            $this->load->view('negocio/negocio', $tabla);
        
    }*/
}
?>