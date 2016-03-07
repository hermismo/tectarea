<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function getPersonas(){   
        $query=$this->db
        ->get('personas');
        //echo $this->db->last_query();
        if($query->num_rows() >0){
           return $query->result();
        }
        else{
            return false;
        }
    }
    public function insertar_persona($datos=array()){
        $this->db->insert('personas',$datos);
        return true;
    }
    
    public function getPersonaPorId($id){
        $condicion=array('id'=>$id);
        $query=$this->db
        ->where($condicion)
        ->get('personas');
        if($query->num_rows() >0){
           return $query->row();
        }
        else{
            return false;
        }
    }
    
     public function modificar_persona($datos=array(),$id){
        $this->db->where('id',$id);
        $this->db->update('personas',$datos);
        return true;
    }
    
    public function eliminar_persona($id){
        $condicion=array('id'=>$id);
        $this->db->delete('personas',$condicion);
        return true;
    }
}

