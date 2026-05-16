<?php

require_once __DIR__ . "/../Helpers/verifications.php";
require_once __DIR__ . "/../config/mail.php";
require_once __DIR__ . "/../Helpers/mail_config.php";

// Init des données

$isAjax = ($_SERVER["HTTP_X_REQUESTED_WITH"] ?? "") === "XMLHttpRequest";

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

    if (!verifications::required($data["nom"]) || !verifications::required($data["prenom"]) || !verifications::required($data["email"]) || !verifications::required($data["demande"])) {
        $erreurs[] = "Le champs doit être remplis";

        if ($isAjax) {
            echo "<p>Le champs doit être remplis";
            exit;
        }
    }

    if (!verifications::format($data["nom"]) || !verifications::format($data["prenom"])) {
        $erreurs[] = "Le formats n'est pas respecter";

        if ($isAjax) {
            echo "<p>Le forrmat n'est pas respecter";
            exit;
        }
    }

    if (!verifications::longueurNom($data["nom"]) || !verifications::longueurNom($data["prenom"])) {
        $erreurs[] = "Le formats n'est pas respecter";

        if ($isAjax) {
            echo "<p>Le forrmat n'est pas respecter";
            exit;
        }
    }

    if (!verifications::email($data["email"])) {
        $erreurs[] = "Le formats n'est pas respecter";

        if ($isAjax) {
            echo "<p>Le forrmat n'est pas respecter";
            exit;
        }
    }

    if (!verifications::longueurText($data["demande"])) {
        $erreurs[] = "Le formats n'est pas respecter";

        if ($isAjax) {
            echo "<p>Le forrmat n'est pas respecter";
            exit;
        }
    }

    if (empty($erreurs)) {
        if (mailConfig::sendMail($data["nom"], $data["prenom"], $data["email"], $data["demande"])) {

            if ($isAjax) {
                echo "<p>Votre formulaire à bien été envoyer avec succes ! Veulliez consultez vos mail ppour le message de confirmation<\p>";
                exit;
            }


            $_SESSION["resultat"] = "Votre formulaire à bien été envoyer avec succes ! Veulliez consultez vos mail ppour le message de confirmation.";
            header("Locaion : ");
            exit;
        }
    } else {

        if ($isAjax) {
            echo "<p>Erruer lors de l'envoi du formulaire";
            exit;
        }

        $_SESSION["error"] = "Erruer lors de l'envoi du formulaire";
        header("location:");
        exit;
    }
} else {
    $_SESSION["requetes"] = "Erreurs lors de la soumission de la requête";
    header("location=");
    exit;
}
