<div class="contenedor_cabecera">
    <h1>Formulario</h1>
</div>

<div>
<?php
    $atributos = array('class' => 'formulario', 'name' => 'formulario', 'id' => 'formulario');
    echo form_open_multipart(null, $atributos);//inicio formulario 
?>

<?php
    echo form_label('Nombre: ','nombre');
        $nombre = array(
            'name'        => 'nombre',
            'id'          => 'nombre',
            'value'       => set_value('nombre'),
        );
        echo form_input($nombre)."<br>"."<br>";
    
    echo form_label('Teléfono: ','tel');
        $telefono = array(
            'name'        => 'tel',
            'id'          => 'tel',
            'value'       => set_value('tel'),
        );
        echo form_input($telefono)."<br>"."<br>";
        
    echo form_label('Correo: ','correo');
        $telefono = array(
            'name'        => 'correo',
            'id'          => 'correo',
            'value'       => set_value('correo'),
        );
        echo form_input($telefono)."<br>"."<br>";
    
    echo form_label('Descripción: ','des');
    $text_area = array(
        'name'        => 'des',
        'id'          => 'des',
        'type'        => 'textarea',
        'rows'        => '5',
        'cols'        => '30',
        'value'       => set_value('des'),
    );
    echo form_textarea($text_area)."<br>"."<br>";
    
    echo form_label('Seleccione: ','remeras');
    $opciones = array(
                  '0'  => 'Seleccione',
                  '1'  => 'Venezuela',
                  '2'    => 'Colombia',
                  '3'   => 'Argentina',
                  '4' => 'Brasil',
                );
echo form_dropdown('lista', $opciones, '0');
    echo "<div class='error_formulario'>";
        echo validation_errors();
    echo "</div>";
    echo form_submit('envio','Enviar');
?>
    
<?php   
    echo form_close()//fin formulario
?>
</div>