<?php

namespace Shared;

//// PHPMailer ////
use PHPMailer;

class Functions {

    protected $mailSMTPAuth = true;
    protected $mailSMTPSecure = "ssl";
    protected $mailHost = 'smtp.gmail.com';
    protected $mailPort = 465;
    protected $mailUsername = 'carlosrubenesparzaillescas@gmail.com';
    protected $mailPassword = 'Emprendedor01';

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

    public function emailSendHR($postulantePost){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = $this->mailSMTPAuth;
        $mail->SMTPSecure = $this->mailSMTPSecure;
        $mail->Host = $this->mailHost;
        $mail->Port = $this->mailPort;
        $mail->Username = $this->mailUsername;
        $mail->Password = $this->mailPassword;

        $mail->From = 'carlosrubenesparzaillescas@gmail.com';
        $mail->FromName = utf8_decode('Núcleo de Diagnóstico');
        $mail->addAddress('programacion@nucleodediagnostico.com');

        $mail->addAttachment(utf8_decode($postulantePost['postulante_curriculum_vitae']));
        $mail->isHTML(true);

        $mail->Subject = utf8_decode('CV - '. $postulantePost['postulante_nombre_completo']);
        $detalles = "<h2 style='color:#0082CA;'><stronge>". utf8_decode($postulantePost['vacante_nombre']) ."</stronge></h2>
                    <span>" . utf8_decode('Postulante:') . "<strong>" . utf8_decode($postulantePost['postulante_nombre_completo']) . "</strong></span><br />
                    <span>" . utf8_decode('Correo Electrónico:') . "<strong style='color:green;'>" . utf8_decode($postulantePost['postulante_correo']) . "</strong></span><br />
                    <span>" . utf8_decode('No. Telefónico:') . "<strong>" . utf8_decode($postulantePost['postulante_telefono']) . "</strong></span><br />
                    <span>" . utf8_decode('Enlace perfil:') . "<strong><a href='" . utf8_decode($postulantePost['postulante_enlace']) . "'>" . utf8_decode($postulantePost['postulante_enlace']) . "</a></strong><br />
                    <span>" . utf8_decode('Mensaje:') . "<strong>" . utf8_decode($postulantePost['postulante_mensaje']) . "</strong></span><br /><hr />";
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
                    <table class='outer' align='center' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333; Margin: 0 auto; width: 100%; max-width: 700px;'>
                    <tr>
                    <td class='full-width-image' style='padding: 0;'>
                    <div style='margin-left: 20px; display: block; float: left;'>
                    <img src='http://nucleodiag.com/Publico/SIAND/EnviarEmail/logo-nd-128px.png' alt='Núcleo de Diagnóstico' style='border: 0; width: 100%; height: auto;'/>
                    </div>
                    <div style='border-right: 2px solid #0082CA; width:1px; height:150px; margin-left: 20px; display:block; float:left;'></div>
                    <div style='width:auto; margin-left:20px; display:block; float:left;'>
                    <h2>" . utf8_decode('Recursos Humanos') . "</h2>
                    <h3>" . utf8_decode('Nuevo postulante') . "</h3>
                    </div>
                    </td>
                    </tr>
                    <hr />
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
                    </table>
                    </td>
                    </tr>
                    </table>
                    </div>
                    </center>
                    </body>
                    </html>";
        $mail->Body = $cuerpo;

        return $mail->send();
    }

    public function emailSendPostulante(array $postulantePost){

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = $this->mailSMTPAuth;
        $mail->SMTPSecure = $this->mailSMTPSecure;
        $mail->Host = $this->mailHost;
        $mail->Port = $this->mailPort;
        $mail->Username = $this->mailUsername;
        $mail->Password = $this->mailPassword;

        $mail->From = 'carlosrubenesparzaillescas@gmail.com';
        $mail->FromName = utf8_decode('Núcleo de Diagnóstico');
        $mail->addAddress($postulantePost['postulante_correo']);

        $mail->addAttachment(utf8_decode($postulantePost['postulante_curriculum_vitae']));
        $mail->isHTML(true);

        $mail->Subject = utf8_decode('CV - '. $postulantePost['postulante_nombre_completo']);
        $detalles = "<span>" . utf8_decode('¡Buen día! ') . "<strong>" . utf8_decode($postulantePost['postulante_nombre_completo']) . "</strong></span><br /><br />
                    <span>" . utf8_decode('Gracias por postularte para la vacante de ') . "<strong>" . utf8_decode($postulantePost['vacante_nombre']) . "</strong></span><br /><br />
                    <span>" . utf8_decode('Nuestro equipo de reclutamiento revisará los datos proporcionados y se pondrá en contacto contigo lo antes posible.') ."</span><br /><br />
                    <span>" . utf8_decode('Por favor espera nuestra respuesta.') . "</span><br /><hr />";
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
                    <img src='http://nucleodiag.com/Publico/SIAND/EnviarEmail/logo-nd-128px.png' alt='Núcleo de Diagnóstico' style='border: 0; width: 100%; height: auto;'/>
                    </div>
                    <div style='border-right: 2px solid #0082CA; width:1px; height:150px; margin-left: 20px; display:block; float:left;'></div>
                    <div style='width:auto; margin-left:20px; display:block; float:left;'>
                    <h2>" . utf8_decode('Postulación de vacantes') . "</h2>
                    <h3 style='color:#0082CA'>" . utf8_decode($postulantePost['vacante_nombre']) . "</h3>
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
                    </table>
                    </td>
                    </tr>
                    <tr>
                    <td class='one-column' style='padding: 0; text-align: Left;'>
                    <table width='100%' style='border-spacing: 0; font-family: \"Open Sans\", sans-serif; color: #333333;'>
                    <tr>
                    <td class='inner contents footer_font' style='padding: 10px; text-align: Left; font-size: 10px; font-family: \"Open Sans\", sans-serif;'>
                    <div class='footer-left contact' style='background-color: #071C2C; color: #FFF; display: block; float: left;'>
                    <div class='contact footer_item' style='margin: 10px 0 10px 10px; width: 240px; display: block; float: left;'>
                    <div class='contact' style='display: block; float: left;'>
                    <img src='http://nucleodiag.com/Publico/SIAND/EnviarEmail/phone-25px.png' alt='Teléfono' style='border: 0;'/>
                    </div>
                    <div class='contact' style='display: block; float: left;'>
                    <span class='margin-left-10px' style='margin-left: 10px; color: #FFF;'>Tel: (33) 3942-1030</span>
                    <br/>
                    <span class='margin-left-10px' style='margin-left: 10px; color: #FFF;'>Ext: 818.</span>
                    </div>
                    </div>
                    <div class='contact footer_item' style='margin: 10px 0 10px 10px; width: 240px; display: block; float: left;'>
                    <div class='contact' style='display: block; float: left;'>
                    <img src='http://nucleodiag.com/Publico/SIAND/EnviarEmail/mail-25px.png' alt='Email' style='border: 0;'/>
                    </div>
                    <div class='contact' style='display: block; float: left;'>
                    <span class='margin-left-10px' style='margin-left: 10px; color: #FFF;'>seleccion@nucleodediagnostico.com</span>
                    </div>
                    </div>
                    <br/>
                    <br/>
                    <div class='contact footer_item' style='margin: 10px 0 10px 10px; width: 240px; display: block; float: left;'>
                    <div class='contact' style='display: block; float: left;'>
                    <img src='http://nucleodiag.com/Publico/SIAND/EnviarEmail/position-25px.png' alt='Localización' style='border: 0;'/>
                    </div>
                    <div class='contact' style='display: block; float: left;'>
                    <span class='margin-left-10px' style='margin-left: 10px;'>Av. Federalismo Sur 577 Mexicaltzingo</span>
                    <br/>
                    <span class='margin-left-10px' style='margin-left: 10px;'>Guadalajara Jalisco.</span>
                    </div>
                    </div>
                    <div class='contact footer_item' style='margin: 10px 0 10px 10px; width: 240px; display: block; float: left;'>
                    <div class='contact' style='display: block; float: left;'>
                    <img src='http://nucleodiag.com/Publico/SIAND/EnviarEmail/web-25px.png' alt='Sitio Web' style='border: 0;'/>
                    </div>
                    <div class='contact' style='display: block; float: left;'>
                    <a href='http://www.nucleodediagnostico.com' target='_blank' class='margin-left-10px' style='color: #FFF; text-decoration: underline; margin-left: 10px;'>www.nucleodediagnostico.com</a>
                    </div>
                    </div>
                    </div>
                    <div class='footer-right contact footer-right-phone' style='display: block; float: left; background-color: #0082CA; padding: 21.5px 7px 21.5px 7px;'>
                    <div class='social social-phone' style='padding: 0 2.5px 0 2.5px; display: block; float: Left;'>
                    <a href='http://facebook.com' target='_blank'><img src='http://nucleodiag.com/Publico/SIAND/EnviarEmail/facebook-50px.png' alt='Facebook' style='border: 0;'/></a>
                    </div>
                    <div Class='social social-phone' style='padding: 0 2.5px 0 2.5px; display: block; float: Left;'>
                    <a href='http://twitter.com' target='_blank'><img src='http://nucleodiag.com/Publico/SIAND/EnviarEmail/twitter-50px.png' alt='Twitter' style='border: 0;'/></a>
                    </div>
                    <div class='social social-phone' style='padding: 0 2.5px 0 2.5px; display: block; float: Left;'>
                    <a href='http://instagram.com' target='_blank'><img src='http://nucleodiag.com/Publico/SIAND/EnviarEmail/instagram-50px.png' alt='Instagram' style='border: 0;'/></a>
                    </div>
                    </div>
                    </td>
                    </tr>
                    </table>
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