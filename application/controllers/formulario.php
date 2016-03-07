<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
    }
     public function index(){
        $this->layout->css(array(base_url().'public/css/index_formulario.css'));
        /*Ambiente con post*/
        if($this->input->post()){
            //proceso la imagen 
            $error= null;
            //Valido la imagen
            $config['upload_path'] = './uploads/archivos';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['encrypt_name']= true;
            $config['overwrite']=false;
            $config['max_size']	= '51200';
            //$config['max_width']  = '1024';
            //$config['max_height']  = '768';
            
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('archivo')){
                $error = array('error' => $this->upload->display_errors());
            }
            if($error==null){
                $file=$this->upload->data();
                $file_name= $file['file_name'];
            }
            //proceso los datos
            echo "El nombre enviado fué:".$this->input->post('nombre',true)."<br>";
            echo "La contraseña enviada fué:". sha1($this->input->post('clave',true))."<br>";
            if(!$error==null){
                echo $error['error'];
            }
            else{
               echo "Archivo subido: ".$file_name; 
            }
            exit;
             
        }//si se envian valores por post
        /*Ambiente sin post*/
        $this->layout->view('index');
    }
    public function add(){
        $this->layout->css(array(base_url().'public/css/index_formulario.css'));
        if($this->input->post()){
            //$this->form_validation->set_rules('nombre','Nombre','required|min_length[10]');
            //$this->form_validation->set_rules('tel','Teléfono','required|numeric|min_length[11]|max_length[11]');
            //$this->form_validation->set_rules('correo','Correo','required|valid_email');
            //$this->form_validation->set_rules('des','Descripcion','required|min_length[6]');
           if($this->form_validation->run('formulario/add')){
               echo "Validando"; 
           }
        }
        $this->layout->view('add');
    }
}
?>