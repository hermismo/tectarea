<div class="contenedor_cabecera">
    <h1>Formulario</h1>
</div>

<div>
<?php
    foreach($datos as $dato){
    ?>
        <li>
            Nombre:<?php echo $dato->nombre."<br>" ?>
            Correo:<?php echo $dato->correo."<br>" ?>
            Teléfono:<?php echo $dato->telefono."<br>" ?>
            Fecha:<?php echo $dato->fecha."<br>"  ?>
            Dirección:<?php echo $dato->direccion."<br>"  ?>
            Calle:<?php echo $dato->calle."<br>"  ?>
            Ciudad:<?php echo $dato->ciudad."<br>"  ?>
        </li>
    <?php
    }
?>
</div>