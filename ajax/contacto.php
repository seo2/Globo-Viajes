<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$nom	 	= filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
	$mail 		= filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
	$fono	 	= filter_var($_POST["fono"], FILTER_SANITIZE_STRING);
	$mensaje	= filter_var($_POST["mensaje"], FILTER_SANITIZE_STRING);
	
	$to = "cgarcia@parauco.com";

	
	$to 	 = 'seodos@gmail.com';
	
	$message = '<html><body>';
	$message .= '<div>';
	$message .= "<p>De:  <strong>".$nom." </strong></p>";  
	$message .= "<p>Correo: <strong>".$mail." </strong></p>";  
	$message .= "<p>Fono: <strong>".$fono." </strong></p>";     
	$message .= "<p>Mensaje:</p>"; 
	$message .= "<p> <strong>".$mensaje." </strong></p>";  
	$message .= "</div>";
	$message .= "</body></html>";
	
	$subject = 'Mensaje desde Globo Viajes';
	$headers = "From: " . "<no-reply@globoviajes.cl> Contacto Globo Viajes" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail($to, $subject, $message, $headers);

	date_default_timezone_set('America/Santiago');
	$ahora 	= date("Y-m-d H:i:s");
	$hoy	= date('Y-m-d');

		$data = Array (
		  'conNom'  => $nom,
		  'conMail' => $mail,
		  'conFono' => $fono,
		  'conMen'  => $mensaje,
		  'conTS'   => $ahora
		);
		
		$db->insert ('contacto', $data);


	echo 'ok';
}else{
	echo 'error';
}
?>