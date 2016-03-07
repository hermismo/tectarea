<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Titulacion extends CI_Controller {
    //private $session_id;
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
        $this->load->model('login_model');
        $this->load->model('datospersonales_model');
    }
    
    public function index(){
        $id_usuario=$this->input->post('id_usuario',true);
        //proceso la imagen 
        $error= null;
        //Valido la imagen
        $config['upload_path'] = './uploads/titulacion';
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name']= false;
        $config['overwrite']=true;
        $config['max_size']	= '1000';
        $config['remove_spaces']=true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('titulacion')){
            $error = array('error' => $this->upload->display_errors());
            echo 0;
        }
        if($error==null){
            $file=$this->upload->data();
            $file_name= $file['file_name'];
            $imagen= base_url()."uploads/titulacion/".$file_name;
            $insertar_imagen= $this->datospersonales_model->verificarTitulo($imagen,$id_usuario);
            
            if($insertar_imagen){
                echo $file_name;
            }
            else{
                echo 2;
            }
        }
    }
}
?>