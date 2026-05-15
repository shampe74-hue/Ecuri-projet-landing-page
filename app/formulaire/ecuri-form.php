<?php

require_once __DIR__ . "../../Helpers/verifications.php";
require_once __DIR__ . "../../config/mail.php";

// Init des données

$data = [
    "nom" => "",
    "prenom" => "",
    "email" => "",
    "demande" => "",
];


$erreurs = [];

// Réception des données 

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $data = [
        "nom" => $_POST["nom"] ?? "",
        "prenom" => $_POST["prenom"] ?? "",
        "email" => $_POST["email"] ?? "",
        "demande" => $_POST["demande"] ?? "",
    ];

    if (!verifications::required($data["nom"]) && !verifications::required($data["prenom"]) && !verifications::required($data["email"]) && !verifications::required($data["demande"])) {
        $erreurs[] = "Le champs doit être remplis";
    }

    
}
