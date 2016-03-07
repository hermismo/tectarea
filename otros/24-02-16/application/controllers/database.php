<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class database extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
        $this->load->model('personas_model');//llamado para todos los metodos de la clase
    }
    
    public function index(){
        //$this->load->model('personas_model'); llamado local, solo esta disponible para el metodo
        $this->layout->css(array(base_url().'public/css/index_formulario.css'));
        $datos=$this->personas_model->getPersonas();
        $this->layout->view('add',  compact('datos'));
    }
    public function usando_where($id=null){
        //$this->load->model('personas_model'); llamado local, solo esta disponible para el metodo
        $this->layout->css(array(base_url().'public/css/index_formulario.css'));
        $datos=$this->personas_model->getPersonasPorId($id);
        $this->layout->view('usandoWhere',  compact('datos'));
    }
    public function usandoJoin(){
        $this->layout->css(array(base_url().'public/css/index_formulario.css'));
        $datos=$this->personas_model->getPersonasConDireccion();
        $this->layout->view('usandoJoin',  compact('datos'));  
    }
    public function insertar(){
        $this->layout->css(array(base_url().'public/css/index_formulario.css'));
        $this->load->helper('date');
        $datestring = "%Y/%m/%d";
        $fecha_actual= mdate($datestring);
        $datos=array(
            'nombre'=>'Pedro',
            'correo'=>'a@algo.com',
            'telefono'=>'7887',
            'fecha'=>$fecha_actual
        );
        $this->personas_model->insertar_persona($datos);
        $this->layout->view('insertandoDatos');
    }
    public function modificar(){
        $this->layout->css(array(base_url().'public/css/index_formulario.css'));
        $datos=array(
            'nombre'=>'Pedro Pérez',
            'correo'=>'email@algo.com',
            'telefono'=>'11111',
        );
        $datos2=array(
            'calle'=>"Bolivar",
            'direccion'=>"Zaraza",
            'ciudad'=>'España'
        );
        $this->personas_model->modificar_persona($datos,$datos2,'3');
        $this->layout->view('modificandoDatos');
    }
    public function eliminar(){
        $this->layout->css(array(base_url().'public/css/index_formulario.css'));
        $this->personas_model->eliminar_persona('3');
        $this->layout->view('eliminandoDatos'); 
    }
}
?>