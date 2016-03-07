<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
    }

    public function index(){
        $this->layout->view('index');
    }
    public function nosotros(){
        //$this->layout->setLayout('template2');
        $somos="Quienes somos";
        $hacer="Que hacemos";
        $estar="Para que estamos";
        $this->layout->setTitle('Aceca de nosotros');
        $this->layout->setKeywords('hola hola');
        $this->layout->setDescripcion('Descripción');
        $this->layout->js(array(base_url().'public/js/libreria.js'));
        $this->layout->css(array(base_url().'public/css/estilos2.css'));
        $this->layout->view('nosotros',  compact('somos','hacer','estar'));
    }
   //Recuperar un id.
   //Forma N° 1, se recibe el parametro en la funcion ($id=null), y luego se envia a la vista
    /*public function saludo($id=null,$id2=null,$cadena=null){
        $saludo="Bienvenido a codeigniter";
        $this->layout->setTitle('Saludo');
        $this->layout->setKeywords('saludo');
        $this->layout->setDescripcion('saludo');
        $this->layout->view('saludo',  compact('saludo','id','id2','cadena'));
    }*/
    //Forma N° 2, utilizando el metodo uri
    public function saludo(){
        $saludo="Bienvenido a codeigniter";
        $id=  $this->uri->segment(3);
        $id2= $this->uri->segment(4);
        $cadena= $this->uri->segment(5);
        $uri= $this->uri->uri_string();//Devuelve la url completa
        $total_segmentos= $this->uri->total_segments();
        
        $this->layout->setTitle('Saludo');
        $this->layout->setKeywords('saludo');
        $this->layout->setDescripcion('saludo');
        $this->layout->view('saludo',  compact('saludo','id','id2','cadena','uri','total_segmentos'));
    }
    //ruteo de url
    public function oculto($id=null,$id2=null,$cadena=null){
        $saludo="Ruteo de url´s";
        $this->layout->view('vista_oculto', compact('saludo','id','id2','cadena'));
    }
    public function fechas(){
        //Los helpers son un cinjunto de funciones, que se utilizan para realizar tareas
        $saludo="Trabajando con el helper de fechas";
        $this->load->helper('date');
        $fecha_actual= now();
        $datestring = "%d/%m/%Y";
        $fecha_string= mdate($datestring/*,$time*/);
        $hora= "%h:%i %a";
        $time = time();//Si no se incluye una marca de tiempo en el segundo parámetro, se usará la fecha/hora actual.
        $hora_string=mdate($hora/*,$time*/);
        $this->layout->view('fechas', compact('saludo','fecha_actual','fecha_string','hora_string'));
    }
}
