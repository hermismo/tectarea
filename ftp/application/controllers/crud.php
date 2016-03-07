<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->layout->setLayout('template');
        $this->load->model('crud_model');
        $this->layout->css(array(base_url().'public/css/index_formulario.css'));
    }
  
    public function index(){
        $this->layout->setTitle('Registro');
        $datos=  $this->crud_model->getPersonas();
        $this->layout->view('index',  compact('datos'));
    }
    
    public function add(){
        $this->layout->setTitle('Agregar');
        if($this->input->post()){
           if($this->form_validation->run('crud/add')){
                $data=array(
                    'nombre'=>$this->input->post('nombre',true),
                    'correo'=>$this->input->post('correo',true),
                    'telefono'=>$this->input->post('tel',true),
                    'fecha'=>$this->input->post('fecha',true)
                );
                $insertar=$this->crud_model->insertar_persona($data);
                if($insertar){
                    $this->session->set_flashdata('ControllerMessage', 'El registro se ha realizado exitosamente!');
                    redirect(base_url().'crud/add',  301);
                }
                else{
                    $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Por favor inténtelo nuevamente.');
                    redirect(base_url().'crud/add',  301);
                }
           }
        }
        $this->layout->view('agregar',  compact('datos'));
    }
    public function edit(){
        $this->layout->setTitle('Editar');
        $id=  $this->uri->segment(3);
        if(!$id){
            show_404();  
        }
        else{
            if($this->input->post()){
                if($this->form_validation->run('crud/add')){
                    $data=array(
                        'nombre'=>$this->input->post('nombre',true),
                        'correo'=>$this->input->post('correo',true),
                        'telefono'=>$this->input->post('tel',true),
                        'fecha'=>$this->input->post('fecha',true)
                    );
                    $insertar=$this->crud_model->modificar_persona($data,$id);
                    if($insertar){
                        $this->session->set_flashdata('ControllerMessage', 'La edición se ha realizado exitosamente!');
                        redirect(base_url().'crud/edit/'.$id,  301);
                    }
                    else{
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Por favor inténtelo nuevamente.');
                        redirect(base_url().'crud/add/'.$id,  301);
                    }
                }
            }
            $dato=  $this->crud_model->getPersonaPorId($id);
            if(empty($dato)){
                show_404();
            }
            $this->layout->view('editar',  compact('id','dato'));
        }
    }
    public function delete(){
        $id=  $this->uri->segment(3);
        if(!$id){
            show_404();  
        }
        else{
            $eliminar=  $this->crud_model->eliminar_persona($id);
            if($eliminar){
                $this->session->set_flashdata('ControllerMessage', 'Se ha eliminado el registro exitosamente!');
                redirect(base_url().'crud',  301);
            }
            else{
                $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Por favor inténtelo nuevamente.');
                redirect(base_url().'crud'.$id,  301);
            }
            
        }
        
    }
}
?>