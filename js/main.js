function enviar_contactos(){
	//obtiene y y envia los valores al servidor
	var nombre_contac = document.getElementById("nombre_contac").value;
	var email_contac = document.getElementById("email_contac").value;
	var mensaje = document.getElementById("mensaje").value;

	if (document.getElementById("nombre_contac").value == "") {
		document.getElementById("nombre_contac").fucus();
	}else if (document.getElementById("email_contac").value == ""){
		document.getElementById("email_contac").focus();
	}else if (document.getElementById("mensaje").value == "") {
		document.getElementById("mensaje").focus();
	}else{
		$.ajax({
			url: 'php/contacto.php',
			type: 'POST',
			data: {nombre: nombre_contac, email : email_contac, mensajes : mensaje},
			success: function(respuesta){
				if (respuesta == 1) {
					alert('enviado exitosamente comoda la alert esto ya es estilo');
					document.getElementById("nombre_contac").value= '';
					document.getElementById("email_contac").value= '';
					document.getElementById("mensaje").value= '';
				}
			}
		});
	}
}