<?php

	error_reporting(E_ALL ^ E_DEPRECATED);

		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$numero = $_POST['numero'];
		$mensaje = $_POST['mensaje'];
		
		$host='localhost';
		$user='kimeramu_kmcont';
		$pass='5NBo!+Pc[9Xo';
		$database='kimeramu_contacto';
		
		$conex = mysql_connect($host, $user, $pass) or die ("Error de conexión con la base de datos.");

		mysql_select_db($database, $conex) or die ("No existe la base de datos.");

		$insertar="INSERT INTO contacto SET nombre='$nombre', email='$email', numero='$numero', mensaje='$mensaje'";
		$ejecutar_insertar=mysql_query($insertar, $conex);

	//Comprobamos que se haya presionado el boton enviar
	if(isset($_POST['submitMessage'])){
		//Guardamos en variables los datos enviados
		$nombre = $_POST['nombre'];
		$max_longitud_nombre = 50;
		$email = $_POST['email'];
		$max_longitud_email = 320;
		$numero = $_POST['numero'];
		$mensaje = $_POST['mensaje'];
		$max_longitud_mensaje = 500;
	
		//Validamos del lado del servidor que el nombre y el email no estén vacios
		if($nombre == '' || $max_longitud_nombre > 50){
			echo "Los datos ingresados no son válidos.";
		}
		else if($email  == '' || $max_longitud_email > 320){
			echo "Los datos ingresados no son válidos.";
		}
		if($mensaje == '' || $max_longitud_mensaje > 500){
			echo "Los datos ingresados no son válidos.";
		}
		else{
			//Email al que se enviará
			$para = "contacto@kimeramuebles.com";
			//Asunto del mensaje
			$asunto = "Contacto Página Web.";
			//Cuerpo del mensaje
			$mensaje = "
			<table border='0' cellspacing='3' cellpadding='2'>
				<tr>
					<td width='30%' align='justify' bgcolor='#E7E7E7'><strong>Nombre:</strong></td>
					<td width='80%' align='justify'>$nombre</td>
				</tr>
				<tr>
					<td align='justify' bgcolor='#E7E7E7'><strong>E-mail:</strong></td>
					<td align='justify'>$email</td>
				</tr>
				<tr>
					<td align='justify' bgcolor='#E7E7E7'><strong>Número:</strong></td>
					<td align='justify'>$numero</td>
				</tr>
				<tr>
					<td align='justify' bgcolor='#E7E7E7'><strong>Mensaje:</strong></td>
					<td align='justify'>$mensaje</td>
				</tr>
			</table>";
			
			//Cabeceras del correo
    		$headers = "From: $nombre <$email>\r\n"; //Quien envia?
    		$headers .= "X-Mailer: PHP5\n";
    		$headers .= 'MIME-Version: 1.0' . "\n";
    		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
	
			//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
			if(mail($para, $asunto, $mensaje, $headers)){
				header ("Location: http://www.kimeramuebles.com/gracias.html");
			}
			else{
				header ("Location: http://www.kimeramuebles.com/error.html");
			}
		}
	}	
?>