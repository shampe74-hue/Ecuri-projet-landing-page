<?php 
// Init phpmailer


// Récupération du dossier phpmailer
require_once __DIR__ . "../../../vendor/phpmailer/src/Exception.php";
require_once __DIR__ . "../../../vendor/phpmailer/src/PHPMailer.php";
require_once __DIR__ . "../../../vendor/phpmailer/src/SMTP.php";

// Utilisation des classes

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
