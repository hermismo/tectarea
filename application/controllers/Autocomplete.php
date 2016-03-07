<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autocomplete extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
        $this->load->model('autocomplete_model');
    }
  
    public function index(){
        $this->layout->setTitle('Poblaciones de España');
        $this->layout->view('index');
    }
    
    public function autocompletar(){
        if (isset($_GET['term'])){
            $parametro = strtolower($_GET['term']);
            $valores = $this->autocomplete_model->autocompletarRegistro($parametro);
            echo json_encode($valores);
        }
    }
}
?>