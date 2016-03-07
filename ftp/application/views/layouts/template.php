<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php echo $this->layout->getTitle(); ?></title>
<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>"><!--Este meta es también destinado para los buscadores. En la “description” escribiremos la descripción de la página, de sus contenidos. Esto lo haremos a través de frases cortas y separadas entre ellas por puntos. En nuestra página este meta quedaría de la siguiente manera:
<meta name="Description" content="Tutorial html. Meta tags" />-->
<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" /><!--Este meta indica al buscador las palabras claves de nuestra página. Por ejemplo, nuestra página al ser un tutorial de html, sus palabras clave serán “tutorial” y “html”. Los keywords deben ir separados por comas y sin espacios entre ellos.
<meta name="Keywords" content="tutorial,html" />-->
<!-- Estilos-->
<link href="<?php echo base_url('public/css/estilos.css')?>" rel="stylesheet"/>
<link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet"/>
<link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet"/>
<link href="<?php echo base_url('public/js/jquery-ui/css/jquery-ui.min.css')?>" rel="stylesheet"/>
<script src="<?php echo base_url('public/js/jquery-1.12.0.min.js')?>"></script>
<script src="<?php echo base_url('public/js/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('public/js/jquery-ui/jquery-ui.min.js')?>"></script>
<script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js')?>"></script>
<!--*************auxiliares*****************-->
<?php echo $this->layout->css; ?> 
<?php echo $this->layout->js; ?> 
<!--**********fin auxiliares*****************-->
</head>

<body>
    <?php echo $content_for_layout; ?>