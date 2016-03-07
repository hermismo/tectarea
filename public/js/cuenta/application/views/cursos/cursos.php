<body>
    <h1>Cursos Registrados hasta el momento:</h1>
<?php
if($cursos){
    foreach ($cursos->result() as $curso){?>
        <ul>
            <li><?php echo $curso->nombre;?></li>
        </ul>
    <?php
    }
}else{
    echo "Error! No se ha encontrado ningun resultado.";
}
?>
</body>
</html>