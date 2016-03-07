<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function getPersonas(){   
        /*
         * Forma N° 1
        $query=$this->db
        ->select("*")
        ->from("personas")
        ->order_by("id","desc")
        ->get();
        return $query->result();
         * 
         */
        //Forma N° 2
        $query=$this->db
        ->order_by("id","desc")
        ->get('personas');
        //echo $this->db->last_query();
        if($query->num_rows() >0){
           return $query->result();
           // return $query->result_array();
        }
        else{
            return false;
        }
    }
    public function getPersonasPorId($id){
        //Cuando se tienen varios datos es recomendable utilizar el arreglo
        //$condicion=array('id'=>$id);
        $query=$this->db
        ->where('id',$id)
        ->get('personas');
        //echo $this->db->last_query();
        if($query->num_rows() >0){
           return $query->row();
        }
        else{
            return false;
        }
    }
    public function getPersonasConDireccion(){
        $query=$this->db
        ->select("*")
        ->from("personas as p")
        ->join("direccion_persona as dp","p.id=dp.id_persona")
        ->get();
        return $query->result();  
    }
    public function insertar_persona($datos=array()){
        $this->db->insert('personas',$datos);
        //insertando los datos de la otra tabla
        $datos2=array(
            'id_persona'=>$this->db->insert_id(),
            'calle'=>"Larez",
            'direccion'=>"Perú",
            'ciudad'=>'Ecuador'
        );
        $this->db->insert('direccion_persona',$datos2);
    }
    public function modificar_persona($datos=array(),$datos2=array(),$id){
        $this->db->where('id',$id);
        $this->db->update('personas',$datos);
         
        $this->db->where('id_persona',$id);
        $this->db->update('direccion_persona',$datos2);  
    }
    public function eliminar_persona($id){
        $condicion=array('id'=>$id);
        $condicion2=array('id_persona'=>$id);
        $this->db->delete('personas',$condicion);
        $this->db->delete('direccion_persona',$condicion);
    }
    
}

