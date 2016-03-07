$(document).ready(function(){
    this.ruta= $('#ruta').val();
   // alert( this.ruta);
    var id_usuario=$('#idUsuario').val();
    var id_persona=$('#idPersona').val();
    var res_telf= $("#res_telf").val();
    var res_bio=$("#res_bio").val();
    var res_web=$("#res_web").val();
    var res_face= $("#res_face").val();
    var res_twitt= $("#res_twitt").val();
    var res_linked= $("#res_linked").val();
    var res_id_titulo= $("#res_id_titulo").val();
     //$("#contenido").html("<h3>Datos personales</h3><form action='"+this.ruta+"Inicio' class='form-horizontal' name='form' id='form' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><div class='form-horizontal'><div class='form-group' id='tel_div'><label class='col-sm-2 control-label' for='tel'>Teléfono:</label><div class='col-sm-5'><input type='text' name='tel' value='"+res_telf+"' id='tel' class='form-control'/></div></div><div class='form-group' id='titulo_div'><label class='col-sm-2 control-label' for='titulo'>Título</label><div class='col-sm-5'><select name='titulo' id='titulo' class='form-control'><option value='0'>Seleccione</option></select></div></div><div class='form-group' id='bio_div'><label class='col-sm-2 control-label' for='bio'>A cerca de ti: </label><div class='col-sm-5'><textarea name='bio' cols='105' rows='5' id='bio' type='textarea' class='form-control'></textarea></div></div></div><h4>Otros datos</h4><div class='form-horizontal'><div class='form-group' id='web_div'><label class='col-sm-2 control-label' for='web'>Web o blog:</label><div class='col-sm-5'><input type='text' name='web' value='"+res_web+"' id='web' class='form-control'/></div></div><div class='form-group' id='facebook_div'><label class='col-sm-2 control-label' for='face'>Facebook:</label><div class='col-sm-5'><input type='text' name='facebook' value='"+res_face+"' id='facebook' class='form-control'/></div></div><div class='form-group' id='twitter_div'><label class='col-sm-2 control-label' for='twitter'>Twitter:</label><div class='col-sm-5'><input type='text' name='twitter' value='"+res_twitt+"' id='twitter' class='form-control'/></div></div><div class='form-group' id='linkedin_div'><label class='col-sm-2 control-label' for='lin'>LinkedIn:</label><div class='col-sm-5'><input type='text' name='linkedin' value='"+linked+"' id='linkedin' class='form-control'/></div></div><div class='form-group'><hr><input type='button' name='envio' id='envio' class='btn btn-success' value='Guardar' onclick='enviarDatos();'></div></div><input type='text' name='idUsuario' id='idUsuario' hidden='hidden'><input type='text' name='idPersona' id='idPersona' value='' hidden='hidden'></form>");   
    //$("#contenido").html("<div class='col-md-5'><h3>Datos personales</h3><form action='"+this.ruta+"Inicio' class='form-horizontal' name='form' id='form' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><div class='form-group' id='tel_div'><label for='tel'>Teléfono:</label><input type='text' name='tel' value='"+res_telf+"' id='tel' class='form-control' maxlength='16' onkeypress='return validarNumero(event)'/></div><div class='form-group' id='titulo_div'><label class='control-label' for='titulo'>Título</label><select name='titulo' id='titulo' class='form-control'><option value='0'>Seleccione</option></select></div><div class='form-group' id='bio_div'><label for='bio'>A cerca de ti: </label><textarea name='bio' cols='105' rows='5' id='bio' type='textarea' class='form-control'></textarea><br><br></div><h4>Otros datos</h4><div class='form-group' id='web_div'><label for='web'>Web o blog:</label><input type='text' name='web' value='"+res_web+"' id='web' class='form-control'/></div><div class='form-group' id='facebook_div'><label for='face'>Facebook:</label><input type='text' name='facebook' value='"+res_face+"' id='facebook' class='form-control'/></div><div class='form-group' id='twitter_div'><label for='twitter'>Twitter:</label><input type='text' name='twitter' value='"+res_twitt+"' id='twitter' class='form-control'/></div><div class='form-group' id='linkedin_div'><label for='lin'>LinkedIn:</label><input type='text' name='linkedin' value='"+linked+"' id='linkedin' class='form-control'/></div><div class='form-group'><input type='button' name='envio' id='envio' class='btn btn-success' value='Guardar' onclick='enviarDatos();'></div><input type='text' name='idUsuario' id='idUsuario' hidden='hidden'><input type='text' name='idPersona' id='idPersona' value='' hidden='hidden'></form></div>");
    $("#contenido").html("<div class='col-md-5'><h3>Datos personales</h3><form action='"+this.ruta+"Inicio' class='form-horizontal' name='form' id='form' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><div class='form-group' id='tel_div'><label for='tel'>Teléfono:</label><input type='text' name='tel' value='"+res_telf+"' id='tel' class='form-control' maxlength='16' onkeypress='return validarNumero(event)'/></div><div class='form-group' id='titulo_div'><label class='control-label' for='titulo'>Título</label><select name='titulo' id='titulo' class='form-control'><option value='0'>Seleccione</option></select></div><div class='form-group' id='bio_div'><label for='bio'>A cerca de ti: </label><textarea name='bio' cols='105' rows='5' id='bio' type='textarea' class='form-control'></textarea><br><br></div><h4>Otros datos</h4><div class='form-group' id='web_div'><label for='web'>Web o blog:</label><input type='text' name='web' value='"+res_web+"' id='web' class='form-control'/></div><div class='form-group' id='facebook_div'><label for='face'>Facebook:</label><input type='text' name='facebook' value='"+res_face+"' id='facebook' class='form-control'/></div><div class='form-group' id='twitter_div'><label for='twitter'>Twitter:</label><input type='text' name='twitter' value='"+res_twitt+"' id='twitter' class='form-control'/></div><div class='form-group' id='linkedin_div'><label for='lin'>LinkedIn:</label><input type='text' name='linkedin' value='"+res_linked+"' id='linkedin' class='form-control'/></div><div class='form-group'><input type='button' name='envio' id='envio' class='btn btn-success' value='Guardar' onclick='enviarDatos();'></div><input type='text' name='idUsuario' id='idUsuario' hidden='hidden'><input type='text' name='idPersona' id='idPersona' value='' hidden='hidden'></form></div>");
    $('#idUsuario').val(id_usuario);
    $('#idPersona').val(id_persona);
    $('#bio').text(res_bio);
    
    $.post(this.ruta+"Inicio/obtenerTitulo", function(data){
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


//$('#tel').val('+34 ');


    $('#tel').keyup(function(){
        var tel= $('#tel').val();
        if (tel.length == 3)
             $('#tel').val(tel+' ');
          if (tel.length == 7)
            $('#tel').val(tel+' ');
            if (tel.length == 10)
                $('#tel').val(tel+' ');
            if (tel.length == 13)
                $('#tel').val(tel+' ');
               });
    });

function asignar_html(identificador){
     this.ruta= $('#ruta').val();
  
    if(identificador=="datos_perfil"){
        var id_usuario=$('#idUsuario').val();
        var id_persona=$('#idPersona').val();
        var res_telf= $("#res_telf").val();
        var res_bio=$("#res_bio").val();
        var res_web=$("#res_web").val();
        var res_face= $("#res_face").val();
        var res_twitt= $("#res_twitt").val();
        var res_linked= $("#res_linked").val();
        var res_id_titulo= $("#res_id_titulo").val();
       
        $("#contenido").html("<div class='col-md-5'><h3>Datos personales</h3><form action='"+this.ruta+"Inicio' class='form-horizontal' name='form' id='form' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><div class='form-group' id='tel_div'><label for='tel'>Teléfono:</label><input type='text' name='tel' value='"+res_telf+"' id='tel' class='form-control' maxlength='16' onkeypress='return validarNumero(event)'/></div><div class='form-group' id='titulo_div'><label class='control-label' for='titulo'>Título</label><select name='titulo' id='titulo' class='form-control'><option value='0'>Seleccione</option></select></div><div class='form-group' id='bio_div'><label for='bio'>A cerca de ti: </label><textarea name='bio' cols='105' rows='5' id='bio' type='textarea' class='form-control'></textarea><br><br></div><h4>Otros datos</h4><div class='form-group' id='web_div'><label for='web'>Web o blog:</label><input type='text' name='web' value='"+res_web+"' id='web' class='form-control'/></div><div class='form-group' id='facebook_div'><label for='face'>Facebook:</label><input type='text' name='facebook' value='"+res_face+"' id='facebook' class='form-control'/></div><div class='form-group' id='twitter_div'><label for='twitter'>Twitter:</label><input type='text' name='twitter' value='"+res_twitt+"' id='twitter' class='form-control'/></div><div class='form-group' id='linkedin_div'><label for='lin'>LinkedIn:</label><input type='text' name='linkedin' value='"+res_linked+"' id='linkedin' class='form-control'/></div><div class='form-group'><input type='button' name='envio' id='envio' class='btn btn-success' value='Guardar' onclick='enviarDatos();'></div><input type='text' name='idUsuario' id='idUsuario' hidden='hidden'><input type='text' name='idPersona' id='idPersona' value='' hidden='hidden'></form></div>");
       // $("#contenido").html("<h3>Datos personales</h3><form action='"+this.ruta+"Inicio' class='form-horizontal' name='form' id='form' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><div class='form-horizontal'><div class='form-group' id='tel_div'><label class='col-sm-2 control-label' for='tel'>Teléfono:</label><div class='col-sm-5'><input type='text' name='tel' value='"+res_telf+"' id='tel' class='form-control'/></div></div><div class='form-group' id='titulo_div'><label class='col-sm-2 control-label' for='titulo'>Título</label><div class='col-sm-5'><select name='titulo' id='titulo' class='form-control'><option value='0'>Seleccione</option></select></div></div><div class='form-group' id='bio_div'><label class='col-sm-2 control-label' for='bio'>A cerca de ti: </label><div class='col-sm-5'><textarea name='bio' cols='105' rows='5' id='bio' type='textarea' class='form-control'></textarea></div></div></div><h4>Otros datos</h4><div class='form-horizontal'><div class='form-group' id='web_div'><label class='col-sm-2 control-label' for='web'>Web o blog:</label><div class='col-sm-5'><input type='text' name='web' value='"+res_web+"' id='web' class='form-control'/></div></div><div class='form-group' id='facebook_div'><label class='col-sm-2 control-label' for='face'>Facebook:</label><div class='col-sm-5'><input type='text' name='facebook' value='"+res_face+"' id='facebook' class='form-control'/></div></div><div class='form-group' id='twitter_div'><label class='col-sm-2 control-label' for='twitter'>Twitter:</label><div class='col-sm-5'><input type='text' name='twitter' value='"+res_twitt+"' id='twitter' class='form-control'/></div></div><div class='form-group' id='linkedin_div'><label class='col-sm-2 control-label' for='lin'>LinkedIn:</label><div class='col-sm-5'><input type='text' name='linkedin' value='"+linked+"' id='linkedin' class='form-control'/></div></div><div class='form-group'><hr><input type='button' name='envio' id='envio' class='btn btn-success' value='Guardar' onclick='enviarDatos();'></div></div><input type='text' name='idUsuario' id='idUsuario' hidden='hidden'><input type='text' name='idPersona' id='idPersona' value='' hidden='hidden'></form>");
        $('#idUsuario').val(id_usuario);
        $('#idPersona').val(id_persona);
        $('#bio').text(res_bio);
        
        $.post(this.ruta+"Inicio/obtenerTitulo", function(data){
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
    else if(identificador=="foto"){
         
        var id_usuario=$('#idUsuario').val();
        $("#contenido").html("<h3>Foto de perfil</h3><h5>Las fotos frontales son muy importantes para generar confianza en los clientes. Por favor, sube una foto en la que se vea claramente tu cara.</h5><div class='col-md-3 insert_foto' style='background: #EEE; text-align:center; font-weight:bold; max-height:200px; min-height:200px'>Tu foto</div><div class='col-md-9'><form class='form-horizontal' name='form_foto' id='form_foto' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><input type='file' name='archivo' id='archivo'><br><input type='button' name='envio_foto' id='envio_foto' class='btn btn-success' value='Guardar' onclick='enviarFoto();'></form></div>");
        $.post(this.ruta+'Foto/searchImagen',{idUsuario: id_usuario, id_tipo_imagen: '1'}, function(data){
            var data=$.parseJSON(data);
            if(data != null){
                $(".insert_foto").html("<img class='img-responsive' src='"+data.nombre_imagen+"' />");
            }
        });
    }
    else if(identificador=="pass"){
        $("#contenido").html("<h3>Introduce tu contraseña actual y luego la nueva contraseña</h3><div class='col-md-5'><form class='form-horizontal' name='form_clave' id='form_clave' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><div class='form-group' id='old_pass_div'><label for='old_pass'>Contraseña actual</label><input type='password' class='form-control' name='old_pass' id='old_pass'></div><div class='form-group' id='new_pass_div'><label for='new_pass'>Nueva contraseña:</label><input type='password' class='form-control' name='new_pass' id='new_pass'/></div><div class='form-group' id='new_pass_repeat_div'><label for='new_pass_repeat'>Repite la nueva contraseña:</label><input class='form-control' type='password' name='new_pass_repeat' id='new_pass_repeat'></div><div class='form-group' id='button_div'><input type='button' name='envio_clave' id='envio_clave' class='btn btn-success' value='Guardar' onclick='enviarClave();'></div></form></div>");    
    }
    else if(identificador=="tec_ver"){
        var id_usuario=$('#idUsuario').val();
        $("#contenido").html("</div><h3>Verificación titulación</h3><h5>Adjunta título, diploma o certificado de colegiación que justifiquen que posees la titulación que te habilita para realizar certificados energéticos según el Real Decreto 235/2013.</h5><div class='col-md-9'><form class='form-horizontal' name='form_titulo' id='form_titulo' role='form' enctype='multipart/form-data' method='post' accept-charset='utf-8'><input type='file' name='titulacion' id='titulacion'><br><input type='button' name='envio_titulacion' id='envio_titulacion' class='btn btn-success' value='Guardar' onclick='enviarTitulacion();'></form></div>");
    }
}

function enviarDatos(){
    var telefono= $('#tel').val();
    var biografia=$('#bio').val();
    var web=$('#web');
    var facebook=$('#facebook');
    var twitter=$('#twitter');
    var linkedin=$('#linkedin');
    var select= $('select[name=titulo]').val();
    ban= new Array();
    ban[0]='0';
    
    if(telefono.length !=0 && telefono.length <8){
        if(isNaN(telefono) || !isNaN(telefono)) {
            $('#tel').focus();
            $( "#tel_div" ).addClass( " has-error" );
            $('.alerta').html('<div class="alert alert-danger"><p>El telÃ©fono no es v&aacute;lido</p></div>');
            $('.alerta').fadeIn(500);
            ban[0]='1';
    }
    }
    
    if(telefono.length !=0 && telefono.length >8){
            $('.alerta').html('');
            $('.alerta').fadeIn(500);
    }
    
    if(telefono.length ==0 || biografia.length ==0 || web.length ==0 || facebook.length ==0 || twitter.length ==0 || linkedin.length ==0 || select==0){
        $("#bio_div").addClass("has-error");
        $("#tel_div").addClass("has-error");
        $("#titulo_div").addClass(" has-error");
        $( "#web_div" ).addClass("has-error");
        $( "#facebook_div" ).addClass("has-error");
        $( "#twitter_div" ).addClass("has-error");
        $( "#linkedin_div" ).addClass("has-error");
        $('.alerta').fadeIn(500);
        $('.alerta').html('<div class="alert alert-danger"><p>Debe completar los campos</p></div>');
        ban[2]='1';
    }
    var bandera=0;
    
    for (var i=0; i<ban.length; i++) {
        if(ban[i]=='1'){
            bandera=1;
        }
    }
  
    if(ban==0){
        $.post(this.ruta+"Inicio/procesarDatosPersonales",$("#form").serialize(), function(data){
            //alert(data);
            $( "#bio_div" ).removeClass("has-error");
            $( "#tel_div" ).removeClass("has-error");
            $( "#web_div" ).removeClass("has-error");
            $( "#facebook_div" ).removeClass("has-error");
            $( "#twitter_div" ).removeClass("has-error");
            $( "#linkedin_div" ).removeClass("has-error");
            $("#titulo_div").removeClass("has-error");
            $('.alerta').html('<div class="alert alert-success"><p>'+data+'</p></div>');
            setTimeout(function() { $('.alerta').fadeOut('fast'); }, 8000);
        }); 
    }
}

function enviarFoto(){
   // alert( this.ruta);  
    var archivo= $("#archivo").val();
    var id_usuario=$('#idUsuario').val();
    
    if(archivo.length==0){
        $('.alerta').html('<div class="alert alert-danger"><p>Debe cargar una imagen.</p></div>');
    }
    else{
       
        $('.alerta').html('');
        var formData = new FormData($("#form_foto")[0]);
        formData.append("id_usuario",id_usuario);
        var message='';
        $.ajax({
            url: this.ruta+'foto',  
            type: 'POST',
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,

            beforeSend: function(){
                this.ruta= $('#ruta').val();
               
                message = $("<span>Cargando <img src='"+this.ruta+"public/imagenes/loading_apple.gif' alt='Smiley face' height='30' width='30'></span>");
                showMessage(message)        
            },
            //una vez finalizado correctamente
            success: function(data){
                if(data==0){
                    message = $("<div style='width:100% !importarnt;' class=' alert alert-danger alert-dismissable'>La imagen cargada no es válida, por favor verifique e intente nuevamente.</div>");
                    showMessage(message);
                }
                else if(data==1){
                    message = $("<div class=' alert alert-danger alert-dismissable'>Ha ocurrido un error al guardar la imagen. Por favor contacte al administrador del sistema.</div>");
                    showMessage(message);
                }
                else{ 
                    message = $("<div class=' alert alert-success alert-dismissable'>La imagen se ha cargado con éxito.</div>");
                    showMessage(message); 
                  
                    $(".insert_foto").html("<img class='img-responsive' src='"+this.ruta+"uploads/fotos_perfil/"+data+"' />");
                    setTimeout(function() { $('.alerta').fadeOut('fast'); }, 8000);
                }
            },
        });
    }
}

function showMessage(message){
    $(".alerta").html("").show();
    $(".alerta").html(message);
}

function enviarClave(){
    var pass= $('#old_pass').val();
    var new_pass= $('#new_pass').val();
    var repeat_new_pass= $('#new_pass_repeat').val();
    var id_usuario=$('#idUsuario').val();
    
    if(pass == '' || new_pass=='' || repeat_new_pass==''){
        $('#old_pass').focus();
        $("#old_pass_div" ).addClass("has-error");
        $("#new_pass_div").addClass("has-error");
        $("#new_pass_repeat_div").addClass("has-error");
        
        $('.alerta').fadeIn(500);
        $('.alerta').html('<div class="alert alert-danger"><p>Debe completar los campos</p></div>');
    }
    else if(new_pass != repeat_new_pass){
        $("#new_pass_div").addClass("has-error");
        $("#new_pass_repeat_div").addClass("has-error");
        
        $('.alerta').fadeIn(500);
        $('.alerta').html('<div class="alert alert-danger"><p>Las contraseñas no coinciden.</p></div>');
    }
    else{
        $.post(this.ruta+"pass",{clave: pass, new_pass: new_pass, id_usuario: id_usuario}, function(data){
            if(data==1){
                $('.alerta').fadeIn(500);
                $('.alerta').html('<div class="alert alert-success"><p>Contraseña actualizada con éxito.</p></div>');
                $("#old_pass_div" ).removeClass("has-error");
                $("#new_pass_div").removeClass("has-error");
                $("#new_pass_repeat_div").removeClass("has-error");
                $('#old_pass').val('');
                $('#new_pass').val('');
                $('#new_pass_repeat').val('');
                setTimeout(function() { $('.alerta').fadeOut('fast'); }, 8000);
            }
            else if(data==2){
                $('.alerta').fadeIn(500);
                $('.alerta').html('<div class="alert alert-warning"><p>Debe ingresar una contraseña diferente a la actual.</p></div>');
                $("#old_pass_div" ).removeClass("has-error");
                $("#new_pass_div").removeClass("has-error");
                $("#new_pass_repeat_div").removeClass("has-error");
            }
            else if(data==3){
                $('.alerta').fadeIn(500);
                $('.alerta').html('<div class="alert alert-warning"><p>La contresaña actual es incorrecta, por favor intente de nuevo.</p></div>');
                $("#old_pass_div" ).removeClass("has-error");
                $("#new_pass_div").removeClass("has-error");
                $("#new_pass_repeat_div").removeClass("has-error");
            }
        });
    }
}

function enviarTitulacion(){
    var archivo= $("#titulacion").val();
    var id_usuario=$('#idUsuario').val();
    
    if(archivo.length==0){
        $('.alerta').html('<div class="alert alert-danger"><p>Debe cargar la titulación.</p></div>');
    }
    else{
        $('.alerta').html('');
        var formData = new FormData($("#form_titulo")[0]);
        formData.append("id_usuario",id_usuario);
        var message='';
        $.ajax({
            url: this.ruta+'titulacion',  
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,

            beforeSend: function(){
                this.ruta= $('#ruta').val();
                message = $("<span>Cargando <img src='"+this.ruta+"public/imagenes/loading_apple.gif' alt='Smiley face' height='30' width='30'></span>");
                showMessageTitulo(message)
                //$(".alerta").html("<span>Cargando <img src='http://localhost/proyecto-tectarea/public/imagenes/loading_apple.gif' alt='Smiley face' height='30' width='30'></span>");        
            
            },
            //una vez finalizado correctamente
            success: function(data){
                if(data==0){
                    message = $("<span class=' alert alert-danger'>Ha ocurrido un error al guardar el archivo. Por favor contacte al administrador del sistema.</span>");
                    showMessageTitulo(message);
                    //$(".alerta" ).addClass( "alert alert-danger alert-dismissable" );
                    //$(".alerta").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>El archivo cargado no es válido, por favor verifique e intente nuevamente.");
                }
                else if(data==1){
                    message = $("<span class=' alert alert-danger'>El archivo cargado no es válido, por favor verifique e intente nuevamente.</span>");
                    showMessageTitulo(message);
                    //$(".alerta" ).addClass( "alert alert-danger alert-dismissable" );
                    //$(".alerta").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Ha ocurrido un error al guardar el archivo. Por favor contacte al administrador del sistema.");
                }
                else{
                    message = $("<span class=' alert alert-success'>El archivo se ha guardado con éxito.</span>");
                    showMessageTitulo(message);
                    setTimeout(function() { $('.alerta').fadeOut('fast'); }, 8000);
                    //$(".alerta" ).addClass( "alert alert-success alert-dismissable" );
                    //$(".alerta").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>El archivo se ha guardado con éxito." );
                }
            },
        });
    }
    
    function showMessageTitulo(message){
        $(".alerta").html("").show();
        $(".alerta").html(message);
    }
}