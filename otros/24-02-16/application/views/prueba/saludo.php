<p><?= $saludo ?></p>
<p>El valor de id es: <?= $id ?></p>
<p>El valor del id2 es: <?= $id2 ?></p>
<p>La cadena de texto es: <?= $cadena ?></p>
<p>La url completa es: <?= $uri ?></p>
<p>El total de segmentos es: <?= $total_segmentos ?></p>

<?php
//Muesta todos los segmentos de la url
    $segmento_array= $this->uri->segment_array();
    foreach($segmento_array as $valor){
        echo $valor."<br>"; 
    }
?>