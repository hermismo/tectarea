<?php
/**
* 
*/
class Tunegocio_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function tipologia(){

		$sql=$this->db->query("select id_tipologia,tipo_tipologia from tipologia order by id_tipologia");

		if($sql->num_rows() >0){
			 $data= array($sql->row());	
           return $data;
        }
        else{
            return false;
        }

	}
	function superficie(){

		$sql=$this->db->query("select id_superficie,rango,unidad from superficie order by id_superficie");

		if($sql->num_rows() >0){
            $data= array($sql->row());	
           return $data;
        }
        else{
            return false;
        }

	}

	function tabla(){
		$sql=$this->db->query("select id_tipologia,tipo_tipologia from tipologia order by id_tipologia");
		$i=0;
		foreach ($sql->result() as  $fila) {
			$id=$fila->id_tipologia;
			$k=0;
			$datos[$i][$k]['tipologia']=$fila->tipo_tipologia;
			
			$sql1=$this->db->query("SELECT t.tipo_tipologia,s.rango,s.unidad,ts.precio FROM tipologia_superficie as ts, tipologia as t, superficie as s WHERE ts.id_tipologia=".$id." AND ts.id_superficie=s.id_superficie AND t.id_tipologia=".$id." ");
				foreach ($sql1->result() as $fila) {
					$k++;
					$datos[$i][$k]['superficie']=$fila->rango;
					$datos[$i][$k]['precio']=$fila->precio;
				}

			$i++;
		}

		return $datos;
		
	}
}
?>