function revisar(elemento) {
	if (elemento.value == "") {
		elemento.className='error';
	} else {
		elemento.className='form-input';
    }
}

function revisarlongnom(elemento) {
	if (elemento.value.length > 50) {
		elemento.className='error';
  	} else {
		elemento.className='form-input';
  	}
}

function revisaremail(elemento) {
    if (elemento.value != "") {
		var dato = elemento.value;
        var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
        if (!expresion.test(dato)) {
			elemento.className='error';
        } else {
			elemento.className='form-input';
        }
	}	
}

function revisarlongemail(elemento) {
	if (elemento.value.length > 320) {
		elemento.className='error';
  	} else {
		elemento.className='form-input';
  	}
}

function revisarlongnum(elemento) {
	if (elemento.value.length > 15) {
		elemento.className='error';
  	} else {
		elemento.className='form-input';
  	}
}

function revisarlongmen(elemento) {
	if (elemento.value.length > 500) {
		elemento.className='error';
  	} else {
		elemento.className='form-input';
  	}
}

function validar(form) {
  if(form.nombre.value == "") { //Si este campo está vacío 
	  alert('Por favor ingresar el nombre.'); // Mensaje a mostrar
	  return false; //Devolvemos un valor negativo
  }
  
  if(form.nombre.value.length > 50) { //Control de caracteres de este campo
	  alert('Nombre demasiado extenso.'); //Mensaje a mostrar
	  return false; //Devolvemos un valor negativo
  }
  
  if(form.email.value == "") { //Si este campo está vacío
	  alert('Por favor ingresar el email.'); // Mensaje a mostrar
	  return false; //Devolvemos un valor negativo
  }
  
  if(form.email.value.length > 320) { //Control de caracteres de este campo
	  alert('Email demasiado extenso.'); //Mensaje a mostrar
	  return false; //Devolvemos un valor negativo
  }
 
  if(form.numero.value == "") { //Si este campo está vacío
	  alert('Por favor ingresar el número.'); // Mensaje a mostrar
	  return false; //Devolvemos un valor negativo
  }
  
  if(form.numero.value.length > 15) { //Control de caracteres de este campo
	  alert('Número demasiado extenso.'); //Mensaje a mostrar
	  return false; //Devolvemos un valor negativo
  }
  
  if(form.mensaje.value.length > 500) { //Control de caracteres de este campo
	  alert('Mensaje demasiado extenso.'); //Mensaje a mostrar
	  return false; //Devolvemos un valor negativo
  }
  
  if(form.nombre.value, form.email.value, form.mensaje.value) { //Si todos los campos estan diligenciados
	  alert('Su mensaje ha sido enviado con éxito.'); //Mensaje a mostrar
	  return true; //Devolvemos un valor verdadero
  }
 
}