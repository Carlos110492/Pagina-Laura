<?php
	$name = $_POST["nombre"];
	$email = $_POST["email"];
	$message = $_POST["mensaje"];
	$asunto = $_POST["asunto"];
	
	$headers = 'From: ' .$email . "\r\n". 
	'Reply-To: ' . $email. "\r\n" . 
    'X-Mailer: PHP/' . phpversion();

    $destino = "carlosazcapo@gmail.com";
    $subject = "Contacto web carlos";
 
    $contenido = "Nombre: " . $name . "\nCorreo: " . $email .  "\nMensaje: " . $_POST['mensaje'] .  "\nDatos: " . $asunto;
	
	mail($destino, $subject, utf8_decode($contenido), $headers);
	header("Location: contacto.html");


	//$recaptcha = $_POST["g-recaptcha-response"];
 
	//$url = 'https://www.google.com/recaptcha/api/siteverify';
	/*$data = array(
		'secret' => '6Lee5pYUAAAAAOGUf1dywdzYOJDX_o9SC723p8Gt',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) {*/
	
		// No eres un robot, continuamos con el envío del email
		// ...
		// ...
		
	// } //else {
		
		// Eres un robot!
	//header("Location: No_enviado.html");
	//}
     //}
?>
