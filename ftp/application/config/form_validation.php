<?php
$config = array(
    //Nombre del controlador y la funcion a la cual se le aplican las reglas
    'formulario/add' => array(
        array(
                'field' => 'nombre',
                'label' => 'Nombre',
                'rules' => 'required|min_length[10]'
             ),
        array(
                'field' => 'tel',
                'label' => 'Teléfono',
                'rules' => 'required|numeric|min_length[11]|max_length[11]'
             ),
        array(
                'field' => 'correo',
                'label' => 'Correo',
                'rules' => 'required|valid_email'
             ),
        array(
                'field' => 'des',
                'label' => 'Descripción',
                'rules' => 'required|min_length[6]'
             ),
       array(
                'field' => 'lista',
                'label' => 'País',
                'rules' => 'required|validaSelect'
             )
    ),
    'crud/add' => array(
        array(
                'field' => 'nombre',
                'label' => 'Nombre',
                'rules' => 'required|min_length[5]'
             ),
        array(
                'field' => 'tel',
                'label' => 'Teléfono',
                'rules' => 'required|numeric|min_length[11]|max_length[11]'
             ),
        array(
                'field' => 'correo',
                'label' => 'Correo',
                'rules' => 'required|valid_email'
             ),
    ),
    'login/login'=> array(
        array(
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|min_length[3]'
         ),
        array(
                'field' => 'contrasena',
                'label' => 'Contrasena',
                'rules' => 'required|min_length[8]'
        ),
    ),
    'inicio/procesarDatosPersonales'=> array(
        array(
            'field'=>'tel',
            'label'=>'Teléfono',
            'rules'=>'required',
        ),
    ),
);