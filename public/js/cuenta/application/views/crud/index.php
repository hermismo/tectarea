<div class="container">
    <h1>Registro de personas</h1>
    <?php 
    if ( $this->session->flashdata('ControllerMessage') != '' ) 
        {
    ?>
    <p style="color: red;"><?php echo $this->session->flashdata('ControllerMessage'); ?></p>
    <?php 
    } 
    ?>
    
    <a class="btn btn-success" href="<?= base_url()?>crud/add" title="Agregar"><i class="glyphicon glyphicon-plus"></i>Agregar</a>
    <br />
    <br />
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Fecha actual</th>
                <th style="width:200px;">Acción</th>
            </tr>
        </thead>
      
        <tbody>
        <?php
            foreach($datos as $dato){
        ?>
                <tr>
                    <td ><?= $dato->nombre?></td>
                    <td><?= $dato->correo?></td>
                    <td><?= $dato->telefono?></td>
                    <td><?= $dato->fecha?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" title="Editar" href="<?php echo base_url()?>crud/edit/<?php echo $dato->id?>"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
                        <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Eliminar" onclick="eliminar('<?php echo base_url()?>crud/delete/<?php echo $dato->id?>')"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>
                    </td>
                </tr>
        <?php
            }
        ?>
        </tbody>
      
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Fecha actual</th>
                <th style="width:125px;">Acción</th>
            </tr>
      </tfoot>
    </table>
</div>