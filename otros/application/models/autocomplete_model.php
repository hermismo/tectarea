<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autocomplete_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function autocompletarRegistro($parametro){   
        $query=$this->db
        ->like("nombre_zona",$parametro)
        ->get('poblacion');
        if($query->num_rows() >0){
            foreach ($query->result_array() as $row){
                $new_row['id'] = htmlentities(stripslashes($row['id_poblacion']));
                $new_row['value'] = utf8_encode($row['nombre_zona']);
                $new_row['creditos'] = $row['creditos'];
                $row_set[] = $new_row;
            } 
            return $row_set;
        }
        else{
            return false;
        }
    }
}

