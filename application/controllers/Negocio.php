<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negocio extends CI_Controller {
   function __construct(){
    parent::__construct();

    $this->load->model('tuNegocio_model');

   }

   function index(){



   }
   function activarServicio(){
    
     $id=  $this->uri->segment(3);
    $idPersona= $this->uri->segment(4);
    $precion=$this->input->post('precio');

        $datos=array(
            'descripcion' => $this->input->post('desc_servicio'),
            'tipologia' => $this->input->post('tipologia'), 
            'superficie' => $this->input->post('superficie'),
            'precio' => $this->input->post('precio'),
            'edificio' => $this->input->post('edificio'),
            'num_viviendas' => $this->input->post('num_viviendas'),
            'precio_e' => $this->input->post('precio_e'),
            'forma_pago' => $this->input->post('forma_pago'),
            'visado' => $this->input->post('visado_s'),
            'monto_visado' => $this->input->post('monto_visado'),
            'servicio' => $this->input->post('boton_s') ,
            'id_servicio' => $this->input->post('id_servicio'));

            if ($this->input->post('boton_s') == "desactivar" || $this->input->post('boton_s') == "reactivar"){
               
                $supeficie=$this->tuNegocio_model->estatusServicio($this->input->post('boton_s'),$this->input->post('id_servicio'));
                 if ($this->input->post('boton_s') == "desactivar")
                       $msj='<div class="alert alert-info" role="alert">El servicio se ha desactivado.</div>';
                       else
                        $msj='<div class="alert alert-success" role="alert">El servicio se ha activado nuevamente.</div>';

                if ($supeficie) {
                     
                     $this->session->set_userdata('mensaje', $msj);
                     redirect ('Inicio/negocio/'.$id.'/'.$idPersona,'refresh');
                 }

            }else
            if ($this->input->post('boton_s') == "modificar"){
                $supeficie=$this->tuNegocio_model->modificarServicio($datos,$this->input->post('id_servicio_tecnico'),$this->input->post('servicio'));
                if ($supeficie) {
                     $this->session->set_userdata('mensaje', '<div class="alert alert-success" role="alert">Los datos del servicio se han modificado.</div>');
                     redirect ('Inicio/negocio/'.$id.'/'.$idPersona,'refresh');
                 }
            }else{
                 $supeficie=$this->tuNegocio_model->activarServicio($datos);
                 if ($supeficie) {
                     $this->session->set_userdata('mensaje', '<div class="alert alert-success" role="alert">Registro exitoso.</div>');
                     redirect ('Inicio/negocio/'.$id.'/'.$idPersona,'refresh');
                 }
             }
             

        
        }

     function disponibilidad(){
        $id=  $this->uri->segment(3);
          $idPersona= $this->uri->segment(4);
        $turno=$this->input->post('turno');
        $dia=$this->input->post('dia');
        $cont=0;
        $datos=array(
            'turno' =>$this->input->post('turno'),
            'dia' => $this->input->post('dia')
            );
        if ($this->input->post('boton_s') == "Guardar")
            $respuesta=$this->tuNegocio_model->guardarDisponibilidad($datos);
         else
            $respuesta=$this->tuNegocio_model->modificarDisponibilidad($datos);
        
        if ($respuesta) {
            $this->session->set_userdata('mensaje', '<div class="alert alert-success" role="alert">Registro exitoso.</div>');
              redirect ('inicio/ubicacion/'.$id.'/'.$idPersona,'refresh');
        }else{
            $this->session->set_userdata('mensaje', '<div class="alert alert-danger" role="alert">No se realizo el registro.</div>');
            redirect ('inicio/ubicacion/'.$id.'/'.$idPersona,'refresh');

        }

     }

     function certificado_experiencia(){
        $idPersona= $this->uri->segment(4);
        #crea una carpeta para cada usuario tecnico, con sus certificados
        $carpeta = './uploads/certificados/'.$idPersona;
        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0777, true);
        }
        $error= null;
        //Valido el archivo
        $config['upload_path'] = './uploads/certificados/'.$idPersona;
        $config['allowed_types'] = 'png|jpg|pdf';
        $config['encrypt_name']= false;
        $config['overwrite']=true;
        $config['max_size'] = '10000';
        $config['remove_spaces']=true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('archivo')){
            $error = array('error' => $this->upload->display_errors());
            echo 0;
        }
        if($error==null){
            $file=$this->upload->data();
            $file_name= $file['file_name'];
            $archivo= base_url()."uploads/certificados/".$idPersona."/".$file_name;
            $insertar_archivo=$this->tuNegocio_model->guardarCertificado($archivo, $file_name, $idPersona);
          
            if($insertar_archivo){
                echo 3;
            }
            else{
                echo 2;
            }
        }

     }

     function cargarCertificados(){

        $certificados=$this->tuNegocio_model->buscarCertificado($this->input->post("buscar"));
            echo json_encode($certificados);
     }

   /*  function servicio(){
            $id=  $this->uri->segment(3);
            $idPersona= $this->uri->segment(4);
            $id_servicio=$this->uri->segment(5);
          
            $this->layout->setTitle('Tu negocio | Servicios');
            $this->layout->css(array(base_url().'public/css/cuentaTecnico.css'));
            $this->layout->js(array(base_url().'public/js/negocio/negocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/negocio/cargarNegocioTecnico.js'));
            $this->layout->js(array(base_url().'public/js/funciones.js'));
            $this->layout->view('index',compact('id','idPersona'));
            
           # $supeficie=$this->tuNegocio_model->superficie();
           $tabla=array('datos' => $this->tuNegocio_model->tabla() , 'id_tecnico' => $this->session->userdata('id_tecnico'), 'antiguedad' => $this->tuNegocio_model->preciosAntiguedad(), 'disponibilidad' => $this->tuNegocio_model->disponibilidad(), 'servicio' => $this->tuNegocio_model->servicios(),'datos_servicio' => $this->tuNegocio_model->datos_servicio());
            $this->load->view('negocio/cert_energetica_act', $tabla);
        
    }  */ 
}

 
?>