<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autocomplete extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
         $this->load->model('tuNegocio_model');
    }
  
    public function index(){
        $this->layout->setTitle('Poblaciones de España');
        $this->layout->view('index');
    }
    
    public function autocompletar(){
   
        $parametro =$_POST['poblacion'] ;

        $query_services=$this->tuNegocio_model->buscarPoblacion($parametro); 

        echo json_encode($query_services);      
     
    }#fin funcion autocompletar

    public function buscarCoordenadas(){
   
        $parametro =$_POST['poblacion'] ;
       # echo  $parametro;
        $datos=$this->tuNegocio_model->buscarCoordenadasBD($parametro); 
        if($datos){
            $ubicacion=$this->tuNegocio_model->guardarUbicacion($parametro);
            if ($ubicacion) {
                echo json_encode($datos);
            }else
                return 1;
            
            }else
                echo 0;      
     
    }#fin funcion buscar coordenadas

    public function CargarUbicaciones(){
   
        $parametro =$_POST['id'] ;
       # echo  $parametro;
        $datos=$this->tuNegocio_model->CargarUbicacionesBD($parametro); 
        if($datos){
              echo json_encode($datos);
         }else
            echo 0;      
     
    }#fin funcion Cargar coordenadas

}
?>