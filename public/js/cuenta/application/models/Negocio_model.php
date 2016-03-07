<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negocio_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function getServiciosNoAsociados(){
        $query=$this->db
        ->get('titulo');
        return $query->result();
    }
    
    public function modificar_persona($datos=array(),$datos2=array(),$id_usuario,$id_persona){
        $this->db->where('id_persona',$id_persona);
        $this->db->update('numero_telefonico',$datos);
        
        $this->db->where('id_usuario',$id_usuario);
        $this->db->update('tecnico',$datos2);
        return true;
    }
    
    public function insertar_red($datos3,$id_usuario){
        $condicion=array('id_usuario'=>$id_usuario);
        $query=$this->db
        ->where($condicion)
        ->get('tecnico');
        
        if($query->num_rows() >0){
            $dato= $query->row();
            $id_tecnico= $dato->id_tecnico;
            $data=array(
                array(
                    'id_tecnico'=>$id_tecnico,
                    'red_social'=>$datos3['red_social_1'],
                ),
                array(
                    'id_tecnico'=>$id_tecnico,
                    'red_social'=>$datos3['red_social_2'],
                ),
                array(
                    'id_tecnico'=>$id_tecnico,
                    'red_social'=>$datos3['red_social_3'],
                ),
            );
            $this->db->insert_batch('tecnico_red_social', $data); 
            return true;
        }
        else{
            return false;
        }
    }
    public function getTelefonoPorId($id){
        $condicion=array('id_persona'=>$id);
        $query=$this->db
        ->where($condicion)
        ->get('numero_telefonico');
        if($query->num_rows() >0){
           return $query->row();
        }
        else{
            return false;
        }
    }
    
    public function getTecnicoPorId($id){
        $condicion=array('id_usuario'=>$id);
        $query=$this->db
        ->where($condicion)
        ->get('tecnico');
        
        if($query->num_rows() >0){
            $idTitulo= $query->row()->id_titulo;
            //return $query->row();
            $titulo= $this->getTitulo($idTitulo);
            $data= array($query->row_array(), $titulo);
            return $data;
        }
        
        else{
            return false;
        }
    }
    
    public function getTitulo($idTitulo){
        $condicion=array('id_titulo'=>$idTitulo);
        $query=$this->db
        ->where($condicion)
        ->get('titulo');
        if($query->num_rows() >0){
           return $query->row_array();
        }
        else{
            return false;
        }
    }
    
    public function getRedesSocialesPorId($id){
        $condicion=array('id_usuario'=>$id);
        $query=$this->db
        ->where($condicion)
        ->get('tecnico');
        
        if($query->num_rows() >0){
            
            $dato= $query->row();
            $id_tecnico= $dato->id_tecnico;
            
            $condicion=array('id_tecnico'=>$id_tecnico);
            $query=$this->db
            ->where($condicion)
            ->get('tecnico_red_social');
            return $query->result();
        }
        else{
            return false;
        }
    }
    public function verificarImagen($imagen,$idUsuario){
        $condicion=array('id_usuario'=>$idUsuario);
        $query=$this->db
        ->where($condicion)
        ->get('tecnico');
        
        if($query->num_rows() >0){
            $dato= $query->row();
            $id_tecnico= $dato->id_tecnico;
            $condicion=array('id_tecnico'=>$id_tecnico,'id_tipo_imagen'=>1,'nombre_imagen'=>$imagen);
            $query=$this->db
            ->where($condicion)
            ->get('imagen');
            if($query->num_rows() >0){
               return true;
            }
            else{
                $this->insertarImagen($id_tecnico,'1',$imagen);
                return true;
            }
        }
        else{
            return false;
        }  
    }
    
    public function insertarImagen($id_tecnico,$idTipoImagen,$imagen){
        $datos=array(
            'id_tecnico'=>$id_tecnico,
            'id_tipo_imagen'=>$idTipoImagen,
            'nombre_imagen'=>$imagen,
        );
        $this->db->insert('imagen',$datos);
    }
    
    public function searchFoto($idUsuario,$idTipoImagen){
        $condicion=array('id_usuario'=>$idUsuario);
        $query=$this->db
        ->where($condicion)
        ->get('tecnico');
        
        if($query->num_rows() >0){
            $dato= $query->row();
            $id_tecnico= $dato->id_tecnico;
            
            $condicion=array('id_tecnico'=>$id_tecnico,'id_tipo_imagen'=>$idTipoImagen);
            $query=$this->db
            ->where($condicion)
            ->get('imagen');
            return $query->row();
        }
        else{
            return false;
        }
    }
    public function update_pass($pass,$new_pass,$id_usuario){
        $condicion=array('clave'=>$pass,'id_usuario'=>$id_usuario);
        $query=$this->db
        ->where($condicion)
        ->get('usuario');
        if($query->num_rows() >0){
            if($pass != $new_pass){
                $datos=array('clave'=>$new_pass);
                $this->db->where('id_usuario',$id_usuario);
                $this->db->update('usuario',$datos);
                return 1;
            }
            else{
                return 2;
            }
        }
        else{
            return 3;
        }
    }
    
    public function verificarTitulo($imagen,$idUsuario){
        $condicion=array('id_usuario'=>$idUsuario);
        $query=$this->db
        ->where($condicion)
        ->get('tecnico');
        
        if($query->num_rows() >0){
            $dato= $query->row();
            $id_tecnico= $dato->id_tecnico;
            $condicion=array('id_tecnico'=>$id_tecnico,'id_tipo_imagen'=>2,'nombre_imagen'=>$imagen);
            $query=$this->db
            ->where($condicion)
            ->get('imagen');
            if($query->num_rows() >0){
               return true;
            }
            else{
                $this->insertarImagen($id_tecnico,'2',$imagen);
                return true;
            }
        }
        else{
            return false;
        }  
    }
}

