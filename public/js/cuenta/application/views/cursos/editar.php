<body>
<?= form_open('/cursos/actualizar/'.$id) //ruta del action?>
<?php
    $nombre=array(
        'name'=>"nombre",
        'placeholder'=>"Escribe tu nombre",
        'value'=>$curso->result()[0]->nombre,
    );
    $videos=array(
        'name'=>"videos",
        'placeholder'=>"Cantidad de videos del curso",
        'value'=>$curso->result()[0]->videos_curso,
    );
?>
    <?= form_label('Nombre del curso: ','nombre')?>
    <?= form_input($nombre)?>
    <br><br>
    <?= form_label('Número de videos: ','videos')?>
    <?= form_input($videos)?>
    <?= form_submit('','Actualizar') //primer valor es el name del boton?>
    <?= form_close()//cierre del formulario?>
</body>
</html>