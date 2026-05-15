<?php 
// Init phpmailer


// Récupération du dossier phpmailer
require_once __DIR__ . "../../../vendor/phpmailer/src/Exception.php";
require_once __DIR__ . "../../../vendor/phpmailer/src/PHPmMailler.php";
require_once __DIR__ . "../../../vendor/phpmailer/src/STMP.php";

// Utilisation des classes

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
