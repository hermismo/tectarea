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

		#Carga de datos para los servicios que tienen tipologia
		foreach ($sql->result() as  $fila) {
			$id=$fila->id_tipologia;
			$k=0;
			$datos[$i][$k]['id_tipologia']=$fila->id_tipologia;
			$datos[$i][$k]['tipologia']=$fila->tipo_tipologia;
			
			$sql1=$this->db->query("SELECT t.tipo_tipologia,s.id_superficie, s.rango,s.unidad,ts.precio FROM tipologia_superficie as ts, tipologia as t, superficie as s WHERE ts.id_tipologia=".$id." AND ts.id_superficie=s.id_superficie AND t.id_tipologia=".$id." ");
				foreach ($sql1->result() as $fila) {
					$k++;
					$datos[$i][$k]['id_superficie']=$fila->id_superficie;
					$datos[$i][$k]['superficie']=$fila->rango;
					$datos[$i][$k]['precio']=$fila->precio;
				}


			$i++;
		}
				
		return $datos;
		
	}

	function preciosAntiguedad(){

		#Carga de datos para los servios que tiene antiguedad
		$sql2=$this->db->query("SELECT superficie.id_superficie , superficie.rango from superficie, superficie_antiguedad where superficie.id_superficie=superficie_antiguedad.id_superficie GROUP by superficie.id_superficie");
		$j=0;
			foreach ($sql2->result() as  $fila) {
				#echo count($sql2->result());
				$id=$fila->id_superficie;
				$k=0;
				$datos[$j][$k]['id_superficie']=$fila->id_superficie;
				$datos[$j][$k]['rango']=$fila->rango;
				
				$sql1=$this->db->query("SELECT a.id_antiguedad, a.rango_antiguedad, sa.precio from antiguedad as a , superficie_antiguedad as sa, superficie as s, servicio_tecnico as st where a.id_antiguedad=sa.id_antiguedad and sa.id_superficie=".$id." and s.id_superficie=".$id." and sa.id_servicio_tecnico=7 GROUP by a.id_antiguedad");
					#echo "SELECT a.id_antiguedad, a.rango_antiguedad, sa.precio from antiguedad as a , superficie_antiguedad as sa, superficie as s, servicio_tecnico as st where a.id_antiguedad=sa.id_antiguedad and sa.id_superficie=".$id." and s.id_superficie=".$id." and st.id_servicio_tecnico=sa.id_servicio_tecnico and st.id_servicio=2";
					foreach ($sql1->result() as $fila2) {
						
						$k++;
						$datos[$j][$k]['id_antiguedad']=$fila2->id_antiguedad;
						$datos[$j][$k]['rango_antiguedad']=$fila2->rango_antiguedad;
						$datos[$j][$k]['precio_antiguedad']=$fila2->precio;

					}


				$j++;
			}
			###########################
			$i=0;
			foreach ($sql2->result() as  $fila) {
				#echo count($sql2->result());
				$id=$fila->id_superficie;
				$k=0;
				$datos[$i][$k]['id_superficie']=$fila->id_superficie;
				$datos[$i][$k]['rango']=$fila->rango;
				
				$sql3=$this->db->query("SELECT a.id_antiguedad, a.rango_antiguedad, sa.precio from antiguedad as a , superficie_antiguedad as sa, superficie as s, servicio_tecnico as st where a.id_antiguedad=sa.id_antiguedad and sa.id_superficie=".$id." and s.id_superficie=".$id." and sa.id_servicio_tecnico=8 GROUP by a.id_antiguedad");
					foreach ($sql3->result() as $fila) {
						$k++;
						$datos[$i][$k]['id_antiguedad2']=$fila->id_antiguedad;
						$datos[$i][$k]['rango_antiguedad2']=$fila->rango_antiguedad;
						$datos[$i][$k]['precio_antiguedad2']=$fila->precio;

					}


				$i++;
			}

			return $datos;
	}

	
	function servicios(){
		$i=0;
		$id= $this->session->userdata('id_tecnico');
		#------Servicios Activos
		$sql1=$this->db->query('SELECT s.id_servicio, s.nombre_servicio, e.nombre_estatus from servicio as s, servicio_tecnico as st, estatus as e where s.id_servicio=st.id_servicio and e.id_estatus=st.id_estatus and e.nombre_estatus="Activo" and st.id_tecnico='.$id.' GROUP by s.nombre_servicio');
		#------Servicios Desactivados
		$sql2=$this->db->query('SELECT s.id_servicio, s.nombre_servicio, e.nombre_estatus from servicio as s, servicio_tecnico as st, estatus as e where s.id_servicio=st.id_servicio and e.id_estatus=st.id_estatus and e.nombre_estatus="Inactivo" and st.id_tecnico='.$id.' GROUP by s.nombre_servicio');
		#------Servicios nunca activados
		$string=array();
		foreach ($sql1->result() as $fila) {$string[]=$fila->id_servicio;} $ids= implode($string,',');	
				if ($ids > 0)
			$sql3=$this->db->query('SELECT servicio.nombre_servicio,servicio.id_servicio from servicio, servicio_tecnico where servicio.id_servicio not in ('.$ids.') and servicio_tecnico.id_tecnico='.$id.' GROUP by servicio.id_servicio');
			else
				$sql3=$this->db->query('SELECT servicio.nombre_servicio,servicio.id_servicio from servicio, servicio_tecnico where servicio_tecnico.id_tecnico='.$id.' GROUP by servicio.id_servicio');
				#echo 'SELECT servicio.nombre_servicio,servicio.id_servicio from servicio, servicio_tecnico where servicio.id_servicio not in ('.$ids.') and servicio_tecnico.id_tecnico='.$id.' GROUP by servicio.id_servicio';
				foreach ($sql3->result() as $fila) {
					$inactivos[$i]['nombre']=$fila->nombre_servicio;
					$inactivos[$i]['id']=$fila->id_servicio;
					$i++;
					}
					
		
		
		$datos=array('activos' => $sql1, 'desactivados' => $sql2 , 'inactivos' => $inactivos);

		return $datos;
	}

	function activarServicio($datos){
		
		$id_servicio=$datos['id_servicio']; 
		# consulta para traer el id del estatus ACTIVO
		$sql1=$this->db->query('select id_estatus from estatus where nombre_estatus="Activo" limit 1');
		foreach ($sql1->result() as $result1){$id_estatus=$result1->id_estatus;	}
		
		#------------------------------------#
		#Id del tecnico 
		$id_tecnico=$this->session->userdata('id_tecnico');
		#------------------------------------#
		#Datos Recibidos
        $longitud_tipologia = count($datos['tipologia']);
        $longitud_precio = count($datos['precio'])/3;
        $cont=0; 
        #-------Condicion para 
        if ($datos['visado'] == "null" || $datos['visado'] == 'No') {
        		     				
        		$this->db->query('insert into  visado_tecnico (id_condicion_visado, monto) values (2, 0)');
        		#obtener el id del visado para la tabla servicio _ tecnico
				$sql_idt=$this->db->query('SELECT id_visado_tecnico as id, monto from visado_tecnico where id_visado_tecnico=(select MAX(id_visado_tecnico) from visado_tecnico) limit 1');
				foreach ($sql_idt->result() as $result3){$id_vt=$result3->id; $monto_v=$result3->monto;}      
        	}else
        	{
        		   				
        		$this->db->query('insert into  visado_tecnico (id_condicion_visado, monto) values (1, '.$datos['monto_visado'].')');
        		#obtener el id del visado para la tabla servicio _ tecnico
				$sql_idt=$this->db->query('SELECT id_visado_tecnico as id, monto from visado_tecnico where id_visado_tecnico=(select MAX(id_visado_tecnico) from visado_tecnico) limit 1');
				foreach ($sql_idt->result() as $result3){$id_vt=$result3->id; $monto_v=$result3->monto;} 

        	}
        #---------------Registro del servicio
        $this->db->query('insert into servicio_tecnico(id_tecnico, id_servicio,descripcion_servicio,id_estatus, visado) values ('.$id_tecnico.','.$id_servicio.',"'.$datos['descripcion'].'",'.$id_estatus.','.$id_vt.')');
        #----------------ID del servicio_tecnico
        $sql2=$this->db->query('select max(id_servicio_tecnico) as id from servicio_tecnico limit 1');
			foreach ($sql2->result() as $result2){$id_servicio_tecnico=$result2->id;}

		#-------------Registro d elas formas de pago
			for($i=0; $i<count($datos['forma_pago']); $i++)
		          {
		         $this->db->query('insert into servicio_forma_pago (id_servicio_tecnico, id_forma_pago) values('.$id_servicio_tecnico.','.$datos['forma_pago'][$i].')');
		        
		          }
		#------------------Registro de las tipologias junto a sus precios

		//Recorro todos los elementos, insercion se las superficies y sus precios
		$cont=0;
		if ($datos['servicio'] == "certificado" || $datos['servicio'] == "cedula_h"){
			
    	for($k=0; $k< count($datos['tipologia']); $k++){ 
	       		#echo  $datos['tipologia'][$k]."<br>";
	    	for($i=0; $i<count($datos['precio'])/count($datos['tipologia']); $i++)
		          {#echo $datos['precio'][$cont]."<br>";
		          $total=$datos['precio'][$cont]+$monto_v;	
		         $this->db->query('insert into tipologia_superficie (id_tipologia,id_superficie,id_servicio_tecnico, precio) values('.$datos['tipologia'][$k].','.$datos['superficie'][$i].','.$id_servicio_tecnico.','.$total.')');
		       #  echo 'insert into tipologia_superficie (id_tipologia,id_superficie,id_servicio_tecnico, precio) values('.$datos['tipologia'][$k].','.$datos['superficie'][$i].','.$id_servicio_tecnico.','.$total.')';
		          $cont++;
		          }
	        }
	    }    
	    //Recorro todos los elementos, insercion se las tipologia-numero de viviendas y sus precios
		$cont=0;
		if ($datos['servicio'] == "certificado"){
    	for($k=0; $k< count($datos['edificio']); $k++){ 
	       		          
	    	for($i=0; $i<count($datos['precio_e']); $i++)
		          {
		          	$total=$datos['precio_e'][$i]+$monto_v;
		         $this->db->query('insert into tipologia_superficie (id_tipologia,id_superficie,id_servicio_tecnico, precio) values('.$datos['edificio'][$k].','.$datos['num_viviendas'][$i].','.$id_servicio_tecnico.','.$total.')');
		        
		          }
	        }}

	     if ($datos['servicio'] == "ITE" || $datos['servicio'] == "IEE"){

	     	for($k=0; $k< count($datos['tipologia']); $k++){ 
	       		#echo  $datos['tipologia'][$k]."<br>";
		    	for($i=0; $i<count($datos['precio'])/count($datos['tipologia']); $i++)
			          {#echo $datos['precio'][$cont]."<br>";
			          $total=$datos['precio'][$cont]+$monto_v;	
			         $this->db->query('INSERT INTO superficie_antiguedad(id_superficie, id_antiguedad, id_servicio_tecnico, precio) VALUES('.$datos['tipologia'][$k].','.$datos['superficie'][$i].','.$id_servicio_tecnico.','.$total.')');
			         #echo 'INSERT INTO superficie_antiguedad(id_superficie, id_antiguedad, id_servicio_tecnico, precio) VALUES('.$datos['tipologia'][$k].','.$datos['superficie'][$i+1].','.$id_servicio_tecnico.','.$total.')'.'<br>';
			          $cont++;
			          }
	        }
	     }   
	return true;
	}

	function guardarDisponibilidad($datos){
		$id_tecnico=$this->session->userdata('id_tecnico');

		$turno=$datos['turno'];
        $dia=$datos['dia'];
        $cont=0;
        for ($i=0; $i < 3; $i++) { 
            #echo $turno[$i]."<br>";
             
            for ($k=0; $k < 7; $k++) { 
                if(!empty($dia[$cont]))
                 {
                 	$linea=$cont+1;
                      $sql=$this->db->query('INSERT INTO disponibilidad(id_turno,id_tecnico,disponibilidad, linea) VALUES ('.$turno[$i].', '.$id_tecnico.','.$dia[$cont].' , '.$linea.')');
                }
                $cont++;
            }
        }
        return true;
	}

	function modificarDisponibilidad($datos){
		$id_tecnico=$this->session->userdata('id_tecnico');
		 $sql=$this->db->query('DELETE FROM disponibilidad WHERE id_tecnico='.$id_tecnico.'');
		$turno=$datos['turno'];
        $dia=$datos['dia'];
        $cont=0;
        for ($i=0; $i < 3; $i++) { 
            #echo $turno[$i]."<br>";
             
            for ($k=0; $k < 7; $k++) { 
                if(!empty($dia[$cont]))
                 {
                 	$linea=$cont+1;
                      $sql=$this->db->query('INSERT INTO disponibilidad(id_turno,id_tecnico,disponibilidad, linea) VALUES ('.$turno[$i].', '.$id_tecnico.','.$dia[$cont].' , '.$linea.')');
                }
                $cont++;
            }
        }
        return true;
	}

	function disponibilidad(){

		$id_tecnico=$this->session->userdata('id_tecnico');
		$sql=$this->db->query('SELECT id_turno FROM disponibilidad where id_tecnico='.$id_tecnico.' GROUP by id_turno ');

		foreach ($sql->result() as $fila) {
		$sql2=$this->db->query('SELECT * FROM disponibilidad where id_tecnico='.$id_tecnico.' and id_turno='.$fila->id_turno.' order by id_disponibilidad');
		
			foreach ($sql2->result() as $fila2) {

				$dias['dia'][$fila2->linea]=$fila2->linea;
			
			}
		}

		if (empty($dias) == false)
			return $dias;

	}

	function datos_servicioITE_IEE($datos){

		$sql3=$this->db->query('select st.id_servicio_tecnico,st.id_servicio, st.descripcion_servicio, st.id_estatus, vt.monto, vt.id_condicion_visado, e.nombre_estatus from servicio_tecnico as st, visado_tecnico as vt, estatus as e WHERE st.id_tecnico='.$datos['id_tecnico'].' and st.id_servicio='.$datos['id_servicio'].' and vt.id_visado_tecnico=st.visado and e.id_estatus=st.id_estatusLIMIT 1');
		$sql2=$this->db->query("SELECT superficie.id_superficie , superficie.rango from superficie, superficie_antiguedad where superficie.id_superficie=superficie_antiguedad.id_superficie GROUP by superficie.id_superficie");

		foreach ($sql3->result() as  $fila_tecnico) {#Extraer el id del servicio_tecnico para hacer la consulta correspondiente al servicio y al tecnico
			$datos['descripcion']=$fila_tecnico->descripcion_servicio;
			$datos['id_servicio']=$fila_tecnico->id_servicio;
			$datos['estatus']=$fila_tecnico->nombre_estatus;
			$datos['visado']=$fila_tecnico->id_condicion_visado;
			$datos['visado_monto']=$fila_tecnico->monto;
			#echo $datos['descripcion'];
			$id_servicio_t= $fila_tecnico->id_servicio_tecnico;
			#cargar las formas de pago que el tecnico ofrece

			$sql4=$this->db->query('SELECT * FROM servicio_forma_pago where id_servicio_tecnico='.$id_servicio_t.' ');
			
			foreach ($sql4->result() as  $fila) {
				
				$datos['forma_pago'][$fila->id_forma_pago]=$fila->id_forma_pago;

			}
		$j=0;
			foreach ($sql2->result() as  $fila) {
				#echo count($sql2->result());
				$id=$fila->id_superficie;
				$k=0;
				$datos['id_superficie'][$j][$k]=$fila->id_superficie;
				$datos['rango'][$j][$k]=$fila->rango;
				
				$sql1=$this->db->query("SELECT a.id_antiguedad, a.rango_antiguedad, sa.precio from antiguedad as a , superficie_antiguedad as sa, superficie as s, servicio_tecnico as st where a.id_antiguedad=sa.id_antiguedad and sa.id_superficie=".$id." and s.id_superficie=".$id." and sa.id_servicio_tecnico=".$id_servicio_t." GROUP by a.id_antiguedad order by a.id_antiguedad");
					//echo "SELECT a.id_antiguedad, a.rango_antiguedad, sa.precio from antiguedad as a , superficie_antiguedad as sa, superficie as s, servicio_tecnico as st where a.id_antiguedad=sa.id_antiguedad and sa.id_superficie=".$id." and s.id_superficie=".$id." and sa.id_servicio_tecnico=".$id_servicio_t." GROUP by a.id_antiguedad order by a.id_antiguedad";
					#echo "SELECT a.id_antiguedad, a.rango_antiguedad, sa.precio from antiguedad as a , superficie_antiguedad as sa, superficie as s, servicio_tecnico as st where a.id_antiguedad=sa.id_antiguedad and sa.id_superficie=".$id." and s.id_superficie=".$id." and st.id_servicio_tecnico=sa.id_servicio_tecnico and st.id_servicio=2";
					foreach ($sql1->result() as $fila2) {
						
						$k++;
						$datos['id_antiguedad'][$j][$k]=$fila2->id_antiguedad;
						$datos['rango_antiguedad'][$j][$k]=$fila2->rango_antiguedad;
						$datos['precio_antiguedad'][$j][$k]=$fila2->precio;

					}


				$j++;
			}
		}
		return $datos;
	}

	function datos_servicio($datos){

		$sql2=$this->db->query('select st.id_servicio_tecnico,st.id_servicio, st.descripcion_servicio,  e.nombre_estatus as estatus, vt.monto, vt.id_condicion_visado from servicio_tecnico as st, visado_tecnico as vt , estatus as e WHERE st.id_tecnico='.$datos['id_tecnico'].' and st.id_servicio='.$datos['id_servicio'].' and vt.id_visado_tecnico=st.visado and e.id_estatus=st.id_estatus LIMIT 1');
		
		$sql=$this->db->query("select id_tipologia,tipo_tipologia from tipologia order by id_tipologia");
		$i=0;
		foreach ($sql2->result() as  $fila_tecnico) {#Extraer el id del servicio_tecnico para hacer la consulta correspondiente al servicio y al tecnico
			$datos['descripcion']=$fila_tecnico->descripcion_servicio;
			$datos['id_servicio']=$fila_tecnico->id_servicio;
			$datos['id_servicio_tecnico']=$fila_tecnico->id_servicio_tecnico;
			$datos['estatus']=$fila_tecnico->estatus;
			$datos['visado']=$fila_tecnico->id_condicion_visado;
			$datos['visado_monto']=$fila_tecnico->monto;
			#echo $datos['descripcion'];
			$id_servicio_t= $fila_tecnico->id_servicio_tecnico;
			#cargar las formas de pago que el tecnico ofrece

			$sql4=$this->db->query('SELECT * FROM servicio_forma_pago where id_servicio_tecnico='.$id_servicio_t.' ');
			
			foreach ($sql4->result() as  $fila) {
				
				$datos['forma_pago'][$fila->id_forma_pago]=$fila->id_forma_pago;

			}
		#Carga de datos para los servicios que tienen tipologia

		foreach ($sql->result() as  $fila) {#Filas de las tipologias
			$id=$fila->id_tipologia;
			$k=0;
			$datos['id_tipologia'][$i][$k]=$fila->id_tipologia;
			$datos['tipologia'][$i][$k]=$fila->tipo_tipologia;
			#echo $datos[$i][$k]['tipologia'];
			$sql1=$this->db->query("SELECT t.tipo_tipologia,s.id_superficie, s.rango,s.unidad,ts.precio,ts.id_tipologia_superficie FROM tipologia_superficie as ts, tipologia as t, superficie as s WHERE ts.id_tipologia=".$id." AND ts.id_superficie=s.id_superficie AND t.id_tipologia=".$id." and ts.id_servicio_tecnico=".$id_servicio_t."");
				foreach ($sql1->result() as $fila) {#filas de las superficies y sus precios
					$k++;
					$datos['id_superficie'][$i][$k]=$fila->id_superficie;
					$datos['superficie'][$i][$k]=$fila->rango;
					$datos['precio'][$i][$k]=$fila->precio;
					$datos['id_tipologia_superficie'][$i][$k]=$fila->id_tipologia_superficie;
				}


			$i++;
		}}

		return $datos;
	}
	function estatusServicio($boton,$id_servicio){
		$id_tecnico=$this->session->userdata('id_tecnico');
		if ($boton == "reactivar")
			$this->db->query('UPDATE servicio_tecnico SET servicio_tecnico.id_estatus=(SELECT id_estatus from estatus where nombre_estatus="Activo") where servicio_tecnico.id_tecnico='.$id_tecnico.' and servicio_tecnico.id_servicio='.$id_servicio.'');
		else
			if ($boton == "desactivar")
				$this->db->query('UPDATE servicio_tecnico SET servicio_tecnico.id_estatus=(SELECT id_estatus from estatus where nombre_estatus="Inactivo") where servicio_tecnico.id_tecnico='.$id_tecnico.' and servicio_tecnico.id_servicio='.$id_servicio.'');
	return true;			

	}

	function modificarServicio($datos,$id_servicio_tecnico,$servicio){

		$id_servicio=$datos['id_servicio']; 
		# consulta para traer el id del estatus ACTIVO
		$sql1=$this->db->query('select st.id_servicio_tecnico,st.id_servicio, st.descripcion_servicio,  e.nombre_estatus as estatus, vt.monto, vt.id_condicion_visado from servicio_tecnico as st , visado_tecnico as vt , estatus as e WHERE st.id_servicio_tecnico='.$id_servicio_tecnico.' and st.id_servicio='.$datos['id_servicio'].' and vt.id_visado_tecnico=st.visado and e.id_estatus=st.id_estatus LIMIT 1');
		foreach ($sql1->result() as $result1){$id_servicio_tecnico=$result1->id_servicio_tecnico;	}
		

		#------------------------------------#
		#Id del tecnico 
		$id_tecnico=$this->session->userdata('id_tecnico');
		#------------------------------------#
		#Datos Recibidos
        $longitud_tipologia = count($datos['tipologia']);
        $longitud_precio = count($datos['precio'])/3;
        $cont=0; 
        #-------Modificacion del Visado del Servicio 
        $this->db->query('UPDATE servicio_tecnico SET descripcion_servicio="'.$datos['descripcion'].'" where id_servicio_tecnico='.$id_servicio_tecnico.' ');

        #-------Modificacion del Visado del Servicio        
        		 				
        $this->db->query('update visado_tecnico set id_condicion_visado=(SELECT id_visado from condicion_visado WHERE condicion="'.$datos['visado'].'") , monto='.$datos['monto_visado'].' where id_visado_tecnico=(select visado from servicio_tecnico where id_servicio_tecnico='.$id_servicio_tecnico.')');
        
       #-------------Modificar d elas formas de pago
        	$this->db->query('delete from servicio_forma_pago where id_servicio_tecnico='.$id_servicio_tecnico.'');
			for($i=0; $i<count($datos['forma_pago']); $i++)
		          {
		         $this->db->query('insert into servicio_forma_pago (id_servicio_tecnico, id_forma_pago) values('.$id_servicio_tecnico.','.$datos['forma_pago'][$i].')');
		        
		          }
		#------------------Registro de las tipologias junto a sus precios

		//Recorro todos los elementos, insercion se las superficies y sus precios
		$cont=0;
		
		if ($servicio == "certificado" || $servicio == "cedula_h"){
		
    	for($k=0; $k< count($datos['tipologia']); $k++){ 
	       		
	    	for($i=0; $i<count($datos['precio'])/count($datos['tipologia']); $i++)
		          {

		          $total=$datos['precio'][$cont]+$datos['monto_visado'];	
		         $this->db->query('UPDATE tipologia_superficie set precio='.$total.' where id_tipologia='.$datos['tipologia'][$k].' and id_superficie='.$datos['superficie'][$i].' and id_servicio_tecnico='.$id_servicio_tecnico.' ');
		        # echo 'update tipologia_superficie set precio='.$total.' where id_tipologia='.$datos['tipologia'][$k].' and id_superficie='.$datos['superficie'][$i].' and id_servicio_tecnico='.$id_servicio_tecnico.' ';
		       #  echo 'insert into tipologia_superficie (id_tipologia,id_superficie,id_servicio_tecnico, precio) values('.$datos['tipologia'][$k].','.$datos['superficie'][$i].','.$id_servicio_tecnico.','.$total.')';
		          $cont++;
		          }
	        }
	    }    
	    //Recorro todos los elementos, insercion se las tipologia-numero de viviendas y sus precios
		$cont=0;
		if ($servicio == "certificado"){
    	for($k=0; $k< count($datos['edificio']); $k++){ 
	       		          
	    	for($i=0; $i<count($datos['precio_e']); $i++)
		          {
		          	$total=$datos['precio_e'][$i]+$datos['monto_visado'];
		         $this->db->query('update tipologia_superficie set precio='.$total.' where id_tipologia='.$datos['edificio'][$k].' and id_superficie='.$datos['num_viviendas'][$i].' and id_servicio_tecnico='.$id_servicio_tecnico.' ');
		        
		          }
	        }}

	     if ($servicio == "ITE" || $servicio == "IEE"){

	     	for($k=0; $k< count($datos['tipologia']); $k++){ 
	       		#echo  $datos['tipologia'][$k]."<br>";
		    	for($i=0; $i<count($datos['precio'])/count($datos['tipologia']); $i++)
			          {#echo $datos['precio'][$cont]."<br>";
			          $total=$datos['precio'][$cont]+$datos['monto_visado'];	
			         $this->db->query('UPDATE superficie_antiguedad SET precio='.$total.' WHERE id_superficie='.$datos['tipologia'][$k].' and id_antiguedad='.$datos['superficie'][$i].' and id_servicio_tecnico='.$id_servicio_tecnico.' ');
			         #echo 'INSERT INTO superficie_antiguedad(id_superficie, id_antiguedad, id_servicio_tecnico, precio) VALUES('.$datos['tipologia'][$k].','.$datos['superficie'][$i+1].','.$id_servicio_tecnico.','.$total.')'.'<br>';
			          $cont++;
			          }
	        }
	     } 
	     return true; 
	}

	function guardarCertificado($archivo, $file_name, $idPersona){

		$sql=$this->db->query('select * from certificados_experiencia where certificado="'.$archivo.'" and id_tecnico='.$idPersona.'');
		if ($sql->num_rows() > 0) {
			return false;
		}
		else
		{
			$this->db->query('INSERT INTO certificados_experiencia (certificado, nombre, id_tecnico) VALUES ("'.$archivo.'" , "'.$file_name.'" , '.$idPersona.') ');
			if($this->db->affected_rows() > 0){
				return true;
			}else
				return false;
			}
	}

	function buscarCertificado($idPersona){
		$sql=$this->db->query('select * from certificados_experiencia where id_tecnico='.$idPersona.'');
		
		
		return $sql->result();
	}
	/*function insertarS($datos){

			$log_precio=count($datos['precio'])/24;
			$precio=$datos['precio'];
			$log_superficie=count($datos['superficie']);
			$superficie=$datos['superficie'];
			$antiguedad=$datos['antiguedad'];
			$cont=0;
		
			$sql4=$this->db->query("SELECT id_antiguedad FROM antiguedad order by id_antiguedad ");
							foreach ($sql4->result() as $fila) {	$id_antiguedad[]=$fila->id_antiguedad;}
			$sql4=$this->db->query("SELECT id_superficie from superficie where id_superficie BETWEEN 100 and 124 ");
							foreach ($sql4->result() as $fila) {	$id_superficie[]=$fila->id_superficie;}				

			for ($i=0; $i < $log_superficie; $i++) { 
				#echo "<br>".$datos['superficie'][$i]."<br>";
				#$this->db->query('INSERT INTO superficie(rango, unidad) VALUES ("'.$datos['superficie'][$i].'", "m2")');
       
       			# $sql2=$this->db->query('select max(id_superficie) as id from superficie limit 1');
				#foreach ($sql2->result() as $result2){$id_superficie=$result2->id;}


					#for ($k=0; $k < $log_precio; $k++) { 

						
       
		       			#$total=($datos['precio'][0]) + (($datos['precio'][0]* $datos['por'][$k])/100);
						#echo "<br><b>".$total."</b><br>";
						#$cont++;

						for ($k=0; $k < count($datos['antiguedad']); $k++) { 
							$precio = ($datos['precio'][$i]) + (($datos['precio'][$i] * $datos['por'][$k])/100);
															
							
							$this->db->query('INSERT INTO superficie_antiguedad(id_superficie, id_antiguedad, id_servicio_tecnico, precio) VALUES ('.$id_superficie[$i].','.$id_antiguedad[$k].',7,'.$precio.')');	
								
						}
						#}				
			}
	}*/
}
?>