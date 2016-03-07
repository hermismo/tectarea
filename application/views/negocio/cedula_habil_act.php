 <div class="col-sm-3">
            <div class="sidebar-nav">
                <div class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url()."inicio/negocio/".$id."/".$idPersona?>">Otras Opciones</a></li>
                            <!--<li><a id ="ubicacion" href="#">Tus ubicaciones</a></li>
                            <li><a id= "plan">Tu plan</a></li>
                            <li><a id="experiencia" href="#" >Tu experiencia</a></li>
                            <!--<li><a id="registrar" href="#" >Registrar</a></li>-->
                          
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
<div class="col-sm-9">
        <div class="tab-content">
	<strong><h3>Tus precios y servicios | Cédula de habitabilidad</h3> </strong><br>
	<strong><h4>Comprueba tus precios en el comparador</h4> </strong><br>
	<strong><h4>Describe tu Servicio<font color="red">(*) </font></h4> </strong><br>
	<form action="<?= base_url()."negocio/activarServicio"."/".$id."/".$idPersona?>" method="post"  id="form">
		<input type="hidden" id='' name="id_servicio" value="<?php echo $id_servicio;?>">
      <input type="hidden" id='' name="id_servicio_tecnico" value="<?php echo $datos['id_servicio_tecnico'];?>"> 
      <input type="hidden" id='' name="servicio" value="cedula_h">  
							<div id="sombra">

								<div class="">
                                    <label class="">¿Qué diferencia tu servicio del resto de la competencia?</label>
                                    <div class="">
                                    <textarea class="form-control" placeholder="" maxlength="250" name="desc_servicio" id="desc_servicio" autofocus required ><?php echo $datos['descripcion'];?></textarea>
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
					
		               for ($i=0; $i < count($datos['tipologia']) /2; $i++) { 
		               	if ($datos['tipologia'][$i][0] == 'Piso' || $datos['tipologia'][$i][0] == 'Unifamiliar')
		               	{	
		               		echo "<tr>";
		               		echo "<th><input type='hidden' name='tipologia[]' value='".$datos['id_tipologia'][$i][0]."'>";
		                		echo $datos['tipologia'][$i][0];
		                	echo "</th>";
		               	
		                   for ($k=1; $k < 8; $k++) { 
		                   	echo "<td><input type='hidden' name='superficie[]' value='".$datos['id_superficie'][$i][$k]."'>";
		                   	echo '<input type="text" name="precio[]" value="'.$datos['precio'][$i][$k].'" size="5" onkeyPress="return validarNumero(event)" maxlength="8"> <br>';
		                     echo '<font color="red">'.$datos['precio'][$i][$k].'</font>';
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
			  <input type="checkbox" name="visado" value="Si" id="visado_si" <?php if ($datos['visado'] == 1) echo 'checked="checked"';?>> Si
			 <?php
			 if ($datos['visado'] == 1)
			  echo '<div id="">
			      <div class="input-group">
	      			
	     			 <input type="text" class="form-control" id="" name="monto_visado" placeholder="" value="'.$datos['visado_monto'].'" onkeyPress="return validarNumero(event)">
	      				<div class="input-group-addon">.00</div>
	    		</div>
			    </label><br><small>*A tus precios añadiremos el precio del visado</small>
		    </div>';?>
		    <br>
		    <label>
		      <input type="checkbox" name="visado" value="no" id="visado_no" <?php if ($datos['visado'] == 2) echo 'checked="checked"';?>> No
		    </label>
		</div>


		<div><h4>¿Qué facilidades de pago ofreces?</h4>
				
				<div class="input-group" id="sombra">
                    <label>
                      <input type="checkbox" name="forma_pago[]" value="1" id="" <?php if (empty($datos['forma_pago'][1]) == false) echo 'checked="checked"';?>> Pago en efectivo el día de la visita
                    </label>
                    <br>
                    <label>
                      <input type="checkbox" name="forma_pago[]" value="2" id="" <?php if (empty($datos['forma_pago'][2]) == false) echo 'checked="checked"';?>> Pago por transferencia a la entrega de la documentación
                    </label>
                    <br>
                    <label>
                      <input type="checkbox" name="forma_pago[]" value="3" id="" <?php if (empty($datos['forma_pago'][3]) == false) echo 'checked="checked"';?>> Pago fraccionado en dos veces. Por adelantado y a la entrega de la documentación.
                      
                    </label>
                    <br>
                    
                
                </div>  
			<div class="col-sm-6">
          <?php 
          if ($datos['estatus'] == "Activo")
            echo '<button type="" class="btn btn-primary btn-lg btn-block" name="boton_s" value="desactivar">Desactivar</button>';
          else
            echo '<button type="" class="btn btn-primary btn-lg btn-block" name="boton_s" value="reactivar">Activar</button>';
          ?>
          
        </div>
        <div class="col-sm-6">
          <button type="" class="btn btn-danger btn-lg btn-block" name="boton_s" value="modificar">Modificar</button>
        </div>
			</form>		
		</div>
	</div></div>
