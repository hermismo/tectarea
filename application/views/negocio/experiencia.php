<?php include('menu_lateral.php');?>
<!-- breadcumbs-->
                        <div><h6>
            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
            <a href="<?php echo base_url()."inicio/areaTecnico/".$id."/".$idPersona?>">Área Técnico</a> <b>></b>
            <span class="punto">Mi Negocio</span>
            <b>></b> Experiencia</h6></div>  
            
            <!-- FIN DIV breadcumbs-->
 <div class="col-sm-9">
<h3>Experiencia</h3>
	<div>
		<br><label>Tectarea valora tu experiencia en certificación energética y te premiamos por ello.</label>
		<br><div id="sombra"></div>

		<br><label>¿Cómo adjuntar los ficheros de tus certificados energéticos ?</label>
		<br><div id="sombra">
		¡Es muy fácil! Simplemente adjunta el fichero fuente de cada certificado energético en el botón que se encuentra más abajo.<br><br>

		Si usas CE3X adjunta el archivo .cex<br>
		Si usas CE3 adjunta el ZIP
		</div>

		<br><label>No olvides solicitar tu valoración en Tus valoraciones</label>
		<div id="sombra">
		Puedes conseguir buenas valoraciones de tus clientes de fuera de Certicalia.<br>

		En el apartado Tus valoraciones , en la pestaña Todavía sin valorarte, solicita a tus antiguos clientes las valoraciones de cada certificado energético adjuntado.<br>
		</div>

		<br><label>Muestra en el comparador tu experiencia, adjunta todos tus certificados no realizados en Tectarea</label>
		<br><div id="sombra">
		<p>Los clientes eligen a los técnicos con mas experiencia. Aporta tantos certificados como tengas para maximizar tus probabilidades.</p>

		Adjuntar fichero fuente <br>
		<form id="form-certificado"  method="post" rol="form" enctype="multipart/form-data">
		<input type="hidden" class="form-control" id="ruta" value="<?= base_url()."negocio/certificado_experiencia"."/".$id."/".$idPersona?>">
		<input type="file" class="form-control" id="archivo" name="archivo" required>
		 <small><font color="red">PNG / JPG / PDF</font></small><br>
		<br>
		<button type="button" id="enviar_certificado" class="btn btn-primary">Subir</button>
		</form>
		</div>

		<br><label>Lista de Certificados Subidos</label><br>
		<div id="sombra">
		<div class="table" id="lista">
			
		</div>
		</div>
		
	</div>
	</div>
</div></div>