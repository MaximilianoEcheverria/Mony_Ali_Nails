<?php 
 
//Llamada a los namespaces de PHPMailer
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'C:\xampp\htdocs\monyalinails\vendor\autoload.php';

//Clase de PHPMailer para enviar correos
class Mailer {

    private $mail;
    function __construct() {
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();
        $this->mail->SMTPSecure = 'tls';
        $this->mail->SMTPAuth = true;
        $this->mail->Host = 'smtp.gmail.com'; 
        $this->mail->Username = 'suarezruben20@gmail.com';   // SMTP username 
        $this->mail->Password = 'obrvqxyaimcwpzds';   // SMTP password
        $this->mail->Port = 587;                    // TCP port to connect to 
        $this->mail->setFrom('suarezruben20@gmail.com', 'Mony Ali Nails');  
        $this->mail->isHTML(true); 
        $this->mail->Subject = 'Email de Mony Ali Nails';  
        $bodyContent = '<h1>Restablecimiento de usuario</h1>'; 
        $this->mail->Body    = $bodyContent; 
    }

    //Enviar_email -> funcion para enviar emails a un correo especifico
    public function enviar_email($destino, $codigo, $usuario) {
        $this->mail->addAddress($destino); 
        $this->mail->Body = '
        <html> 
            <head> 
                <title>Contacto de Mony Ali Nails</title> 
            </head>
    
            <body> 
                <h1>Solicitud de restablecimiento de usuario!</h1>
                <p> 
                    Hola! '.$usuario.', te escribimos para que puedas restablecer tu usuario/clave  <br>
                    Le proporcionamos la siguente clave para que pueda ingresar : '.$codigo.'<br>

                    Por favor no conteste te email, es automatico. Saludos!
                </p> 
            </body>
        </html>
    ';
        
        
        if(!$this->mail->send()) { 
            echo 'El correo no pudo ser enviado : '.$this->mail->ErrorInfo; 
        } else { 
            echo 'El correo fue enviado correctamente.'; 
        }
    }
}
 
 
?>