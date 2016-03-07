<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('cursos_model');
    }
     public function index(){
        $data['segmento']=$this->uri->segment(3);//3er segmento de la url
        $this->load->view('header');
        if(!$data['segmento']){
            $data=array('cursos'=>$this->cursos_model->obtenerCursos());  
        }
        else{
            $data['cursos']=$this->cursos_model->obtenerCurso($data['segmento']);//se envia como parametro
        }
        
        $this->load->view('cursos/cursos',$data);
    }
    public function mostrar(){
        $data['segmento']=$this->uri->segment(3);//3er segmento de la url
        $this->load->view('header');
        if(!$data['segmento']){
            $data=array('cursos'=>$this->cursos_model->obtenerCursos());  
        }
        else{
            $data['cursos']=$this->cursos_model->obtenerCurso($data['segmento']);//se envia como parametro
        }
        
        $this->load->view('cursos/cursos',$data);
    }
    public function crear(){
        $data['envio']="";
        $this->load->view('header');
        $this->load->view('cursos/formulario',$data);
    }
    public function recibirDatos(){
        $data=array(
            'nombre'=>$this->input->post('nombre'),
            'videos'=>$this->input->post('videos'),
        );
        $this->cursos_model->crearCurso($data);
        $this->load->view('header');
        $data['envio']="Datos enviados con exito!!";
        redirect(base_url()."index.php/cursos/crear", 'refresh');
    }
    public function editar(){
        $data['id']=$this->uri->segment(3);
        $data['curso']=$this->cursos_model->obtenerCurso($data['id']);
        $this->load->view('header');
        $this->load->view('cursos/editar',$data);
    }
    public function actualizar(){
        $data=array(
            'nombre'=>$this->input->post('nombre'),
            'videos'=>$this->input->post('videos'),
        );
        $this->cursos_model->actualizarCurso($this->uri->segment(3),$data);
        redirect(base_url()."/index.php/cursos/editar/".$this->uri->segment(3), 'refresh');
    }
    public function borrar(){
        $id=$this->uri->segment(3);
        $data['curso']=$this->cursos_model->eliminarCurso($id);
    }
    public function prueba(){
        $titulo="Este es mi titulo";
        $contenido="Es es mi contenido";
        $this->load->view('header');
        $this->load->view("prueba",compact('titulo','contenido'));
    }

}
?>