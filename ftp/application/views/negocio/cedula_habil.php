<div class="tab-content">
	<strong><h3>Tus precios y servicios | Cédula de habitabilidad</h3> </strong><br>
	<strong><h4>Comprueba tus precios en el comparador</h4> </strong><br>
	<strong><h4>Describe tu Servicio<font color="red">(*) </font></h4> </strong><br>
	<form action="<?= base_url()."negocio/activarServicio"."/".$id."/".$idPersona?>" method="post">
		<input type="hidden" id='id_cedula' name="id_servicio">
							<div id="sombra">

								<div class="">
                                    <label class="">¿Qué diferencia tu servicio del resto de la competencia?</label>
                                    <div class="">
                                    <textarea class="form-control" placeholder="" maxlength="250" name="desc_servicio" id="desc_servicio" autofocus required ></textarea>
                                    </div>
                                    <small><font color="red">MAX. 250 Caracteres.</font></small>
                               </div></div><br><br>

		<strong><h4>Tus Precios</h4> </strong><br>
		<div class="table-responsive" >
			<table class="table table-bordered" id="tabla_c">			
					<tr>
						<th>Tipologia</th><th colspan="7">Superficie</th>
					</tr><tr>
						<td></td>
						<th>Menos de 50</th>
						<th>51-80</th>
						<th>81-120</th>
						<th>121-180</th>
						<th>181-350</th>
						<th>351-500</th>
						<th>501-1000</th>
						
					</tr>
					<?php
		               for ($i=0; $i < count($datos); $i++) { 
		               	if ($datos[$i][0]['tipologia'] == 'Piso' || $datos[$i][0]['tipologia'] == 'Unifamiliar')
		               	{	
		               		echo "<tr>";
		               		echo "<th><input type='hidden' name='tipologia[]' value='".$datos[$i][0]['id_tipologia']."'>";
		                		echo $datos[$i][0]['tipologia'];
		                	echo "</th>";
		               	
		                   for ($k=1; $k < 8; $k++) { 
		                   	echo "<td><input type='hidden' name='superficie[]' value='".$datos[$i][$k]['id_superficie']."'>";
		                   	echo '<input type="text" name="precio[]" value="'.$datos[$i][$k]['precio'].'" size="5" onkeyPress="return validarNumero(event)" maxlength="8"> <br>';
		                     echo '<font color="red">'.$datos[$i][$k]['precio'].'</font>';
		                      echo '</td>';
		                            
		                   }
		                  echo "</tr>";
		                  } 
		               }
                
                ?>
                <tr><th colspan="8">
            <small><font color="red">*</font> Los precios no incluyen IVA.</small><br>
             <small><font color="red">*</font> Los precios no incluyen ningún tipo de tasa administrativa o gravamen.</small>   
           </th></tr> 
			</table>
		</div>
		<strong><h4>¿Este servicio requiere visado por parte de tu colegio profesional?</h4> </strong><br>
		<div id="sombra">
			<label>
			  <input type="checkbox" name="visado" value="Si" id="visado_si"> Si
			  <div id="visado">
			      <div class="input-group">
	      			
	     			 <input type="text" class="form-control" id="" name="monto_visado" placeholder="" value="0" onkeyPress="return validarNumero(event)">
	      				<div class="input-group-addon">.00</div>
	    		</div>
			    </label><br><small>*A tus precios añadiremos el precio del visado</small>
		    </div>
		    <br>
		    <label>
		      <input type="checkbox" name="visado" value="no" id="visado_no"> No
		    </label>
		</div>


		<div><h4>¿Qué facilidades de pago ofreces?</h4>
				
				<div class="input-group" id="sombra">
					<label>
				      <input type="checkbox" name="forma_pago[]" value="1" id=""> Pago en efectivo el día de la visita
				    </label>
				    <br>
				    <label>
				      <input type="checkbox" name="forma_pago[]" value="2" id=""> Pago por transferencia a la entrega de la documentación
				    </label>
				    <br>
				    <label>
				      <input type="checkbox" name="forma_pago[]" value="3" id=""> Pago fraccionado en dos veces. Por adelantado y a la entrega de la documentación
				    </label>
				    <br>
				</div>
			<button type="submit" class="btn btn-success btn-lg btn-block" name="boton_s" value="cedula_h">Guardar / Activar</button>	
	</form>		
		</div>
	</div>
