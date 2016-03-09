$(document).ready(function(){
//$("#precio").css("color", "red"); 
$("#form").submit(function(){

    /*if ($('#forma_pago').is(':checked') == false){

        alert();
    }*/
    var pregunta= confirm ("Desea continual?");
    if (pregunta)
        return true;
    else
        return false;
});

cargarCertificados($('#id_tecnico').val());

$(".mensaje").delay(5000).hide(600);
$('.precio_certificado , .cedula_habilidad , .menu_ubicaciones , .ITE, .IEE , .LIC_ACT , .DEC_RESP , #visado , .menu_registro , .menu_experiencia').hide();
$('#1').click(function(){
$('.precio_certificado').fadeIn();
$('#id_certificado').val($('#1').val());
$('.cedula_habilidad , #contenido').hide();
$('.ITE').hide();
$('.IEE').hide();
$('.LIC_ACT').hide();
$('.DEC_RESP').hide();
});
$('#6').click(function(){
$('.cedula_habilidad').fadeIn();
$('#id_cedula').val($('#6').val());
$('.precio_certificado , #contenido').hide();
$('.ITE').hide();
$('.IEE').hide();
$('.LIC_ACT').hide();
$('.DEC_RESP').hide();
});
$('#2').click(function(){
$('.cedula_habilidad , #contenido').hide();
$('.precio_certificado').hide();
$('.ITE').fadeIn();
$('#id_ITE').val($('#2').val());
$('.IEE').hide();
$('.LIC_ACT').hide();
$('.DEC_RESP').hide();
});
$('#3').click(function(){
$('.cedula_habilidad , #contenido').hide();
$('.precio_certificado').hide();
$('.ITE').hide();
$('.IEE').fadeIn();
$('#id_IEE').val($('#3').val());
$('.LIC_ACT').hide();
$('.DEC_RESP').hide();
});
$('#4').click(function(){
$('.cedula_habilidad  , #contenido').hide();
$('.precio_certificado').hide();
$('.ITE').hide();
$('.IEE').hide();
$('.LIC_ACT').fadeIn();
$('.DEC_RESP').hide();
});
$('#5').click(function(){
$('.cedula_habilidad , #contenido').hide();
$('.precio_certificado').hide();
$('.ITE').hide();
$('.IEE').hide();
$('.LIC_ACT').hide();
$('.DEC_RESP').fadeIn();
});
$('#ubicacion').click(function(){
$('.menu_servicios').hide();
$('.menu_ubicaciones').fadeIn();
$('.menu_experiencia').hide();
});

$('#precios_servicios').click(function(){
$('.menu_servicios , #contenido').fadeIn();
$('.precio_certificado , .cedula_habilidad , .menu_ubicaciones , .ITE, .IEE , .LIC_ACT , .DEC_RESP').hide();
$('.menu_ubicaciones').hide();
$('.menu_registro').hide();
$('.menu_experiencia').hide();
});

$('#registrar').click(function(){
$('.menu_servicios , #contenido').hide();
$('.precio_certificado , .cedula_habilidad , .menu_ubicaciones , .ITE, .IEE , .LIC_ACT , .DEC_RESP').hide();
$('.menu_ubicaciones').hide();
$('.menu_registro').fadeIn();
$('.menu_experiencia').hide();
});
//
$('#experiencia').click(function(){
$('.menu_servicios , #contenido').hide();
$('.precio_certificado , .cedula_habilidad , .menu_ubicaciones , .ITE, .IEE , .LIC_ACT , .DEC_RESP').hide();
$('.menu_ubicaciones').hide();
$('.menu_registro').hide();
$('.menu_experiencia').fadeIn();
});

/*
$("#visado_si").click(function () {  
    alert();
 $('#visado').fadeIn(); 
 $('#visado_no').attr('checked',false);      
});
$("#visado_no").click(function () {  
 $('#visado').hide();  
$('#visado_si').attr('checked',false);         
});*/
$('#enviar_certificado').click(function(){
    var formData = new FormData($("#form-certificado")[0]);
    this.ruta=$('#ruta').val();
    if ($('#archivo').val() == 0) {
         alert("No has seleccionado un archivo.");
         }
     else{
            $.ajax({
                url:this.ruta,
                type:"POST",
                data: formData ,
                 cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                    if (respuesta == 0) 
                        alert('Error, verifica el archivo (extensión , tamaño)');
                    else
                        if (respuesta == 2) 
                       alert('Error, verifica no haber subido este archivo anteiormente.');
                   else{
                        alert('Archivo cargado.');
                        $('#archivo').val(null);
                        cargarCertificados($('#id_tecnico').val());
                        }

                             
                    
                }, error: function (request, status, error) {
                        alert(request.responseText);
                    }
                 });
    }
});


});

function cargarCertificados(id){
    this.ruta=$('#ruta').val();

    $.ajax({
        url: this.ruta+"negocio/cargarCertificados",
        type:"POST",
        data:{buscar: id},
        success:function(respuesta){
            //alert(respuesta);
            var registros = eval(respuesta);
            
            html ="<table class='table table-responsive table-bordered'><thead>";
            html +="<tr><th>#</th><th>Certificado</th><th></th></tr>";
            html +="</thead><tbody>";
            for (var i = 0; i < registros.length; i++) {
                html +="<tr><td>"+registros[i]["id_certificado_experiencia"]+"</td><td>"+registros[i]["nombre"]+"</td><td></td></tr>";
            };
            html +="</tbody></table>";
            $("#lista").html(html);
        }, error: function (request, status, error) {
                        alert(request.responseText);
                    }
    });

}
/*
function asignar_html(identificador){
    if(identificador=="precios_servicios"){
       $("#contenido").html("<div class='alerta'></div><h3>Completa precios y activa otros servicios</h3>");
       $.post("http://localhost/proyecto-tectarea/negocio", function(data){
            var data=$.parseJSON(data);
            var size = data.length;
            //alert(size);
            //alert("El id del titulo es: "+data[1].id_titulo+" Y el titulo es: "+data[1].nombre_titulo);
            var titulo = document.getElementById("titulo");
            for(var i=0;i<data.length;i++){ 
                var opcion= document.createElement("option");
                opcion.value= data[i].id_titulo;
                opcion.text= data[i].nombre_titulo;
                titulo.add(opcion);
                if(data[i].id_titulo == res_id_titulo ){
                    //titulo.selectedIndex= res_id_titulo;
                    $('#titulo > option[value="'+res_id_titulo+'"]').attr('selected', 'selected');
                }
            }
        });
    }
    else if(identificador=="ubicacion"){
        $("#contenido").html("<div class='alerta'></div><h3>Foto de perfil</h3><h5>Las fotos frontales son muy importantes para generar confianza en los clientes. Por favor, sube una foto en la que se vea claramente tu cara.</h5><div class='col-md-3 insert_foto' style='background: #EEE; text-align:center; font-weight:bold; max-height:200px; min-height:200px'>Tu foto</div><div class='col-md-9'><form class='form-horizontal' name='form_foto' id='form_foto' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><input type='file' name='archivo' id='archivo'><br><input type='button' name='envio_foto' id='envio_foto' class='btn btn-success' value='Guardar' onclick='enviarFoto();'></form></div>");
    }
    else if(identificador=="plan"){
        $("#contenido").html("<div class='alerta'></div><h3>Introduce tu contraseña actual y luego la nueva contraseña</h3><form class='form-horizontal' name='form_clave' id='form_clave' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><div class='form-group' id='old_pass_div'><label for='old_pass'>Contraseña actual</label><input type='password' class='form-control' name='old_pass' id='old_pass'></div><div class='form-group' id='new_pass_div'><label for='new_pass'>Nueva contraseña:</label><input type='password' class='form-control' name='new_pass' id='new_pass'/></div><div class='form-group' id='new_pass_repeat_div'><label for='new_pass_repeat'>Repite la nueva contraseña:</label><input class='form-control' type='password' name='new_pass_repeat' id='new_pass_repeat'></div><div class='form-group' id='button_div'><input type='button' name='envio_clave' id='envio_clave' class='btn btn-success' value='Guardar' onclick='enviarClave();'></div></form>");    
    }
    else if(identificador=="experiencia"){
        $("#contenido").html("<div class='alerta'></div><h3>Verificación titulación</h3><h5>Adjunta título, diploma o certificado de colegiación que justifiquen que posees la titulación que te habilita para realizar certificados energéticos según el Real Decreto 235/2013.</h5><div class='col-md-9'><form class='form-horizontal' name='form_titulo' id='form_titulo' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><input type='file' name='titulacion' id='titulacion'><br><input type='button' name='envio_titulacion' id='envio_titulacion' class='btn btn-success' value='Guardar' onclick='enviarTitulacion();'></form></div>");
    }else if(identificador=="certificado_e"){
        $("#contenido").html("<div class='alerta'></div><h3>Verificación titulación</h3><h5>Adjunta título, diploma o certificado de colegiación que justifiquen que posees la titulación que te habilita para realizar certificados energéticos según el Real Decreto 235/2013.</h5><div class='col-md-9'><form class='form-horizontal' name='form_titulo' id='form_titulo' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><input type='file' name='titulacion' id='titulacion'><br><input type='button' name='envio_titulacion' id='envio_titulacion' class='btn btn-success' value='Guardar' onclick='enviarTitulacion();'></form></div>");
    }

    }*/