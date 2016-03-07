<div class="contenedor_cabecera">
    <h1>Formularios en Codeigniter</h1>
</div>
<div>
<?php
    $atributos = array('class' => 'formulario', 'name' => 'formulario', 'id' => 'formulario');
    echo form_open_multipart(null, $atributos);//inicio formulario
    
    // Campo oculto echo form_hidden('username', 'johndoe');
    // ejemplo 1 de input echo form_input('username', 'johndoe');
?>
<?php
    /*Definiendo un nuevo input de tipo text con sus atributos*/
    echo form_label('Nombre: ','nombre');
    $nombre = array(
        'name'        => 'nombre',
        'id'          => 'nombre',
        //'value'       => 'johndoe',
        //'maxlength'   => '100',
        //'size'        => '50',
        //'style'       => 'width:50%',
    );
    echo form_input($nombre);
?><br>
<?php
    /* Input de tipo password*/
    echo form_label('Contraseña: ','clave');
    $clave = array(
        'name'        => 'clave',
        'id'          => 'clave',
        'type'        => 'password'
        //'value'       => 'johndoe',
        //'maxlength'   => '100',
        //'size'        => '50',
        //'style'       => 'width:50%',
    );
    echo form_password($clave);
?><br>
<?php
    /* Input de tipo upload*/
    echo form_label('Sube tu archivo: ','archivo');
    $archivo = array(
        'name'        => 'archivo',
        'id'          => 'archivo',
        'type'        => 'file'
        //'value'       => 'johndoe',
        //'maxlength'   => '100',
        //'size'        => '50',
        //'style'       => 'width:50%',
    );
    echo form_upload($archivo);
?><br>
<?php
    /* Input de tipo textArea*/
    echo form_label('Descripción: ','text_area');
    $text_area = array(
        'name'        => 'text_area',
        'id'          => 'text_area',
        'type'        => 'textarea',
        'rows'        => '20',
        'cols'        => '20',
        //'value'       => 'johndoe',
        //'maxlength'   => '100',
        //'size'        => '50',
        //'style'       => 'width:50%',
    );
    echo form_textarea($text_area);
?><br>
<?php
    /*dropdonw*/
    echo form_label('Seleccione: ','remeras');
    $opciones = array(
                  'small'  => 'Remera Pequeña',
                  'med'    => 'Remera Mediana',
                  'large'   => 'Remera Grande',
                  'xlarge' => 'Remera Extra Grande',
                );
//$remeras_a_la_venta = array('small', 'large');
echo form_dropdown('remeras', $opciones, 'large');
?><br>
<?php 
    echo form_submit('envio','Enviar') //primer valor es el name del boton
?>  
<?php   
    echo form_close()//fin formulario
?>
</div>
