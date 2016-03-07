<?php
if (!defined( 'BASEPATH')) exit('No direct script access allowed');

class BaseController extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->library(array('ion_auth'));
        $this->layout->setLayout('template');
    }
    
    public function noPermitido(){
        $dato=$this->uri->segment(3);
        $this->layout->view('../baseController/nopermitido',compact('dato'));
    }
}