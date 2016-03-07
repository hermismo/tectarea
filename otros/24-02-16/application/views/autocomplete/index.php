<script>
$(document).ready(function(){
    $("#buscar" ).autocomplete({
        source: "<?php echo base_url() ?>autocomplete/autocompletar",
        minLength: 3,
        select: function(event,ui){
            var valor= ui.item.creditos;
            $('#credito_obtenido').val(valor);
        }
    });
});
</script>

<div class="container">
    <h1>Poblaciones de España</h1>
    <div class="form-group input-group">
        <span class="input-group-addon"><i class="fa fa-search"></i></span>
        <input type="text" id='buscar' name='buscar' class="form-control" placeholder="Ingrese el nombre de la zona" autofocus> 
    </div>
    <label>Credito asignado:</label>
    <input type="text" id='credito_obtenido' name='credito_obtenido' class="form-control">
</div>