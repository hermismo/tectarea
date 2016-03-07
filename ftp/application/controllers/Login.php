<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    //private $session_id;
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
        $this->load->model('login_model');
    }
  
    public function index(){
        $this->layout->setTitle('Iniciar sesión');
        if($this->input->post()){
            if($this->form_validation->run('login/login')){
                $data=array(
                    'usuario'=> $this->input->post('usuario',true),
                    'contrasena'=> sha1($this->input->post('contrasena',true)),
                );
                //print_r($data); exit();
                $datos=$this->login_model->logeo($data);
                if($datos){
                    $this->session->set_userdata('sesion');//nombre de la sesion
                    $this->session->set_userdata('usuario', $this->input->post('usuario',true));
                    $this->session->set_userdata('id_tecnico', $datos->id_persona);
                    $id= $datos->id_usuario;
                    $idPersona= $datos->id_persona;
                    //$nombre_usuario= $this->session->userdata('usuario');
                    redirect ('inicio/index/'.$id.'/'.$idPersona,'refresh' );
                }
                else{
                    $this->session->set_flashdata('ControllerMessage', 'Usuario y/o clave inválida.');
                    redirect(base_url().'login',  301);
                }
            }// si cumple con las validaciones
        }//si se han enviado datos por post
        $this->layout->view('login');
    }
    
    public function logout(){
        $this->session->unset_userdata(array('usuario'=>''));
        $this->session->sess_destroy('sesion');
        redirect(base_url().'login',  301);
    }
}
?>