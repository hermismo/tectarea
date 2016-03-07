<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    
    public function logeo ($data){
        
        $condicion=array('usuario'=>$data['usuario'], 'clave'=>$data['contrasena']);
        $query=$this->db
        ->where($condicion)
        ->get('usuario');
        
        if($query->num_rows() >0){
            return $query->row();
        }
        else{
            return false;
        }
    }
}

