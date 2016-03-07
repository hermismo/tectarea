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
	<strong><h3>Tus precios y servicios | Inspección Técnica de Edificios</h3> </strong><br>
	<strong><h4>Comprueba tus precios en el comparador</h4> </strong><br>
	<strong><h4>Describe tu Servicio<font color="red">(*) </font></h4> </strong><br>
	<form action="<?= base_url()."negocio/activarServicio"."/".$id."/".$idPersona?>" method="post"> 
		<input type="hidden" value="" id='id_ITE' name="id_servicio">
							<div id="sombra">

                                <div class="">
                                    <label class="">¿Qué diferencia tu servicio del resto de la competencia?</label>
                                    <div class="">
                                    <textarea class="form-control" placeholder=""  maxlength="250"name="desc_servicio" id="desc_servicio" autofocus><?php echo $antiguedad['descripcion'];?></textarea>
                                    </div>
                                    <small><font color="red">MAX. 250 Caracteres.</font></small>
                               </div></div><br><br>

		<strong><h4>Tu cuadro de precios</h4> </strong><br>
		<div class="table-responsive">
			<table class="table">			
					<tr>
						<th>Superficie total<br> construida (m2)</th><th colspan="7">Antigüedad del edificio (Años)</th>
					</tr><tr>
						<th></th>
						<th>30-35</th>
						<th>36-40</th>
						<th>41-50</th>
						<th>51-75</th>
						<th>76-100</th>
						<th>Más 100</th>
					</tr>
					<?php
                       for ($i=0; $i < count($antiguedad['id_superficie']); $i++) { 
                          
                           
                            echo "<tr>";
                            echo "<th><input type='hidden' name='tipologia[]' value='".$antiguedad['id_superficie'][$i][0]."'>";
                                echo $antiguedad['rango'][$i][0];
                            echo "</th>";
                        
                           for ($k=1; $k < 7; $k++) { 
                            echo '<td>';
                            echo "<input type='hidden' name='superficie[]' value='".$antiguedad['id_antiguedad'][$i][$k]."'>";
                            echo '<input type="text" name="precio[]" value="'.$antiguedad['precio_antiguedad'][$i][$k].'" size="5" maxlength="8" onkeyPress="return validarNumero(event)"> <br>';
                             echo '<font color="red">'.$antiguedad['precio_antiguedad'][$i][$k].'</font>';
                              echo '</td>';
                                    
                           }
                          echo "</tr>";
                           
                       }
                
                ?>
			</table>
		</div>
		<strong><h4>¿Este servicio requiere visado por parte de tu colegio profesional?</h4> </strong><br>
		<div id="sombra">
			<label>
			  <input type="radio" name="visado" value="Si" id="visado_si" <?php if ($antiguedad['visado'] == 1) echo 'checked="checked"';?>> Si
			  <div id="visado">
			      <div class="input-group">
	      			
	     			 <input type="text" class="form-control" id="" name="monto_visado" placeholder="" value="0" onkeyPress="return validarNumero(event)">
	      				<div class="input-group-addon">.00</div>
	    		</div>
			    </label><br><small>*A tus precios añadiremos el precio del visado</small>
		    </div>
		    <br>
		    <label>
		      <input type="radio" name="visado" value="No" id="visado_no" <?php if ($antiguedad['visado'] == 2) echo 'checked="checked"';?>> No
		    </label>
		</div>
		
		<div><h4>¿Qué facilidades de pago ofreces?</h4>
				
				<div class="input-group" id="sombra">
                    <label>
                      <input type="checkbox" name="forma_pago[]" value="1" id="" <?php if (empty($antiguedad['forma_pago'][1]) == false) echo 'checked="checked"';?>> Pago en efectivo el día de la visita
                    </label>
                    <br>
                    <label>
                      <input type="checkbox" name="forma_pago[]" value="2" id="" <?php if (empty($antiguedad['forma_pago'][2]) == false) echo 'checked="checked"';?>> Pago por transferencia a la entrega de la documentación
                    </label>
                    <br>
                    <label>
                      <input type="checkbox" name="forma_pago[]" value="3" id="" <?php if (empty($antiguedad['forma_pago'][3]) == false) echo 'checked="checked"';?>> Pago fraccionado en dos veces. Por adelantado y a la entrega de la documentación.
                      
                    </label>
                    <br>
                    
                
                </div>
			
		</div>
	</div>
	<div class="col-sm-6">
          <button type="" class="btn btn-primary btn-lg btn-block" name="boton_s" value="certificado" disabled>Desactivar</button>
        </div>
        <div class="col-sm-6">
          <button type="" class="btn btn-danger btn-lg btn-block" name="boton_s" value="certificado" disabled>Modificar</button>
        </div>
    </form>
</div>