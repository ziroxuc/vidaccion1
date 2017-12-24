<?php
require("phpmailer/class.phpmailer.php")

$msg = null;
if(isset($_POST["phpmailer"])){

$nombre = $_POST["name"]
$correo = $_POST["email"]
$asunto = $_POST["subject"]
$txtarea = $_POST["mensaje"]


$mail = new PHPMailer;
$mail->Host = "localhost";
$mail->From = "contacto@vidaccion.cl";
$mail->FromName = "administrador";
$mail->Subject = $asunto;
$mail->addAddress($email,$nombre);
$mail->MsgHTML($mensaje);

if($mail->Send()){
    $msg = "Su mail ha sido enviado";
}else{
    $msg = "Error al enviar el mail";
}



}




?>