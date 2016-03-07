<div class="container">
    <?php 
        if ( $this->session->flashdata('ControllerMessage') != '' ){
    ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('ControllerMessage'); ?>
    </div>
    <?php 
    } 
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong><h4>Iniciar Sesión - Por Favor Ingrese Sus Datos</h4></strong>
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
                                echo form_label('Usuario: ','usuario');
                                $usuario = array(
                                    'name'        => 'usuario',
                                    'id'          => 'usuario',
                                    'value'       => set_value('usuario'),
                                    'class'       =>"form-control",
                                );
                                echo form_input($usuario);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                                echo form_label('Contraseña: ','contrasena');
                                    $contrasena = array(
                                        'name'        => 'contrasena',
                                        'id'          => 'contrasena',
                                        //'value'       => set_value('tel'),
                                        'class'       =>"form-control",
                                        'type' => "password"
                                    );
                                echo form_input($contrasena);
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
            </div>
        </div>
    </div>
</div>