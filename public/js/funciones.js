function validarNumero(e) { 
    tecla = (document.all) ? e.keyCode : e.which; 
    if (tecla==8) return true; //Tecla de retroceso (para poder borrar) 
    patron = /\d/; // Solo acepta números 	
    te = String.fromCharCode(tecla); //convertimos la tecla en un codigo para ver si pertenece al patron establecido	
    return patron.test(te);  // prueba de patron, si la tecla esta dentro del patron, aceptara, sino no permitira inserta la tecla presionada
} 
 function validarLetras(e) { // 1
	
    tecla = (document.all) ? e.keyCode : e.which; 
	 	
    if (tecla==8) return true; // backspace
		if (tecla==32) return true; // espacio
		if (tecla==37) return true; // espacio
		
		if (e.ctrlKey && tecla==86) { return false;} //Ctrl v
		if (e.ctrlKey && tecla==67) { return false;} //Ctrl c
		if (e.ctrlKey && tecla==88) { return false;} //Ctrl x

		patron = /[a-zA-Z]/; //patron para aceptar solo letras

		te = String.fromCharCode(tecla); //convertimos la tecla en un codigo para ver si pertenece al patron establecido	

		return patron.test(te); // prueba de patron, si la tecla esta dentro del patron, aceptara, sino no permitira inserta la tecla presionada
		
	}	