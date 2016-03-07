<?php
if (!defined( 'BASEPATH')) exit('No direct script access allowed');

class BaseController{
	private $ci;
	public function __construct(){
            $this->ci =& get_instance();
            $this->ci->load->library(array('ion_auth'));
            $this->ci->load->model('acceso_model');
            $this->ci->layout->setLayout('template');
	}
        
	public function getAcceso(){
            
            $data=$this->ci->uri->segment(3);
            $operacion= $this->ci->uri->segment(1)."-".$this->ci->uri->segment(2);
            $respuesta=$this->ci->acceso_model->acceso($operacion,$data);
            
            if(!$respuesta){
                redirect('baseController/noPermitido/','refresh' );
            }
            return true;
	}
}