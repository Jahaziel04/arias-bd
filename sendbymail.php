<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "jahaziel@ariasbd.16mb.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "<html> 
<head> 
<title>Login</title> 
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'> 
<link href='../estilo.css' rel='stylesheet' type='text/css'> 
</head> 

<body bgcolor='#FFFFFF'> 
<br> 
<br> 
<table width='50%' border='0' align='center' cellpadding='0' cellspacing='0'> 
  <tr>  
    <td><div align='center'>Usuario o Password incorrectos<br><br> 
        <input name='Button' type='button' class='t_n' class='cajas' onClick='javascript:window.history.back()' value='Volver'> 
      </div></td> 
  </tr> 
</table> 
<p align='center' class='text'>&nbsp;</p> 
</body> 
</html>";
}
?>