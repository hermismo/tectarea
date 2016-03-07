<div class="container">
    <?php 
        if ( $this->session->flashdata('ControllerMessage') != '' ){
    ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('ControllerMessage'); ?>
    </div>
    <?php 
    } 
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong><h4>Agregar nueva persona</h4></strong>
                </div>
                <div class="col-md-12" style="margin-top:10px">
                    <div class="col-md-6">
                        <?php
                            $atributos = array('class' => 'form-horizontal', 'name' => 'form', 'id' => 'form', 'role'=>"form");
                            echo form_open_multipart(null, $atributos);//inicio formulario 
                        ?>
                        <?php
                        ?>
                        <div class="form-group">
                            <?php
                                echo form_label('Nombre: ','nombre');
                                $nombre = array(
                                    'name'        => 'nombre',
                                    'id'          => 'nombre',
                                    'value'       => set_value('nombre'),
                                    'class'       =>"form-control",
                                );
                                echo form_input($nombre);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                                echo form_label('Teléfono: ','tel');
                                    $telefono = array(
                                        'name'        => 'tel',
                                        'id'          => 'tel',
                                        'value'       => set_value('tel'),
                                        'class'       =>"form-control",
                                    );
                                echo form_input($telefono);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                                echo form_label('Correo: ','correo');
                                    $correo = array(
                                        'name'        => 'correo',
                                        'id'          => 'correo',
                                        'value'       => set_value('correo'),
                                        'class'       =>"form-control",
                                    );
                                echo form_input($correo);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                                echo form_label('Fecha actual: ','fecha');
                                    $fecha = array(
                                        'name'        => 'fecha',
                                        'id'          => 'fecha',
                                        'value'       => date('Y-m-d'),
                                        'readonly'    => true,
                                        'class'       =>"form-control",
                                    );
                                   echo form_input($fecha);
                            ?>
                        </div>
                        <div class="form-group text-danger">
                            <?= validation_errors(); ?>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" name="envio" class="btn btn-success">Enviar</button>
                        </div>
                        <?php
                            echo form_close()//fin formulario
                        ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom:10px">
                    <div class="col-md-offset-11">
                        <a class="btn btn-primary" title="Volver" href="<?php echo base_url()?>crud">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>