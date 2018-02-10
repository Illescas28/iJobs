<?php

namespace Compartido;

//// PHPMailer ////
use PHPMailer;

class Funciones {

    protected $mailSMTPAuth = true;
    //protected $mailSMTPSecure = "ssl";
    protected $mailHost = 'mail.ijobs.com';
    protected $mailPort = 587;
    protected $mailUsername = 'webmaster@ijobs.com';
    protected $mailPassword = 'aKpu92?2';

    public function replaceCharToUTF8($char) {

        //Rememplazamos caracteres especiales latinos minusculas
        $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', '\"', '€', 'ü');
        $repl = array('&aacute;', '&eacute;', '&iacute;', '&oacute;', '&uacute;', '&ntilde;', '&quot;', '&euro;', '&uuml;');
        $char = str_replace($find, $repl, $char);

        //Rememplazamos caracteres especiales latinos mayusculas
        $find = array('Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', 'Ü', 'ç', 'Ç');
        $repl = array('&Aacute;', '&Eacute;', '&Iacute;', '&Oacute;', '&Uacute;', '&Ntilde;', '&Uuml;', '&ccedil;', '&Ccedil;');
        $char = str_replace($find, $repl, $char);

        return $char;
    }

    public function enviarCorreoContacto($contactoPost){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = $this->mailSMTPAuth;
        //$mail->SMTPSecure = $this->mailSMTPSecure;
        $mail->Host = $this->mailHost;
        $mail->Port = $this->mailPort;
        $mail->Username = $this->mailUsername;
        $mail->Password = $this->mailPassword;

        $mail->From = 'no-replay@ijobs.com';
        $mail->FromName = utf8_decode('iJobs');
        $mail->addAddress('contacto@ijobs.com');

        $mail->isHTML(true);

        $mail->Subject = utf8_decode('Contacto - '. $contactoPost['contacto_nombrecompleto']);
        $detalles = "<span>" . utf8_decode('Nombre: ') . "<strong>" . utf8_decode($contactoPost['contacto_nombrecompleto']) . "</strong></span><br />
                    <span>" . utf8_decode('Correo Electrónico: ') . "<strong style='color:green;'>" . utf8_decode($contactoPost['contacto_correo']) . "</strong></span><br />
                    <span>" . utf8_decode('No. Telefónico: ') . "<strong>" . utf8_decode($contactoPost['contacto_telefono']) . "</strong></span><br />
                    <span>" . utf8_decode('Asunto: ') . "<strong>". utf8_decode($contactoPost['contacto_asunto']) ."</strong><br />
                    <span>" . utf8_decode('Mensaje: ') . "<strong>" . utf8_decode($contactoPost['contacto_mensaje']) . "</strong></span><br />";


        $cuerpo = "<!DOCTYPE html>
                    <html>
                    <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
                    <meta charset='utf-8' />
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link href='https//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' /> <!-- Nos da soporte para la tipografia de letra en nuestro documento -->
                    <!--[if (gte mso 9)|(IE)]>
                    <style type='text/css'>
                    table {border-collapse: collapse;}
                    </style>
                    <![endif]-->
                    <style type='text/css'>
                    /* Basics */
                    body {
                    Margin: 10px;
                    padding: 0;
                    min-width: 100%;
                    background-color #ffffff;
                    }
                    table {
                    border-spacing: 0;
                    font-family: \"Open Sans\", sans-serif;
                    color: #333333;
                    }
                    td {
                    padding: 0;
                    }
                    img {
                    border: 0;
                    }
                    .wrapper {
                    width: 100%;
                    table-layout: fixed;
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                    }
                    .webkit {
                    max-width: 700px;
                    }
                    /* Windows Phone Viewport Fix */
                    @-ms-viewport {
                    width: device-width;
                    }
                    .outer {
                    Margin: 0 auto; /* Pongo en mayúsculas Margin para que Outlook.com no lo quite */
                    width: 100%;
                    max-width: 700px;
                    }
                    .full-width-image img {
                    width: 100%;
                    height: auto;
                    }
                    .inner {
                    padding: 10px;
                    }
                    p {
                    Margin: 0;
                    }
                    a {
                    color: #0082CA;
                    text-decoration: underline;
                    }
                    .h1 {
                    font-size: 21px;
                    font-weight: bold;
                    Margin-bottom: 18px;
                    }
                    .h2 {
                    font-size: 18px;
                    font-weight: bold;
                    Margin-bottom: 12px;
                    }
                    /* One column layout */
                    .one-column .contents {
                    text-align: Left;
                    }
                    .one-column p {
                    font-size: 14px;
                    Margin-bottom: 10px;
                    }
                    /*CE*/
                    .rectangulo_gris {
                    padding: 50px 50px 50px 50px;
                    background-color: #CCC;
                    }
                    .rectangulo_blanco {
                    padding: 20px 20px 20px 20px;
                    background-color: #FFF;
                    text-align: center;
                    }
                    .footer-left {
                    background-color: #071C2C;
                    color: #FFF;
                    }
                    .footer_item {
                    margin: 10px 0 10px 10px;
                    width: 240px;
                    }
                    .margin-left-10px {
                    margin-left: 10px;
                    }
                    .footer_font {
                    font-size: 10px;
                    font-family: \"Open Sans\", sans-serif;
                    }
                    .contact {
                    display: block;
                    float: left;
                    }
                    .footer-right {
                    background-color: #0082CA;
                    padding: 21.5px 7px 21.5px 7px;
                    }
                    .social {
                    padding: 0 2.5px 0 2.5px;
                    display: block;
                    float: Left;
                    }
                    @media screen and (max-width: 699px) {
                    .footer-right-phone{
                    background-color:#0082CA;
                    padding: 21.5px 7px 21.5px 7px;
                    width:95%;
                    }
                    .social-phone{
                    padding: 0 7% 0 7%;
                    display: block;
                    float: Left;
                    }
                    }
                    </style>
                    </head>
                    <body style='Margin: 10px; padding: 0; min-width: 100%; background-color #ffffff;'>
                        <center class='wrapper' style='width: 100%; table-layout: fixed; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;'>
                            <div class='webkit' style='max-width: 700px;'>
                                <!--[if (gte mso 9)|(IE)]>
                                <table width='700' align='center' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333;'>
                                <tr>
                                <td style='padding: 0;'>
                                <![endif]-->
                                <table class='outer' align='center' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333; Margin: 0 auto; width: 100%; max-width: 700px;'>
                                    <tr>
                                        <td class='full-width-image' style='padding: 0;'>
                                            <div style='margin-left: 20px; display: block; float: left;'>
                                                <img src='http://www.ijobs.com/img/img-sitio/logo-nd.png' alt='iJobs' style='border: 0; width: 100%; height: auto;'/>
                                            </div>
                                            <div style='border-right: 2px solid #0082CA; width:1px; height:100px; margin-left: 20px; display:block; float:left;'></div>
                                            <div style='width:auto; margin-left:20px; display:block; float:left;'>
                                                <h2>Contacto</h2>
                                                <h3 style='color:#0082CA'>Nuevo mensaje desde el sitio web</h3>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='one-column' style='padding: 0; text-align: Left;'>
                                            <table width='100%' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333;'>
                                                <tr>
                                                    <td class='inner contents' style='padding: 10px; text-align: Left;'>
                                                    <div class='rectangulo_gris' style='padding: 50px 50px 50px 50px; background-color: #CCC;'>
                                                    <div class='rectangulo_blanco' style='padding: 20px 20px 20px 20px; background-color: #FFF; text-align: center;'>
                                                    <p style='Margin: 0; Margin-bottom: 10px; font-size: 14px;'>" . $detalles . "</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='one-column' bgcolor='#00263a' style='color: #fff; text-align: center; border-radius: 0 0 5px 5px'>
                                            <div style='padding: 15px; font-size: 12px;'>
                                                " . utf8_decode('© 2018 iJobs') . "
                                                <br>
                                                <a href='http://www.ijobs.com/files/pdf/aviso_politica_privacidad.pdf' target='_blank' style='color: #b2b2b2; text-decoration: none'>" . utf8_decode('Aviso y Política de Privacidad - ') . "</a>
                                                <a href='http://www.ijobs.com/files/pdf/terminos_condiciones.pdf' target='_blank' style='color: #b2b2b2; text-decoration: none'>" . utf8_decode('Términos y Condiciones') . "</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </div>
                        </center>
                    </body>
                    </html>";

        $mail->Body = $cuerpo;

        return $mail->send();
    }

    public function enviarCorreoRH($postulantePost){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = $this->mailSMTPAuth;
        //$mail->SMTPSecure = $this->mailSMTPSecure;
        $mail->Host = $this->mailHost;
        $mail->Port = $this->mailPort;
        $mail->Username = $this->mailUsername;
        $mail->Password = $this->mailPassword;

        $mail->From = 'no-replay@ijobs.com';
        $mail->FromName = utf8_decode('iJobs');
        $mail->addAddress('rh@ijobs.com');

        $mail->addAttachment(utf8_decode($postulantePost['postulante_adjunto']));
        $mail->isHTML(true);

        $mail->Subject = utf8_decode('CV - '. $postulantePost['postulante_nombrecompleto']);
        $detalles = "<h2 style='color:#0082CA;'><stronge>". utf8_decode($postulantePost['postulante_departamento']) ."</stronge></h2>
                    <span>" . utf8_decode('Postulante: ') . "<strong>" . utf8_decode($postulantePost['postulante_nombrecompleto']) . "</strong></span><br />
                    <span>" . utf8_decode('Correo Electrónico: ') . "<strong style='color:green;'>" . utf8_decode($postulantePost['postulante_correo']) . "</strong></span><br />
                    <span>" . utf8_decode('No. Telefónico: ') . "<strong>" . utf8_decode($postulantePost['postulante_telefono']) . "</strong></span><br />
                    <span>" . utf8_decode('Mensaje: ') . "<strong>" . utf8_decode($postulantePost['postulante_mensaje']) . "</strong></span><br />";

        $cuerpo = "<!DOCTYPE html>
                    <html>
                    <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
                    <meta charset='utf-8' />
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link href='https//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' /> <!-- Nos da soporte para la tipografia de letra en nuestro documento -->
                    <!--[if (gte mso 9)|(IE)]>
                    <style type='text/css'>
                    table {border-collapse: collapse;}
                    </style>
                    <![endif]-->
                    <style type='text/css'>
                    /* Basics */
                    body {
                    Margin: 10px;
                    padding: 0;
                    min-width: 100%;
                    background-color #ffffff;
                    }
                    table {
                    border-spacing: 0;
                    font-family: \"Open Sans\", sans-serif;
                    color: #333333;
                    }
                    td {
                    padding: 0;
                    }
                    img {
                    border: 0;
                    }
                    .wrapper {
                    width: 100%;
                    table-layout: fixed;
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                    }
                    .webkit {
                    max-width: 700px;
                    }
                    /* Windows Phone Viewport Fix */
                    @-ms-viewport {
                    width: device-width;
                    }
                    .outer {
                    Margin: 0 auto; /* Pongo en mayúsculas Margin para que Outlook.com no lo quite */
                    width: 100%;
                    max-width: 700px;
                    }
                    .full-width-image img {
                    width: 100%;
                    height: auto;
                    }
                    .inner {
                    padding: 10px;
                    }
                    p {
                    Margin: 0;
                    }
                    a {
                    color: #0082CA;
                    text-decoration: underline;
                    }
                    .h1 {
                    font-size: 21px;
                    font-weight: bold;
                    Margin-bottom: 18px;
                    }
                    .h2 {
                    font-size: 18px;
                    font-weight: bold;
                    Margin-bottom: 12px;
                    }
                    /* One column layout */
                    .one-column .contents {
                    text-align: Left;
                    }
                    .one-column p {
                    font-size: 14px;
                    Margin-bottom: 10px;
                    }
                    /*CE*/
                    .rectangulo_gris {
                    padding: 50px 50px 50px 50px;
                    background-color: #CCC;
                    }
                    .rectangulo_blanco {
                    padding: 20px 20px 20px 20px;
                    background-color: #FFF;
                    text-align: center;
                    }
                    .footer-left {
                    background-color: #071C2C;
                    color: #FFF;
                    }
                    .footer_item {
                    margin: 10px 0 10px 10px;
                    width: 240px;
                    }
                    .margin-left-10px {
                    margin-left: 10px;
                    }
                    .footer_font {
                    font-size: 10px;
                    font-family: \"Open Sans\", sans-serif;
                    }
                    .contact {
                    display: block;
                    float: left;
                    }
                    .footer-right {
                    background-color: #0082CA;
                    padding: 21.5px 7px 21.5px 7px;
                    }
                    .social {
                    padding: 0 2.5px 0 2.5px;
                    display: block;
                    float: Left;
                    }
                    @media screen and (max-width: 699px) {
                    .footer-right-phone{
                    background-color:#0082CA;
                    padding: 21.5px 7px 21.5px 7px;
                    width:95%;
                    }
                    .social-phone{
                    padding: 0 7% 0 7%;
                    display: block;
                    float: Left;
                    }
                    }
                    </style>
                    </head>
                    <body style='Margin: 10px; padding: 0; min-width: 100%; background-color #ffffff;'>
                        <center class='wrapper' style='width: 100%; table-layout: fixed; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;'>
                            <div class='webkit' style='max-width: 700px;'>
                                <!--[if (gte mso 9)|(IE)]>
                                <table width='700' align='center' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333;'>
                                <tr>
                                <td style='padding: 0;'>
                                <![endif]-->
                                <table class='outer' align='center' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333; Margin: 0 auto; width: 100%; max-width: 700px;'>
                                    <tr>
                                        <td class='full-width-image' style='padding: 0;'>
                                            <div style='margin-left: 20px; display: block; float: left;'>
                                                <img src='http://www.ijobs.com/img/img-sitio/logo-nd.png' alt='iJobs' style='border: 0; width: 100%; height: auto;'/>
                                            </div>
                                            <div style='border-right: 2px solid #0082CA; width:1px; height:100px; margin-left: 20px; display:block; float:left;'></div>
                                            <div style='width:auto; margin-left:20px; display:block; float:left;'>
                                                <h2>Bolsa de trabajo</h2>
                                                <h3 style='color:#0082CA'>Nuevo postulante.</h3>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='one-column' style='padding: 0; text-align: Left;'>
                                            <table width='100%' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333;'>
                                                <tr>
                                                    <td class='inner contents' style='padding: 10px; text-align: Left;'>
                                                    <div class='rectangulo_gris' style='padding: 50px 50px 50px 50px; background-color: #CCC;'>
                                                    <div class='rectangulo_blanco' style='padding: 20px 20px 20px 20px; background-color: #FFF; text-align: center;'>
                                                    <p style='Margin: 0; Margin-bottom: 10px; font-size: 14px;'>" . $detalles . "</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='one-column' bgcolor='#00263a' style='color: #fff; text-align: center; border-radius: 0 0 5px 5px'>
                                            <div style='padding: 15px; font-size: 12px;'>
                                                " . utf8_decode('© 2018 iJobs') . "
                                                <br>
                                                <a href='http://www.ijobs.com/files/pdf/aviso_politica_privacidad.pdf' target='_blank' style='color: #b2b2b2; text-decoration: none'>" . utf8_decode('Aviso y Política de Privacidad - ') . "</a>
                                                <a href='http://www.ijobs.com/files/pdf/terminos_condiciones.pdf' target='_blank' style='color: #b2b2b2; text-decoration: none'>" . utf8_decode('Términos y Condiciones') . "</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </div>
                        </center>
                    </body>
                    </html>";
        $mail->Body = $cuerpo;

        return $mail->send();
    }

    public function enviarCorreoPostulante(array $postulantePost){

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = $this->mailSMTPAuth;
        //$mail->SMTPSecure = $this->mailSMTPSecure;
        $mail->Host = $this->mailHost;
        $mail->Port = $this->mailPort;
        $mail->Username = $this->mailUsername;
        $mail->Password = $this->mailPassword;

        $mail->From = 'no-replay@ijobs.com';
        $mail->FromName = utf8_decode('iJobs');
        $mail->addAddress($postulantePost['postulante_correo']);

        $mail->addAttachment(utf8_decode($postulantePost['postulante_adjunto']));
        $mail->isHTML(true);

        $mail->Subject = utf8_decode('CV - '. $postulantePost['postulante_nombrecompleto']);
        $detalles = "<span>" . utf8_decode('¡Buen día! ') . "<strong>" . utf8_decode($postulantePost['postulante_nombrecompleto']) . "</strong></span><br /><br />
                    <span>" . utf8_decode('Gracias por postularte para la vacante de ') . "<strong>" . utf8_decode($postulantePost['postulante_departamento']) . "</strong></span><br /><br />
                    <span>" . utf8_decode('Nuestro equipo de reclutamiento revisará los datos proporcionados y se pondrá en contacto contigo lo antes posible.') ."</span><br /><br />
                    <span>" . utf8_decode('Por favor espera nuestra respuesta.') . "</span><br />";


        $cuerpo = "<!DOCTYPE html>
                    <html>
                    <head>
                    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
                    <meta charset='utf-8' />
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link href='https//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' /> <!-- Nos da soporte para la tipografia de letra en nuestro documento -->
                    <!--[if (gte mso 9)|(IE)]>
                    <style type='text/css'>
                    table {border-collapse: collapse;}
                    </style>
                    <![endif]-->
                    <style type='text/css'>
                    /* Basics */
                    body {
                    Margin: 10px;
                    padding: 0;
                    min-width: 100%;
                    background-color #ffffff;
                    }
                    table {
                    border-spacing: 0;
                    font-family: \"Open Sans\", sans-serif;
                    color: #333333;
                    }
                    td {
                    padding: 0;
                    }
                    img {
                    border: 0;
                    }
                    .wrapper {
                    width: 100%;
                    table-layout: fixed;
                    -webkit-text-size-adjust: 100%;
                    -ms-text-size-adjust: 100%;
                    }
                    .webkit {
                    max-width: 700px;
                    }
                    /* Windows Phone Viewport Fix */
                    @-ms-viewport {
                    width: device-width;
                    }
                    .outer {
                    Margin: 0 auto; /* Pongo en mayúsculas Margin para que Outlook.com no lo quite */
                    width: 100%;
                    max-width: 700px;
                    }
                    .full-width-image img {
                    width: 100%;
                    height: auto;
                    }
                    .inner {
                    padding: 10px;
                    }
                    p {
                    Margin: 0;
                    }
                    a {
                    color: #0082CA;
                    text-decoration: underline;
                    }
                    .h1 {
                    font-size: 21px;
                    font-weight: bold;
                    Margin-bottom: 18px;
                    }
                    .h2 {
                    font-size: 18px;
                    font-weight: bold;
                    Margin-bottom: 12px;
                    }
                    /* One column layout */
                    .one-column .contents {
                    text-align: Left;
                    }
                    .one-column p {
                    font-size: 14px;
                    Margin-bottom: 10px;
                    }
                    /*CE*/
                    .rectangulo_gris {
                    padding: 50px 50px 50px 50px;
                    background-color: #CCC;
                    }
                    .rectangulo_blanco {
                    padding: 20px 20px 20px 20px;
                    background-color: #FFF;
                    text-align: center;
                    }
                    .footer-left {
                    background-color: #071C2C;
                    color: #FFF;
                    }
                    .footer_item {
                    margin: 10px 0 10px 10px;
                    width: 240px;
                    }
                    .margin-left-10px {
                    margin-left: 10px;
                    }
                    .footer_font {
                    font-size: 10px;
                    font-family: \"Open Sans\", sans-serif;
                    }
                    .contact {
                    display: block;
                    float: left;
                    }
                    .footer-right {
                    background-color: #0082CA;
                    padding: 21.5px 7px 21.5px 7px;
                    }
                    .social {
                    padding: 0 2.5px 0 2.5px;
                    display: block;
                    float: Left;
                    }
                    @media screen and (max-width: 699px) {
                    .footer-right-phone{
                    background-color:#0082CA;
                    padding: 21.5px 7px 21.5px 7px;
                    width:95%;
                    }
                    .social-phone{
                    padding: 0 7% 0 7%;
                    display: block;
                    float: Left;
                    }
                    }
                    </style>
                    </head>
                    <body style='Margin: 10px; padding: 0; min-width: 100%; background-color #ffffff;'>
                        <center class='wrapper' style='width: 100%; table-layout: fixed; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;'>
                            <div class='webkit' style='max-width: 700px;'>
                                <!--[if (gte mso 9)|(IE)]>
                                <table width='700' align='center' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333;'>
                                <tr>
                                <td style='padding: 0;'>
                                <![endif]-->
                                <table class='outer' align='center' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333; Margin: 0 auto; width: 100%; max-width: 700px;'>
                                    <tr>
                                        <td class='full-width-image' style='padding: 0;'>
                                            <div style='margin-left: 20px; display: block; float: left;'>
                                                <img src='http://www.ijobs.com/img/img-sitio/logo-nd.png' alt='iJobs' style='border: 0; width: 100%; height: auto;'/>
                                            </div>
                                            <div style='border-right: 2px solid #0082CA; width:1px; height:100px; margin-left: 20px; display:block; float:left;'></div>
                                            <div style='width:auto; margin-left:20px; display:block; float:left;'>
                                                <h2>Bolsa de trabajo</h2>
                                                <h3 style='color:#0082CA'>Postulación exitosa.</h3>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='one-column' style='padding: 0; text-align: Left;'>
                                            <table width='100%' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333;'>
                                                <tr>
                                                    <td class='inner contents' style='padding: 10px; text-align: Left;'>
                                                    <div class='rectangulo_gris' style='padding: 50px 50px 50px 50px; background-color: #CCC;'>
                                                    <div class='rectangulo_blanco' style='padding: 20px 20px 20px 20px; background-color: #FFF; text-align: center;'>
                                                    <p style='Margin: 0; Margin-bottom: 10px; font-size: 14px;'>" . $detalles . "</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class='one-column' bgcolor='#00263a' style='color: #fff; text-align: center; border-radius: 0 0 5px 5px'>
                                            <div style='padding: 15px; font-size: 12px;'>
                                                " . utf8_decode('© 2018 iJobs') . "
                                                <br>
                                                <a href='http://www.ijobs.com/files/pdf/aviso_politica_privacidad.pdf' target='_blank' style='color: #b2b2b2; text-decoration: none'>" . utf8_decode('Aviso y Política de Privacidad - ') . "</a>
                                                <a href='http://www.ijobs.com/files/pdf/terminos_condiciones.pdf' target='_blank' style='color: #b2b2b2; text-decoration: none'>" . utf8_decode('Términos y Condiciones') . "</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <!--[if (gte mso 9)|(IE)]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                            </div>
                        </center>
                    </body>
                    </html>";
        $mail->Body = $cuerpo;

        return $mail->send();
    }
}