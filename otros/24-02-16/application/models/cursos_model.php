<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->dataBase();
    }
    function crearCurso($data){
        $this->db->insert('cursos',array(
            'nombre'=>$data['nombre'],
            'videos_curso'=>$data['videos'])
            );//la clave del array es el nombre de cada campo de la tabla;
    }
    function obtenerCursos(){
        $query=$this->db->get('cursos');
        if($query->num_rows() >0) return $query;
        else return false;
        
    }
    function obtenerCurso($id){
        $this->db->where('id_curso',$id);
        $query=$this->db->get('cursos');
        if($query->num_rows() >0) return $query;
        else return false; 
    }
    function actualizarCurso($id,$data){
        $datos=array('nombre'=>$data['nombre'],'videos_curso'=>$data['videos']);
        $this->db->where('id_curso',$id);
        $query=$this->db->update('cursos',$datos);
    }
    function eliminarCurso($id){
        //$query=$this->db->delete('cursos',array('id_curso'=>$id));//en el segundo parametro de envia el id del dato que se desea eliminar
        //otra forma:
        $query="DELETE FROM cursos WHERE id_curso=$id";
        $this->db->query($query);
    }
}

