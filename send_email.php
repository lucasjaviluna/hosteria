<?php
error_reporting(0);
/*error_reporting(E_ALL);
require("PHPMailer/class.phpmailer.php");
$mail = new PHPMailer();
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mensaje = $_POST["comentario"];
$contacto_a = $_POST["contacto"];


$mail->Mailer="smtp";
$mail->Helo = "www.laguialocal.net"; //Muy importante para que llegue a hotmail y otros
$mail->SMTPAuth=true;
$mail->Host="laguialocal.net";
$mail->Port=25; //depende de lo que te indique tu ISP. El default es 25, pero nuestro ISP lo tiene puesto al 26
//$mail->Username="bandeja@eldominioqueusas.com.mx";
//$mail->Password="******";
$mail->From="concordia@laguialocal.net";//"info@eldominioqueusas.com.mx";
$mail->FromName="El Nombre del Remitente";
$mail->Timeout=60;
$mail->IsHTML(true);
//Enviamos el correo
$mail->AddAddress('lucasjavier_lunayahoo.com.ar'); //Puede ser Hotmail
$mail->Subject='Tu asunto';
$mail->Body="<p>Texto lo suficientemente largo y con pocos links para que no sea interpretado como SPAM</p><p>Es importante que el texto sea lo suficientemente largo, ya que si sólo tienes por ejemplo, una frase y un link, asume tanto Outlook como la mayoría de los destinatarios, que se trata de SPAM</p><p>Pero si tu texto es largo y tienes un link a <a href\"http://www.forosdelweb.com\">Foros del web</a> por ejemplo, funcionará perfectamente bien.</p>";
$mail->AltBody="Texto que debe decir lo mismo que el Body, pero sin etiquetas HTML";
$exito = $mail->Send();
if($exito){
     $mail->ClearAddresses();
     echo "OK";
}else
    echo "Error de envio";
*/

/*$mail->Host = "mail.phantomdark.com.ar";
$mail->From = "info@phantomdark.com.ar";
$mail->FromName = "Lucas";
$mail->Subject = "Mensaje de contacto - www.guialocal.net";
$mail->AddAddress("lucasjavier_luna@yahoo.com.ar","Nombre 01");
$body  = "Hola <strong>amigo</strong><br>";
$body .= "probando <i>PHPMailer<i>.<br><br>";
$body .= "<font color='red'>Saludos</font>";
$mail->Body = $body;
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";

if($mail->Send())
        echo "OK";
else
    echo "Error de envio";*/



//////////////
session_start();
$nombre = stripslashes(strip_tags($_POST["nombre"]));
$email = trim(htmlspecialchars(strip_tags(($_POST["email"]))));
$telefono = trim(htmlspecialchars(strip_tags(($_POST["telefono"]))));
$mensaje = stripslashes(strip_tags($_POST["mensaje"]));
$captcha = strtolower($_POST["captcha"]);

//Verifico el captcha
if($captcha != $_SESSION['captcha']){
    echo 'Error captcha';
    exit();
}

$asunto = "Mensaje de contacto - www.hosteriasanbenito.com.ar";
$destino = "info@hosteriasanbenito.com.ar";


$contenido = '<html><body>';
$contenido .= '<table rules="all" style="border-color: #666; border: 2px solid;" cellpadding="10">';
$contenido .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . $nombre . "</td></tr>";
$contenido .= "<tr><td><strong>Email:</strong> </td><td>" .$email . "</td></tr>";
if($telefono!='') $contenido .= "<tr><td><strong>Teléfono:</strong> </td><td>" .$telefono . "</td></tr>";
$contenido .= "<tr><td><strong>Mensaje:</strong> </td><td>" .$mensaje . "</td></tr>";
$contenido .= "</table></body></html>";


//$cabeceras = "From: " . $email . "\r\n";
$cabeceras = "From: Hosteria San Benito <" . $destino . ">\r\n";
$cabeceras .= "Reply-To: ". $email . "\r\n";
$cabeceras .= "Return-Path: ". $email . "\r\n";
$cabeceras .= "BCC: lucasjaviluna@gmail.com,hosteriasanbenito@hotmail.com.ar\r\n";
$cabeceras .= "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";

try
{
    $file = fopen('emails.csv', 'a+');
    if($file)
    {
        $data[] = $email;
        $data[] = $nombre;
        $data[] = $telefono;
        $data[] = date("Y-m-d H:i:s");
        fputcsv($file, $data, ',');
        fclose($file);
    }
}
catch(Exception $e)
{
    
}
//mail("hosteriasanbenito@hotmail.com.ar", $asunto, $contenido, $cabeceras);
if(mail($destino, $asunto, $contenido, $cabeceras)){
    
    //mail al remitente
   /* $asunto = "Respuesta automática Hostería San Benito";
    $contenido = '<p style="color:blue;font-weight:bold">Gracias por comunicarse con Hostería San Benito, a la brevedad estaremos respondiendo a su consulta.</p>';
    $cabeceras2 = "From: " . $destino . "\r\n";
    $cabeceras2 .= "Reply-To: ". $destino . "\r\n";
    $cabeceras2 .= "Return-Path: ". $destino . "\r\n";
    $cabeceras2 .= "MIME-Version: 1.0\r\n";
    $cabeceras2 .= "Content-Type: text/html; charset=UTF-8\r\n";
    mail($email, $asunto, $contenido, $cabeceras2); */
    echo "OK";
}else{ 
    echo "Se produjo un error al enviar su mensaje.<br>Inténtelo de nuevo más tarde.";
}


?>
