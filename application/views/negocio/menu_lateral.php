
    <div class="mensaje">
        <?php 
        if ( $this->session->userdata('mensaje') != '' ){
        echo $this->session->userdata('mensaje'); 
        $this->session->set_userdata('mensaje', '');
         } 
        ?>
    </div>
   
    <input type="hidden" id='id_tecnico' value='<?php echo $idPersona; ?>'>
   <input type="hidden" id='ruta' value='<?php echo base_url(); ?>'>
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
                            <li><a class="active" id="" href="<?php echo base_url()."inicio/negocio/".$id."/".$idPersona?>" >Tus precios y servicios</a></li>
                            <li><a id ="" href="<?php echo base_url()."inicio/ubicacion/".$id."/".$idPersona?>">Tus ubicaciones</a></li>
                            <li><a id= "plan" href="#">Tu plan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a id="" href="<?php echo base_url()."inicio/experiencia/".$id."/".$idPersona?>" >Tu experiencia</a></li>                          
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>