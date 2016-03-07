<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negocio extends CI_Controller {
    //private $session_id;
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
        $this->load->model('login_model');
        $this->load->model('negocio_model');
    }
    
    public function index(){
        $id_usuario=$this->input->post('id_usuario',true);
        //proceso la imagen 
        $error= null;
        //Valido la imagen
        $config['upload_path'] = './uploads/fotos_perfil';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['encrypt_name']= false;
        $config['overwrite']=true;
        $config['max_size']	= '1000';
        $config['remove_spaces']=true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('archivo')){
            $error = array('error' => $this->upload->display_errors());
            echo 0;
        }
        if($error==null){
            $file=$this->upload->data();
            $file_name= $file['file_name'];
            $imagen= base_url()."uploads/fotos_perfil/".$file_name;
            $insertar_imagen= $this->datospersonales_model->verificarImagen($imagen,$id_usuario);
            
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