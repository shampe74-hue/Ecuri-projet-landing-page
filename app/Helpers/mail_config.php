<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . "../../config/mail.php";
require_once __DIR__ . "../../formulaire/ecuri-form.php";




class mailConfig
{
    public static $email_inc = "";
    public static $monSite_inc = "";


    public static function sendMail(string $nom, string $prenom, string $email, string $demande): bool
    {
        try {

            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = "stmp.gmail.com";
            $mail->Username = self::$email_inc;
            $mail->Password = "";
            $mail->Port = 587;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            $mail->setFrom(self::$email_inc, self::$monSite_inc);

            $mail->addAddress($email);

            $mail->isHTML();

            $mail->Subject = "<p><strong>Récapiltulatif de votre demande<\strong></p>";

            $mail->Body =
                "div style= '
                    max-width:600px;
                   padding: 10px;'
                    > 
                    <h1 style = ''>Titre</h1>

                    <p>Merci de votre confiance, nous reviendrons vers vous dans les plus bref delais <\p>

                    <p>Pour rappel voici ci-dessous le récapitulatif de votre demande : <\p>

                    <div style=''>
                      <p style =''>Nom: <\p>
                      <p style =''>Prenom: <\p>
                      <p style =''>Email: <\p>

                        <div style=''>
                          <p style =''>Demande: <\p>
                        <\div>
                    <\div>    

                    <p style =''>A plus<\p>;
                <\div>
                ";

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
