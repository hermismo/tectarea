<body>
<?= form_open('/cursos/recibirdatos') //ruta del action?>
<?= "<div id='resultado'>".$envio."</div>"; ?><br>
<?php
    $nombre=array(
        'name'=>"nombre",
        'placeholder'=>"Escribe tu nombre"
    );
    $videos=array(
        'name'=>"videos",
        'placeholder'=>"Cantidad de videos del curso"
    );
?>
    <?= form_label('Nombre del curso: ','nombre')?>
    <?= form_input($nombre)?>
    <br><br>
    <?= form_label('Número de videos: ','videos')?>
    <?= form_input($videos)?>
    <?= form_submit('','Enviar') //primer valor es el name del boton?>
    <?= form_close()//cierre del formulario?>
</body>
</html>