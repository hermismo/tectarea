<div class="container-fluid" style="background: #EEE">
    <div class="col-md-7">
        <h3>Tectarea</h3>
    </div>
    <div class="col-md-3">
        <h5 style="font-weight:bold">Bienvenido</h5>
    </div>
    <div class="col-md-2">
        <a class="btn" href="<?= base_url()?>login/logout" title="Salir">Cerrar sesión</a>
    </div>
</div>

<div class="container" style="background: #CCC">
    <div class="panel panel-default">
    <!-- /.panel-heading -->
        <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-pills">
                <li class="active"><a href="<?php echo base_url()."inicio/areaTecnico/".$id."/".$idPersona?>">Área Técnico</a></li>
                <li><a href="<?php echo base_url()."inicio/solicitud/".$id."/".$idPersona?>">Tus solicitudes</a></li>
                <li><a href="<?php echo base_url()."inicio/negocio/".$id."/".$idPersona?>">Tu negocio</a></li>
                <li><a href="<?php echo base_url()."inicio/cuenta/".$id."/".$idPersona?>" id="cuenta">Tu cuenta</a></li>
                <li><a href="<?php echo base_url()."inicio/tecnico/".$id."/".$idPersona?>">Cargar técnico</a></li>
                <li>
                    <ul class="nav nav-tabs">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administración<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Registrar comunidad</a></li>
                                <li><a href="#">Registrar provincia</a></li>
                                <li><a href="#">Registrar población</a></li>
                                <li><a href="#">Registrar rol</a></li>
                                <li><a href="#">Registrar operación</a></li>
                                <li><a href="#">Registrar título</a></li>
                                <li><a href="#">Registrar plan</a></li>
                                <li><a href="#">Registrar servicio</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="tab-content">