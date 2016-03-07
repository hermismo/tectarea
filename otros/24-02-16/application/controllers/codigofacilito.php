<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('mihelper');
        
    }
    public function index()
    {
        $this->load->library('menu',  array("Inicio","Contacto","Cursos","Acerca de"));
        $data['mi_menu']=  $this->menu->construirMenu();
        $this->load->view('header');
        $this->load->view('codigofacilito/bienvenido',$data);
    }
    
            
}
