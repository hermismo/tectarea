<?php include('menu_lateral.php');?>
  <!-- breadcumbs-->
                        <div><h6>
            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
            <a href="<?php echo base_url()."inicio/areaTecnico/".$id."/".$idPersona?>">Área Técnico</a> <b>></b>
            <span class="punto">Mi Negocio</span>
            <b>></b> Tus Ubicaciones</h6></div>  
            <!-- FIN DIV breadcumbs-->

 <div class="col-sm-9">
<div class="tab-content">
<strong><h4>Tu Disponibilidad<font color="red">(*) </font></h4> </strong><br>
<div id="tabla_ubicaciones"> 
	<form action="<?= base_url()."negocio/disponibilidad"."/".$id."/".$idPersona?>" method="post" id="form"> 
	<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th></th>
				<th>Lunes</th>
				<th>Martes</th>
				<th>Miercoles</th>
				<th>Jueves</th>
				<th>Viernes</th>
				<th>Sábado</th>
				<th>Domingo</th>			
			</tr>	
		</thead>

		<tbody>
			<tr>

				<th><input type="hidden" name="turno[]" value="1">Mañana</th>
				<th><input type="checkbox" name="dia[0]" value="1" <?php if (empty($disponibilidad['dia'][1]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[1]" value="2" <?php if (empty($disponibilidad['dia'][2]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[2]" value="3" <?php if (empty($disponibilidad['dia'][3]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[3]" value="4" <?php if (empty($disponibilidad['dia'][4]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[4]" value="5" <?php if (empty($disponibilidad['dia'][5]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[5]" value="6" <?php if (empty($disponibilidad['dia'][6]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[6]" value="7" <?php if (empty($disponibilidad['dia'][7]) == false) echo 'checked="checked"';?>></th>			
			</tr>
			<tr>
				<th><input type="hidden" name="turno[]" value="2">Al Mediodia</th>
				<th><input type="checkbox" name="dia[7]" value="1" <?php if (empty($disponibilidad['dia'][8]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[8]" value="2" <?php if (empty($disponibilidad['dia'][9]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[9]" value="3"  <?php if (empty($disponibilidad['dia'][10]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[10]" value="4" <?php if (empty($disponibilidad['dia'][11]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[11]" value="5" <?php if (empty($disponibilidad['dia'][12]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[12]" value="6" <?php if (empty($disponibilidad['dia'][13]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[13]" value="7" <?php if (empty($disponibilidad['dia'][14]) == false) echo 'checked="checked"';?>></th>			
			</tr>
			<tr>
				<th><input type="hidden" name="turno[]" value="3">Tardes</th>
				<th><input type="checkbox" name="dia[14]" value="1" <?php if (empty($disponibilidad['dia'][15]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[15]" value="2" <?php if (empty($disponibilidad['dia'][16]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[16]" value="3" <?php if (empty($disponibilidad['dia'][17]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[17]" value="4" <?php if (empty($disponibilidad['dia'][18]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[18]" value="5" <?php if (empty($disponibilidad['dia'][19]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[19]" value="6" <?php if (empty($disponibilidad['dia'][20]) == false) echo 'checked="checked"';?>></th>
				<th><input type="checkbox" name="dia[20]" value="7" <?php if (empty($disponibilidad['dia'][21]) == false) echo 'checked="checked"';?>></th>			
			</tr>	
		</tbody>
	</table>
</div>
<?php
		if( count($disponibilidad['dia']) != 0)		
				echo '<button type="submit" class="btn btn-danger btn-lg" name="boton_s" value="Modificar">Modificar Disponibilidad</button>';
			else
				echo '<button type="submit" class="btn btn-success btn-lg" name="boton_s" value="Guardar">Guardar Disponibilidad</button>';
?>  
    </form>
    <!--FIN TABLA DE DISPONIBILIDAD-->
    <hr>
    <strong><h4>Tus ubicaciones<font color="red">(*) </font></h4> </strong><br>
<!--MAPA DE UBICACIONES-->
<div class="span11">
      <form method="post" id="geocoding_form">
        <label for="address">Dirección:</label>
        <div class="input">
          <input type="text" id="address" class=""  size="50" name="address" />
          <input type="submit" class="btn btn-primary" value="Buscar" />
        </div>
      </form>
      <br>
      <div id="map"></div>
    </div><br><br>
    <button type="submit" class="btn btn-primary btn-lg" name="boton_s" value="Modificar">Guardar Ubicación</button>
<!--FINMAPA DE UBICACIONES-->
	<hr><br><br>

</div>

</div>
</div></div>