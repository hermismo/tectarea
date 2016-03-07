<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pass extends CI_Controller {
    //private $session_id;
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
        $this->load->model('datospersonales_model');
    }
  
    public function index(){
        $pass=  sha1($this->input->post('clave',true));
        $new_pass= sha1($this->input->post('new_pass',true));
        $id_usuario=$this->input->post('id_usuario',true);
        $respuesta_pass = $this->datospersonales_model->update_pass($pass,$new_pass,$id_usuario);
        echo $respuesta_pass;
    }
}
?>