<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso_model extends CI_Model {
    
    function acceso($operacion,$data){
        if(!empty($data)){
            $condicion=array('id_usuario'=>$data);
            $query=$this->db
            ->where($condicion)
            ->get('usuario');
        
            if($query->num_rows() >0){
                $dato= $query->row();
                $id_rol= $dato->id_rol;
     
                $query2=$this->db
                ->select("o.nombre_operacion")
                ->from("usuario as u")
                ->join("rol as r","u.id_rol=r.id_rol")
                ->join("rol_operacion as ro","r.id_rol=ro.id_rol")
                ->join("operacion as o","ro.id_operacion=o.id_operacion")
                ->where('nombre_operacion',$operacion)
                ->where('u.id_rol',$id_rol)
                ->get();
                
                if($query2->num_rows() >0){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
        else{
            return true;
        }
        
    }
}
