$(document).ready(function() { 
	//cargamos las ubicaciones de acuerdo al tecnico

	CargarUbicaciones($('#id_tecnico').val());

 //Al escribr dentro del input con poblacion
 $('#poblacion').keyup(function(){
  //Obtenemos el value del input
  var poblacion = $('#poblacion').val();  
 
  //alert(poblacion);
  this.ruta=$('#ruta').val();  
  //Le pasamos el valor del input al ajax
		  $.ajax({
		 type: "POST",
		 url: this.ruta+"Autocomplete/autocompletar",
		 dataType:'json',
		 data: {'poblacion' : poblacion},
		 success: function(data) {
		 	 var availableTags=data;

		 	 $("#poblacion").autocomplete({
			      source: availableTags
			    });
		    
		 }, error: function (request, status, error) {
                        alert(request.responseText);
                    }
		 });
 }); 

	 $('#buscar').click(function(){
	 	this.ruta=$('#ruta').val();  
	 	 var poblacion = $('#poblacion').val();  
 
  
		 $.ajax({
		 type: "POST",
		 url: this.ruta+"Autocomplete/buscarCoordenadas",
		 data: {'poblacion' : poblacion},
		 success: function(data) {
		 //alert(data);
		 var coordenadas= eval(data); 

		 if (data == 0){
            	
            showMessage('<div class="alert alert-danger"><b>Población no encontrada.</b></div>'); 
          }
          else
          	if (data == 1){
            	
             showMessage('<div class="alert alert-danger"><b>Error al intentar guardar la ubicación.</b></div>'); 
          }
          else{
			 for (var i = 0; i < coordenadas.length; i++) {
			 	
	                             
	                map.addMarker({
					  lat: coordenadas[i]["latitud"],
					  lng:coordenadas[i]["longitud"],
					  title: ''
					});

	            }
	           
            showMessage('<div class="alert alert-success"><b>Ubicación guardar con éxito.</b></div>'); 
            $(".input").hide();

            }

		    
		 }, error: function (request, status, error) {
                        alert(request.responseText);
                    }
		 });
				
		
		}); 

}); 
function showMessage(message){
	
	 $(".mensaje2").html("").show();
	 $(".mensaje2").html(message);
	 $(".mensaje2").delay(2000).hide(600);

	  //$("html, body").animate({scrollTop:"0px"});
    }

function CargarUbicaciones(id_tecnico){

$.ajax({
		 type: "POST",
		 url: this.ruta+"Autocomplete/CargarUbicaciones",
		 data: {'id' : id_tecnico},
		 success: function(data) {
		 //alert(data);
		 var coordenadas= eval(data); 
		  $(".input").hide();
		 for (var i = 0; i < coordenadas.length; i++) {
			                             
	                map.addMarker({
					  lat: coordenadas[i]["latitud"],
					  lng:coordenadas[i]["longitud"],
					  title: ''
					});

	            }
	    html ="<table class='table table-responsive table-bordered'><thead>";
        html +="<tr><th>Población</th><th></th></tr>";
        html +="</thead><tbody>";        
	    for (var i = 0; i < coordenadas.length; i++) {
                html +="<tr><td>"+coordenadas[i]["nombre_zona"]+"</td><td><button class='btn btn-danger btn-block' type='button' value='"+coordenadas[i]["id_poblacion"]+"'>Eliminar</button></td></tr>";
            };
        html +="</tbody></table>";
        $("#tabla_ubicacion").html(html);       
            

      	 }, error: function (request, status, error) {
                        alert(request.responseText);
                    }
		 });
}