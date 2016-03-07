<?php 
        if ( $this->session->userdata('mensaje') != '' ){
    ?>
    <div class="alert alert-danger mensaje">
        <?php echo $this->session->userdata('mensaje'); 
        $this->session->set_userdata('mensaje', '');?>
    </div>
    <?php 
    } 
    ?>
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
                            <li><a class="active" id="precios_servicios" href="#" >Tus precios y servicios</a></li>
                            <li><a id ="ubicacion" href="#">Tus ubicaciones</a></li>
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
               <div class="menu_servicios"><!-- DIV menu inicial de Servicios-->
            <div id="contenido"><br>
                <div class='alerta'></div>
                <!-- DIV menu inicial de Servicios Activos-->
                  <div class="col-sm-12">
                <div class="col-sm-6">
                <strong><h4>Tus servicios activos</h4></strong><br>
                <?php 
                foreach ($servicio['activos']->result() as $value) {
                    $id_servicio=$value->id_servicio;
                    $nombre_servicio=$value->nombre_servicio;
                    echo '<button class="btn btn-success btn-block"  value="'.$id_servicio.'"><a href=" '.base_url()."inicio/servicio/".$id."/".$idPersona."/".$id_servicio.'">'.$nombre_servicio.'</a></button>';
                }
                /*for ($i=0; $i < count($servicio['activos']); $i++) {  
                   
                      if ($servicio['activos'])
                        
                            $id_servicio=$servicio['activos']->id_servicio;
                            $nombre_servicio=$servicio['activos']->nombre_servicio;
                            echo '<button class="btn btn-success btn-block" id="'.$id_servicio.'" value="'.$id_servicio.'">'.$nombre_servicio.'</a></button>';
                    
                }*/
                ?>
                 <br><br>
                </div>    <!-- Fin DIV menu inicial de Servicios Activos-->
                 <!-- DIV menu inicial de Servicios Activos-->
                <div class="col-sm-6">
                <strong><h4>Tus servicios desactivados</h4></strong><br>
                <?php 
                 foreach ($servicio['desactivados']->result() as $value) {
                    $id_servicio=$value->id_servicio;
                    $nombre_servicio=$value->nombre_servicio;
                    echo '<button class="btn btn-success btn-block" id="'.$id_servicio.'" value="'.$id_servicio.'">'.$nombre_servicio.'</a></button>';
                }
                ?>
                 <br><br>
                </div> </div>    <!--FIN  DIV menu inicial de Servicios Activos-->
                <br>
                <strong><h4>Activa otros servicios <br><br>Completa precios y activa otros servicios</h4></strong><br>
               
                 <div class="col-sm-6">
                <?php 
                for ($i=0; $i < count($servicio['inactivos']); $i++) { 
                   
                   if ($servicio['inactivos'])
                          
                            $id_servicio=$servicio['inactivos'][$i]['id'];
                            $nombre_servicio=$servicio['inactivos'][$i]['nombre'];
                            echo '<button class="btn btn-success btn-block" id="'.$id_servicio.'" value="'.$id_servicio.'">'.$nombre_servicio.'</button>';
                }
                ?>

                <!--<button class="btn btn-success btn-block" id="certificado_e">Certificado Energético</button>
                <button class="btn btn-success btn-block" id="cedula_h">Cédula de Habitabilidad</button>
                <button class="btn btn-success btn-block" id="ITE_b">Inspección técnica de edificios</button>
                <button class="btn btn-success btn-block" id="IEE_b">Informe de evaluación de edificios</button>
                <button class="btn btn-success btn-block" id="lic_act_b">Licencias de actividad</button>
                <button class="btn btn-success btn-block" id="dec_resp_b">Declaración responsable</button><br><br>-->
                 </div>
             </div>

                <div class="precio_certificado" id=""> <!--DIV para incluir el archivo cert_energetica.php, donde estan los precios del servicio energetico-->
                <?php include("cert_energetica.php");?>
                </div>
                <div class="cedula_habilidad" id=""> <!--DIV para incluir el archivo cedula_habil.php-->
                <?php include("cedula_habil.php");?>
                </div>   
                 <div class="ITE" id=""> <!--DIV para incluir el archivo ITE.php menu de Inspeccion tecnica de servicios-->
                <?php include("ITE.php");?>
                </div>  
                <div class="IEE" id=""> <!--DIV para incluir el archivo licencia_actividad.php menu de Informe de evaluación de edificios-->
                <?php include("IEE.php");?>
                </div> 
                <div class="LIC_ACT" id=""> <!--DIV para incluir el archivo ITE.php menu de Licencias de actividad-->
                <?php include("licencia_actividad.php");?>
                </div> 
                <div class="DEC_RESP" id=""> <!--DIV para incluir el archivo declaracion_responsable.php menu de Declaración responsable-->
                <?php include("declaracion_responsable.php");?>
                </div> 
             
                </div>  <!-- FINAL DIV menu inicial de Servicios-->
                <div class="menu_registro" id=""> <!--DIV para incluir el archivo declaracion_responsable.php menu de Declaración responsable-->
                <?php #include("registro_servicios.php");?>
                </div> 
                <!-- DIV menu de experiencia-->
                <div class="menu_experiencia" id=""> <!--DIV para incluir el archivo declaracion_responsable.php menu de Declaración responsable-->
                <?php include("experiencia.php");?>
                </div> 
                <!-- DIV menu de Ubicaciones-->
                <div class="menu_ubicaciones">
                    <?php include("ubicaciones.php");?>
                </div><!-- FinalDIV menu de Ubicaciones-->
           
                <!-- DIV menu de prueba-->
                 </div><!-- FinalDIV tab-content-->

        </div><!--Menú izquierda-->
                </div>
            </div><!-- Tap panel-->
        </div>
    </div><!-- /.panel-body -->
</div>
</body>
</html>

