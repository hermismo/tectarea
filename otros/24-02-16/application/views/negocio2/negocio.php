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
                            <li><a id= "plan" href="#" onclick="asignar_html(this.id)">Tu plan</a></li>
                            <li><a id="experiencia" href="#" onclick="asignar_html(this.id)">Tu experiencia</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            
             
             <div class="tab-content">
               <div class="menu_servicios"><!-- DIV menu inicial de Servicios-->
            <div id="contenido"><br>
                <div class='alerta'></div><strong><h4>Tus servicios activos</h4></strong><br>
                0 servicios activos<br><br>

                <strong><h4>Activa otros servicios <br><br>Completa precios y activa otros servicios</h4></strong><br>
                <button class="btn btn-success" id="certificado_e">Certificado Energético</button>
                <button class="btn btn-success" id="cedula_h">Cédula de Habitabilidad</button>
                <button class="btn btn-success" id="ITE_b">Inspección técnica de edificios</button>
                <button class="btn btn-success" id="IEE_b">Informe de evaluación de edificios</button>
                <button class="btn btn-success" id="lic_act_b">Licencias de actividad</button>
                <button class="btn btn-success" id="dec_resp_b">Declaración responsable</button><br><br>
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

                <!-- DIV menu de Ubicaciones-->
                <div class="menu_ubicaciones">
                    <?php include("ubicaciones.php");?>
                </div><!-- FinalDIV menu de Ubicaciones-->
                 </div><!-- FinalDIV tab-content-->

        </div><!--Menú izquierda-->
                </div>
            </div><!-- Tap panel-->
        </div>
    </div><!-- /.panel-body -->
</div>
</body>
</html>

