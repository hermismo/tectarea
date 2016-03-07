<input type="hidden" value="<?= base_url()?>" id="ruta">
<div>
    <div class="row"><!--Menú izquierda-->
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
                            <li><a class="active" id="datos_perfil" href="#" onclick="asignar_html(this.id);">Edita tu perfil</a></li>
                            <li><a id ="foto" href="#" onclick="asignar_html(this.id)">Foto</a></li>
                            <li><a id= "pass" href="#" onclick="asignar_html(this.id)">Contraseña</a></li>
                            <li><a id="tec_ver" href="#" onclick="asignar_html(this.id)">Técnico verificado</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div id="contenido"></div>
                <?php
                    foreach($respuesta_red_social as $dato){
                        $data[]=$dato->red_social;
                    }
                ?>
                <input type="text" name="idUsuario" id="idUsuario" value="<?php echo $id?>" hidden="hidden">
                <input type="text" name="idPersona" id="idPersona" value="<?php echo $idPersona?>" hidden="hidden">
                <input type="text" id="res_telf" value="<?php echo $respuesta_telefono->numero_telefonico?>" hidden="hidden">
                <input type="text" id="res_bio" value="<?php echo $respuesta_tecnico[0]['biografia']?>" hidden="hidden">
                <input type="text" id="res_web" value="<?php echo $respuesta_tecnico[0]['web']?>" hidden="hidden">
                <input type="text" id="res_face" value="<?php echo $data[0]?>" hidden="hidden">
                <input type="text" id="res_twitt" value="<?php echo $data[1]?>" hidden="hidden">
                <input type="text" id="res_linked" value="<?php echo $data[2]?>" hidden="hidden">
                <input type="text" id="res_id_titulo" value="<?php echo $respuesta_tecnico[0]['id_titulo']?>" hidden="hidden"><br>
                
        </div>
    </div>
                    </div><!--Menú izquierda-->
                </div>
            </div><!-- Tap panel-->
        </div>
    </div><!-- /.panel-body -->
</div>
</body>
</html>